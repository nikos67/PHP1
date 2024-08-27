<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="thanks">
        <p>Merci <?php echo  $_POST['user_fname']; ?> <?php echo  $_POST['user_lname']; ?> de nous avoir contacté<?php echo  $_POST['user_subject']; ?>. <br>

            Un de nos conseiller vous contactera soit à l’adresse <?php echo  $_POST['user_email']; ?><br> par téléphone au <?php echo  $_POST['user_phone']; ?> dans les plus brefs délais pour traiter votre demande :<br>

            <?php echo  $_POST['user_message']; ?></p>

    </div>
</body>

</html>