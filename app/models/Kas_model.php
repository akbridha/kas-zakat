<?php
class Kas_model {


    private $dbDriver;
    private $stmt;

    private $table = 'kas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    




    private $info = ' "view dan model statement deklarasinya terletak pada controller core"';
    
    public function ambilKasSemua()
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



    public function tambahDataKas($data)
    {

        $query = "INSERT INTO kas
            VALUES
            ('', :info, :jenis, :nominal, '', :keterangan, '', '')";

            $this->db->query($query);
            $this->db->bind('info', $data['info']);
            $this->db->bind('jenis', $data['jenis']);
            $this->db->bind('nominal', $data['nominal']);
            $this->db->bind('keterangan', $data['keterangan']);


           
       
            $this->db->execute();

            return $this->db->rowCount();
            
    }

    public function getKasById($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getKasByJenis($jns){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE jenis=:jns');
        $this->db->bind('jns', $jns);
        return $this->db->resultSet();
    }

    public function hapusDataKas($id)
    {

        $query = "DELETE FROM kas WHERE id = :id";


            $this->db->query($query);
            $this->db->bind('id', $id);
            var_dump($query);
            $this->db->execute();

            return $this->db->rowCount();
            
    }

    public function ubahKas($data){
        $query = "UPDATE kas
        SET
        info = :info,
        jenis = :jenis,
        nominal = :nominal,
        keterangan = :keterangan
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('info', $data['info']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('nominal', $data['nominal']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id', $data['id']);



        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa(){

        // $keyword = '"%'.$_POST['keyword'].'%"';
        $keyword = $_POST['keyword'];
        // $query = "SELECT * FROM mahasiswa WHERE nama LIKE " . $keyword;
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}