<!DOCTYPE html>
<html>
<head>
<title>Consulta</title>
 <META http-equiv="refresh" content="5;URL=http://scweb.ca/~w0668948/web210/index.html"> 
</head>
<body>

<p><h2>Thank for you comment</h2></p>

<?php
$name = $_POST['firstname'] . ' ' . $_POST ['lastname'];
$email = $_POST['email'];
$consulta = $_POST['other'];

$to = 'rodriguezarrocha@gmail.com';
$subject = 'website comment';
$msg = "$consulta";
        ;
       
mail($to, $subject, $msg, 'From:' . $email);

echo 'Your comment: <br />';
echo "<p>";
echo  "$consulta";
echo "</p>";
echo 'Thank you !. I appreciate you taking the time to write me ' . $email. '<br />';

?>

</body>
</html>