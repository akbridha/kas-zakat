<?php
class Mahasiswa extends Controller{

    public function index()

    {
        $data['judul'] = "Mahasiswa";
        $data['mhs']= $this->model('Mahasiswa_model')->getMahasiswa();

        $this->view('template/header',$data);
        $this->view('mahasiswa/index',$data);
        $this->view('template/footer');
    }


    public function tambah()
    {


        if ( $this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0){
           
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;

        }

    }

    public function hapus($id)
    {

    


        if ( $this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0){
           
            Flasher::setFlash('berhasil', 'menghapus', 'success');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }else{
            
            Flasher::setFlash('gagal', 'menghapus', 'danger');
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;

        }

    }
}