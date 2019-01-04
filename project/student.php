<?php
/**
 * Created by PhpStorm.
 * User: momin
 * Date: 7/30/2018
 * Time: 9:12 PM
 */

class student
{
    public function __construct()
    {
        $hostName='localhost';
        $userName='root';
        $password="";
        $dbName="user_data";
        $this->conn=mysqli_connect($hostName,$userName,$password,$dbName);

        if($this->conn)
        {
            echo "database connected"."<br>";
        }
        else
        {
            echo "database not connected";
        }
    }
    public function create($data)
    {
        $query="INSERT INTO tbl_user(name,email,skill) VALUES('$data[name]','$data[email]','$data[skill]')";
        mysqli_query($this->conn,$query);
        $massage="Data inserted successfully!!";
        return $massage;
    }
    public function read()
    {
        $query="SELECT * FROM tbl_user";
        $data=mysqli_query($this->conn,$query);
        return $data;

    }
    public function delete($userId)
    {
        $query="DELETE FROM tbl_user WHERE id='$userId'";
        mysqli_query($this->conn,$query);
        header("location:read.php");
    }
    public function update_read($userId)
    {
        $query="SELECT * FROM tbl_user WHERE id='$userId'";
        $data=mysqli_query($this->conn,$query);
        return $data;

    }
    public function update($data)
    {
        $query="UPDATE tbl_user SET name='$data[name]',email='$data[email]',skill='$data[skill]' WHERE id='$data[id]'";
        mysqli_query($this->conn,$query);
        header("location:read.php");
    }

}