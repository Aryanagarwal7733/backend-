
<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Form Validation</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1> form </h1>
    <form aciton ="index.php" name="myForm" onsubmit="return validateForm()" method="post">
        <div class="formdesign" id="name">
            users: <input type="text" name="users" required><b><span class="formerror"> </span></b>
        </div>

        <div class="formdesign" id="url">
            addresses: <input type="url" name="addresses" required><b><span class="formerror"> </span></b>
        </div>
      

        <button type="submit" value="Register" class="btn" name="Register">Register</button>
        
        
    </form>
<script src="index.js"></script>

</body>
</html>

<?php
 if($_POST['Register'])
 { 
    $users=$_POST['users'];
    $addresses=$_POST['addresses'];
    $query = "INSERT INTO BACKEND VALUES('$users', '$addresses')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo "Data inserted into Database";
    }
    else
    {
        echo "Failed";
    }
 }

?>

    