<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Logo extends Model {

    protected $table = "company_logo";

    public function addLogo($request) {

        if ($request->file()) {
            $image = $request->file('logo');
            $name = 'logo' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/logo/');
            $image->move($destinationPath, $name);

            $objLogo = new Logo();
            $objLogo->logo = $name;
            $objLogo->created_at = date("Y-m-d h:i:s");
            $objLogo->updated_at = date("Y-m-d h:i:s");
            return $objLogo->save();
        } else {
            return false;
        }
    }

    public function editlogo($request) {

        if ($request->file()) {

            $image = $request->file('logo');
            $name = 'logo' . time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads/logo/');
            $image->move($destinationPath, $name);

            $objLogo = Logo::find($request->input('id'));
            $objLogo->logo = $name;
            $objLogo->created_at = date("Y-m-d h:i:s");
            $objLogo->updated_at = date("Y-m-d h:i:s");
            return $objLogo->save();
        } else {
            return FALSE;
        }
    }

    public function getlogo() {
        $query = Logo::from('company_logo')
                ->select('id', 'logo')
                ->get();
        return $query;
    }

    public function viewlogo($id) {
        $query = Logo::from('company_logo')
                ->select('id', 'logo')
                ->where('id', $id)
                ->get();
        return $query[0];
    }

    public function deletelogo($data) {

        $resut = Logo::where('id', $data['id'])->delete();
        if ($resut) {
            return true;
        } else {
            return false;
        }
    }

    public function getdatatable() {

        $requestData = $_REQUEST;
        $columns = array(
            // datatable column index  => database column name
            0 => 'id',
            1 => 'logo',
        );

        $query = Logo::from('company_logo');
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
                ->select('id', 'logo')
                ->get();
        $data = array();
        $i = 0;
        foreach ($resultArr as $row) {

            $imagepath = url('public/uploads/logo/' . $row['logo']);
            $actionhtml = '';
            $actionhtml = '<center><a href="" data-toggle="modal" data-target="#editmodel" class="btn btn-icon btn-outline-success editlogo" data-id="' . $row["id"] . '"><i class="feather icon-edit" ></i></a>
                        <a href="" data-toggle="modal" data-target="#deletemodel" class="btn btn-icon btn-outline-danger deletelogo" data-id="' . $row["id"] . '" ><i class="feather icon-trash-2" ></i></a></center>';
            $i++;
            $nestedData = array();
            $nestedData[] = '<center>' . $i . '</center>';
            $nestedData[] = '<center><img src="' . $imagepath . '" alt="contact-img" title="contact-img" class="rounded mr-3" height="48"></center>';
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
