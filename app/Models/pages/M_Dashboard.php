<?php

namespace App\Models\pages;

use CodeIgniter\Model;

class M_Dashboard extends Model
{
    protected $table = "tb_login";
    protected $primaryKey = "id_user";

    protected $allowedFields = ['username', 'password', 'status'];

    public function getDetail($detail = false)
    {

        if ($detail == false) {
            return $this->findAll();
        }

        return $this->where(['username' => $detail])->first();
    }
}
