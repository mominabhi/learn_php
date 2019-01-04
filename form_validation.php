<?php
?>

<html>
<head>

</head>
<body>
<?php
$name = $email = $gender = $comment = $website = $erremail= $invalidemail="";
if($_POST)
{
    $name=validate($_POST['name']);
    if(empty($_POST['email']))
    {
        $erremail="<span style='color: darkred'>This field is required</span>";

    }
    elseif (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
    {
        $invalidemail="<span style='color: darkred'>Invalid email</span>";


    }
    else
    {
        $email=validate($_POST['email']);

    }
    $website=validate($_POST['website']);
    $comment=validate($_POST['comment']);
    $gender=validate($_POST['gender']);


}
function validate($data)
{
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;

}
?>
<form method="post" action="">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>

        </tr>
        <tr>
            <td>Website</td>
            <td><input type="text" name="website"></td>
        </tr>
        <tr>
            <td>Comments</td>
            <td><textarea name="comment" rows="5" cols="40"></textarea></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender" value="female">Female</td>
            <td><input type="radio" name="gender" value="male">Male</td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;   echo $erremail; echo $invalidemail;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>
