<?php
/**
 * Dynamic Web Page Starter - HTML5, CSS3 & PHP
 * Author: Rami Izzeddin
 */

$page_title = "Web Development Portfolio";
$developer = "Rami Izzeddin";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 40px;
            text-align: center;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
        }
        h1 { color: #2c3e50; }
        p { color: #555; }
        .badge {
            display: inline-block;
            background: #777BB4;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $page_title; ?></h1>
        <p>Developed by <strong><?php echo $developer; ?></strong></p>
        <div class="badge">Server Status: Online (PHP <?php echo phpversion(); ?>)</div>
    </div>
</body>
</html>
