<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nim', 'nama', 'jurusan', 'alamat'];


    public function getData($id = null)
    {
        if ($id == null) {
            return $this->findAll();
        } else {
            $data = $this->find($id);
            return $data;
        }

    }

    public function insertData($data)
    {
        return $this->insert($data);
    }

    public function updateData($id, $data)
    {
        return $this->update($id, $data);
    }

    public function deleteData($id)
    {
        return $this->delete($id);
    }

}
?>