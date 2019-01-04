<?php
require "student.php";
$obj=new student();

if($_POST)
{
    $msg=$obj->create($_POST);
}
else
{
    echo "there is no data here";
}
?>
<html>
<head>

</head>
<body>
<h3 style="color: aqua">let's input data</h3>
<form method="post" action="">

    <h3 style="color: green">
        <?php
        if(isset($msg))
        {
            echo $msg;
            unset($msg);
        }

        ?>
    </h3>
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Skill:</td>
            <td><input type="text" name="skill"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>

    </table>
</form>
</body>
</html>
