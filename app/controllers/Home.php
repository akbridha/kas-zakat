<?php
class Home extends Controller{



    public function index(){



        echo '</br>';
        echo '[method index pada class controller home]  hasil vardump';

        // echo 'home/index';


        $data['judul']='Home';
        $data['namauser'] = $this->model('User_model')->getInfo(); //"model" mengacu pada statement pada file controller core
        var_dump($data);
        $this->view('template/header',$data);  //"view" mengacu pada statement pada file controller core
        $this->view('home/index',$data);
        $this->view('template/footer');




    }




}