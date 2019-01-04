<?php

class image_uploading
{
    public function __construct()
    {
        $hostName = "localhost";
        $userName = "root";
        $pass = "";
        $dbName = "user_data";
        $this->conn = mysqli_connect($hostName, $userName, $pass, $dbName);
        if (isset($this->conn)) {
            echo "Database are connected" . "<br>";

        } else {
            echo "not connected";
        }

    }

    public function insert($fileName)
    {
        $query = "INSERT INTO tbl_image(image) VALUES ('$fileName')";
        mysqli_query($this->conn, $query);
        return $msg = "Image Uploaded Successfully";


    }

}

$obj = new image_uploading();

if (isset($_POST['upload'])) {
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $tmpFile = $_FILES['image']['tmp_name'];
    $finalDestination = "image/$fileName";
    move_uploaded_file($tmpFile, $finalDestination);
    $msg = $obj->insert($finalDestination);
}
?>
<html>
<head>

</head>
<body>
<form method="post" name="image" action="" enctype="multipart/form-data">
    <table>
        <h3 style="color: green"><?php
            if (isset($msg)) {
                echo $msg;
                unset($msg);
            }
            ?></h3>
        <tr>
            <td>Select Image:</td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="upload" value="Upload"></td>
        </tr>

    </table>
</form>

</body>
</html>
