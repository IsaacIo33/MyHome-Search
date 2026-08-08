<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching...</title>
    <style>
        body {
            font-family:sans-serif;
            cursor:default;
            user-select:none;
        }
    </style>
</head>
<body>

<?php

$q = $_GET["q"];

echo "Please wait...";

echo "<script>window.location.href=`search?q=$q`;</script>";

?>


</body>
</html>

