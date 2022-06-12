
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

$txt = $name. " " .$email. " " .$dob. " " .$gender. " " .$country ;
$fp = fopen('user_data.csv', 'a');
fwrite($fp,  $txt);
fclose($fp);
?>

<!DOCTYPE html>
<html>
    <head> <h1> Registration Form </h1>
        <title>

    </title>
</head>
<body>
<h2>
    successfully submitted
</h2>
<?php //include('user_data.csv');?>
</body>
</html>
