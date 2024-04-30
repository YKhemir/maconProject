<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KhemirMultiservices</title>
</head>
<body>
    <?php
        include_once("session.php");
        include_once("include/menu.inclu.php");
        include_once("connexion_bd.php");
        include_once("classes/Devis.class.php");
        include_once("classes/DevisManager.class.php");
    ?>
    <h1 style="text-align: center;">Gestion des Devis</h1>
    <?php
        $devisObject = new DevisManager($db);
        $idUser = $_SESSION['user_id'];
        $devis = $devisObject->getDevis();
       
        if (!empty($devis)) {
            echo '<table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">ID utilisateur</th>
                            <th scope="col">Date devis</th>
                            <th scope="col">Service</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>';
        
            foreach ($devis as $devisInfo) {
                echo "<tr>
                        <td>" . $devisInfo['nom'] . "</td>
                        <td>" . $devisInfo['prenom'] . "</td>
                        <td>" . $devisInfo['idUser'] . "</td>
                        <td>" . $devisInfo['dateDevis'] . "</td>
                        <td>" . $devisInfo['service'] . "</td>
                        <td>" . $devisInfo['message'] . "</td>
                      </tr>";
            }
        
            echo '</tbody>
                </table>';
        } else {
            echo "Aucun devis trouvé.";
        }
    ?>

  
</body>
</html>