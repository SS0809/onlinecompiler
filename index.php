<?php
echo exec('cd c:\xampp\htdocs\onlinecompiler'); 
passthru('more abc.txt');
?>
<html>
    <head>
       <title>Online Compiler</title> 
       <link rel="stylesheet" href="style.css">
       <script src="script.js"></script>
    </head>
    <body>
        <h1>Online Compiler</h1>
        <label>code</label>
        <input type ="text">  
        <input type ="file">  
    </body>
</html>
