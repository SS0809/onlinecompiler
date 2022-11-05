<html>
    <head>
       <title>Online Compiler</title> 
       <link rel="stylesheet" href="style.css">
       <script src="script.js"></script>
    </head>
    <body>
        <h1>Online Compiler</h1>
        <form action="index.php" method="post">
        <label>code</label>
        <input type ="file" name="status">  
        <input type="submit">
        </form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
 if (isset($_POST['status'])) {
        $status = $_POST['status'];
        echo $status;
$myfile = fopen("abc.txt", "w")
 or die("Unable to open file!");
fwrite($myfile, $status);
fclose($myfile);
/*echo exec('cd c:\xampp\htdocs\onlinecompiler'); 
passthru('more abc.txt');*/
    }
}
?>
    </body>
</html>
