<?php
include "includes/dbh.php";
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql="select * from posts where title like ? LIMIT 5";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = '%'.
        $_REQUEST['term'] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0)
            {
                ?>
                <?php
                echo "<table>";
                while($row = mysqli_fetch_array($result)){
                    ?>
                    <div>
                    
                    <tr class="border_bottom">
                    <td class="td1">
                    <a href="post.php?post_url=<?php echo $row['post_url'];?>"style="font-family: 'Alef';font-size: revert;"><?php echo $row[1];?></td>
                    <td class="td1"><img class="ai" style="
    cursor: pointer;
" src="img/<?php echo $row['feature_image'];?>" height=80px width=50px onClick="window.location='post.php?post_url=<?php echo $row['post_url'];?>'"></td>
                    </a>
                    </tr>
                    
                    
                    
                    </div>
                   <!--echo "<p>" . $row["title"] .  "</p>";
                    //echo "<a href='post.php?id=echo' class='' >" . $row['title'] ."</a>";-->
                    <?php
                }echo "</table>";
            } 
            else
            {
                echo "<p>No matches found</p>";
            }
        } 
        else
        {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($conn);
?>