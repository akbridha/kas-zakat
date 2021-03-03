<?php


class App {


protected $controller = 'Home';
protected $method = 'index';
protected $params = array('kosong');

    public function __construct()
    {     
         $url = $this->parseURL();



      // pengecekan ada atau tidak adanya file controller

        if (file_exists('../app/controllers/'. $url[0]. '.php')){

            
                $this->controller = $url[0];
                unset($url[0]);
        }

        require_once '../app/controllers/'.$this->controller . '.php';
        $this->controller = new $this->controller;

        
        
        
        // pengecekan ada atau tidak adanya file method
        if( isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);

            }
        }

        if(!empty($url)){
            $this->params = array_values($url);

        }


        // echo '[method construct() pada class app] ini var_dump => ';
        // var_dump ([$this->controller,$this->method], $this->params);
        // echo'</br>';
      
        //eksekusi dari hasil yg diambil dari URL
        call_user_func_array([$this->controller, $this->method], $this->params);
       
    }
        





        public function parseURL()
        {
            if( isset($_GET['url']) ){
            $url = rtrim($_GET['url'],'/'); 
            $url = filter_var($url,FILTER_SANITIZE_URL); 
            $url = explode('/', $url);  
            // echo '[method parseURL() di class app.php] ';  
            // var_dump($url); 
            // echo '</br>';
            return $url;
            }else
            {
                echo' url setelah public/ kosong atau tidak diisi';
                echo'</br>';
            }
        }
}