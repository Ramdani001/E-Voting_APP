<?php

class Userr_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO user
                    VALUES
                    ('', :nama, :email, :no_telp)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telp', $data['no_telp']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataUser($id)
    {
        $query = "DELETE FROM user WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataUser($data)
    {
        $query = "UPDATE user SET
                   nama = :nama,
                   email = :email,
                   no_telp = :no_telp
                   WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataUsers()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM user WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
