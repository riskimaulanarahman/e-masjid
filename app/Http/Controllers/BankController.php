<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BankModel;

class BankController extends Controller
{
    public function __construct()
    {
        $this->BankModel = new BankModel();
        $this->middleware('auth');
    }
    //
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $bank = BankModel::where('kode_bank', 'LIKE', '%' . $keyword . '%')
            ->orWhere('nama_bank', 'LIKE', '%' . $keyword . '%')
            ->simplePaginate(5);
        $data = [
            'title' => 'Bank',
            'bank' => $this->BankModel->AllData(),
        ];
        return view('admin.bank.index', compact('bank', ['bank' => $bank], 'keyword'), $data,);
    }
    public function add()
    {
        $data = [
            'title' => 'Tambah Data',

        ];
        return view('admin.bank.add', $data);
    }

    // insert data
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
        return redirect()->route('bank')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    // 
    // edit data
    public function edit($id_bank)
    {
        $data = [
            'title' => 'Edit Data Bank',
            'bank' => $this->BankModel->DetailData($id_bank),
        ];
        return view('admin.bank.edit', $data);
    }

    public function update($id_bank)
    {
        // validasi
        Request()->validate(
            [
                'kode_bank'    => 'required',
                'nama_bank'     => 'required'
            ],
            [
                'kode_bank.required' => 'Wajib Diisi',
                'nama_bank.required' => 'Wajib Diisi',
            ]
        );

        if (Request()->icons <> "") {
            // hapus icon
            $bank = $this->BankModel->DetailData($id_bank);
            if ($bank->icons <> "") {
                unlink(public_path('iconbank') . '/' . $bank->icons);
            }
            // jika ingin ganti icon
            $file = Request()->icon;
            $filename = $file->getClientOriginalName();
            $file->move(public_path('iconbank'), $filename);

            $data = [
                'kode_bank'    => Request()->kode_bank,
                'nama_bank'     => Request()->nama_bank,
                'icons'       => $filename,
            ];

            // simpan ke model
            $this->BankModel->UpdateData($id_bank, $data);
        } else {
            // jika tidak ganti icon

            $data = [
                'kode_bank'    => Request()->kode_bank,

            ];

            // simpan ke model
            $this->BankModel->UpdateData($id_bank, $data);
        }
        // redirect
        return redirect()->route('bank')->with('pesan', 'Data Berhasil DiUpdate');
    }

    public function delete($id_bank)
    {
        $bank = $this->BankModel->DetailData($id_bank);
        if ($bank->icons <> "") {
            unlink(public_path('iconbank') . '/' . $bank->icons);
        }

        // simpan ke model
        $this->BankModel->DeleteData($id_bank);

        // redirect
        return redirect()->route('bank')->with('pesan', 'Data Berhasil Delete');
    }
}
