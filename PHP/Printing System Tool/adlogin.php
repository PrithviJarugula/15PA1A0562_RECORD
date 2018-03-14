<!DOCTYPE html>
<html>
  <head>
      <link rel = "stylesheet" type = "text/css" href = "sign.css" />
  </head>
<body>
  <div class="login-box">
    <img src="log.png"  width="100px" height="100px">
    <h1>Admin Login</h1>
        <form name="log" action="adlog.php" method="post" >
          <label for="user">user name:</label><br>
          <input type="text" name="user name" placeholder="user id">
          <br><br>
            <label for="pass">Password:</label>
          <br>
          <input type="password" name="pass" placeholder="password">
          <br><br>
          <input type="button" name="admin" onclick="window.location.href='home1.php'" value="Home">
          <input type="submit" name="sub" value=" submit">
          
        </form>
          </div>
   
</body>
</html>
