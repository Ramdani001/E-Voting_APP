<?php

class Person_model
{

    private $table = 'person';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPerson()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPersonById($id)
    {
        $this->db->query(' SELECT * FROM ' . $this->table . ' WHERE id_person=:id_person');
        $this->db->bind('id_person', $id);
        return $this->db->single();
    }

    public function tambahDataPerson($data)
    {
        $query = "INSERT INTO person
                    VALUES
                    ('', :nama, :alamat, :no_hp, :tipe, :visi, :misi, '')";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('tipe', $data['tipe']);
        $this->db->bind('visi', $data['visi']);
        $this->db->bind('misi', $data['misi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPerson($id)
    {
        $query = "DELETE FROM person WHERE id_person=:id_person";
        $this->db->query($query);
        $this->db->bind('id_person', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataPerson($data)
    {

        $query = "UPDATE person SET
                   nama = :nama,
                   alamat = :alamat,
                   no_hp = :no_hp,
                   tipe = :tipe,
                   visi = :visi,
                   misi = :misi,
                   id_img = :id_img
                   WHERE id_person = :id_person";
        $this->db->query($query);
        $this->db->bind('id_person', $data['id_person']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('tipe', $data['tipe']);
        $this->db->bind('visi', $data['visi']);
        $this->db->bind('misi', $data['misi']);
        $this->db->bind('id_img', $data['id_img']);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataPerson()
    {

        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM person WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function updatePersonPhoto($personId, $imageId)
    {
        // Update the person's photo in the person table and the image's person_id in the image table
        $query = "UPDATE person 
              JOIN image ON person.image_id = image.id
              SET person.image_id = :imageId, image.person_id = :personId
              WHERE person.id = :personId";
        $this->db->query($query);
        $this->db->bind(':imageId', $imageId);
        $this->db->bind(':personId', $personId);
        $this->db->execute();
    }
}
