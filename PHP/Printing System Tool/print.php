<!DOCTYPE html>
<html lang="">
<head>

    <title></title>
    <link rel=stylesheet type="text/css" href=print.css>
</head>

<body>
    <div id="prin">
        <form action="add.php" enctype="multipart/form-data" >
 <table cellspacing="1" cellpadding="3" width="70%" align="center">
<tr>
  <td>
	<label for="pname">Project name </label>
	</td>
    	<td width="10"><strong>:</strong></td>
	<td>
        <input type="text"name="pname" maxlength="50" size="30"  placeholder="Enter in Block letters" required></td>
	</tr>
	<tr>
  <td>
	<label for="size">Size </label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <select name="Size">
        <option value="0">Choose</option>
         <option value="A4">A4</option>
         <option value="Micro">Micro</option>
         <option value="Normal">Normal</option>
        </select>
	 </td>
	</tr>
	<tr>
  <td>
	<label for="dob">Required Date</label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
	 <input type="date"name="dob" placeholder="dd/mm/yyyy" size="30">
	 </td>
	</tr>
    <tr>
  <td>
	<label for="copies">No.of copies</label>
	</td>
        	<td width="10"><strong>:</strong></td>
	<td>
       <input type="text" name="copies" maxlength="30" size="30" placeholder="copies" required>
	 </td>
	</tr>
     <tr>
        <td>
                <label for="type" >Type</label>
         </td>
         <td widhth="10"><strong>:</strong></td>
         <td>
         <select name="type">
             <option value="0">Choose</option>
             <option value="color">Color</option>
             <option value="greyScale">Grey Scale</option>
             </select>
             </td>
     </tr>
     <tr>
         <td><label for="file">File</label></td>
         <td width="10"><strong>:</strong></td>
     <td><input type="file" name="file"></td>
     </tr>
     
            </table><br><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
