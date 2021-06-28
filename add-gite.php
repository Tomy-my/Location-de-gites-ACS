<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: index.php');
    exit();
}
else
{
    $title = 'Dashboard';
    
    include("controller/crud.php");

    include('headerAdmin.php');
?>
    <div class="container_add">
        <h1>Formulaire d'ajout de Gîtes :</h1>
        <form method="POST" action="#" enctype="multipart/form-data" >
            <p>Titre de la formule :</p>
            <input type="text" name="titre" placeholder="Titre" required/>
            
            <p>Nombre de couchage :</p>
            <input type="text" name="couchage" placeholder="Ex : 1 lit double" required/>
            
            <p>Wifi :</p>
            <input type="text" name="wifi" placeholder="Exp : Wifi Disponible" required/>
           
            <p>Nombre de télévision :</p>
            <input type="text" name="tv" placeholder="Si aucun marquer 0" required/>
           
            <p>Nombre de Cuisine :</p>
            <input type="text" name="cuisine" placeholder="Si aucun marquer 0" required/>
           
            <p>Nombre de lave-linge :</p>
            <input type="text" name="linge"  placeholder="Si aucun marquer 0" required/>
          
            <p style="margin-top: 10px; margin-bottom: 14px;">Selectionner 3 images différentes</p>
            <p id="txt_img">Images 1 :</p>
            <input type="file" name="image_file" />
            <p id="txt_img">Images 2 :</p>
            <input type="file" name="image_file2" />
            <p id="txt_img">Images 3 :</p>
            <input style="margin-bottom: 35px;" type="file" name="image_file3" />

            <p>Animaux :</p>
            <select name="animaux" id="select_pets">
                <option id="none_select" value="">Selectionne une option</option>
                <option value="Autorisé">Autorisé</option>
                <option value="Non-autorisé">Non-autorisé</option>
            </select>

            <p>Description du Gîte :</p>
            <textarea id="descriptionFormule" type="textarea" name="description" placeholder="Description de la formule" required></textarea>

            <button id="btn_add" name='ajouter' type="submit"><i class="fas fa-folder-plus"></i>&ensp; Ajouter</button>
    </form>

    </div>
<?php
}
?>   