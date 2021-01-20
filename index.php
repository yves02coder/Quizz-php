<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="margin-left: 50px;">
    <div class="container mt-5">

        <?php

$bienVu1=$_POST['question1'];
$bienVu2=$_POST['question2'];
$bienVu3=$_POST['question3'];

$question1=$_POST['question1'];
$question2=$_POST['question2'];
$question3=$_POST['question3'];


if($question1=='non'){
    echo'<img src="photo/clind\'oeil.gif"><br>question1  Bravo ';

}elseif($question1=='oui'){
echo"<img src='photo/gif.gif'><br>question1 reflechis encore";
}else{
    echo"<img src='photo/faux.gif'><br>question1 tu as tout faux <br> ";

}

echo'<br>';


if($question2=='php coté serveur et javascript coté navigateur'){
    echo'<img src="photo/clind\'oeil.gif"><br>question2 Bravo';

}elseif($question2=='javascrit coté serveur et php coté navigateur'){
echo"<img src='photo/gif.gif'>.<br>question2 . reflechis encore ";
}else{
    echo"<img src='photo/faux.gif'><br>question2 tu as tout faux  ";
    echo'\n';
}

echo'<br>';


if($question3=='nous sommes 4'){
    echo'<img src="photo/clind\'oeil.gif"><br> question3  Bravo ';

}elseif($question3=='6'){
echo"<img src='photo/gif.gif'><br>question3 reflechis encore ";
}else{
    echo"<img src='photo/faux.gif'><br> question3 tu as tout faux ";
   
}


echo'<br>';   
?>
    </div>
    <a href="home.php " class=" btn btn-outline-info mt-3 ">encore</a>
</body>

</html>