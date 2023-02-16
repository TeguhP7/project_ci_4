<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;
use Config\Services;


class Mahasiswa extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new MahasiswaModel();
    }
    public function index()
    {
        $data['data'] = $this->model->getData();
        return view('dashboard_ajax', $data);
    }


    public function form_tambah_data()
    {
        return view('form_tambah_data');
    }

    public function tambah_data()
    {
        // $data = [
        //     'nim' => $this->request->getPost('nim'),
        //     'nama' => $this->request->getpost('nama'),
        //     'jurusan' => $this->request->getPost('jurusan'),
        //     'alamat' => $this->request->getPost('alamat'),

        // ];
        $data = $this->request->getPost(); //mengambil semua data yang dikirim dari input tanpa filter nama dengan catatan nama di form input sama dengan nama kolom di table DB
        $this->model->insertData($data);
        return redirect()->to(base_url('/'));
    }
    public function tambah_data_ajax()
    {
        $validasi = Services::validation();
        $rule = [
            'nim' => [
                'label' => 'Nim',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ]
        ];

        $validasi->setRules($rule);
        if ($validasi->withRequest($this->request)->run()) {
            // $nim = $this->request->getPost('nim');
            // $nama = $this->request->getPost('nama');
            // $jurusan = $this->request->getPost('jurusan');
            // $alamat = $this->request->getPost('alamat');
            // $data = [
            //     'nim' => $nim,
            //     'nama' => $nama,
            //     'jurusan' => $jurusan,
            //     'alamat' => $alamat
            // ];
            $data = $this->request->getPost();
            $this->model->insertData($data);

            $response = [
                'success' => 'Data berhasil ditambahkan',
                'error' => false
            ];
        } else {
            $response = [
                'success' => false,
                'error' => $validasi->listErrors()
            ];
        }
        return json_encode($response);
    }


    public function form_edit_data($id)
    {
        $data_by_id['data'] = $this->model->getData($id);
        return view('form_edit_data', $data_by_id);
    }


    public function edit_data()
    {
        $id = $this->request->getPost('id');
        $data = $this->request->getPost();
        $this->model->updateData($id, $data);
        return redirect()->to(base_url('/'));
    }
    public function delete_data($id)
    {
        $this->model->deleteData($id);
        return redirect()->to(base_url('/'));
    }
}