<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">ACCUEIL</a>
                    <a class="nav-link" href="#">CHOIX</a>
                    <a class="nav-link" href="#">VISITE</a>
                </div>
            </div>
        </div>
    </nav>
</header>

<body style="margin-left: 50px;">
    <?php
$questionnaire=[
    "Post et Get niveau securité de donnée sont identiques",
    "quelle est la difference entre javascript et php?",
    "Ma famille est composée de:1 grd père,2 père,2 fils et 1 petit fils.Combien sommes-nous? "
]



?>

    <form action="index.php" method="post">
        <div class="container-fluid">
            <input type="hidden" value="non" name="bienVu1">
            <div class="row mt-5">

                <h2>Questionnaire 1</h2>
                <p>Post et Get niveau securité de donnée sont identiques</p>
                <div class="container-fluid">
                    <div class="form-check">
                        <div class="form-check" name="question1">
                            <input class="form-check-input" type="radio" name="question1" value="oui" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                OUI
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question1" value="non">
                            <label class="form-check-label" for="exampleRadios2">
                                NON
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="question1" value="je sais pas">
                            <label class="form-check-label" for="exampleRadios3">
                                Je Sais Pas
                            </label></br>


                        </div>

                    </div>
                </div>
            </div>

            <?php
           // echo $questionnaire[0];

            ?>

            <div class="row mt-5">

                <h2>Questionnaire 2</h2>
                <p>quelle est la difference entre javascript et php?</p>
                <div class="container-fluid">

                    <input type="hidden" value="php coté serveur et javascript coté navigateur" name="bienVu2">

                    <div class="form-check" name="question2">
                        <input class="form-check-input" type="radio" name="question2" value="identique" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Identique
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2"
                            value="javascrit coté serveur et php coté navigateur">
                        <label class="form-check-label" for="exampleRadios2">
                            javascrit coté serveur et php coté navigateur
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2"
                            value="php coté serveur et javascript coté navigateur">
                        <label class="form-check-label" for="exampleRadios3">
                            php coté serveur et javascript coté navigateur
                        </label>

                    </div>


                </div>
            </div>

            <?php
      //  echo $questionnaire[1];
                    ?>
            <div class="row mt-5">

                <h2>Questionnaire 3</h2>

                <p>Ma famille est composée de:<br>1 grd père,<br>2 pères,<br>2 fils <br>1 petit fils.<br>Combien
                    sommes-nous?
                </p>
                <div class="form-check">
                    <input type="hidden" value="nous sommes 4" name="bienVu3">
                    <input class="form-check-input" type="radio" name="question3" value="nous sommes 6">
                    <label class="form-check-label" for="exampleRadios3">
                        Nous sommes 6
                    </label>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="nous sommes 4">
                    <label class="form-check-label" for="exampleRadios3">
                        Nous sommes 4
                    </label>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question3" value="nous sommes 3">
                    <label class="form-check-label" for="exampleRadios3">
                        Nous sommes 3
                    </label>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-danger mt-5">soumettre</button>

    </form>


    </div>

</body>

</html>