<?php

class Database
{

    private $host,
        $user,
        $pass,
        $db,
        $connect;

    public $loginFailed;

    public function __construct($host, $user, $pass, $db)
    {
        $this->connectToDB($host, $user, $pass, $db);
    }

    private function connectToDB($host, $user, $pass, $db)
    {
        return $this->connect = mysqli_connect($host, $user, $pass, $db);
    }

    public function adminLogin($username, $password)
    {
        $checkUsername = mysqli_query($this->connect, "SELECT * FROM tb_admin WHERE username = '$username'");
        if (mysqli_num_rows($checkUsername) === 1) {
            $admin = mysqli_fetch_assoc($checkUsername);
            if ($admin["password"] == $password) {
                header("Location: admin.php");
                exit;
            }
        }
        $this->loginFailed = true;
    }
}

$DB = new Database("localhost", "root", "", "db_simplelogin");
