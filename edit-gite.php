<?php
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: index.php');
    exit();
}
else
{
    require_once "controller/config_bddNotPOO.php";

    if(isset($_REQUEST['update_id']))
    {
        try
        {
            $id = $_REQUEST['update_id']; 
            $select_stmt = $db->prepare('SELECT * FROM rsv WHERE id =:id'); 
            $select_stmt->bindParam(':id',$id);
            $select_stmt->execute(); 
            $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
            extract($row);
        }
        catch(PDOException $e)
        {
            $e->getMessage();
        }
        
    }

    if(isset($_REQUEST['btn_update']))
{
	try
	{
        $titre			= $_REQUEST['titre'];	
        $description	= $_REQUEST['description'];	
		$couchage		= $_REQUEST['couchage'];	
		$wifi			= $_REQUEST['wifi'];	
		$tv		        = $_REQUEST['tv'];	
		$cuisine		= $_REQUEST['cuisine'];	
		$linge	        = $_REQUEST['linge'];
        $animaux        = $_REQUEST['animaux'];
		
		$image_file	    = $_FILES["image_file"]["name"];
		$image_file2	= $_FILES["image_file"]["name"];
		$image_file3	= $_FILES["image_file"]["name"];

		$type		= $_FILES["image_file"]["type"];	
		$type2		= $_FILES["image_file"]["type"];	
		$type3		= $_FILES["image_file"]["type"];

		$size		= $_FILES["image_file"]["size"];
		$size2		= $_FILES["image_file"]["size"];
		$size3		= $_FILES["image_file"]["size"];

		$temp		= $_FILES["image_file"]["tmp_name"];
		$temp2		= $_FILES["image_file"]["tmp_name"];
		$temp3		= $_FILES["image_file"]["tmp_name"];
			
		$path="upload/".$image_file; 
		$path2="upload/".$image_file2; 
		$path3="upload/".$image_file3; 
		
		$directory="upload/";
		
		if($image_file)
		{
			if($type=="image/jpg" || $type=='image/jpeg' || $type=='image/png' || $type=='image/gif') 
			{	
				if(!file_exists($path)) 
				{
					if($size < 5000000) 
					{
						unlink($directory.$row['image']); 
						move_uploaded_file($temp, "upload/" .$image_file);	
					}
					else
					{
						$errorMsg="Image trop grosse, maximum 5mb"; 
					}
				}
				else
				{	
					$errorMsg="Image déjà existante"; 
				}
			}
			else
			{
				$errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
			}
		}
		else
		{
			$image_file=$row['image_file']; //Si aucune image est selectionné alors on laisse l'anciennce 
		}

        if($image_file2)
		{
			if($typ2e=="image/jpg" || $type2=='image/jpeg' || $type2=='image/png' || $type2=='image/gif') 
			{	
				if(!file_exists($path2)) 
				{
					if($size2 < 5000000) 
					{
						unlink($directory.$row['image']); 
						move_uploaded_file($temp2, "upload/" .$image_file2);	
					}
					else
					{
						$errorMsg="Image trop grosse, maximum 5mb"; 
					}
				}
				else
				{	
					$errorMsg="Image déjà existante"; 
				}
			}
			else
			{
				$errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
			}
		}
		else
		{
			$image_file2=$row['image_file2']; //Si aucune image est selectionné alors on laisse l'anciennce 
		}

        if($image_file3)
		{
			if($type3=="image/jpg" || $type3=='image/jpeg' || $type3=='image/png' || $typ3e=='image/gif') 
			{	
				if(!file_exists($path3)) 
				{
					if($size3 < 5000000) 
					{
						unlink($directory.$row['image']); 
						move_uploaded_file($temp3, "upload/" .$image_file3);	
					}
					else
					{
						$errorMsg="Image trop grosse, maximum 5mb"; 
					}
				}
				else
				{	
					$errorMsg="Image déjà existante"; 
				}
			}
			else
			{
				$errorMsg="Mauvais format d'image ! choissiez seulement [JPG] - [JPEG] - [PNG] - [GIF]"; 
			}
		}
		else
		{
			$image_file3=$row['image_file3']; //Si aucune image est selectionné alors on laisse l'anciennce 
		}
	
		if(!isset($errorMsg))
		{
			$update_stmt=$db->prepare('UPDATE rsv SET titre=:titre_up, description=:description_up, couchage=:couchage_up, wifi=:wifi_up, tv=:tv_up, cuisine=:cuisine_up, linge=:linge_up, animaux=:animaux_up, image_file=:image_file_up, image_file2=:image_file2_up, image_file3=:image_file3_up WHERE id=:id'); //sql update query
			$update_stmt->bindParam(':titre_up',$titre);
			$update_stmt->bindParam(':description_up',$description);
			$update_stmt->bindParam(':couchage_up',$couchage);
			$update_stmt->bindParam(':wifi_up',$wifi);
			$update_stmt->bindParam(':tv_up',$tv);
			$update_stmt->bindParam(':cuisine_up',$cuisine);
			$update_stmt->bindParam(':linge_up',$linge);
			$update_stmt->bindParam(':animaux_up',$animaux);
			$update_stmt->bindParam(':image_file_up',$image_file);
			$update_stmt->bindParam(':image_file2_up',$image_file2);
			$update_stmt->bindParam(':image_file3_up',$image_file3);
			$update_stmt->bindParam(':id',$id);
			 
			if($update_stmt->execute())
			{
				header("refresh:1;dashboard.php");
			}
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
	
}

    include('headerAdmin.php');
?>
    <div class="container_add">
        <h1>Formulaire d'ajout de Gîtes :</h1>
        <form method="post" action="" enctype="multipart/form-data" >
            <p>Titre de la formule :</p>
            <input type="text" name="titre" value="<?php echo $titre; ?>"/>
            
            <p>Nombre de couchage :</p>
            <input type="text" name="couchage" value="<?php echo $couchage; ?>" />
            
            <p>Wifi :</p>
            <input type="text" name="wifi" value="<?php echo $wifi; ?>" />
           
            <p>Nombre de télévision :</p>
            <input type="text" name="tv" value="<?php echo $tv; ?>" />
           
            <p>Nombre de Cuisine :</p>
            <input type="text" name="cuisine" value="<?php echo $cuisine; ?>" />
           
            <p>Nombre de lave-linge :</p>
            <input type="text" name="linge"  value="<?php echo $linge; ?>" />
          
            <p style="margin-top: 10px; margin-bottom: 14px;">Selectionner 3 images différentes</p>
            <p id="txt_img">Images 1 :</p>
            <img src="upload/<?php echo $image_file; ?>" height="120" width="120" />
            <input type="file" name="image_file" />
            <p id="txt_img">Images 2 :</p>
            <img src="upload/<?php echo $image_file2; ?>" height="120" width="120" />
            <input type="file" name="image_file2" />
            <p id="txt_img">Images 3 :</p>
            <img src="upload/<?php echo $image_file3; ?>" height="120" width="120" />
            <input style="margin-bottom: 35px;" type="file" name="image_file3" />

            <p>Animaux :</p>
            <select name="animaux" id="select_pets">
                <option id="none_select" value="<?php echo $animaux; ?>"><?php echo $animaux; ?></option>
                <option value="Autorisé">Autorisé</option>
                <option value="Non-autorisé">Non-autorisé</option>
            </select>

            <p>Description du Gîte :</p>
            <textarea id="descriptionFormule" type="textarea" name="description"><?php echo $description; ?></textarea>
            <button name='btn_update' value="Update">Ajouter</button>
            <?php
            		if(isset($errorMsg))
                    {
            ?>
    </form>
    <strong>WRONG ! <?php echo $errorMsg; ?></strong>
    </div>
<?php
}
}
?>   