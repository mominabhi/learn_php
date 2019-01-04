<?php

class image_show
{
    public function __construct()
    {
        $hostName = "localhost";
        $userName = "root";
        $pass = "";
        $dbName = "user_data";
        $this->conn = mysqli_connect($hostName, $userName, $pass, $dbName);

    }
    public function show()
    {
        $query="SELECT * FROM tbl_image ORDER By id DESC limit 1";
        $result=mysqli_query($this->conn,$query);
        return $result;
    }
}
$obj=new image_show();
$result=$obj->show();
foreach ($result as $image)
{
    ?>
    <img src="<?php echo $image['image']?>" style="height: 200px;width: 200px">
<?php
}
?>