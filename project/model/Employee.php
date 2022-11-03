<?php
require_once __DIR__.'/../autoload.php';

class Employee{
    public $id;
    public $title;
    public $name;
    public $nic;
    public $dob;
    public $gender;
    public $mobile;
    public $land;
    public $address;
    public $email;
    public $designation;
    public $recdate;
    public $status;
    public $photo;

    public static function getAll(){
        $con = new DBConnection();
        $sql = "select * from employee";
        $result = $con->query($sql);
        $con->close();

        $employee =[];

        while ($row = $result->fetch_object()){
            array_push($employee, $row);
        }
        return $employee;
    }

    public static function get($id){
        $con = new DBConnection();
        $sql = "select * from employee where id=$id";
        $result = $con->query($sql);
        $con->close();
        $ob = $result->fetch_object();
        $employee = new employee();
        $employee->id = $ob->id;
        $employee->title = $ob->title;
        $employee->name = $ob->name;
        $employee->nic = $ob->nic;
        $employee->dob = $ob->dob;
        $employee->gender = $ob->gender;
        $employee->mobile = $ob->mobile;
        $employee->land = $ob->land;
        $employee->address = $ob->address;
        $employee->email = $ob->email;
        $employee->designation = $ob->designation;
        $employee->recdate = $ob->recdate;
        $employee->status = $ob->status;
        $employee->photo = $ob->photo;
        return $employee;
    }

    public static function deleteById($id){
        $con = new DBConnection();
        $sql = "delete from employee where id=$id";
        return $con->query($sql);

    }

    /** unique keys */
    public static function getByNic($nic){
        $con = new DBConnection();
        $sql = "select * from employee where nic='$nic'";
        $result = $con->query($sql);
        $con->close();
        return $result->fetch_object();
    }

    /** unique keys */
    public static function getByEmail($email){
        $con = new DBConnection();
        $sql = "select * from employee where email='$email'";
        $result = $con->query($sql);
        $con->close();
        return $result->fetch_object();
    }

    /** unique keys */
    public static function getByMobile($mobile){
        $con = new DBConnection();
        $sql = "select * from employee where mobile='$mobile'";
        $result = $con->query($sql);
        $con->close();
        return $result->fetch_object();
    }

    public function save(){
        $con = new DBConnection();
        $sql = "insert into employee values('$this->id' , '$this->title', '$this->name', '$this->nic', '$this->dob', '$this->gender', '$this->mobile', '$this->land', '$this->address', '$this->email', '$this->designation', '$this->recdate', '$this->status', '$this->photo') ";
        $result = $con->query($sql);
        $con->close();
        return $result;
    }

    public function update(){
        $con = new DBConnection();
        $sql = "update employee set title='$this->title', name='$this->name', nic='$this->nic', dob='$this->dob', gender='$this->gender', mobile='$this->mobile', land='$this->land', address='$this->address', email='$this->email', designation='$this->designation', recdate='$this->recdate', status='$this->status', photo='$this->photo' where id='$this->id'";
        $result = $con->query($sql);
        $con->close();
        return $result;
    }
}