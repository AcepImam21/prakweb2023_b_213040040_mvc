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
    
}