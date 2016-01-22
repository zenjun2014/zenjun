<?php
class database{
    protected $hostname = "locahost";
    protected $hostuser = "root";
    protected $hostpass = "";      
    protected $db_name = "user";
    protected $result;
    protected $Conn;
    
    public function connect(){
        $this->conn =  mysql_connect($this->hostname,$this->hostuser,$this->hostpass);
        mysql_select_db("$this->db_name",  $this->Conn);
       
        
    }       
}
?>
<?php
class Database {
    private $Host,$Username,$Password;
    public function __construct($iHost,$iUsername,$iPassword){
        $this->Host-$iHost;
        $this->Username-$iUsername;
        $this->Password-$iPassword;
        $this->$db_name = "user";
        $this->connect();
        $this->$result;
        $this->$Conn;
        }
    public function connect(){
        $this->Conn = mysql_connect($this->Host,$this->Username,$this->Password)
        OR die ("Da xay ra loi ket noi Database");
        mysql_select_db("$this->db_name",  $this->Conn)
        OR die ("Da xay ra loi select Database");        
    }
}
?>
