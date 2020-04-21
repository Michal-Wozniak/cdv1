<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form.css">
</head>

<body>
    <form method="post">
        Podaj slowo:
        <input type="text" name="name" placeholder="slowo" autofocus autocomplete="off" id="name"><br>
        
        <input type="submit" value="wyślij">
    </form>

    <?php
    $censure = array("czarny","biały");
    $replace = "_#***#_";
        if (!empty($_POST['name'])){
            
        
   


$validslowo = str_ireplace($censure, $replace, $_POST['name']);

echo <<<E
Dane prze poprawą: $_POST[name]<br>
Dane po poprawie: $validslowo<br>
E;
        }
?>
    
</body>
</html>