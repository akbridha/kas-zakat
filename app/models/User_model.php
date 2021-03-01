<?php

class User_model{

    private $nama = 'arnauth';
    private $info = ' "view dan model statement deklarasinya terletak pada controller core"';
    
    public function getUser()
    {
        return $this->nama;
    }

    public function getInfo(){
  
        return $this->info;
    }
}