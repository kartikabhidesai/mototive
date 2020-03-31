<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

    protected $table = "client";

    public function addClient($request) {

        $objClient = new Client();
        $objClient->name = $request->input('name');
        $objClient->phone = $request->input('phone');
        $objClient->email = $request->input('email');
        $objClient->address = $request->input('address');
        $objClient->created_at = date("Y-m-d h:i:s");
        $objClient->updated_at = date("Y-m-d h:i:s");
        return $objClient->save();
    }

    public function editclient($request) {

        $objClient = Client::find($request->input('id'));
        $objClient->name = $request->input('name');
        $objClient->phone = $request->input('phone');
        $objClient->email = $request->input('email');
        $objClient->address = $request->input('address');
        $objClient->created_at = date("Y-m-d h:i:s");
        $objClient->updated_at = date("Y-m-d h:i:s");
        return $objClient->save();
    }

    public function viewclient($id) {
        $query = Client::from('client')
                ->select('client.id', 'client.name', 'client.phone', 'client.email', 'client.address')
                ->where('client.id', $id)
                ->get();
        return $query[0];
    }

    public function deleteclient($data) {

        $resut = Client::where('id', $data['id'])->delete();
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
            1 => 'name',
            2 => 'phone',
            3 => 'email',
            4 => 'address',
        );

        $query = Client::from('client');
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
                ->select('client.id', 'client.name', 'client.phone', 'client.email', 'client.address')
                ->get();
        $data = array();
        $i = 0;
        foreach ($resultArr as $row) {

            $actionhtml = '';
            $actionhtml = '<center><a href="" data-toggle="modal" data-target="#editmodel" class="btn btn-icon btn-outline-success editclient" data-id="' . $row["id"] . '"><i class="feather icon-edit" ></i></a>
                        <a href="" data-toggle="modal" data-target="#deletemodel" class="btn btn-icon btn-outline-danger deleteclient" data-id="' . $row["id"] . '" ><i class="feather icon-trash-2" ></i></a></center>';
            $i++;
            $nestedData = array();
            $nestedData[] = '<center>' . $i . '</center>';
            $nestedData[] = '<center>' . $row['name'] . '</center>';
            $nestedData[] = '<center>' . $row['phone'] . '</center>';
            $nestedData[] = '<center>' . $row['email'] . '</center>';
            $nestedData[] = '<center>' . $row['address'] . '</center>';
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
