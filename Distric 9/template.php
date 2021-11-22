<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>District 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="CSS/main.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand navbar-dark fixed-top bg-dark mb-2">
        <div class="container-fluid">

            <a class="navbar-brand" href="home">LOGO</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="btn btn btn-dark" href="">Réserver</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn btn-dark" href="">APropos</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn btn-dark" href="">FAQ</a>
                </li>
                <li class="nav-item">
                    <center>
                    <a href="connexion">
                        <img height="25" width="35" src="images/compte.png" alt="connexion" title="connexion"/>
                    </a>
                        </center>
                </li>

            </ul>
        </div>

    </nav>



    <?= $content; ?>



    <footer>
        <div class="container-fluid">
            <div class="row" style="margin-top:60px;">
                <div class="col">
                    <center>
                        <p>Tél 01.56.93.00.45</p>
                        <p>contact@district9.com</p>
                        <p>Ouvert du Mardi au Dimanche</p>
                        <p>De 14h à Minuit</p>
                    </center>
                </div>
                <div class="col">
                    <center>
                        <p> 1 Rue Anantole France</p>
                        <p>92000 Nanterre</p>
                        <button onclick="window.location.href = 'https://goo.gl/maps/rHgpZSSMmkQZa1oc7';" class="btn btn-outline-dark">Afficher dans Google Map</button>
                    </center>
                </div>
                <div class="col">
                    <center>
                        <img width="20%" height="40%" src="images/logoInsta.png" onclick="window.location.href = 'LienInsta';" />
                        <img width="20%" height="40%" src="images/logoFB.png" onclick="window.location.href = 'lienFB';" />
                    </center>
                </div>
                <div class="col">
                    <center>
                        <img width="50%" height="100%" src="images/pb.png" />
                    </center>
                </div>
            </div>


            <div class="col">
                <center>
                    <a class="btn" href="">APropos</a>
                    <a class="btn" href="">Réserver</a>
                    <a class="btn" href="">FAQ</a>
                    <a class="btn" href="connexion">Compte</a>
                </center>
            </div>

        </div>






        <div>
            <center>
                <p>&copy; 2020-2021 &middot; <a href="#">Conception par</a> <a href="#">AMEL BENT </a> &middot;</p>
            </center>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    </footer>





</body>

</html>