

<?php
if($_POST["message"]) {
    mail("slmahisekar@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>


<!doctype=HTML>

<html>

<body>

<form method="post" action="contact.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>

</body>

</html>
