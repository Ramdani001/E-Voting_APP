<?php

class User extends Controller
{
    public function index()
    {
        $data['judul'] = 'User';
        $data['users'] = $this->model('Userr_model')->getAllUsers();
        $this->view('template/header', $data);
        $this->view('user/index', $data);
        $this->view('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail User';
        $data['users'] = $this->model('Userr_model')->getUserById($id);
        $this->view('template/header', $data);
        $this->view('user/detail', $data);
        $this->view('template/footer');
    }

    public function tambah()
    {
        if ($this->model('Userr_model')->tambahDataUser($_POST) > 0) {
            Flash::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flash::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Userr_model')->hapusDataUser($id) > 0) {
            Flash::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flash::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Userr_model')->getUserById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Userr_model')->ubahDataUser($_POST) > 0) {
            Flash::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flash::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'User';
        $data['users'] = $this->model('Userr_model')->cariDataUsers();
        $this->view('template/header', $data);
        $this->view('user/index', $data);
        $this->view('template/footer');
    }
}
