<?php
include "student.php";
$obj = new student();
$id = $_GET['id'];
$result = $obj->update_read($id);
$data = mysqli_fetch_assoc($result);

if (isset($_POST['btn'])) {
    $obj->update($_POST);
}
?>
<html>
<head>

</head>
<body>
<h3 style="color: aqua">let's input data</h3>
<form method="post" action="">


    <table>
        <tr>
            <td>Name:</td>

            <td>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" name="name" value="<?php echo $data['name'] ?>">
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>
        </tr>
        <tr>
            <td>Skill:</td>
            <td><input type="text" name="skill" value="<?php echo $data['skill'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Submit"></td>
        </tr>

    </table>
</form>
</body>
</html>
