<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model {

    protected $table = "testimonials";

    public function addtestimonials($request) {

        if ($request->file()) {
            $image = $request->file('image');
            $name = 'admin' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/testimonials/');
            $image->move($destinationPath, $name);

            $objtestimonials = new Testimonials();
            $objtestimonials->image = $name;
            $objtestimonials->name = $request->input('name');
            $objtestimonials->position = $request->input('position');
            $objtestimonials->message = $request->input('message');
            $objtestimonials->created_at = date("Y-m-d h:i:s");
            $objtestimonials->updated_at = date("Y-m-d h:i:s");
            return $objtestimonials->save();
        } else {
            return false;
        }
    }

    public function deletetestimonials($data) {

        $resut = Testimonials::where('id', $data['id'])->delete();
        if ($resut) {
            return true;
        } else {
            return false;
        }
    }

    public function edittestimonials($request) {

        if ($request->file()) {
            $image = $request->file('image');
            $name = 'admin' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/testimonials/');
            $image->move($destinationPath, $name);

            $objtestimonials = Testimonials::find($request->input('id'));
            $objtestimonials->image = $name;
            $objtestimonials->name = $request->input('name');
            $objtestimonials->position = $request->input('position');
            $objtestimonials->message = $request->input('message');
            $objtestimonials->created_at = date("Y-m-d h:i:s");
            $objtestimonials->updated_at = date("Y-m-d h:i:s");
            return $objtestimonials->save();
        } else {

            $objtestimonials = Testimonials::find($request->input('id'));
            $objtestimonials->name = $request->input('name');
            $objtestimonials->position = $request->input('position');
            $objtestimonials->message = $request->input('message');
            $objtestimonials->created_at = date("Y-m-d h:i:s");
            $objtestimonials->updated_at = date("Y-m-d h:i:s");
            return $objtestimonials->save();
        }
    }

    public function gettestimonials() {
        $query = Testimonials::from('testimonials')
                ->select('id', 'image', 'name', 'message', 'position')
                ->get();
        return $query;
    }
    
    public function viewtestimonials($id) {
        $query = Testimonials::from('testimonials')
                ->select('id', 'image', 'name', 'message', 'position')
                ->where('id', $id)
                ->get();
        return $query[0];
    }

    public function getdatatable() {

        $requestData = $_REQUEST;
        $columns = array(
            // datatable column index  => database column name
            0 => 'id',
            1 => 'image',
            2 => 'name',
            3 => 'position',
            4 => 'message',
        );

        $query = Testimonials::from('testimonials');
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $query->where($value, 'like', '%' . $searchVal . '%');
                            $flag = $flag + 1;
                        } else {
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                ->take($requestData['length'])
                ->select('id', 'image', 'name', 'message', 'position')
                ->get();
        $data = array();
        $i = 0;
        foreach ($resultArr as $row) {

            $imagepath = url('public/uploads/testimonials/' . $row['image']);
            $actionhtml = '';
            $actionhtml = '<center><a href="" data-toggle="modal" data-target="#editmodel" class="btn btn-icon btn-outline-success edittestimonials" data-id="' . $row["id"] . '"><i class="feather icon-edit" ></i></a>
                        <a href="" data-toggle="modal" data-target="#deletemodel" class="btn btn-icon btn-outline-danger deletetestimonials" data-id="' . $row["id"] . '" ><i class="feather icon-trash-2" ></i></a></center>';
            $i++;
            $nestedData = array();
            $nestedData[] = '<center>' . $i . '</center>';
            $nestedData[] = '<center><img src="' . $imagepath . '" alt="contact-img" title="contact-img" class="rounded mr-3" height="48"></center>';
            $nestedData[] = '<center>' . $row['name'] . '</center>';
            $nestedData[] = '<center>' . $row['position'] . '</center>';
            $nestedData[] = '<center>' . substr($row['message'],0, 40) . '...' .'</center>';
            $nestedData[] = $actionhtml;
            $data[] = $nestedData;
        }
        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }

}
