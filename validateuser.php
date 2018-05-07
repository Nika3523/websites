<?php
include("includes/header.php");

include("includes/db.php");
?>
<script language="JavaScript" type="text/JavaScript">
function updateUser(username){ 
var ajaxUser = document.getElementById("userinfo");
ajaxUser.innerHTML = "Welcome " + username + "&nbsp;&nbsp;&nbsp;<a href=\"logout.php\">Log Out</a>";

}
</script>

<div class="art-content-layout">
    <div class="art-content-layout-row">
        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
                <div class="art-vmenublockheader">
                    <h3 class="t">BMCC</h3>
                </div>
                <div class="art-vmenublockcontent">
                    <ul class="art-vmenu"><li><a href="index.php" class="active">Home</a></li><li><a href="login.php">Login</a></li><li><a href="signup.php">SignUp</a></li></ul>

                </div>
            </div><div class="art-block clearfix">
                <div class="art-blockheader">
                    <h3 class="t">Contact us</h3>
                </div>
                <div class="art-blockcontent"><p style="text-align: left;"><img width="50" height="50" alt="" src="images/rss.png">&nbsp;&nbsp;<img width="50" height="50" alt="" src="images/twitter.png">&nbsp;&nbsp;<img width="50" height="50" alt="" src="images/facebook.png" class=""><br></p></div>
            </div></div>
        <div class="art-layout-cell art-content"><article class="art-post art-article">
                <h2 class="art-postheader">Home</h2>

                <div class="art-postcontent art-postcontent-0 clearfix">
                    <?php
                


                    $query = "SELECT email,psword,first_name,last_name FROM person WHERE
                                        email like '".$_POST['emailaddress']."' "."AND psword like '" .$_POST['password']."'";
                            
                    $result = mysqli_query($connect, $query) or die(mysql_error());
                    if (mysqli_num_rows($result) == 1) {
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            extract($row);
                            echo "Welcome " . $last_name . " to our Shopping Mall <br>";
                            $_SESSION['emailaddress'] = $_POST['emailaddress'];
                            $_SESSION['password'] = $_POST['password'];
                            echo "<SCRIPT LANGUAGE=\"JavaScript\">updateUser('$last_name');
                                        </SCRIPT>";
                        }
                    } else {
                        ?>
                        Invalid Email address and/or Password<br> 
                        Not registered?
                        <a href="signup.php">Click here</a> to register.<br><br><br>
                        Want to Try again<br>
                        <a href="signin.php">Click here</a> to try login again.<br>
                        <?php
                    }
                    ?>

                </div>



            </article></div>
    </div>
</div>

<?php
include("includes/footer.php");
?>