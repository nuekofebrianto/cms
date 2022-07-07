<?php

namespace Add\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Mail\BookEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ControllerInvoice extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Invoice',
            'subtitle' => '',
            'js' => 'adminhome.js'
        );
        return view('invoice/index')->with('data', $data);
    }

    public function getlistuser(Request $request)
    {
        $data = array(
            'data' => $this->getuser()
        );
        return view('admin/user/list')->with('data', $data);
    }

    public function getuser()
    {
        $sess = explode('^', Session::get('sess_ref__abz'));
        $ch = curl_init();
        $headers  = array(
            'Content-Type: application/json',
            'Accept: application/json'
        );
        $params = '{
            "prefix":"2",
            "admin":"'.$sess[2].'"
        }';
        curl_setopt($ch, CURLOPT_URL, env('SERVER1').'getUser');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec ($ch);
        $res = json_decode($result);
        if(isset($res->e_resGetListUser->data)){
            return $res->e_resGetListUser->data;
        } else {
            return [];
        }
    }

    public function gethistory(Request $request)
    {
        $data = array(
            'data' => $this->gethistoryuser($request->id)
        );
        return view('admin/user/history')->with('data', $data);
    }

    public function gethistoryuser($iduser)
    {
        $sess = explode('^', Session::get('sess_ref__abz'));
        $ch = curl_init();
        $headers  = array(
            'Content-Type: application/json',
            'Accept: application/json'
        );
        $params = '{
            "prefix":"7",
            "idUser":"'.$iduser.'",
            "admin":"'.$sess[2].'"
        }';
        curl_setopt($ch, CURLOPT_URL, env('SERVER1').'getHistoryUser');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec ($ch);
        $res = json_decode($result);
        if(isset($res->e_resGetHistoriUpdateUser->data)){
            return $res->e_resGetHistoriUpdateUser->data;
        } else {
            return [];
        }
    }

}
