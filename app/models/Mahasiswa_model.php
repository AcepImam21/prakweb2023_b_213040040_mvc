<?php 

class Mahasiswa_model {
    private $dbh; // database handler
    private $stmt;

    public function __construct()
    {
        // data  source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
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
        $this->stmt = $this->dbh->prepare('SELECT * From mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}