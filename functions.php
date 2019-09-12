<?php
    
     define('DBHOST','localhost');
     define('DBUSER','root');
     define('DBPASS','');
     define('DBNAME','login');

     class loginDashboard{
        private $host   = DBHOST; 
        private $user   = DBUSER; 
        private $pass   = DBPASS; 
        private $dbname = DBNAME;


        public $link;
        public function __construct(){
            $this->connectdb();
        }
        private function connectdb(){
            $this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
            if(!$this->link){
                return false;
            }
        }
        public function login($sql){
            $result =$this->link->query($sql);
            if($result->num_rows==1){
                //$row = $result->fetch_assoc();
                header('location:dashboard.php');
                return true;
            } 
            else {
                echo "Password Or Username Doesn't Match Try Again!";
                return false;
            }
        }
        public function register($sql1, $sql2){
            $result =$this->link->query($sql1);
            if($result->num_rows>0){
                echo "You already have a account!";
            } 
            else {
                if (mysqli_query($this->link, $sql2)) {
                    $msg = "Registered Successfully.";
                    echo $msg;
                    // header('location:index.php');
                    
                } else {
                    echo "Error: " . $sql2 . "" . mysqli_error($this->link);
                }
            }
        }
    } 
?>