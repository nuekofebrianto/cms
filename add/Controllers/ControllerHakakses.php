<?php

namespace Add\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Mail\BookEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ControllerHakakses extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'User',
            'subtitle' => '',
            'js' => ''
        );
        return view('referensi/hakakses/index')->with('data', $data);
    }

    public function list(Request $request)
    {
        $data = array(
            'data' => $this->getdata()
        );
        return view('referensi/hakakses/list')->with('data', $data);
    }

    public function getdata()
    {
        $ch = curl_init();
        $headers  = array(
            'Content-Type: application/json',
            'Accept: application/json',
            'X-POS-USER: '.env('USER1').'',
            'X-POS-PASSWORD: '.env('PASS1').''
        );
        $params = '{
            "parinput":"all"
        }';
        curl_setopt($ch, CURLOPT_URL, env('SERVER1').'showakses');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec ($ch);
        $res = json_decode($result);
        if(isset($res->response_showakses->data)){
            return $res->response_showakses->data;
        } else {
            return [];
        }
    }

}
