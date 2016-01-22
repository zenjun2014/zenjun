<?php
require_once 'config_db.php';

Class User {
                public $db;

		public function __construct(){
			$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			if(mysqli_connect_errno()) {
				echo "Error: Could not connect to database.";
			        exit;
			}
		}
                public $lname;
                public $fname;
                public $sex;
                public $email;
                public $password;
                public $cpassword;
                public $defaultsettings_birthDay;
                public $address;
                public $city;
                public $country;
                public $zipCode;
                public $comment;
                public $code;
                public $statur;
                public function user (){
                    $this->lname;
                    $this->fname;
                    $this->sex;
                    $this->email;
                    $this->defaultsettings_birthDay;
                    $this->address;
                    $this->city;
                    $this->country;
                    $this->zipCode;
                    $this->comment;
                    $this->statur= 1;
                    $this->password = md5($this->password);
                    $this->code = substr(md5(rand(1,100)), 15,5);
                    $sql="SELECT * FROM user_db WHERE email='$this->email'";
                    $check =  $this->db->query($sql) ;
                    $count_row = $check->num_rows;
        //if the username is not in db then insert to the table
                    if ($count_row == 0){
                    $sql1="INSERT INTO user_db SET lname='$this->lname',fname='$this->fname',sex='$this->sex',email='$this->email',password='$this->password',birthday='$this->defaultsettings_birthDay',address='$this->address',city='$this->city',country='$this->country',zip='$this->zipCode',comment='$this->comment',code='$this->code',statur='$this->statur'"; 
            }
            $result = mysqli_query($this->db,$this->sql1) or die(mysqli_connect_errno()."Data cannot inserted");
            return $result;
		}   	
                }
                
                      
?>

