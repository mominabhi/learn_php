<?php
include 'student.php';
$obj=new student();

$datas=$obj->read();
?>
<html>
<head>

</head>
<body>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Skill</th>
        <th>Action</th>
    </tr>
    <?php
    foreach ($datas as $data) {
        ?>
        <tr>
            <td><?php echo $data['name'];?></td>
            <td><?php echo $data['email'];?></td>
            <td><?php echo $data['skill'];?></td>
            <td>
                <a href="delete.php?id=<?php echo $data['id']?>">Delete|</a>
                <a href="update.php?id=<?php echo $data['id']?>">Update</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
