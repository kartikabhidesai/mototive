<?php

namespace App\Http\Controllers\backend\testimonials;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Testimonials;

class TestimonialsController extends Controller {

    function __construct() {
        
    }

    public function index(Request $request) {

        if ($request->isMethod('post')) {
            $objTestimonials = new Testimonials();
            $res = $objTestimonials->addtestimonials($request);
            if ($res) {
                $return['status'] = 'success';
                $return['message'] = 'Testimonials added successfully.';
                $return['redirect'] = route('client-testimonials');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        }
        $data['title'] = 'Mototive Websolution - Testimonials';
        $data['css'] = array();
        $data['plugincss'] = array('dataTables.bootstrap4.min.css');
        $data['pluginjs'] = array('plugins/validate/jquery.validate.min.js', 'plugins/jquery.dataTables.min.js', 'plugins/dataTables.bootstrap4.min.js');
        $data['js'] = array('ajaxfileupload.js', 'jquery.form.min.js', 'testimonials.js');
        $data['funinit'] = array('Testimonials.init()');
        return view('backend.pages.testimonials.testimonials', $data);
    }

    public function edittestimonials(Request $request) {

        if ($request->isMethod('post')) {
            $objTestimonials = new Testimonials();
            $data = $objTestimonials->edittestimonials($request);
            if ($data) {
                $return['status'] = 'success';
                $return['message'] = 'Testimonials Edited Successfully.';
                $return['redirect'] = route('client-testimonials');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        } else {
            return redirect('client-testimonials');
        }
    }

    public function ajaxAction(Request $request) {
        $action = $request->input('action');
        switch ($action) {

            case 'getdatatable':
                $objTestimonials = new Testimonials();
                $list = $objTestimonials->getdatatable();
                echo json_encode($list);
                break;

            case 'edittestimonials':
                $objTestimonials = new Testimonials();
                $data['viewtestimonials'] = $objTestimonials->viewtestimonials($request->input('id'));

                $result = view('backend.pages.testimonials.edittestimonials', $data);
                echo $result;
                break;

            case 'deletetestimonials':
                $objTestimonials = new Testimonials();
                $res = $objTestimonials->deletetestimonials($request->input('data'));
                if ($res) {
                    $return['status'] = 'success';
                    $return['message'] = 'Testimonials deleted successfully.';
                    $return['redirect'] = route('client-testimonials');
                } else {
                    $return['status'] = 'error';
                    $return['message'] = 'something will be wrong.';
                }
                echo json_encode($return);
                break;
        }
    }

}
