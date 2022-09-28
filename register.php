<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h1>Registration</h1>
    <form name="registration" class="registartion-form" onsubmit="return formValidation()">
      <table>
          
        <tr>
          <td><label for="name">Name:</label></td>
          <td><input type="text" name="name" id="name" placeholder="your name"></td>
          <td><p id="one_p" style="color:red; font-size: 15px;"></p></td>
        </tr>
          
        <tr>
          <td><label for="email2">Email:</label></td>
          <td><input type="text" name="email" id="email2" placeholder="your email"></td>
        </tr>
          
        <tr>
          <td><label for="password">Password:</label></td>
          <td><input type="password" name="password" id="password"></td>
        </tr>
          
        <tr>
          <td><label for="phoneNumber">Phone Number:</label></td>
          <td><input type="number" name="phoneNumber" id="phoneNumber"></td>
        </tr>
          
        <tr>
          <td><label for="gender">Gender:</label></td>
          <td>
            Male: <input type="radio" id="r1" name="gender" value="male">
            Female: <input type="radio" id="r2" name="gender" value="female">
            Other: <input type="radio" id="r3" name="gender" value="other">
          </td>
        </tr>
        
       
        <tr>
          <td><label for="date">DOB_Date:</label></td>
          <td><input type="date" id="date" ></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" id="Rbutton" class="submit" value="Register" onclick="getval()" /></td>
        </tr>
          <tr><td colspan="2" class="registerplz" onclick="location.href='./index.php'"> Log in </td></tr>
      </table>
    </form>
  </div>

  <script src="./script.js"></script>
</body>

</html>