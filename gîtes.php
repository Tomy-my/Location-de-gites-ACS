<?php
$titre = 'Gîtes';

$lien_actif = 'gite';

include('header.php');

?>
    <div class="container_gite">
        <h1>Simplicity Gîte <br />''</h1>
        <div class="desc_gite">
            <div class="img_gite">
                <img src="img/gite/basic.jpg" alt="#" />
            </div>
            <div class="more_img">
                    <img src="img/gite/basic.jpg" alt="#" />
                    <img src="img/gite/basic.jpg" alt="#" />
                    <img src="img/gite/basic.jpg" alt="#" />
            </div>
            <button id="back_zoom"><i class="fas fa-arrow-left"></i>&ensp; Retour en arrière</button>
            <div class="desc_text_gite">
                <h3 id="desc_titre">Description du Gîte :</h3>
                <p id="desc_p">
                    La formule Simplicity Gîte est une formule pour les personnes
                    recherchant la simplicité à l'état pure. Nature et silence, si vous
                    souhaitez le repos, vous y trouverez votre bonheure !
                </p>
                <br />
                <hr id="sp">
                <h3 id="couchage_titre">Couchage(s) :</h3>
                <div id="couchage">
                    <img id="svg_icon" src="img/svg_icon/lit.svg" alt="Logo couchage" />
                    <p>1 lit double</p>
                </div>
                <div class="equipements">
                    <hr id="sp">
                    <h3 id="equipement_titre">Équipement(s) :</h3>
                    <div id="wifi">
                        <img id="svg_icon" src="img/svg_icon/wifi.svg" alt="Logo wifi" />
                        <p>Free Wifi</p>
                    </div>
                    <div id="tv">
                        <img id="svg_icon" src="img/svg_icon/tv.svg" alt="Logo tv" />
                        <p>Télévision (1)</p>
                    </div>
                    <div id="cuisine">
                        <img id="svg_icon" src="img/svg_icon/cuisine.svg" alt="Logo cuisine" />
                        <p>Cuisine (1)</p>
                    </div>
                    <div id="linge">
                        <img id="svg_icon" src="img/svg_icon/lave-linge.svg" alt="Logo linge" />
                        <p>Lave-linge (1)</p>
                    </div>
                    <div id="animaux">
                        <img id="svg_icon" src="img/svg_icon/animaux.svg" alt="Logo animaux" />
                        <p>Animaux Autorisé</p>
                    </div>
                </div>
                <hr id="sp">
                <button id="rsv_offre"><i class="far fa-calendar-alt"></i>&ensp; Je veux réserver</button>
            </div>
        </div>
    </div>
<?php
include('footer.php');
?>
