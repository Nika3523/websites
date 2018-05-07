<!DOCTYPE html>

<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.3.0.60745 -->
        <meta charset="utf-8">
        <title>Home</title>
        <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="stylesheet" href="style.css" media="screen">
        <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
        <link rel="stylesheet" href="style.responsive.css" media="all">


        <script src="jquery.js"></script>
        <script src="script.js"></script>
        <script src="script.responsive.js"></script>
<!--
js
-->
<script language="JavaScript" type="text/JavaScript">
function makeRequestObject(){
var xmlhttp=false;
try {
xmlhttp = new ActiveXObject('Msxml2.XMLHTTP'); 
} catch (e) {
try {
xmlhttp = new
ActiveXObject('Microsoft.XMLHTTP'); 
} catch (E) {
xmlhttp = false;
}
}
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
xmlhttp = new XMLHttpRequest(); 
}
return xmlhttp;
}
function updateCart(){ 
var xmlhttp=makeRequestObject();
xmlhttp.open('GET', 'countcart.php', true); 
xmlhttp.onreadystatechange = function(){ 
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
var ajaxCart = document.getElementById("cartcountinfo"); 
ajaxCart.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
</script>

    </head>
    <body>
        
       
        <div id="art-main">
            <header class="art-header">

                <div class="art-shapes">
                    <div class="art-object1690211264"></div>

                </div>

                <h1 class="art-headline">
                    <a href="/">BMCC Tech Store</a>
                </h1>





                <div id="art-flash-area">
                    <div id="art-flash-container">
                        <object width="1508" height="377" id="art-flash-object" data="images/flash.swf" type="application/x-shockwave-flash">
                            <param name="quality" value="high">
                            <param name="scale" value="exactfit">
                            <param name="wmode" value="transparent">
                            <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                            <param name="swfliveconnect" value="true">
                            <!--[if !IE]>-->
                            <object type="application/x-shockwave-flash" data="images/flash.swf" width="1508" height="377">
                                <param name="quality" value="high">
                                <param name="scale" value="exactfit">
                                <param name="wmode" value="transparent">
                                <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent">
                                <param name="swfliveconnect" value="true">
                                <!--<![endif]-->
                                <div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"></a></div>
                                <!--[if !IE]>-->
                            </object>
                            <!--<![endif]-->
                        </object>

                    </div>

                </div>
                <nav class="art-nav">
                    <div class="art-nav-inner">
                        <ul class="art-hmenu"><li><a href="index.php" class="active">Home</a></li><li><a href="signin.php">Login</a></li><li><a href="signup.php">SignUp</a></li></ul> 
                    </div>
                </nav>


            </header>
 <div class="art-sheet clearfix">
 <?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
echo "<span id=\"userinfo\"><a href=\"signin.php\">Login</a>&nbsp;&nbsp;&nbsp;<a href=\"validatesignup.php\">Signup</a></span>";

?>
     