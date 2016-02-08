<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Ayze</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="/ProjetDeployezUnSiteEnLigne/sources/CSS/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <header class="row">
            <?php include '/ProjetDeployezUnSiteEnLigne/sources/includes/header.php'; ?>
        </header>



        <footer>
            <?php include '/ProjetDeployezUnSiteEnLigne/sources/includes/footer.php'; ?>
        </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#lienAdministration').click(function () {
                $('#espaceConnexionMembre').toggle();
            });
                $('#espaceConnexionMembre').hide();
        });
    </script>
</body>

</html>