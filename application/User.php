<?php

class User extends Database
{
    public function list()
    {
        return $this->table_list("users");
    }

    public function add($name, $family, $username, $phone, $email, $password, $profile, $is_active)
    {
        $now = now();
        $result = $this->connection->prepare("INSERT INTO `users` (`name`,`family`,`username`,`phone`,`email`,`password`,`profile`,`is_active`,`created_at`) 
        VALUES (?,?,?,?,?,?,?,?,?)");
        $result->execute([$name, $family, $username, $phone, $email, $password, $profile, $is_active, $now]);
        if (!$this->result($result)) return false;
        return $this->connection->lastInsertId();
    }

    public function edit($id, $name, $family, $email, $profile, $is_active)
    {
        $result = $this->connection->prepare("UPDATE `users` SET
        `name`=?,`family`=?,`email`=?,`profile`=?,`is_active`=
        WHERE id=?");
        $result->execute([$name, $family, $email, $profile, $is_active, $id]);
        if (!$this->result($result)) return false;
        return $id;
    }

    public function remove($id)
    {
        return $this->remove_data("users", $id);
    }

    public function get($id)
    {
        return $this->get_data("users", $id);
    }

    public function me()
    {
        $auth = new Auth();
        $id = $auth->get();
        return $this->get($id);
    }

    public function exist_username($username, $id = 0)
    {
        $result = $this->connection->prepare("SELECT * FROM `users` WHERE `username`=? AND `id`!=? ");
        $result->execute([$username, $id]);
        if (!$this->result($result)) return false;
        return $result->rowCount();
    }

    public function exist_phone($phone, $id = 0)
    {
        $result = $this->connection->prepare("SELECT * FROM `users` WHERE `phone`=? AND `id`!=? ");
        $result->execute([$phone, $id]);
        if (!$this->result($result)) return false;
        return $result->rowCount();
    }

    public function exist_email($email, $id = 0)
    {
        $result = $this->connection->prepare("SELECT * FROM `users` WHERE `email`=? AND `id`!=? ");
        $result->execute([$email, $id]);
        if (!$this->result($result)) return false;
        return $result->rowCount();
    }

}