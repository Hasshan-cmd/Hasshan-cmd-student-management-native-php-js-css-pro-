<?php
require_once __DIR__.'/../autoload.php';

class Student{
    public $id;
    public $name;
    public $sname;
    public $age;
    public $nic;
    public $address;
    public $gender;
    public $mobile;
    public $email;

    public static function getAll(){
        $con = new DBConnection();
        $sql = "select * from student";
        $result = $con->query($sql);
        $con->close();

        $students =[];

        while ($row = $result->fetch_object()){
            array_push($students, $row);
        }
        return $students;
    }

    public static function get($id){
        $con = new DBConnection();
        $sql = "select * from student where id=$id";
        $result = $con->query($sql);
        $con->close();
        $ob = $result->fetch_object();
        $student = new Student();
        $student->id = $ob->id;
        $student->name = $ob->name;;
        $student->sname = $ob->sname;;
        $student->age = $ob->age;;
        $student->nic = $ob->nic;;
        $student->address = $ob->address;;
        $student->gender = $ob->gender;;
        $student->mobile = $ob->mobile;;
        $student->email = $ob->email;;
        return $student;
    }

    public static function deleteById($id){
        $con = new DBConnection();
        $sql = "delete from student where id=$id";
        return $con->query($sql);

    }

    /** unique keys */
    public static function getByNic($nic){
        $con = new DBConnection();
        $sql = "select * from student where nic='$nic'";
        $result = $con->query($sql);
        $con->close();
        return $result->fetch_object();
    }

    /** unique keys */
    public static function getByEmail($email){
        $con = new DBConnection();
        $sql = "select * from student where email='$email'";
        $result = $con->query($sql);
        $con->close();
        return $result->fetch_object();
    }

    public function save(){
        $con = new DBConnection();
        $sql = "insert into student values(null, '$this->name', '$this->sname', '$this->age', '$this->nic', '$this->address', '$this->gender', '$this->mobile', '$this->email') ";
        $result = $con->query($sql);
        $this->id = $con->insert_id;
        $con->close();
        return $result;
    }

    public function update(){
        $con = new DBConnection();
        $sql = "update student set name='$this->name', sname='$this->sname', age='$this->age', nic='$this->nic', address='$this->address', gender='$this->gender', mobile='$this->mobile', email='$this->email' where id=$this->id";
        $result = $con->query($sql);
        $con->close();
        return $result;
    }
}