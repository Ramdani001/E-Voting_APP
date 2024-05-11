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
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
        $this->db->bind('id_user', $id);
        return $this->db->single();
    }

    public function tambahDataUser($data)
    {
        $query = "INSERT INTO user
                    VALUES
                    ('', '', :email, :password, :status)";
        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('status', $data['status']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataUser($id)
    {
        $query = "DELETE FROM user WHERE id_user=:id_user";
        $this->db->query($query);
        $this->db->bind('id_user', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataUser($data)
    {
        $query = "UPDATE user SET
                   email = :email,
                   password = :password,
                   status = :status
                   id_person = :id_person
                   WHERE id_user = :id_user";

        $this->db->query($query);
        $this->db->bind('email', $data['email']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('id_person', $data['id_person']);
        $this->db->bind('id_user', $data['id_user']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataUsers()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM user WHERE email LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
