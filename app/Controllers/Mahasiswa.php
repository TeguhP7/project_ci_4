<?php
namespace App\Controllers;

use App\Models\MahasiswaModel;

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
        return view('dashboard', $data);
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