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

    include('controller/config_bdd.php');

    include('headerAdmin.php');

    function affichagePersonnes($res)
        {
            foreach($res as $key => $data)
            {
?>
<div class="container_dash">
        <h1><?php echo $data['titre'] ?> <br />''</h1>
        <div class="desc_dash">
            <div class="img_dash">
                <img src="upload/<?php echo $data['image_file'] ?>" alt="#" />
            </div>
            <div class="desc_text_dash">
                <h3 id="desc_titre_dash">Description du Gîte :</h3>
                <p id="desc_p_dash"><?php echo $data['description'] ?></p>
                <br />
                <hr id="sp_dash">
                <h3 id="couchage_titre_dash">Couchage(s) :</h3>
                <div id="couchage_dash">
                    <img id="svg_icon_dash" src="img/svg_icon/lit.svg" alt="Logo couchage" />
                    <p><?php echo $data['couchage'] ?></p>
                </div>
                <div class="equipements_dash">
                    <hr id="sp_dash">
                    <h3 id="equipement_titre_dash">Équipement(s) :</h3>
                    <div id="wifi_dash">
                        <img id="svg_icon_dash" src="img/svg_icon/wifi.svg" alt="Logo wifi" />
                        <p><?php echo $data['wifi'] ?></p>
                    </div>
                    <div id="tv_dash">
                        <img id="svg_icon_dash" src="img/svg_icon/tv.svg" alt="Logo tv" />
                        <p>Télévision (<?php echo $data['tv'] ?>)</p>
                    </div>
                    <div id="cuisine_dash">
                        <img id="svg_icon_dash" src="img/svg_icon/cuisine.svg" alt="Logo cuisine" />
                        <p>Cuisine (<?php echo $data['cuisine'] ?>)</p>
                    </div>
                    <div id="linge_dash">
                        <img id="svg_icon" src="img/svg_icon/lave-linge.svg" alt="Logo linge" />
                        <p>Lave-linge (<?php echo $data['linge'] ?>)</p>
                    </div>
                    <div id="animaux_dash">
                        <img id="svg_icon_dash" src="img/svg_icon/animaux.svg" alt="Logo animaux" />
                        <p>Animaux <?php echo $data['animaux'] ?></p>
                    </div>
                </div>
                <hr id="sp_dash">
                <div class="two_btn">
                    <button onclick="document.location.href='edit-gite.php?update_id=<?php echo $data['id'] . '&edit' ?>'" id="edit"><i class="far fa-edit"></i>&ensp; Modifier</button>
                    <button onclick="document.location.href='controller/crud.php?id=<?php echo $data['id'] . '&delete' ?>'" id="delete"><i class="far fa-trash-alt"></i>&ensp; Supprimer</button>
                </div>
            </div>
        </div>
    </div>
    <?php     }       
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
}
?> 