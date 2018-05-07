

       <?php include("includes/header.php");
      include("includes/db.php");
    
    ?>
<div class="art-layout-wrapper">
    <div class="art-content-layout">
        <div class="art-content-layout-row">
            <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
                    <div class="art-vmenublockheader">
                        <h3 class="t">BMCC</h3>
                    </div>
                    <div class="art-vmenublockcontent">
                        <ul class="art-vmenu"><li><a href="index.php" class="">Home</a></li><li><a href="login.php" class="active">Login</a></li><li><a href="signup.php">SignUp</a></li></ul>

                    </div>
                </div><div class="art-block clearfix">
                    <div class="art-blockheader">
                        <h3 class="t">Contact us</h3>
                    </div>
                    <div class="art-blockcontent"><p style="text-align: left;"><img width="50" height="50" alt="" src="images/rss.png">&nbsp;&nbsp;<img width="50" height="50" alt="" src="images/twitter.png">&nbsp;&nbsp;<img width="50" height="50" alt="" src="images/facebook.png" class=""><br></p></div>
                </div></div>
            <div class="art-layout-cell art-content"><article class="art-post art-article">
                    <h2 class="art-postheader">Log in</h2>

                    <div class="art-postcontent art-postcontent-0 clearfix">
                        <form method="post" action="validateuser.php">
                            <table style="width: 100%">
                                <tr>
                                    <td style="width: 274px">Email</td>
                                    <td>

                                        <input name="emailaddress" STYLE="width: 50%;color: #FFFFFF;  font-weight: bold; font-size: 14px;border: 1px solid orange;"  type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 23px; width: 274px">
                                        Password</td>
                                    <td style="height: 23px">

                                        <input name="password" style="width: 50%;color: #FFFFFF;  font-weight: bold; font-size: 14px;border: 1px solid orange;" type="password">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 274px; height: 26px">
                                    </td>
                                    <td style="height: 26px">

                                        <input name="submit" style="width: 129px" type="submit" value="submit">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>



                </article></div>
        </div>
    </div>
</div>
<?php include("includes/footer.php");
    ?>