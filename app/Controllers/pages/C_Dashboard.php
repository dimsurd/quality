<?php

namespace App\Controllers\Pages;

use App\Controllers\BaseController;
use App\Models\pages\M_Dashboard;

class C_Dashboard extends BaseController
{

    protected $users;

    public function __construct()
    {
        $this->users = new M_Dashboard();
    }

    public function index()
    {
        $user = $this->users->findAll();
        $data =
            [
                'user' => $user,

            ];

        return view('pages/V_Dashboard', $data);
    }

    public function detail($detail)
    {

        $data = [
            'user' => $this->users->getDetail($detail)
        ];

        if (empty($data['user'])) {

            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $detail . ' Tidak Ditemukan.');
        }

        return view('pages/V_Detail', $data);
    }

    public function tambah()
    {
        return view('pages/V_Create');
    }

    public function simpan()
    {
        // $this->request->getVar('username');
        // $this->request->getVar('password');
        $this->users->save([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'status' => $this->request->getVar('status')
        ]);

        return redirect()->to('/pages');
    }

    public function hapus($id)
    {
        $this->users->delete($id);

        return redirect()->to('/pages');
    }

    public function ubah($id)
    {
        $this->users->save([
            'id' => $id,
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'status' => $this->request->getVar('status')
        ]);
        // dd($this->request->getVar());

        return redirect()->to('/pages');
    }
}
