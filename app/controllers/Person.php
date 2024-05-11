<?php

class Person extends Controller
{
    public function index()
    {
        $data['judul'] = 'Person';
        $data['users'] = $this->model('Person_model')->getAllPerson();
        $this->view('template/header', $data);
        $this->view('person/index', $data);
        $this->view('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail User';
        $data['users'] = $this->model('Person_model')->getPersonById($id);
        $this->view('template/header', $data);
        $this->view('person/detail', $data);
        $this->view('template/footer');
    }

    //public function pict($id)
    //{
    //   $data['judul'] = 'Detail Picture';
    //  $data['users'] = $this->model('Person_model')->getPersonById($id);
    //$this->view('template/header', $data);
    //$this->view('person/pict', $data);
    //$this->view('template/footer');
    //}

    public function tambah()
    {
        if ($this->model('Person_model')->tambahDataPerson($_POST) > 0) {
            Flash::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/person');
            exit;
        } else {
            Flash::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/person');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('Person_model')->hapusDataPerson($id) > 0) {
            Flash::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/person');
            exit;
        } else {
            Flash::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/person');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Person_model')->getPersonById($_POST['id_person']));
    }

    public function ubah()
    {
        if ($this->model('Person_model')->ubahDataPerson($_POST) > 0) {
            Flash::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/person');
            exit;
        } else {
            Flash::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/person');
            exit;
        }
    }

    public function cari()
    {
        $data['judul'] = 'Person';
        $data['users'] = $this->model('Person_model')->cariDataPerson();
        $this->view('template/header', $data);
        $this->view('person/index', $data);
        $this->view('template/footer');
    }

    public function ubahpict()
    {

        if ($this->model('Person_model')->ubahPersonPhoto($_POST) > 0) {
            Flash::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/person');
            exit;
        } else {
            Flash::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/person');
            exit;
        }
    }
}
