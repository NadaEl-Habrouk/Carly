<?php
session_start();
define('SITEURL','http://localhost/carly/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','carly');




$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysql_error());
$db_select = mysqli_select_db($conn , DB_NAME) or die(mysqli_error());


/*

class db
{
    protected $server = 'localhost';
    protected $username = 'root';
    protected $userpass = '';
    protected $dbname = 'Carly';
    public $connection;



    public function __construct()
    {
        $this->connection = mysqli_connect($this->server, $this->username, $this->userpass, $this->dbname);
        if (!$this->connection) {
            die("Error in connection :" . mysqli_connect_error());
        }
    }
/*
    public function db_insert($sql)
    {
        $result = mysqli_query($this->connection, $sql);
        if ($result) {
            return 'REGISTER SUCCESS';
        }
        return false;
    }
*/

      //to select all the data from any table of the
/*
      public  function getAll($table)
      {
          $sql = "SELECT * FROM `$table`";
          $query = mysqli_query($this->connection, $sql);
          $data = array();
          while($row = mysqli_fetch_assoc($query))
          {
              $data[] = $row;
          }
          return $data;
      }



}
*/

?>