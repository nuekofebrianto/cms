<?php

namespace Add\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Mail\BookEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ControllerTracking extends Controller
{
    public function index()
    {
        $data = array(
            'title' => '',
            'subtitle' => '',
            'js' => ''
        );
        return view('tracking/satuan/index')->with('data', $data);
    }


    public function list(Request $request)
    {
        if($request->resi == ''){
            $data = array(
                'data' => []
            );
            return view('tracking/satuan/list')->with('data', $data);
        }
        $repl = str_replace("\r\n"," ",$request->resi);
        $resii = explode(" ",$repl);
        $ress = [];
        foreach ($resii as $dt) {
            $ress[] = $this->tracking($dt);
        }
        $data = array(
            'data' => $ress
        );
        return view('tracking/satuan/list')->with('data', $data);
    }

    public function tracking($resi)
    {
        $ch = curl_init();
        $headers  = array(
            'Accept: application/json',
            'X-API-KEY: CpFzVJWl7MgFLWT8wL8Aqz1Jvo3zyytF'
        );
        curl_setopt($ch, CURLOPT_URL, env('SERVERTRACKING').'tracking/'.$resi);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 25);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $responses = curl_exec ($ch);
        $rep = str_replace(array(': ,'), ': "",',$responses);
        return $result_decode = json_decode($rep);
    }

}
