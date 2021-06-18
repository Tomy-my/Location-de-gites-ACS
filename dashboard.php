<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: index.php');
    exit();
}
else
{
    $titre = 'Dashboard';
    
    include('headerAdmin.php');
?>  
<div class="container_dash">
        <h1>Simplicity Gîte <br />''</h1>
        <div class="desc_dash">
            <div class="img_dash">
                <img src="img/gite/basic.jpg" alt="#" />
            </div>
            <div class="desc_text_dash">
                <h3 id="desc_titre_dash">Description du Gîte :</h3>
                <p id="desc_p_dash">
                    La formule Simplicity Gîte est une formule pour les personnes
                    recherchant la simplicité à l'état pure. Nature et silence, si vous
                    souhaitez le repos, vous y trouverez votre bonheure !
                </p>
                <br />
                <hr id="sp_dash">
                <h3 id="couchage_titre_dash">Couchage(s) :</h3>
                <div id="couchage_dash">
                    <img id="svg_icon_dash" src="img/svg_icon/lit.svg" alt="Logo couchage" />
                    <p>1 lit double</p>
                </div>
                <div class="equipements_dash">
                    <hr id="sp_dash">
                    <h3 id="equipement_titre_dash">Équipement(s) :</h3>
                    <div id="wifi_dash">
                        <img id="svg_icon_dash" src="img/svg_icon/wifi.svg" alt="Logo wifi" />
                        <p>Free Wifi</p>
                    </div>
                    <div id="tv_dash">
                        <img id="svg_icon_dash" src="img/svg_icon/tv.svg" alt="Logo tv" />
                        <p>Télévision (1)</p>
                    </div>
                    <div id="cuisine_dash">
                        <img id="svg_icon_dash" src="img/svg_icon/cuisine.svg" alt="Logo cuisine" />
                        <p>Cuisine (1)</p>
                    </div>
                    <div id="linge_dash">
                        <img id="svg_icon" src="img/svg_icon/lave-linge.svg" alt="Logo linge" />
                        <p>Lave-linge (1)</p>
                    </div>
                    <div id="animaux_dash">
                        <img id="svg_icon_dash" src="img/svg_icon/animaux.svg" alt="Logo animaux" />
                        <p>Animaux Autorisé</p>
                    </div>
                </div>
                <hr id="sp_dash">
                <div class="two_btn">
                    <button id="edit"><i class="far fa-edit"></i>&ensp; Modifier</button>
                    <button id="delete"><i class="far fa-trash-alt"></i>&ensp; Supprimer</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
?> 