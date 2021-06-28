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
        <link rel="icon" href="img/favicon.svg" />
        <script src="https://kit.fontawesome.com/508ebce8fc.js"></script>
		<title>Natura : <?php echo $titre; ?></title>
	</head>
    <body>
		<nav>
            <img id="logo" src="img/logo.svg" alt="Logo du site" onclick="document.location.href='index.php'">
            <div id="index" ><a href="index.php"        <?php if ($lien_actif == 'accueil') {echo ' style="color:#C8A45D;"';} ?>    >Accueil</a></div>
            <div id="gites" ><a href="gîtes.php"        <?php if ($lien_actif == 'gite') {echo ' style="color:#C8A45D;"';} ?>    >Nos Gîtes</a></div>
            <div id="aPropos" ><a href="à-propos.php"   <?php if ($lien_actif == 'propos') {echo ' style="color:#C8A45D;"';} ?> >À Propos</a></div>
            <div id="contact" ><a href="contact.php"    <?php if ($lien_actif == 'contact') {echo ' style="color:#C8A45D;"';} ?>  >Contact</a></div>
            <button id="rsv"><i class="far fa-calendar-alt"></i>&ensp; Réservation</button>
            <form class="form_search" method="post">
                <img id="logo1" src="img/logo.svg" alt="Logo du site">
                <h3>Je souhaiterais séjourner dans</h3>
                <select id="select_chambre">
                    <option value="">1 chambre</option>
                    <option value="">2 chambres</option>
                    <option value="">3 chambres</option>
                    <option value="">4 chambres</option>
                </select>
                <hr id="select_hr">
                <div id="du"><p>Du <span><i class="far fa-calendar-alt"></i> &ensp;Arrivée</span></p></div>
                <hr>
                <div id="au"><p>Au <span><i class="far fa-calendar-alt"></i> &ensp;Départ</span></p></div>
                <hr>
                <button id="search">Vérifier</button>
            </form>
            <?php include_once "controller/login.php"; ?>
            <form class="form_connexion" method="post">
                <img id="logo1" src="img/logo.svg" alt="Logo du site">
                <h3>Espace administrateur</h3>
                <input type="text" name="username" placeholder="Email">
                <hr id="input_hr">
                <input type="password" name="password" placeholder="Mot de passe">
                <hr id="input_hr">
                <button id="connexion" type="submit" name="submit">Connexion</button>
            </form>
            <?php if(isset($erreur)){echo $erreur;}?>
            <div class="burger_menu">
                <hr id="burger_slide1">
                <hr id="burger_slide2">
                <hr id="burger_slide3">
            </div>
            <div class="burger_cl">
                <div id="index_burger" ><a href="index.php"        <?php if ($lien_actif == 'accueil') {echo ' style="color:#C8A45D;"';} ?>    >Accueil</a></div>
                <div id="gites_burger" ><a href="gîtes.php"        <?php if ($lien_actif == 'gite') {echo ' style="color:#C8A45D;"';} ?>    >Nos Gîtes</a></div>
                <div id="aPropos_burger" ><a href="à-propos.php"   <?php if ($lien_actif == 'propos') {echo ' style="color:#C8A45D;"';} ?> >À Propos</a></div>
                <div id="contact_burger" ><a href="contact.php"    <?php if ($lien_actif == 'contact') {echo ' style="color:#C8A45D;"';} ?>  >Contact</a></div>
            </div>
            <button id="exit"><i class="fas fa-times"></i></button>        
            <button id="exit_burger"><i class="fas fa-times"></i></button>        
        </nav>