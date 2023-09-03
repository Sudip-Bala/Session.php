<?php
    session_start()
?>
<!DOCTYPE html>
<html>
<head>
<meta charset = "utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>File Upload</title>
</head>
<body>
    <a href="upload.php">Set Value on Session</a>
    <a href="destroy.php">Session Destroy</a>
    <br>
<?php
print_r($_SESSION);
if(isset($_SESSION['name'])){
    echo "Hello " .$_SESSION['name'];
}else{
    echo "Hellow Guest";
}
?>
</body>
</html>
