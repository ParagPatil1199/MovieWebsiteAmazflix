<?php
include "includes/header.php";
include "includes/navbar.php";
if(isset($_GET['submit']))
{
 
$q=$_GET['search'];
$q=mysqli_real_escape_string($conn,$q);
$q=htmlentities($q);
$sql="select * from posts where title like '$q' or content like '$q' or title like '%$q%' or content like '%$q%'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
  echo "<h5>Search Result For:$q</h5>";
  ?>
  <div class="row">
<!-- This is main content area-->
<div class="col l9 m9 s12">
<?php
while($x=mysqli_fetch_assoc($res))
{
    ?>
    <div class="col l2 m4 s6">
    <div class="card small">
    <div class="card-image">
    <a href="post.php?post_url=<?php echo $x['post_url'];?>"><img width="auto" height="auto" src="img/<?php echo $x['feature_image'];?>" alt=""></a>
    </div>
    <div class="card-content center">
                      <style>p:hover {
                            color: #34963c;
                      }</style>
    <p><a href="post.php?post_url=<?php echo $x['post_url'];?>" style="font-family: 'Alef';"><?php echo $x['title'];?></a></p>
    </div>
    </div>
    </div>
    <?php
}
?>
</div>
<div class="col l3 m3 s12" >
<?php
include "includes/sidebar.php";
?>
</div>
</div>
<?php
include "includes/footer.php";
?>
  <?php

}
else
{
  ?>
<h5>Sorry No data Found By given Search String, Try Again with another Search String.</h5>

  <?php
  
}
}
else
{
  header("Location: index.php");
}


?>
