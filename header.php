<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Natura est un site de réservation de gîtes">
        <meta name="author" content="Tomy SOTTY" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/fonts.css" />
		<link rel="stylesheet" href="css/breakpoint.css" />
        <!-- <link rel="icon" href="img/favicon.png" /> -->
        <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
		<title>Natura : <?php echo $titre; ?></title>
	</head>
    <body>
		<nav>
            <img id="logo" src="img/logo.svg" alt="Logo du site">
            <div id="index" ><a href="index.php"        <?php if ($lien_actif == 'accueil') {echo ' style="color:#C8A45D;"';} ?>    >Accueil</a></div>
            <div id="gites" ><a href="gîtes.php"        <?php if ($lien_actif == 'gite') {echo ' style="color:#C8A45D;"';} ?>    >Nos Gîtes</a></div>
            <div id="aPropos" ><a href="à-propos.php"   <?php if ($lien_actif == 'propos') {echo ' style="color:#C8A45D;"';} ?> >À Propos</a></div>
            <div id="contact" ><a href="contact.php"    <?php if ($lien_actif == 'contact') {echo ' style="color:#C8A45D;"';} ?>  >Contact</a></div>
        </nav>