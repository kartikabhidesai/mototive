<?php

namespace App\Http\Controllers\backend\logo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Logo;

class LogoController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        if ($request->isMethod('post')) {
            $objLogo = new Logo();
            $res = $objLogo->addLogo($request);
            if ($res) {
                $return['status'] = 'success';
                $return['message'] = 'Logo added successfully.';
                $return['redirect'] = route('company-logo');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        }

        $data['title'] = 'Mototive Websolution - Company Logo';
        $data['css'] = array();
        $data['plugincss'] = array('dataTables.bootstrap4.min.css');
        $data['pluginjs'] = array('plugins/validate/jquery.validate.min.js', 'plugins/jquery.dataTables.min.js', 'plugins/dataTables.bootstrap4.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'logo.js');
        $data['funinit'] = array('Logo.init()');
        return view('backend.pages.logo.logo', $data);
    }

    public function editlogo(Request $request) {

        if ($request->isMethod('post')) {
            $objLogo = new Logo();
            $data = $objLogo->editlogo($request);
            if ($data) {
                $return['status'] = 'success';
                $return['message'] = 'Logo Edited successfully.';
                $return['redirect'] = route('company-logo');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        } else {
            return redirect('company-logo');
        }
    }

    public function ajaxAction(Request $request) {
        $action = $request->input('action');
        switch ($action) {

            case 'getdatatable':
                $objLogo = new logo();
                $list = $objLogo->getdatatable();
                echo json_encode($list);
                break;

            case 'editlogo':

                $objLogo = new logo();
                $data['viewlogo'] = $objLogo->viewlogo($request->input('id'));
                $result = view('backend.pages.logo.editlogo', $data);
                echo $result;
                break;

            case 'deletelogo':
                $objLogo = new Logo();
                $res = $objLogo->deletelogo($request->input('data'));
                if ($res) {
                    $return['status'] = 'success';
                    $return['message'] = 'Logo Deleted successfully.';
                    $return['redirect'] = route('company-logo');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'something will be wrong.';
                }
                echo json_encode($return);
                break;
        }
    }

}
