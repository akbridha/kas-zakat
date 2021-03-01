<?php
class About extends Controller{

    public function page(){
        $this->view('about/page');
        
    }







    public function index($ar1 = ' kosong', $ar2 = ' kosong', $ar3 = ' kosong'){




        $data['nama']= $ar1;
        $data['pekerjaan'] = $ar2;
        $data['umur'] = $ar3;
        $data['judul'] = "About";


        $this->view('template/header',$data);
        $this->view('about/index', $data);
        $this->view('template/footer');

        // echo 'arr1 ='.$ar1.', arr2 = '.$ar2 .', arr3 = '.$ar3;

        // echo ' </br>';


    }




}