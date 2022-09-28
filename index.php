<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
 
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
      
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="style.css">
    
</head>


<body>
    <div class="container">
      <h1>Log-in</h1>
      <form name="registration" class="registartion-form" onsubmit="formValidation2(); check()">
        <table>
            
       <tr>
          <td><label for="email2">Email:</label></td>
          <td><input type="text" name="email" id="email2" placeholder="your email"></td>
        </tr>
        
            <tr>
          <td><label for="password">Password:</label></td>
          <td><input type="password" name="password" id="password"></td>
        </tr>
          
           <tr>
          <td colspan="2"><input type="submit" class="submit" value="Log_in" /></td>
        </tr>

        <tr><td colspan="2" class="registerplz" onclick="location.href='./register.php'"> Registration </td></tr>
        </table>
      </form>
    </div>
  
    <script src="./script.js"></script>
  </body>
</html>




