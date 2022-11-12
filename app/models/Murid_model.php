<?php

class Murid_model{
   private $table = 'murid',
           $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMurid(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMuridById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');

        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMurid($data){
        $query = "INSERT INTO murid VALUES
                   ('', :nama, :nisn, :email, :jurusan);";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMurid($id){
        $query = "DELETE FROM murid WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
    public function ubahDataMurid($data){
        $query = "UPDATE murid SET
                    nama = :nama,
                    nisn = :nisn,
                    email = :email,
                    jurusan = :jurusan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nisn', $data['nisn']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMurid(){
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM murid WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    
}


?>