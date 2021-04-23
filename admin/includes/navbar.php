<?php
include "includes/header.php";
if(isset($_SESSION['username']))
{
?>
<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
<style>
footer,header,.main{
padding-left:300px;
}
@media(max-width:992px)
{
  footer,header,.main{
padding-left:0px;
}
}
</style>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>www.filmszilla.com</title>
</head>
<body>
<nav class="teal">
<div class="nav-wrapper">
<div class="container">
<a href="" class="brand-logo center">Tonystark</a>
<a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons">menu</i></a>
</div>
</div>
</nav>
<ul class="side-nav fixed" id="sidenav">
<li>
<div class="user-view">
<div class="background">
<img src="../img/img8.jpg" alt="" class="responsive-img">
</div>
<a href=""><img src="../img/img29.jpg" alt="" class="circle"></a>
<span class="name white-text"><?php echo $_SESSION['username'];?></span>
<span class="email white-text">
<?php
$user=$_SESSION['username'];
$sql="select email from users where username='$user'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
echo $row['email'];
?>
</span>
</div>
</li>
<li>
<a href="dashboard.php"><i class="fa fa-tachometer" ></i>Dashboard</a>
</li>
<li>
<a href="post.php"><i class="fa fa-folder" aria-hidden="true"></i>Posts</a>
</li>
<li>
<a href="image.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Images</a>
</li>
<li>
<a href="screenshots.php"><i class="fa fa-picture-o" aria-hidden="true"></i>Screenshots</a>
</li>
<li>
<a href=""><i class="fa fa-comments" aria-hidden="true"></i>Comments</a>
</li>
<li>
<a href="setting.php"><i class="fa fa-cogs" aria-hidden="true"></i>Settings</a>
</li>
<div class="divider">
</div>
<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
</ul>
<?php
}
else
{
  $_SESSION['message']="<div class='chip red black-text'>Login To Continue</div>";
  header("Location: ../login.php");
}
?>