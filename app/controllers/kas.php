<?php



class kas extends Controller{



    public function index(){





        $data['judul']='kas';
        $data['kas']=$this->model('Kas_model')->ambilKasSemua();
        $this->view('template/header',$data);  //"view" mengacu pada statement pada file controller core
        $this->view('kas/index',$data);
        $this->view('template/footer');
    
    
    
    
    }


    
    public function detail($id)
    {
        $data['judul'] = "Detail Kas";
        $data['kas']= $this->model('Kas_model')->getKasById($id);
        
        $this->view('template/header',$data);
        $this->view('kas/detail',$data);
        $this->view('template/footer');
    }
    
    public function tambah()
    {
        
        
        if ( $this->model('Kas_model')->tambahDataKas($_POST) > 0){
            
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/kas');
            exit;
        }else{
            
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/kas');
            exit;
        }
    }
    
    
    public function getubah(){
        echo json_encode($this->model('Kas_model')->getKasById($_POST['id']));
    }
    
    
    public function ubah(){
        if( $this->model('Kas_model')->ubahKas($_POST) > 0){
            Flasher::setflash('berhasil', 'diubah', 'success');
            header('location:' . BASEURL . '/kas');
            exit;
        }else{
            Flasher::setFlash('gagal' , 'diubah', 'danger');
            header('location:' . BASEURL . '/kas');
            exit;
        }
    }
    
    
    public function tampilKasByJenis($jns)
    {
        $data['judul'] = $jns;
        $data['kas']= $this->model('Kas_model')->getKasByJenis($jns);

        $this->view('template/header',$data);
        $this->view('kas/jenis',$data);
        $this->view('template/footer');
    }

    public function hapus($id)
    {
        
        
        
        
        if ( $this->model('Kas_model')->hapusDataKas($id) > 0){
            
            Flasher::setFlash('berhasil', 'menghapus', 'success');
            header('Location: ' . BASEURL . '/kas');
            exit;
        }else{
            
            Flasher::setFlash('gagal', 'menghapus', 'danger');
            header('Location: ' . BASEURL . '/kas');
            exit;
            
        }
        
    }
}