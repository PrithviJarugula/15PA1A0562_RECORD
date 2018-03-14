<!DOCTYPE html>
<html>
  <head>
      <link rel = "stylesheet" type = "text/css" href = "signup.css" />
  </head>
<body>
    <div class="header">
    </div>
    <div class="content">
  <div class="login-box">
    <img src="log.png"  width="100px" height="100px">
    <h1>Sign up </h1>
        <form action="add.php" method="post">
         <label for="fname"> First name: </label> <br><br>
            <input type="text" name="fname" placeholder="first name"><br><br>Last name:<br>
          
          <input type="text" name="lname" placeholder="last name">
          <br><br>
          Email id:<br>
          <input type="text" size="35" name="email" placeholder="Email">
          <br><br>
          Password: &emsp; &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br>
          <input type="password" name="pass" placeholder="password">&emsp;
          <br><br>
          Phone:<br>
          <input type="text" name="phone" placeholder="phone">
          <br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <input type="submit" name="sub" value=" sign up">
          
        </form>
  </div>
    </div>
</body>
</html>