<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoryModel;

class KategoryController extends Controller
{
    public function __construct()
    {
        $this->KategoryModel = new KategoryModel();
    }
    //
    public function index()
    {
        $data = [
            'title' => 'Kategory',
            'kategori' => $this->KategoryModel->all(),
        ];
        // dd($data);
        return view('admin.kategory.index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Tambah Kategori Masjid',

        ];
        return view('admin.kategory.add', $data);
    }

    // insert data
    public function insert()
    {
        // validasi
        Request()->validate(
            [
                'kategori'    => 'required',
                'icon'       => 'required|max:1024',

            ],
            [
                'kategori.required' => 'Wajib Diisi',
                'icon.required' => 'Wajib Diisi',

            ]
        );

        // jika validasi lengkap, maka lakukan simpan data ke database
        $file = Request()->icon;
        $filename = $file->getClientOriginalName();
        $file->move(public_path('iconkategori'), $filename);


        $data = [
            'kategori'    => Request()->kategori,
            'icon'       => $filename,
        ];

        // simpan ke model
        $this->KategoryModel->InsertData($data);

        // redirect
        return redirect()->route('kategory')->with('pesan', 'Data Berhasil Ditambahkan');
    }

    //
    // edit data
    public function edit($id_kategory)
    {
        // $data = [
        //     'title' => 'Edit Kategori Masjid',
        //     'kategory' => $this->KategoryModel->DetailData($id_kategory),
        // ];
        // return view('admin.kategory.edit', $data);
        $title = 'Edit Kategori Masjid';
        $kategory = KategoryModel::where('id_kategory',$id_kategory)->first();
        return view('admin.kategory.edit', compact('kategory','title'));
    }

    public function update(Request $request, $id_kategory)
    {
        // validasi
        $request->validate(
            [
                'kategori' => 'required',
            ],
            [
                'kategori.required' => 'Wajib Diisi',
            ]
        );

        if ($request->icon <> "") {
            // hapus icon
            $kategori = $this->KategoryModel->DetailData($id_kategory);
            // $kategori = KategoryModel::where('id_kategory',$id_kategory)->first();
            if ($kategori->icon <> "") {
                unlink(public_path('iconkategori') . '/' . $kategori->icon);
            }
            // jika ingin ganti icon
            $file = $request->icon;
            $filename = $file->getClientOriginalName();
            $file->move(public_path('iconkategori'), $filename);

            $data = [
                'kategori' => $request->kategori,
                'icon' => $filename,
            ];

            // simpan ke model
            $this->KategoryModel->UpdateData($id_kategory, $data);
            // $kategori->update($data);
        } else {
            // jika tidak ganti icon

            $data = [
                'kategori' => $request->kategori,
            ];

            // simpan ke model
            $this->KategoryModel->UpdateData($id_kategory, $data);
            // $kategori = KategoryModel::where('id_kategory',$id_kategory)->first();
            // $kategori->update($data);
        }
        // redirect
        return redirect()->route('kategory')->with('pesan', 'Data Berhasil DiUpdate');
    }

    public function delete($id_kategory)
    {
        $kategori = $this->KategoryModel->DetailData($id_kategory);
        if ($kategori->icon <> "") {
            unlink(public_path('iconkategori') . '/' . $kategori->icon);
        }

        // simpan ke model
        $this->KategoryModel->DeleteData($id_kategory);

        // redirect
        return redirect()->route('kategory')->with('pesan', 'Data Berhasil Delete');
    }
}
