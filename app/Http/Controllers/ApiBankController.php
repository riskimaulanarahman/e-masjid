<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BankModel;

class ApiBankController extends Controller
{
    public function index()
    {

        $bank = BankModel::all();
        return response()->json(['message' => 'Success', 'data' => $bank]);
    }

    public function show($id)
    {
        $banks = BankModel::find($id);
        return response()->json(['Message' => 'Success', 'data' => $banks]);
    }

    public function insert()
    {
        // validasi
        Request()->validate(
            [
                'kode_bank'    => 'required',
                'nama_bank'     => 'required',
                'icons'       => 'max:1024',

            ],
            [
                'kode_bank.required' => 'Wajib Diisi',
                'nama_bank.required' => 'Wajib Diisi',

            ]
        );

        // jika validasi lengkap, maka lakukan simpan data ke database
        $file = Request()->icons;
        $filename = $file->getClientOriginalName();
        $file->move(public_path('iconbank'), $filename);


        $data = [
            'kode_bank'    => Request()->kode_bank,
            'nama_bank'     => Request()->nama_bank,
            'icons'       => $filename,
        ];

        // simpan ke model
        $this->BankModel->InsertData($data);

        // redirect
        return response()->json(['Message' => 'Success', 'data' => $data]);
    }
}
