<html>
<head>

</head>
<body>

<form  action="" method="post">
    Username:<input type="text" name="user_name">
    <input type="submit" value="Submit">

</form>
    <?php
    session_start();

    $_SESSION['name']="Hello suruj";
    echo "session_name".$_SESSION['name']."<br>";
    session_unset();
    session_destroy();
    if($_POST)
    {

      if(empty($name))
      {
          echo "nothing can be show";
      }
      else
      {
          $name=$_POST['user_name'];
          echo $name;
      }

    }
    ?>
<br>
<hr>
    <a href="insulin.php?name=abhi&text=hello">Get_check</a>

<br>
<hr>
<section class="image_upload">
    <?php
        if(isset($_FILES['image']))
        {
            $file_name=$_FILES['image']['name'];
            $temp_name=$_FILES['image']['tmp_name'];
            move_uploaded_file($temp_name,"image/".$file_name);
            echo "image uploaded successfully";
        }
    ?>

    <form method="post" action="" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" name="submit">
    </form>

</section>
</body>
</html>