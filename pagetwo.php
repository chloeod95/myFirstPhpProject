<?php
$cust_name = htmlentities($_POST['cust_name']);
$cust_email = htmlentities($_POST['cust_email']);
?>

<HTML>
<HEAD>
<TITLE> multi-page Form- page Two </TITLE>
</HEAD>
<BODY>
<p> Please fill in the following information </p>
<FORM METHOD="POST"ACTION = "final.php">

Address: <INPUT TYPE = "text" SIZE="50"name="cust_address"><br/>
Phone: <INPUT TYPE = "text" SIZE="20"name="cust_phone"><br/>
<INPUT TYPE="hidden"name name = "cust_name"
VALUE =" <?php echo $cust_name;?>">
<INPUT TYPE ="Hidden" name="cust_email"
VALUE = "<?php echo $cust_email;>">
<INPUT TYPE="submit" name="submit2"value="Proceed">

</FORM>
</BODY>
</HEAD>
</HTML>


