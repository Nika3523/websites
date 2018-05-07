
<?php

include ("includes/header.php");
include ("includes/db.php");
?>
<script language="JavaScript" type="text/JavaScript" src="js/checkform.js">
</script>
<div class="art-layout-wrapper">
    <div class="art-content-layout">
        <div class="art-content-layout-row">
            <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
                    <div class="art-vmenublockheader">
                        <h3 class="t">BMCC</h3>
                    </div>
                    <div class="art-vmenublockcontent">
                        <ul class="art-vmenu"><li><a href="home.html" class="">Home</a></li><li><a href="login.html" class="">Login</a></li><li><a href="signup.html" class="active">SignUp</a></li></ul>

                    </div>
                </div><div class="art-block clearfix">
                    <div class="art-blockheader">
                        <h3 class="t">Contact us</h3>
                    </div>
                    <div class="art-blockcontent"><p style="text-align: left;"><img width="50" height="50" alt="" src="images/rss.png">&nbsp;&nbsp;<img width="50" height="50" alt="" src="images/twitter.png">&nbsp;&nbsp;<img width="50" height="50" alt="" src="images/facebook.png" class=""><br></p></div>
                </div></div>
            <div class="art-layout-cell art-content"><article class="art-post art-article">
                    <h2 class="art-postheader">Sign up</h2>

                    <div class="art-postcontent art-postcontent-0 clearfix">

                        <p>                              
                        <form action="addcustomer.php" method="post" onsubmit="return validate(this);">

                            <table border="0" cellspacing="1" cellpadding="3">
                                <tr><td colspan="2" align="center">Enter your information</td></tr>
                                <tr><td>Email Address: </td><td><input size="20" type="text"
                                                                       name="emailaddress" ><span id="emailmsg"></span></td></tr>
                                <tr><td>Password: </td><td><input size="20" type="password"
                                                                  name="password" ><span id="passwdmsg"></span></td></tr>
                                <tr><td>ReType Password: </td><td><input size="20"
                                                                         type="password" name="repassword"><span id="repasswdmsg">
                                        </span></td></tr>
                                <tr><td>First Name </td>
                                    <td><input size="50" type="text" name="first_name" ><span id="usrmsg1"></span></td></tr>
                                
                                <tr><td>Last Name </td>
                                    <td><input size="50" type="text" name="last_name" ><span id="usrmsg2"></span></td></tr>
                                
                                <tr><td>Last Name </td>
                                    <td><input size="50" type="list" name="sex" ></td></tr>
                                
                                <tr><td>Address: </td><td><input size="80" type="text" name="address1"></td></tr>
                                                            
                                <tr><td></td><td><input size="80" type="text" name="address2">
                                    </td></tr>
                                <tr><td>City: </td><td><input size="30" type="text"
                                                              name="city"></td></tr>

                                <tr><td>State: </td><td><input size="30" type="text"
                                                               name="state"></td></tr>
                                <tr><td>Country: </td><td><input size="30" type="text"
                                                                 name="country"></td></tr>
                                <tr><td>Zip Code: </td><td><input size="20" type="text"
                                                                  name="zipcode"></td></tr>
                                <tr><td>Phone No: </td><td><input size="30" type="text"
                                                                  name="phone_no"></td></tr>
                                <tr><td><input type="submit" name="submit" value="Submit" >
                                    </td><td>
                                        <input type="reset" value="Cancel"></td></tr>
                            </table>
                        </form>

                        </p>



                    </div>



                </article></div>
        </div>
    </div>
</div> 
<?php

include("includes/footer.php");
?>
       