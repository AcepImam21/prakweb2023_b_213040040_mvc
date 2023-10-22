<?php 

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }



    // private $mhs = [
    //     [
    //         "nama" => "Acep Imam H",
    //         "nrp" => "213040040",
    //         "email" => "Acepimam19@gmail.com",
    //         "jurusan" => "Teknik Informatika"

    //     ],
    //     [
    //         "nama" => "Bagus R",
    //         "nrp" => "213040099",
    //         "email" => "bagus22@gmail.com",
    //         "jurusan" => "Teknik Mesin"

    //     ],
    //     [
    //         "nama" => "Sri B",
    //         "nrp" => "213040400",
    //         "email" => "Sri009@gmail.com",
    //         "jurusan" => "Teknik Pangan"

    //     ],
    //     [
    //         "nama" => "Tatang S",
    //         "nrp" => "213040999",
    //         "email" => "TatangG9@gmail.com",
    //         "jurusan" => "Teknik mesin"

    //     ]
    // ];


    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        // ?????????? kenapa di video gk error ketika ('', :nama, :nrp, :email, :jurusan)"; ajg emosi
        $query = "INSERT INTO mahasiswa VALUES ('0', :nama, :nrp, :email, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        // $this->db->bind('id', $data['id']);


        $this->db->execute();

        return $this->db->rowCount();

    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE mahasiswa SET
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    
}