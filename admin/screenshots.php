<?php
include "includes/navbar.php";
$dir="../ss/";
$files=scandir($dir);
if($files)
{
  ?>
  <div class="main">
  <div class="row">
  <?php
  foreach($files as $file)
  {
    if(strlen($file)>2)
    {
    ?>
<div class="col l2 m3 s5">
<div class="card-small">
<div class="card-image">
<img src="../ss/<?php echo $file;?>" alt="" style="height:100px; width:150px;">
<span class="card-title"><?php echo $file;?></span>
</div>
</div>
</div>
<?php
    }
}
}
?>
  
  </div>
</div>