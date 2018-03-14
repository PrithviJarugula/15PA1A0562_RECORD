<!DOCTYPE html>
<html>
  <head>
      <link rel = "stylesheet" type = "text/css" href = "sign.css" />
  </head>
<body>
  <div class="login-box">
    <img src="log.png"  width="100px" height="100px">
    <h1>login </h1>
        <form name="log" action="logg.php" method="post" >
          <label for="user">user name:</label><br>
          <input type="text" name="user" placeholder="user id">
          <br><br>
            <label for="pass">Password:</label>
          <br>
          <input type="password" name="pass" placeholder="password">
          <br><br>
          <input type="button" name="admin" onclick="window.location.href='adlogin.php'" value="Admin Login">
          <input type="submit" name="sub" value=" submit">
          
        </form>
          </div>
   
</body>
</html>
