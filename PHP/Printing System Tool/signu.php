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
       
        <form name="reg" action="add.php" method="post" >
 <table cellspacing="1" cellpadding="3" width="70%" align="center">
<tr>
  <td>
	<label for="fname">First name </label>
	</td>
    	<td width="10"><strong>:</strong></td>
	<td>
        <input type="text"name="fname" maxlength="50" size="30"  placeholder="Enter in Block letters" required></td>
	</tr>
	<tr>
  <td>
	<label for="lname">Last name </label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="text"name="lname" maxlength="50" size="30" placeholder="Use Block letters" required>
	 </td>
	</tr>
	<tr>
  <td>
	<label for="dob">Date of birth</label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="date"name="dob" placeholder="dd/mm/yyyy">
	 </td>
	</tr>
    <tr>
  <td>
	<label for="email">email</label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
       <input type="text" name="email" maxlength="30" width="30" placeholder="email" required>
	 </td>
	</tr>
     <tr>
        <td>
                <label for="pass" >Password</label>
         </td>
         <td widhth="10"><strong>:</strong></td>
         <td>
         <input type="password" name="pass" placeholder="Enter password">
             </td>
     </tr>
    
	 <tr>
  <td>
	<label for="mob">Mobile</label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="text"name="mob" maxlength="10" size="20">
	 </td>
	</tr>
	 <tr>
     <td width="10">
         <input type="submit" value="submit">
         </td>
     </tr>
            </table>
      </form>
  </div>
    </div>
</body>
</html>