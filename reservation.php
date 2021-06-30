<?php 
$titre = 'Réservation';

$lien_actif = '#';

include("controller/crud.php");

include('header.php');
?>
    
    <div class="container_rsv">
        <form method="POST" action="#" >
        <div class="top_rsv">
            <div class="left_rsv">
                <p>Nom Prénom :</p>
                <input type="text" name="name" placeholder="Nom Prénom" required/>
                
                <p>Adresse E-mail :</p>
                <input type="text" name="email" placeholder="test@exemple.fr" required/>
                
                <p>Nom de la formule :</p>
                <input type="text" name="formule" placeholder="Ex : Simplicty Gîte" required/>
            
                <p>Période du séjour :</p>
                <input type="text" name="periode" placeholder="12/12/2021 au 01/01/2022" required/>
            </div>
            <div class="right_rsv">
                <h1>Formulaire de réservation</h1>
                <img id="logo" src="img/logo.svg" alt="Logo du site" onclick="document.location.href='index.php'">
            </div>
        </div>   
            <p>Pour toute Question/Demande :</p>
            <textarea type="textarea" name="ask" placeholder="Si vous souhaitez nous adresser une demande ou une question concernant votre réservation"></textarea>

            <button id="btn_add" name='btn_send' type="submit"><i class="far fa-calendar-check"></i>&ensp; Réserver</button>
        </form>
    </div>

<?php
include('footer.php');
?>