<?php
class Email extends Database{
    public function list()
    {
        return $this->table_list("emails");
    }

    public function add($email)
    {
        $now = now();
        $result = $this->connection->prepare("INSERT INTO `emails` (`email`,`created_at`) 
        VALUES (?,?)");
        $result->execute([$email, $now]);
        if (!$this->result($result)) return false;
        return $this->connection->lastInsertId();
    }

    public function edit($id, $email)
    {
        $now = now();
        $result = $this->connection->prepare("UPDATE `emails` SET `email`=?,`updated_at`=? WHERE id=? ");
        $result->execute([$email, $now, $id]);
        if (!$this->result($result)) return false;
        return $id;

    }

    public function get($id)
    {
        return $this->get_data("emails", $id);
    }
}