<?php

class Permission extends Database
{
    public function add($email_id, $section_id)
    {
        $result = $this->connection->prepare("INSERT INTO `permissions` (`email_id`,`section_id`) 
        VALUES (?,?)");
        $result->execute([$email_id, $section_id]);
        if (!$this->result($result)) return false;
        return $this->connection->lastInsertId();
    }

    public function remove_all($email_id)
    {
        $result = $this->connection->prepare("DELETE FROM `permissions` WHERE email_id=?");
        $result->execute([$email_id]);
        if (!$this->result($result)) return false;
        return true;
    }

    public function has_permission($email_id, $section_id)
    {
        $result = $this->connection->prepare("SELECT * FROM `permissions` WHERE `email_id`=? AND `section_id`=?");
        $result->execute([$email_id, $section_id]);
        if (!$this->result($result)) return false;
        return $result->rowCount();
    }
}