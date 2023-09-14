<?php

class DBHelper
{

    function _generateRandomString($length = 16) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
            ceil($length/strlen($x)) )),1,$length);
    }
    function _db_connect() {
        $servername = "localhost";
        $username = "root";
        $password = "7193";

        $conn = new mysqli($servername, $username, $password, "site");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
    public function getUserNameByToken($token)
    {
        $conn = $this->_db_connect();
        $result = $conn->query("SELECT name FROM users WHERE token='".$token."'");
        $result = $result->fetch_all();
        $conn->close();
        return $result[0][0];

    }

    public function do_login(mixed $username, mixed $password)
    {
        $conn = $this->_db_connect();
        $result = $conn->query("SELECT password, token FROM users WHERE username='".$username."'");
        if ($result->num_rows <= 0) {
            return NULL;
        }
        $result = $result->fetch_all();
        if(!password_verify($password, $result[0][0])) {
            return NULL;
        }
        $conn->close();
        return $result[0][1];
    }

    public function do_registration(mixed $name, mixed $username, mixed $password)
    {
        $pass_md5 = password_hash($password, PASSWORD_BCRYPT);
        $conn = $this->_db_connect();
        $token = $this->_generateRandomString();
        try {
            $conn->query("INSERT INTO users (name, username, password, token)
            VALUES ('".$name."','".$username."','".$pass_md5."', '".$token."')");
        } catch (Exception $e) {
            return NULL;
        }
        return $token;
    }
}