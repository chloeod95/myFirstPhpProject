
<?php
$cust_name = htmlentities($_POST['cust_name']);
$cust_email = htmlentities($_POST['cust_email']);
$cust_address = htmlentities($_POST['cust_address']);
$cust_phone = htmlentities($_POST['cust_phone']);
?>

<HTML>
<HEAD>
<TITLE> multi-page Form- page Final </TITLE>
</HEAD>
<BODY>
<p>You filled in</p>

Name: <?php echo $cust_name;?><br/>
Email: <?php echo $cust_email;?><br/>
Address: <?php echo $cust_address;?><br/>
Phone: <?php echo $cust_phone;?><br/>

</BODY>
</HTML>
