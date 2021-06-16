<?php 
session_start();

if (empty($_SESSION['admin']))
{
    header('Location: ../index.php');
    exit();
}
else
{

?>       
<h1>fezfze</h1>
<?php 
}
?> 