<?php
$titre = 'Gîtes';

$lien_actif = 'gite';

include('header.php');

function affichagePersonnes($res) 
{
    foreach($res as $key => $data)
    {
?>
    <div class="container_gite">
        <h1><?php echo $data['titre'] ?> <br />''</h1>
        <div class="desc_gite">
            <div class="img_gite">
                <img src="upload/<?php echo $data['image_file'] ?>" alt="#" />
            </div>
            <div class="more_img">
                    <img src="upload/<?php echo $data['image_file'] ?>" alt="#" />
                    <img src="upload/<?php echo $data['image_file2'] ?>" alt="#" />
                    <img src="upload/<?php echo $data['image_file3'] ?>" alt="#" />
            </div>
            <button id="back_zoom"><i class="fas fa-arrow-left"></i>&ensp; Retour en arrière</button>
            <div class="desc_text_gite">
                <h3 id="desc_titre">Description du Gîte :</h3>
                <p id="desc_p"><?php echo $data['description'] ?></p>
                <br />
                <hr id="sp">
                <h3 id="couchage_titre">Couchage(s) :</h3>
                <div id="couchage">
                    <img id="svg_icon" src="img/svg_icon/lit.svg" alt="Logo couchage" />
                    <p><?php echo $data['couchage'] ?></p>
                </div>
                <div class="equipements">
                    <hr id="sp">
                    <h3 id="equipement_titre">Équipement(s) :</h3>
                    <div id="wifi">
                        <img id="svg_icon" src="img/svg_icon/wifi.svg" alt="Logo wifi" />
                        <p><?php echo $data['wifi'] ?></p>
                    </div>
                    <div id="tv">
                        <img id="svg_icon" src="img/svg_icon/tv.svg" alt="Logo tv" />
                        <p>Télévision (<?php echo $data['tv'] ?>)</p>
                    </div>
                    <div id="cuisine">
                        <img id="svg_icon" src="img/svg_icon/cuisine.svg" alt="Logo cuisine" />
                        <p>Cuisine (<?php echo $data['cuisine'] ?>)</p>
                    </div>
                    <div id="linge">
                        <img id="svg_icon" src="img/svg_icon/lave-linge.svg" alt="Logo linge" />
                        <p>Lave-linge (<?php echo $data['linge'] ?>)</p>
                    </div>
                    <div id="animaux">
                        <img id="svg_icon" src="img/svg_icon/animaux.svg" alt="Logo animaux" />
                        <p>Animaux <?php echo $data['animaux'] ?></p>
                    </div>
                </div>
                <hr id="sp">
                <button id="rsv_offre"><i class="far fa-calendar-alt"></i>&ensp; Je veux réserver</button>
            </div>
        </div>
    </div>
<?php
    }
}
$dns = "mysql:host=localhost;dbname=gite;charset=utf8";
$pdo = new PDO($dns, "root", "");

$query = $pdo->query("SELECT * FROM rsv ORDER BY id DESC");
if ($query != 'false')
{
    $res = $query->fetchAll();
    if (!empty($res))
    affichagePersonnes($res);
    else
    echo "<p>Aucun gîte trouvé</p>";
}
else
{
    echo "<p>Erreur..</p>";
}
include('footer.php');
?>
