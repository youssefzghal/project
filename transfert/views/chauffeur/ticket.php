<?php

if(isset($_GET['id']) )

{

    include "../../dbConfig/config.php";
    include "../../entities/transfert.php";
    include "../../core/transfertCore.php";


        $cCore = new transfertCore();
        $liste = $cCore->getOneTransferts($_GET['id']);
        foreach ($liste as $resultat) {
        }
?>

    <html>
    <head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
        <style type="text/css">
            span.cls_003{font-family:Arial,serif;font-size:19.8px;color:rgb(255,255,255);font-weight:bold;font-style:normal;text-decoration: none}
            div.cls_003{font-family:Arial,serif;font-size:19.8px;color:rgb(255,255,255);font-weight:bold;font-style:normal;text-decoration: none}
            span.cls_002{font-family:Arial,serif;font-size:42.3px;color:rgb(255,255,255);font-weight:bold;font-style:normal;text-decoration: none}
            div.cls_002{font-family:Arial,serif;font-size:42.3px;color:rgb(255,255,255);font-weight:bold;font-style:normal;text-decoration: none}
            span.cls_005{font-family:Arial,serif;font-size:8.1px;color:rgb(123,225,150);font-weight:normal;font-style:normal;text-decoration: none}
            div.cls_005{font-family:Arial,serif;font-size:8.1px;color:rgb(123,225,150);font-weight:normal;font-style:normal;text-decoration: none}
            span.cls_004{font-family:Arial,serif;font-size:8.1px;color:rgb(255,255,255);font-weight:normal;font-style:normal;text-decoration: none}
            div.cls_004{font-family:Arial,serif;font-size:8.1px;color:rgb(255,255,255);font-weight:normal;font-style:normal;text-decoration: none}
            span.cls_006{font-family:Arial,serif;font-size:55.2px;color:rgb(255,255,255);font-weight:bold;font-style:normal;text-decoration: none}
            div.cls_006{font-family:Arial,serif;font-size:55.2px;color:rgb(255,255,255);font-weight:bold;font-style:normal;text-decoration: none}

        </style>
    </head>
    <body>
    <div style="position:absolute;left:50%;margin-left:-323px;top:0px;width:646px;height:232px;border-style:outset;overflow:hidden">
        <div style="position:absolute;left:0px;top:0px">
            <img src="ticket.jpg" width=646 height=232></div>
        <div style="position:absolute;left:603.83px;top:17.76px" class="cls_003"><span class="cls_003">T</span></div>
        <div style="position:absolute;left:601.46px;top:39.16px" class="cls_003"><span class="cls_003">R</span></div>
        <div style="position:absolute;left:261.54px;top:38.40px" class="cls_002"><span class="cls_002">TICKET</span></div>
        <div style="position:absolute;left:600.12px;top:60.55px" class="cls_003"><span class="cls_003">A</span></div>
        <div style="position:absolute;left:599.30px;top:81.94px" class="cls_003"><span class="cls_003">N</span></div>
        <div style="position:absolute;left:425.03px;top:119.65px" class="cls_005"><span class="cls_005">DATE : <?php  echo strtoupper($resultat['date']) ; ?></span></div>

        <div style="position:absolute;left:425.03px;top:133.28px" class="cls_005"><span class="cls_005">TEMPS : <?php  echo strtoupper($resultat['temps']) ; ?></span></div>
        <div style="position:absolute;left:602.33px;top:103.33px" class="cls_003"><span class="cls_003">S</span></div>
        <div style="position:absolute;left:238.30px;top:119.65px" class="cls_004"><span class="cls_004">CLIENT : <?php  echo strtoupper($resultat['user']) ; ?></span></div>
        <div style="position:absolute;left:238.30px;top:133.28px" class="cls_004"><span class="cls_004">CHAUFFEUR : <?php  echo strtoupper($resultat['chauffeur']) ; ?></span></div>
        <div style="position:absolute;left:604.40px;top:124.72px" class="cls_003"><span class="cls_003">F</span></div>
        <div style="position:absolute;left:604.14px;top:146.11px" class="cls_003"><span class="cls_003">E</span></div>
        <div style="position:absolute;left:601.46px;top:167.51px" class="cls_003"><span class="cls_003">R</span></div>
        <div style="position:absolute;left:270.82px;top:156.51px" class="cls_006"><span class="cls_006" style="opacity : 0.1;">FLYSYPHAX</span></div>
        <div style="position:absolute;left:603.83px;top:188.90px" class="cls_003"><span class="cls_003">T</span></div>
    </div>

    </body>
    <script>
        window.print();
    </script>
    </html>

 <?php

}
else {

    header('Location:notconfirmed.php');

} ?>