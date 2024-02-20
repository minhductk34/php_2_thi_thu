<?php

namespace App\Models;

class Teacher extends BaseModel implements ModelInterface
{

    public function getAll()
    {
        $sql = "select * from teacher";
        return $this->loadAllRows([], $sql);
    }

    public function getById($id)
    {
        $sql = "select * FROM `teacher` WHERE id = ?";
        return $this->loadRow([$id], $sql);
    }

    public function create(array $data)
    {
        $name = $data["name"];
        $email = $data["email"];
        $salary = $data["salary"];
        $school = $data["school"];
        $sql = "INSERT INTO `teacher`( `name`, `email`, `salary`, `school`) 
        VALUES (?,?,?,?)";
        $options = [$name, $email, $salary, $school];
        // $this->setQuery($sql);
        $this->execute($options, $sql);
    }

    public function update($id, array $data)
    {
        $name = $data["name"];
        $email = $data["email"];
        $salary = $data["salary"];
        $school = $data["school"];
        $sql = "UPDATE `teacher` SET `name`=?,`email`=?,
        `salary`=?,`school`=?
        WHERE id =?";
        $this->setQuery($sql);
        $options = [$name, $email, $salary, $school, $id];
        $this->execute($options, $sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `teacher` WHERE id = ?";
        $potions = [$id];
        $this->execute($potions, $sql);
    }
}
