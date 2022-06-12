<!DOCTYPE html>
<html>
    <head> <h1> Registration Form </h1>
        <title>

    </title>
</head>
<body>
    <form action="user_data.php" method="post" >
<table>
   

   
    <tr> <td> Name: </td> <td> <input type="text" name="name"> </td></tr>
    <tr><td> Email Address:</td> <td> <input type="email" name="email"> </td> </tr>
    <tr> <td> Date of Birth: </td> <td> <input type="text" name="dob"></td> </tr>
    <tr><td> Gender:</td> <td> <input type="radio" name="gender" value="male"> Male  <input type= "radio" name="gender" value="female"> female </td> </tr> 
    <tr> <td> Country: </td> <td> <input type="text" name="country"> </td></tr>
</table> 
<input type ="submit" value="submit" name="submit">
</form>
</body>
</html>