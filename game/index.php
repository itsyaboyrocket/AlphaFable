<?php
require("../includes/config.php");
$size = $_GET["size"];
if ($size == "" or "normal") {
    $width = "750";
    $height = "550";
    $font = "10";
}
if ($size == "tiny") {
    $width = "475";
    $height = "350";
    $font = "8";
}
if ($size == "large") {
    $width = "1150";
    $height = "840";
    $font = "14";
}
if ($size == "huge") {
    $width = "1750";
    $height = "1280";
    $font = "19";
}
$query = $MySQLi->query("SELECT * FROM df_settings LIMIT 1");
$fetch = $query->fetch_assoc();
$loaderSWF = $fetch['loaderSWF'];
$gameSWF = $fetch['gameSWF'];
$sitename = $fetch['DFSitename'];
$MySQLi->close();
?>
<html lang="en" dir="ltr">
    <head>
        <title><?php echo $sitename; ?> | Play</title>
        <link rel="stylesheet" href="../includes/css/style.css" />
        <link rel="shortcut icon" href="../includes/favicon.ico" />
        <script src="../includes/scripts/AC_RunActiveContent.js" type="text/javascript"></script>
        <script src="../includes/scripts/extra.js" type="text/javascript"></script>
        <script src="http://cloud.nodehost.ca/js/livedata.js?code=gc7h3tg40g0b8cn3gcgv7pi66784q9"></script>
        <meta charset="utf-8" />
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>
    <body onload="pageLoaded()">
        <section id="window" >
            <section id="outsideWindow">
                <section id="gameWindow" style="width:<?php
                echo $width;
                ?>; height:<?php
                         echo $height;
                         ?>;">
                    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="FFable" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="<?php
                    echo $width;
                    ?>" height="<?php
                            echo $height;
                            ?>" align="middle">
                        <param name="allowScriptAccess" value="sameDomain" />
                        <param name="movie" value="gamefiles/<?php
                        echo $loaderSWF;
                        ?>" />
                        <param name="menu" value="false" />
                        <param name="allowFullScreen" value="true" />

                        <param name="flashvars" value="strFileName=<?php
                        echo $gameSWF;
                        ?>" />
                        <param name="bgcolor" value="#530000" />
                        <embed src="gamefiles/<?php
                        echo $loaderSWF;
                        ?>" FLASHVARS="strFileName=<?php
                               echo $gameSWF;
                               ?>" name="FFable" bgcolor="#530000" menu="false"  allowFullScreen="true" width="<?php
                               echo $width;
                               ?>" height="<?php
                               echo $height;
                               ?>" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" swLiveConnect="true" />
                    </object>
                    <section id="linkWindow">
                        <span>
                            <a href="index.php">Play</a> | 
                            <a href="df-signup.php">Register</a> | 
                            <a href="mb-charTransfer.php">Transfer</a> | 
                            <a href="../top100.php">Top100</a> | 
                            <a href="../mb-bugTrack.php">Submit Bug</a> | 
                            <a href="../mb-lostpassword.php">Lost Password</a><br /><br />
                    </section>
                </section>
            </section>
        </section>
    </body>
</html>