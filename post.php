<?php 
include "header.php";
?>
<?php 
include "includes/search/search-form.php";
?>

<div class="row">
<!--main post ares area-->
<div class="col l9 m9 s12">
<style>
  .row{
    background-image:url(img/im.png);
    background-size: cover;
    background-attachment: fixed;
  }
</style>
<?php
if(isset($_GET['post_url']))
{
  
  $post_url=$_GET['post_url'];
  $post_url=mysqli_real_escape_string($conn,$post_url);
  $post_url=htmlentities($post_url);
  $sql="select * from posts where post_url='$post_url'";
  
  $res=mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0)
  {
    $sql2="select view from posts where post_url='$post_url'";
    $res2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($res2);
    $view=$row2['view'];
    $view=$view+1;
    $sql3="update posts set view=$view where post_url='$post_url'";
    mysqli_query($conn,$sql3);
    $row=mysqli_fetch_assoc($res);
    $title=$row['title'];
    $content=$row['content'];
    

?>

<div class="card-panel">
    <title><?php echo $title; ?></title>
<h4 class="center"><?php echo ucwords($title);?></h4>
<p class="flow-text"><?php echo ucwords($content);?></p>
    <div class="card-panel">
      <div class="row">
      <div class="col l8 offset-l2 m10 offset-m1 s12">
      <h5>Write Comment</h5>
    <?php
    if(isset($_SESSION['message']))
      {
         echo $_SESSION['message']; 
         unset($_SESSION['message']);
      }
    ?>
    <form action="post.php?post_url=<?php echo $post_url;?>" method="POST">
    <div class="input-field">
    <input type="email" name="email" class="validate" placeholder="Enter Email">
    <label for="email" data-error="Invalid Email Format"></label>
      </div>
<div class="input-field">
<textarea name="comment" class="materialize-textarea" placeholder="Your comment Goes Here..."></textarea>
</div>
<div class="center">
<input type="submit" value="Comment" name="submit" class="btn">
</div>
</form>
<h5>Comments</h5>
<ul class="collection">
<?php
$sql4="SELECT * FROM `comment` WHERE post_id_url='$post_url' and status=1 order by id desc";
$res4=mysqli_query($conn,$sql4);
if(mysqli_num_rows($res4)>0)
{
  while($row=mysqli_fetch_assoc($res4))
  {
?>
<li class="collection-item">
<?php echo $row['comment_text'];?>
<span class="secondary-content">
<?php echo $row['email'];?>
</span>
</li>
<?php

  }
}
?>

</ul>
</div>
</div>
</div>


<h5>Related Blogs</h5>
<div class="row">
<?php
$sql="select * from posts order by rand() limit 5";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
  while($row=mysqli_fetch_assoc($res))
  {
?>
<div class="col l2 m4 s6">
<div class="card small">
<div class="card-image">
<a href="post.php?post_url=<?php echo $row['post_url'];?>"><img width="auto" height="auto" src="img/<?php echo $row['feature_image'];?>" alt=""></a>
</div>
<div class="card-content center">
<style>p:hover {
                            color: #34963c;
                      }</style>
<p><a href="post.php?post_url=<?php echo $row['post_url'];?>" style="font-family: 'Alef';"><?php echo $row['title'];?></a></p>
</div>
</div>
</div>
<?php
  }
}
?>
</div>
</div>

<?php
  }
}
else
{
  header("Location: index.php");
}
?>
</div>

<!--Sidebar area-->
<div class="col l3 m3 s12">
<?php
include "includes/sidebar.php";
?>
</div>

</div>



<?php 
include "includes/footer.php";
?>
<?php
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$comment=$_POST['comment'];
$post_id_url1=$_GET['post_url'];
$email=mysqli_real_escape_string($conn,$email);
$email=htmlentities($email);
$comment=mysqli_real_escape_string($conn,$comment);
$comment=htmlentities($comment);
$post_id_url1=mysqli_real_escape_string($conn,$post_id_url1);
$post_id_url1=htmlentities($post_url);
$sql3="insert into comment (email,comment_text,post_id_url) values('$email','$comment','$post_url')";
$res3=mysqli_query($conn,$sql3);
if($res3)
{
  $_SESSION['message']="<div class='chip green white-text'>Comment Added Successfully.</div>";
  header("Location: post.php?post_url=$post_id_url1");
}
else
{
  $_SESSION['message']="<div class='chip red black-text'> Sorry, Something Went Wrong.</div>";
  header("Location: post.php?post_url=$post_id_url1");
}
}
?>