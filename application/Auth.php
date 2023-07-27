<?php

class Auth extends Database
{
    protected $session = 'xyz_user_id';

    public function check($username, $password)
    {
        $password = md5($password);
        $result = $this->connection->prepare("SELECT * FROM `users` WHERE (`username`=? OR `phone`=? OR `email`=?) AND `password`=? ");
        $result->execute([$username, $username, $username, $password]);
        if (!$this->result($result)) return false;
        if ($result->rowCount()) return $result->fetchObject()->id;
        return false;
    }

    public function set($id)
    {
        $_SESSION[$this->session] = $id;
    }

    public function get()
    {
        return $_SESSION[$this->session];
    }

    public function guest()
    {
        return !isset($_SESSION[$this->session]);
    }

    public function logout()
    {
        unset($_SESSION[$this->session]);
    }
}