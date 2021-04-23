<?php
include "includes/header.php";
if(isset($_GET['post_url']))
{
$post_url=$_GET['post_url'];
$post_url=mysqli_real_escape_string($conn,$post_url);
$post_url=htmlentities($post_url);
$sql="update comment set status=1 where post_url='$post_url'";
$res=mysqli_query($conn,$sql);
if($res)
{
  echo"<div class='chip green white-text'>Comment Approved.</div>";
}
else
{
  echo "<div class='chip red black-text'> Sorry, Something Went Wrong.</div>";
}
}
?>