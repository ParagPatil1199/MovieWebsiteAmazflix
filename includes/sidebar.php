<ul class="collection" style="padding-left:0px;">
<li class="collection-item">
<a href="https://t.me/amazflix"><img src="Telegram.jpg" class="mr-2" width="100%"></a>
</ul>
</li>
<ul class="collection" style="padding-left:0px;">
<li class="collection-item">
<h5><span class="material-icons">
search
</span> Search</h5>
<form action="search.php" method="GET">
<div class="input-field">
<input type="text" id="search" name="search" placeholder="Search Movie/Series">
<div class="center">
<input type="submit" class="btn1" value="Search" name="submit">
</div>
</form>
</div>
</li>
</ul>

<div class="collection with-header">
<h5 style="padding-left:20px"><span class="material-icons">
trending_up
</span> Trending Movies</h5 class="teal lighten-2">
<?php
$sql="select * from posts order by view desc limit 7";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
while($row=mysqli_fetch_assoc($res))
{
?>
<a href="post.php?post_url=<?php echo $row['post_url'];?>" class="collection-item grey lighten-3"><?php echo $row['title'];?></a>
<?php
}
}
?>
</div>
</div>
</div>
