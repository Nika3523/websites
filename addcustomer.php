
<?php
include ("includes/header.php");
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
                        <ul class="art-vmenu"><li><a href="home.html" class="active">Home</a></li><li><a href="login.html">Login</a></li><li><a href="signup.html">SignUp</a></li></ul>

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

<p>

<?php

$email_address = $_POST['emailaddress'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$completename = $_POST['complete_name'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
$zipcode = $_POST['zipcode'];
$phone_no = $_POST['phone_no'];
$sql = "INSERT INTO customers (email_address, password, complete_name,
address_line1, address_line2, city, state, zipcode, country, cellphone_no)
VALUES ('$email_address',(PASSWORD('$password')), '$completename', '$address1',
'$address2','$city', '$state', '$zipcode', '$country', '$phone_no')";
$result = mysqli_query($connect, $sql) or die(mysql_error());
if ($result)
{
?>
<p>
Dear, <?php echo $completename; ?> your account is successfully created
<?php
}
else
{
echo "Some error occurred. Please use different email address";
}
?>


                        </p>
                    </div>



                </article></div>
        </div>
    </div>
</div>
<?php
include("includes/footer.php");
?>
                




