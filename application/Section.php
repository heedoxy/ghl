<?php
class Section extends Database{
    public function list()
    {
        return $this->table_list("sections");
    }

    public function add($title, $code)
    {
        $now = now();
        $result = $this->connection->prepare("INSERT INTO `sections` (`title`,`code`,`created_at`) 
        VALUES (?,?,?)");
        $result->execute([$title, $code, $now]);
        if (!$this->result($result)) return false;
        return $this->connection->lastInsertId();
    }

    public function edit($id, $title, $code)
    {
        $now = now();
        $result = $this->connection->prepare("UPDATE `sections` SET `title`=?,`code`=?,`updated_at`=? WHERE id=? ");
        $result->execute([$title, $code, $now, $id]);
        if (!$this->result($result)) return false;
        return $id;

    }

    public function get($id)
    {
        return $this->get_data("sections", $id);
    }
}