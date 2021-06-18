<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Natura est un site de réservation de gîtes">
        <meta name="author" content="Tomy SOTTY" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/fonts.css" />
		<link rel="stylesheet" href="css/breakpointAdmin.css" />
        <link rel="icon" href="img/favicon.svg" />
        <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
		<title>Natura : <?php echo $titre; ?></title>
	</head>
    <body>
		<nav>
            <img id="logo" src="img/logo.svg" alt="Logo du site" onclick="document.location.href='index.php'">
            <div id="index" ><a href="index.php">Accueil</a></div>
            <div id="gites" ><a href="gîtes.php">Nos Gîtes</a></div>
            <div id="aPropos" ><a href="à-propos.php">À Propos</a></div>
            <div id="contact" ><a href="contact.php">Contact</a></div>
            <button id="dash_btn"><i class="fas fa-clipboard-list"></i>&ensp; Dashboard Gîtes</button>
            <button id="add_btn"><i class="fas fa-plus"></i>&ensp; Ajouter un Gîte</button>
            <button id="deco_btn"><i class="fas fa-sign-out-alt"></i>&ensp; Déconnexion</button>
        </nav>