<?php $title="Show";
 require "../top.php";
 require "../header.php";
 require "../../db.php";
$id=$_REQUEST['id'];


$stmt=$pdo->prepare("SELECT `id` `name` FROM `categories` WHERE id=$id");
$stmt->execute();
$data=$stmt->fetch();

$name=$data;

 ?>


<p> Product Id: <?php echo  $name['id'];?></p>
<p> Product Name: <?php echo $name['name'] ;?></p>

<p>
    <?php echo $id;?>
</p>


<?php
 require "../footor.php"


?>