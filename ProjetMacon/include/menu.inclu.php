<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KhemirMultiservices</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">KhemirMultiservices</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
                    
                <?php
                if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
                    echo '
                    <li><a class="nav-link" href="avis.php">Avis</a></li>
                    <li><a class="nav-link" href="accueil.php">Devis</a></li>
                    <li><a class="nav-link" href="#">Gestion des Avis</a></li>
                    <li><a class="nav-link" href="gestion_devis.php">Gestion des Devis</a></li>

                    <ul class="navbar-nav mr-right">
                      <li class="nav-item">
                        <a class="nav-link btn btn-outline-dark" " style="background-color: red; margin-right: 100px;"  href="deconnexion.php">Deconnexion</a>
                      </li>
                    </ul> ';
                    

                  } else {
                    echo 
                    ' <li class="nav-item">
                    <a class="nav-link" href="inscription.php">S\'inscrire</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="connexion.php">Se connecter</a>
                    </li>'; 
                    }
                ?>
                
            
            </div>
        </div>
    </nav>
    <style>
        /* les lien de navbar */
        .navbar-nav .nav-link {
            color: #ecf0f1!important;
        }

        /* multiservices */
        .navbar-brand {
            color: white!important;
        
        }
    </style>
</body>
</html>