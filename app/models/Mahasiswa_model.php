<?php

class Mahasiswa_model{


    private $dbDriver;
    private $stmt;

    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    


    // private $mhs= [
    //     [
    //         "nama"=>"arin",
    //         "NIM"=>"A1710",
    //         "email"=>"rin@rocketmail.com",
    //         "jurusan"=>"busana"
    //     ],
    //     [
    //         "nama"=>"hendara",
    //         "NIM"=>"B1751",
    //         "email"=>"nadar@yahoo.co.id",
    //         "jurusan"=>"Mesin"
    //     ],
    //     [
    //         "nama"=>"Cahyo",
    //         "NIM"=>"H1733",
    //         "email"=>"nurisCahaya@sun.com",
    //         "jurusan"=>"pertanian"
    //     ],
    //     [
    //         "nama"=>"Asep rahadi",
    //         "NIM"=>"D1780",
    //         "email"=>"aingmaung@gmail.com",
    //         "jurusan"=>"Listrik"
    //      ]
    // ];






    private $info = ' "view dan model statement deklarasinya terletak pada controller core"';
    
    public function getMahasiswa()
    {
        // $perintahquery = 'SELECT *FROM mahasiswa';

        // $this->stmt = $this->dbDriver->prepare($perintahquery);
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getInfo(){
  
        return $info;
    }



    public function tambahDataMahasiswa($data)
    {

        $query = "INSERT INTO mahasiswa
            VALUES
            ('', :nama, :NIM, :email, :jurusan)";

            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('NIM', $data['NIM']);
            $this->db->bind('email', $data['email']);
            $this->db->bind('jurusan', $data['jurusan']);


            var_dump($query);
            $this->db->execute();

            return $this->db->rowCount();
            
    }

    public function hapusDataMahasiswa($id)
    {

        $query = "DELETE FROM mahasiswa WHERE id = :id";


            $this->db->query($query);
            $this->db->bind('id', $id);
            var_dump($query);
            $this->db->execute();

            return $this->db->rowCount();
            
    }
}