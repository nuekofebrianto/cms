<?php

namespace Add\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Mail\BookEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Transaksi',
            'subtitle' => '',
            'js' => ''
        );
        return view('transaksi/index')->with('data', $data);
    }

    public function list(Request $request)
    {

        // return $request->idpelanggan;
        $ch = curl_init();

        $headers  = array(
            'Content-Type: application/json',
            'accept: application/json',
            'X-POS-USER: ' . env('USER1') . '',
            'X-POS-PASSWORD: ' . env('PASS1') . ''
        );
        $params = '{
            "idpelanggan":"' . $request->idpelanggan . '",
            "tglawal":"' . $request->tglawal . '",
            "tglakhir":"' . $request->tglakhir . '"
        }';

        curl_setopt($ch, CURLOPT_URL, env('SERVER1') . 'getdatatransaksi');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        $result = curl_exec($ch);
        $res = json_decode($result);
        if (isset($res->response_datatransaksi->data)) {
            $data = array(
                'data' => $res->response_datatransaksi->data
            );
        } else {
            $data = array(
                'data' => []
            );
        }

        return view('transaksi/list')->with('data', $data);
    }

}
