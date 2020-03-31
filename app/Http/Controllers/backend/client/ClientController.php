<?php

namespace App\Http\Controllers\backend\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Client;

class ClientController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        if ($request->isMethod('post')) {
            $objClient = new Client();
            $res = $objClient->addClient($request);
            if ($res) {
                $return['status'] = 'success';
                $return['message'] = 'Client added successfully.';
                $return['redirect'] = route('client');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        }

        $data['title'] = 'Mototive Websolution - Client';
        $data['css'] = array();
        $data['plugincss'] = array('dataTables.bootstrap4.min.css');
        $data['pluginjs'] = array('plugins/validate/jquery.validate.min.js', 'plugins/jquery.dataTables.min.js', 'plugins/dataTables.bootstrap4.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'client.js');
        $data['funinit'] = array('Client.init()');
        return view('backend.pages.client.client', $data);
    }

    public function editclient(Request $request) {

        if ($request->isMethod('post')) {
            $objClient = new Client();
            $data = $objClient->editclient($request);
            if ($data) {
                $return['status'] = 'success';
                $return['message'] = 'Client Edited successfully.';
                $return['redirect'] = route('client');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        } else {
            return redirect('client');
        }
    }

    public function ajaxAction(Request $request) {
        $action = $request->input('action');
        switch ($action) {

            case 'getdatatable':
                $objClient = new Client();
                $list = $objClient->getdatatable();
                echo json_encode($list);
                break;

            case 'editclient':
                $objClient = new Client();
                $data['viewclient'] = $objClient->viewclient($request->input('id'));

                $result = view('backend.pages.client.editclient', $data);
                echo $result;
                break;

            case 'deleteclient':
                $objClient = new Client();
                $res = $objClient->deleteclient($request->input('data'));
                if ($res) {
                    $return['status'] = 'success';
                    $return['message'] = 'Client deleted successfully.';
                    $return['redirect'] = route('client');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'something will be wrong.';
                }
                echo json_encode($return);
                break;
        }
    }

}
