<?php

namespace Add\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Mail\BookEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ControllerUser extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'User',
            'subtitle' => '',
            'js' => ''
        );
        return view('user/index')->with('data', $data);
    }

    public function showkantor(Request $request)
    {
        $ch = curl_init();
        $headers  = array(
            'Content-Type: application/json',
            'accept: application/json',
            'X-POS-USER: '.env('USER1').'',
            'X-POS-PASSWORD: '.env('PASS1').''
        );
        $params = '{
            "parinput": "all"
        }';
        curl_setopt($ch, CURLOPT_URL, env('SERVER1').'showkantor');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        $result = curl_exec ($ch);
        $res = json_decode($result);
        if(isset($res->response_showkantor->data)){
            return $res->response_showkantor->data;
        } else {
            return [];
        }
    }

    public function list(Request $request)
    {
        $data = array(
            'data' => $this->showuser($request->kantor)
        );
        return view('user/list')->with('data', $data);
    }

    public function showuser($kantor)
    {
        $ch = curl_init();
        $headers  = array(
            'Content-Type: application/json',
            'Accept: application/json',
            'X-POS-USER: '.env('USER1').'',
            'X-POS-PASSWORD: '.env('PASS1').''
        );
        $paramss = '{
            "idkantor":"'.$kantor.'"
        }';
        curl_setopt($ch, CURLOPT_URL, env('SERVER1').'showuser');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $paramss);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec ($ch);
        $res = json_decode($result);
        if(isset($res->response_showuser->data)){
            return $res->response_showuser->data;
        } else {
            return [];
        }
    }

    public function save(Request $request)
    {
        $curl = curl_init();

        $ch = curl_init();
        $headers  = array(
            'Content-Type: application/json',
            'Accept: application/json',
            'X-POS-USER: '.env('USER1').'',
            'X-POS-PASSWORD: '.env('PASS1').''
        );
        $params = '{
            "idpetugas":"'.$request->nippos.'",
            "nama":"'.$request->nama.'",
            "no_hp":"'.$request->nohp.'",
            "email":"'.$request->email.'",
            "idakses":"'.$request->hakakses.'",
            "idkantor":"'.$request->kantor_add.'"
        }';
        curl_setopt($ch, CURLOPT_URL, env('SERVER1').'adduser');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec ($ch);
        $res = json_decode($result);
        if(isset($res->KDRESPON)){
            return $result;
        } else {
            return array(
                'KDRESPON' => '99',
                'KETRESPON' => 'Gagal! Sedang terjadi kesalahan..'
            );
        }
    }

    public function delete(Request $request)
    {
        $curl = curl_init();

        $ch = curl_init();
        $headers  = array(
            'Content-Type: application/json',
            'Accept: application/json',
            'X-POS-USER: '.env('USER1').'',
            'X-POS-PASSWORD: '.env('PASS1').''
        );
        $params = '{
            "idpetugas":"'.$request->idpetugas.'"
        }';
        curl_setopt($ch, CURLOPT_URL, env('SERVER1').'deleteuser');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec ($ch);
        $res = json_decode($result);
        if(isset($res->KDRESPON)){
            return $result;
        } else {
            return array(
                'KDRESPON' => '99',
                'KETRESPON' => 'Gagal! Sedang terjadi kesalahan..'
            );
        }
    }

    public function update(Request $request)
    {
        $curl = curl_init();

        $ch = curl_init();
        $headers  = array(
            'Content-Type: application/json',
            'Accept: application/json',
            'X-POS-USER: '.env('USER1').'',
            'X-POS-PASSWORD: '.env('PASS1').''
        );
        $params = '{
            "idpetugas":"'.$request->enippos.'",
            "nama":"'.$request->enama.'",
            "no_hp":"'.$request->enohp.'",
            "email":"'.$request->eemail.'",
            "idakses":"'.$request->ehakakses.'",
            "idkantor":"'.$request->ekantor_add.'"
        }';
        curl_setopt($ch, CURLOPT_URL, env('SERVER1').'updateuser');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec ($ch);
        $res = json_decode($result);
        if(isset($res->KDRESPON)){
            return $result;
        } else {
            return array(
                'KDRESPON' => '99',
                'KETRESPON' => 'Gagal! Sedang terjadi kesalahan..'
            );
        }
    }

}
