<?PHP
if (isset($_GET['ajouter']))

{
    include "core/reservationVCore.php";
    include "entities/reservationV.php";

      $rv= new RVol($_GET['sexe'],$_GET['prenom'],$_GET['nom'],$_GET['datedenaissance'],$_GET['email'],$_GET['numerodetelephone'],0,$_GET['idvol'],$_GET['classe']);
      $rvC = new reservationVCore();
      $rvC->addreservation($rv);

    $to = "bayciitn@gmail.com";
    $subject = "Bonjour " . $_GET['prenom'] . "!  Votre FlySyphax Reservation Vol Informations";
    $from = "flysyhphax.chauffeur@gmail.com";
    $txt = '<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Fly Syphax</title>
</head>

<body style="-moz-box-sizing: border-box; -ms-text-size-adjust: 100%; -webkit-box-sizing: border-box; -webkit-text-size-adjust: 100%; Margin: 0; background: #F5F7F7 !important; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 19px; margin: 0; min-width: 100%; padding: 0; text-align: left; width: 100% !important; overflow-x: hidden;">
  <style>

    html {
        width: 100%;
    }
    #outlook a {
    padding: 0;
    } /* Force Outlook to provide a "view in browser" menu link. */
    body {
    width: 100% !important;
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    -webkit-font-smoothing: antialiased;
    margin: 0;
    padding: 0;
    } /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
    .ExternalClass {
    width: 100%;
    } /* Force Hotmail to display emails at full width */
    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
    line-height: 100%;
    } /* Force Hotmail to display normal line spacing. */
    #backgroundTable {
    margin: 0;
    padding: 0;
    width: 100% !important;
    line-height: 100% !important;
    }
    img {
    outline: none;
    text-decoration: none;
    border: none;
    -ms-interpolation-mode: bicubic;
    }
    a img {
    border: none;
    }
    table td {
    border-collapse: collapse;
    }
    table {
    border-collapse: collapse;
    mso-table-lspace: 0pt;
    mso-table-rspace: 0pt;
    }
    sup {
    vertical-align: top;
    line-height: 100%;
    }
    .appleLinksGrey a {color: #36495A !important; text-decoration: none; font-size: 20px !important;}
    .appleLinksBlue a {color: #0061AB !important; text-decoration: none;}


    @media only screen {
      html {
        min-height: 100%;
        background: #f3f3f3;
      }
    }

    @media only screen and (max-width: 606px) {
      td[class="grid-block"] table { width: 100%; }
      td[class="grid-block"] .spacer { display: none; }
      td[class="grid-block"] .row { padding: 0 !important; }
      td[class="grid-block"] .section {
          display: block;
          float: left;
          height: auto;
          padding: 7px 7px;
          margin-bottom: 8px;
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box;
          box-sizing: border-box;
      }
      td[class="grid-block"] .section.half {
          width: 49%;
      }
      td[class="grid-block"] .section.halfx {
          width: 100%;
      }
      td[class="grid-block"] .section.quarter {
          width: 23.5%;
      }
      td[class="grid-block"] .section.half:first-child,
      td[class="grid-block"] .section.quarter:first-child,
      td[class="grid-block"] .section.quarter + .spacer + .section.half { margin-right: 2%; }
      td[class="grid-block"] .section.full {
          width: 100%;
      }
      /* Mobile width resize */
      *[class=emailphoneresize] {
      width: 320px !important;
      }

      .small-float-center {
        margin: 0 auto !important;
        float: none !important;
        text-align: center !important;
      }
      .small-text-center {
        text-align: center !important;
      }
      .small-text-left {
        text-align: left !important;
      }
      .small-text-right {
        text-align: right !important;
      }
    }

    @media only screen and (max-width: 606px) {
      table.body table.container .hide-for-large {
        display: block !important;
        width: auto !important;
        overflow: visible !important;
      }
    }

    @media only screen and (max-width: 606px) {
      table.body table.container .row.hide-for-large,
      table.body table.container .row.hide-for-large {
        display: table !important;
        width: 100% !important;
      }
    }

    @media only screen and (max-width: 606px) {
      table.body table.container .show-for-large {
        display: none !important;
        width: 0;
        mso-hide: all;
        overflow: hidden;
      }
    }

    @media only screen and (max-width: 606px) {
      table.body img {
        width: auto;
        height: auto;
      }
      table.body center {
        min-width: 0 !important;
      }
      table.body .container {
        width: 100% !important;
      }
      table.body .columns,
      table.body .column {
        height: auto !important;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding-left: 0px !important;
        padding-right: 0px !important;
      }
      table.body .columns .column,
      table.body .columns .columns,
      table.body .column .column,
      table.body .column .columns {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      table.body .collapse .columns,
      table.body .collapse .column {
        padding-left: 0 !important;
        padding-right: 0 !important;
      }
      td.large-1,
      th.large-1 {
        width: 32.33333px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-1.first,
      th.large-1.first {
        padding-left: 30px; }

      td.large-1.last,
      th.large-1.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-1,
      .collapse > tbody > tr > th.large-1 {
        padding-right: 0;
        padding-left: 0;
        width: 48.33333px; }

      .collapse td.large-1.first,
      .collapse th.large-1.first,
      .collapse td.large-1.last,
      .collapse th.large-1.last {
        width: 56.33333px; }

      td.large-2,
      th.large-2 {
        width: 80.66667px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-2.first,
      th.large-2.first {
        padding-left: 30px; }

      td.large-2.last,
      th.large-2.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-2,
      .collapse > tbody > tr > th.large-2 {
        padding-right: 0;
        padding-left: 0;
        width: 96.66667px; }

      .collapse td.large-2.first,
      .collapse th.large-2.first,
      .collapse td.large-2.last,
      .collapse th.large-2.last {
        width: 104.66667px; }

      td.large-3,
      th.large-3 {
        width: 129px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-3.first,
      th.large-3.first {
        padding-left: 30px; }

      td.large-3.last,
      th.large-3.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-3,
      .collapse > tbody > tr > th.large-3 {
        padding-right: 0;
        padding-left: 0;
        width: 145px; }

      .collapse td.large-3.first,
      .collapse th.large-3.first,
      .collapse td.large-3.last,
      .collapse th.large-3.last {
        width: 153px; }

      td.large-4,
      th.large-4 {
        width: 177.33333px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-4.first,
      th.large-4.first {
        padding-left: 30px; }

      td.large-4.last,
      th.large-4.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-4,
      .collapse > tbody > tr > th.large-4 {
        padding-right: 0;
        padding-left: 0;
        width: 193.33333px; }

      .collapse td.large-4.first,
      .collapse th.large-4.first,
      .collapse td.large-4.last,
      .collapse th.large-4.last {
        width: 201.33333px; }

      td.large-5,
      th.large-5 {
        width: 225.66667px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-5.first,
      th.large-5.first {
        padding-left: 30px; }

      td.large-5.last,
      th.large-5.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-5,
      .collapse > tbody > tr > th.large-5 {
        padding-right: 0;
        padding-left: 0;
        width: 241.66667px; }

      .collapse td.large-5.first,
      .collapse th.large-5.first,
      .collapse td.large-5.last,
      .collapse th.large-5.last {
        width: 249.66667px; }

      td.large-6,
      th.large-6 {
        width: 274px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-6.first,
      th.large-6.first {
        padding-left: 30px; }

      td.large-6.last,
      th.large-6.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-6,
      .collapse > tbody > tr > th.large-6 {
        padding-right: 0;
        padding-left: 0;
        width: 290px; }

      .collapse td.large-6.first,
      .collapse th.large-6.first,
      .collapse td.large-6.last,
      .collapse th.large-6.last {
        width: 298px; }

      td.large-7,
      th.large-7 {
        width: 322.33333px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-7.first,
      th.large-7.first {
        padding-left: 30px; }

      td.large-7.last,
      th.large-7.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-7,
      .collapse > tbody > tr > th.large-7 {
        padding-right: 0;
        padding-left: 0;
        width: 338.33333px; }

      .collapse td.large-7.first,
      .collapse th.large-7.first,
      .collapse td.large-7.last,
      .collapse th.large-7.last {
        width: 346.33333px; }

      td.large-8,
      th.large-8 {
        width: 370.66667px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-8.first,
      th.large-8.first {
        padding-left: 30px; }

      td.large-8.last,
      th.large-8.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-8,
      .collapse > tbody > tr > th.large-8 {
        padding-right: 0;
        padding-left: 0;
        width: 386.66667px; }

      .collapse td.large-8.first,
      .collapse th.large-8.first,
      .collapse td.large-8.last,
      .collapse th.large-8.last {
        width: 394.66667px; }

      td.large-9,
      th.large-9 {
        width: 419px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-9.first,
      th.large-9.first {
        padding-left: 30px; }

      td.large-9.last,
      th.large-9.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-9,
      .collapse > tbody > tr > th.large-9 {
        padding-right: 0;
        padding-left: 0;
        width: 435px; }

      .collapse td.large-9.first,
      .collapse th.large-9.first,
      .collapse td.large-9.last,
      .collapse th.large-9.last {
        width: 443px; }

      td.large-10,
      th.large-10 {
        width: 467.33333px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-10.first,
      th.large-10.first {
        padding-left: 30px; }

      td.large-10.last,
      th.large-10.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-10,
      .collapse > tbody > tr > th.large-10 {
        padding-right: 0;
        padding-left: 0;
        width: 483.33333px; }

      .collapse td.large-10.first,
      .collapse th.large-10.first,
      .collapse td.large-10.last,
      .collapse th.large-10.last {
        width: 491.33333px; }

      td.large-11,
      th.large-11 {
        width: 515.66667px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-11.first,
      th.large-11.first {
        padding-left: 30px; }

      td.large-11.last,
      th.large-11.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-11,
      .collapse > tbody > tr > th.large-11 {
        padding-right: 0;
        padding-left: 0;
        width: 531.66667px; }

      .collapse td.large-11.first,
      .collapse th.large-11.first,
      .collapse td.large-11.last,
      .collapse th.large-11.last {
        width: 539.66667px; }

      td.large-12,
      th.large-12 {
        width: 564px;
        padding-left: 8px;
        padding-right: 8px; }

      td.large-12.first,
      th.large-12.first {
        padding-left: 30px; }

      td.large-12.last,
      th.large-12.last {
        padding-right: 30px; }

      .collapse > tbody > tr > td.large-12,
      .collapse > tbody > tr > th.large-12 {
        padding-right: 0;
        padding-left: 0;
        width: 600px; }

      .collapse td.large-12.first,
      .collapse th.large-12.first,
      .collapse td.large-12.last,
      .collapse th.large-12.last {
        width: 708px; }

      td.large-1 center,
      th.large-1 center {
        min-width: 0.33333px; }

      td.large-2 center,
      th.large-2 center {
        min-width: 48.66667px; }

      td.large-3 center,
      th.large-3 center {
        min-width: 97px; }

      td.large-4 center,
      th.large-4 center {
        min-width: 145.33333px; }

      td.large-5 center,
      th.large-5 center {
        min-width: 193.66667px; }

      td.large-6 center,
      th.large-6 center {
        min-width: 242px; }

      td.large-7 center,
      th.large-7 center {
        min-width: 290.33333px; }

      td.large-8 center,
      th.large-8 center {
        min-width: 338.66667px; }

      td.large-9 center,
      th.large-9 center {
        min-width: 387px; }

      td.large-10 center,
      th.large-10 center {
        min-width: 435.33333px; }

      td.large-11 center,
      th.large-11 center {
        min-width: 483.66667px; }

      td.large-12 center,
      th.large-12 center {
        min-width: 532px; }

      .body .columns td.large-1,
      .body .column td.large-1,
      .body .columns th.large-1,
      .body .column th.large-1 {
        width: 8.33333%; }

      .body .columns td.large-2,
      .body .column td.large-2,
      .body .columns th.large-2,
      .body .column th.large-2 {
        width: 16.66667%; }

      .body .columns td.large-3,
      .body .column td.large-3,
      .body .columns th.large-3,
      .body .column th.large-3 {
        width: 25%; }

      .body .columns td.large-4,
      .body .column td.large-4,
      .body .columns th.large-4,
      .body .column th.large-4 {
        width: 33.33333%; }

      .body .columns td.large-5,
      .body .column td.large-5,
      .body .columns th.large-5,
      .body .column th.large-5 {
        width: 41.66667%; }

      .body .columns td.large-6,
      .body .column td.large-6,
      .body .columns th.large-6,
      .body .column th.large-6 {
        width: 50%; }

      .body .columns td.large-7,
      .body .column td.large-7,
      .body .columns th.large-7,
      .body .column th.large-7 {
        width: 58.33333%; }

      .body .columns td.large-8,
      .body .column td.large-8,
      .body .columns th.large-8,
      .body .column th.large-8 {
        width: 66.66667%; }

      .body .columns td.large-9,
      .body .column td.large-9,
      .body .columns th.large-9,
      .body .column th.large-9 {
        width: 75%; }

      .body .columns td.large-10,
      .body .column td.large-10,
      .body .columns th.large-10,
      .body .column th.large-10 {
        width: 83.33333%; }

      .body .columns td.large-11,
      .body .column td.large-11,
      .body .columns th.large-11,
      .body .column th.large-11 {
        width: 91.66667%; }

      .body .columns td.large-12,
      .body .column td.large-12,
      .body .columns th.large-12,
      .body .column th.large-12 {
        width: 100%; }

      td.large-offset-1,
      td.large-offset-1.first,
      td.large-offset-1.last,
      th.large-offset-1,
      th.large-offset-1.first,
      th.large-offset-1.last {
        padding-left: 64.33333px; }

      td.large-offset-2,
      td.large-offset-2.first,
      td.large-offset-2.last,
      th.large-offset-2,
      th.large-offset-2.first,
      th.large-offset-2.last {
        padding-left: 112.66667px; }

      td.large-offset-3,
      td.large-offset-3.first,
      td.large-offset-3.last,
      th.large-offset-3,
      th.large-offset-3.first,
      th.large-offset-3.last {
        padding-left: 161px; }

      td.large-offset-4,
      td.large-offset-4.first,
      td.large-offset-4.last,
      th.large-offset-4,
      th.large-offset-4.first,
      th.large-offset-4.last {
        padding-left: 209.33333px; }

      td.large-offset-5,
      td.large-offset-5.first,
      td.large-offset-5.last,
      th.large-offset-5,
      th.large-offset-5.first,
      th.large-offset-5.last {
        padding-left: 257.66667px; }

      td.large-offset-6,
      td.large-offset-6.first,
      td.large-offset-6.last,
      th.large-offset-6,
      th.large-offset-6.first,
      th.large-offset-6.last {
        padding-left: 306px; }

      td.large-offset-7,
      td.large-offset-7.first,
      td.large-offset-7.last,
      th.large-offset-7,
      th.large-offset-7.first,
      th.large-offset-7.last {
        padding-left: 354.33333px; }

      td.large-offset-8,
      td.large-offset-8.first,
      td.large-offset-8.last,
      th.large-offset-8,
      th.large-offset-8.first,
      th.large-offset-8.last {
        padding-left: 402.66667px; }

      td.large-offset-9,
      td.large-offset-9.first,
      td.large-offset-9.last,
      th.large-offset-9,
      th.large-offset-9.first,
      th.large-offset-9.last {
        padding-left: 451px; }

      td.large-offset-10,
      td.large-offset-10.first,
      td.large-offset-10.last,
      th.large-offset-10,
      th.large-offset-10.first,
      th.large-offset-10.last {
        padding-left: 499.33333px; }

      td.large-offset-11,
      td.large-offset-11.first,
      td.large-offset-11.last,
      th.large-offset-11,
      th.large-offset-11.first,
      th.large-offset-11.last {
        padding-left: 547.66667px; }
      td.small-1,
      th.small-1 {
        display: inline-block !important;
        width: 8.33333% !important;
      }
      td.small-2,
      th.small-2 {
        display: inline-block !important;
        width: 16.66667% !important;
      }
      td.small-3,
      th.small-3 {
        display: inline-block !important;
        width: 25% !important;
      }
      td.small-4,
      th.small-4 {
        display: inline-block !important;
        width: 33.33333% !important;
      }
      td.small-5,
      th.small-5 {
        display: inline-block !important;
        width: 41.66667% !important;
      }
      td.small-6,
      th.small-6 {
        display: inline-block !important;
        width: 50% !important;
      }
      td.small-7,
      th.small-7 {
        display: inline-block !important;
        width: 58.33333% !important;
      }
      td.small-8,
      th.small-8 {
        display: inline-block !important;
        width: 66.66667% !important;
      }
      td.small-9,
      th.small-9 {
        display: inline-block !important;
        width: 75% !important;
      }
      td.small-10,
      th.small-10 {
        display: inline-block !important;
        width: 83.33333% !important;
      }
      td.small-11,
      th.small-11 {
        display: inline-block !important;
        width: 91.66667% !important;
      }
      td.small-12,
      th.small-12 {
        display: block !important;
        width: 100% !important;
      }
      .columns td.small-12,
      .column td.small-12,
      .columns th.small-12,
      .column th.small-12 {
        width: 100% !important;
      }
      table.body td.small-offset-1,
      table.body th.small-offset-1 {
        margin-left: 8.33333% !important;
        Margin-left: 8.33333% !important;
      }
      table.body td.small-offset-2,
      table.body th.small-offset-2 {
        margin-left: 16.66667% !important;
        Margin-left: 16.66667% !important;
      }
      table.body td.small-offset-3,
      table.body th.small-offset-3 {
        margin-left: 25% !important;
        Margin-left: 25% !important;
      }
      table.body td.small-offset-4,
      table.body th.small-offset-4 {
        margin-left: 33.33333% !important;
        Margin-left: 33.33333% !important;
      }
      table.body td.small-offset-5,
      table.body th.small-offset-5 {
        margin-left: 41.66667% !important;
        Margin-left: 41.66667% !important;
      }
      table.body td.small-offset-6,
      table.body th.small-offset-6 {
        margin-left: 50% !important;
        Margin-left: 50% !important;
      }
      table.body td.small-offset-7,
      table.body th.small-offset-7 {
        margin-left: 58.33333% !important;
        Margin-left: 58.33333% !important;
      }
      table.body td.small-offset-8,
      table.body th.small-offset-8 {
        margin-left: 66.66667% !important;
        Margin-left: 66.66667% !important;
      }
      table.body td.small-offset-9,
      table.body th.small-offset-9 {
        margin-left: 75% !important;
        Margin-left: 75% !important;
      }
      table.body td.small-offset-10,
      table.body th.small-offset-10 {
        margin-left: 83.33333% !important;
        Margin-left: 83.33333% !important;
      }
      table.body td.small-offset-11,
      table.body th.small-offset-11 {
        margin-left: 91.66667% !important;
        Margin-left: 91.66667% !important;
      }
      table.body table.columns td.expander,
      table.body table.columns th.expander {
        display: none !important;
      }
      table.body .right-text-pad,
      table.body .text-pad-right {
        padding-left: 10px !important;
      }
      table.body .left-text-pad,
      table.body .text-pad-left {
        padding-right: 10px !important;
      }
      table.menu {
        width: 100% !important;
      }
      table.menu td,
      table.menu th {
        width: auto !important;
        display: inline-block !important;
      }
      table.menu.vertical td,
      table.menu.vertical th,
      table.menu.small-vertical td,
      table.menu.small-vertical th {
        display: block !important;
      }
      table.menu[align="center"] {
        width: auto !important;
      }
    }
  </style>
  
    <img src="https://tag.yieldoptimizer.com/ps/ps?t=i&amp;p=2398&amp;exetds=20160713" width="1" height="1">
  <img src="https://pixel.sojern.com/pixel/img/32715?p_v=1&amp;f_v=v3_image&amp;vid=air" width="1" height="1">

  <table class="body" data-made-with-foundation="" style="Margin: 0; background: #ffffff !important; border-collapse: collapse; border-spacing: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; height: 100%; line-height: 19px; margin: 0; padding: 0; text-align: left; vertical-align: top; width: 100%; overflow-x:hidden;">
    <tbody>
      <tr style="padding: 0; text-align: left; vertical-align: top;">
        <td class="float-center" align="center" valign="top">
          <center data-parsed="" style="min-width: 600px; width: 100%;">
            <table class="container float-center" style="Margin: 0 auto; background: #fefefe; border-collapse: collapse; border-spacing: 0; float: none; margin: 0 auto; padding: 0; text-align: center; vertical-align: top; width: 600px;">
              <tbody>
                <tr style="padding: 0; text-align: left; vertical-align: top;">
                  <td>
                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td height="16px" style="font-size:16px;line-height:16px;">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <th class="small-12 large-12 columns first last" style="Margin: 0 auto; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 19px; margin: 0 auto; padding: 0; padding-bottom: 16px; padding-left: 16px; padding-right: 16px; text-align: left; width: 564px;">
                            <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                              <tbody>
                                <tr style="padding: 0; text-align: left; vertical-align: top;">
                                  <th style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 19px; margin: 0; padding: 0; text-align: left;">
                                    
                                    <table class="row" style="border-collapse: collapse; border-spacing: 0; display: table; padding: 0; position: relative; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td style="padding-left:30px;">
                                          <center> <a href="https://www.aa.com/homePage.do" target="_blank"><img src="D:/6%20-%20Work/01%20-%20Syphax%20Airlines/FLysyphax%20logo/blue0.png" class="float-left" style="-ms-interpolation-mode: bicubic; clear: both; display: block; float: left; max-width: 100%; outline: none; text-align: left; text-decoration: none; width: auto;"></a></center> 
                                          </td>
                                          <td style="padding-right:30px;" algin="right;">
                                          <th class="expander" style="Margin: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 19px; margin: 0; padding: 0 !important; text-align: left; visibility: hidden; width: 0;"></th>
                                        </tr>
                                      </tbody>
                                    </table>
                                    
                                    <hr style="border-bottom: 1px solid #cacaca; border-left: 0; border-right: 0; border-top: 0; clear: both; height: 0; margin-top:10px; max-width: 600px;">
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="10px" style="font-size:10px;line-height:10px;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td style="padding-left: 30px;">
                                            <p class="text-left text-small" style="Margin: 0;color: #36495A; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 14px; margin: 0 0 10px 0; padding: 0; text-align: left;">
                                              Bonjour '. $_GET['prenom']. ' 
											  
                                              </p>
                                          </td>
                                          <td style="padding-right: 30px;">
                                            <p class="text-right" style="Margin: 0; color: #36495A; font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal; line-height: 14px; margin: 0 0 10px 0; padding: 0; text-align: right;">
                                                 
                                            </p>
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td background="http://images.appriss.com/amair/email/header-background.png" bgcolor="#1279ce" width="548" valign="top">
                                            
                                            <div>
                                              <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                <tbody>
                                                  <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                    <td height="15px" style="font-size:15px;line-height:15px;">&nbsp;</td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                              <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                <tbody>
                                                  <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                    <td>
                                                      <center style="min-width: 532px; width: 100%;"><img src="http://images.appriss.com/amair/email/HeaderIcon-Ticket.png" class="header-logo-img" style="-ms-interpolation-mode: bicubic; clear: both; display: block; max-width: 100%; outline: none; padding-bottom: 0; padding-top: 0px; text-decoration: none; width: auto;"></center>
                                                    </td>
                                                  </tr>
                                                  <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                    <td>
                                                      <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                        <tbody>
                                                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                            <td height="15px" style="font-size:15;line-height:15px;">&nbsp;</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                  <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                    <td>
                                                      <p class="text-center header-logo-text" style="color: #ffffff; font-family: Helvetica, Arial, sans-serif; font-size: 27px; font-weight: normal; line-height: 27px; margin: 0; padding: 0; text-align: center;">
                                                        
                                                         Votre confirmation de vol 
                                                        
                                                      </p>
                                                    </td>
                                                  </tr>
                                                  <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                    <td>
                                                      <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                        <tbody>
                                                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                            <td height="10px" style="font-size:10px;line-height:10px;">&nbsp;</td>
                                                          </tr>
                                                        </tbody>
                                                      </table>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </div>
                                            
                                          </td>
                                        </tr>
                                      </tbody>
                                    </table>


                                    
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                        <tbody>
                                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                                            <td height="25px" style="font-size:25px;line-height:25px;">&nbsp;</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <table style="width:100%;">
                                      <tbody><tr>
                                        <td>
                                          <p style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 18px; font-weight: normal;  margin: 0; padding: 0; text-align: center; padding-left:30px; padding-right:30px;">
                                            ID VOL : <b> '. $_GET['idvol'].'</b>
                                          </p>
                                        </td>
                                      </tr>
                                    </tbody></table>
                                    
                                    <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td>
                                            <p style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal;  margin: 0; padding: 0; text-align: left; padding-left:30px; padding-right:30px;">
                                                
                                            </p>
                                            </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    
                                    <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                      <tbody>
                                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                                          <td height="20px" style="font-size:20px;line-height:20px;">&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <center style="min-width: 532px; width: 100%;">
                                      <table class="button" style="border-collapse: collapse; border-spacing: 0; margin: 0 0 16px 0; padding: 0; text-align: left; vertical-align: top; width: auto !important;">
                                        <tbody>
                                          <tr style="padding: 0; text-align: left; vertical-align: top;">
                                            <td>
                                              <table style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                                <tbody>
                                                  <tr style="padding: 0; text-align: left; vertical-align: top;">
                                                    <td>

                                                                                    <a style="border: 1px solid #0061ab; border-radius: 3px; color: #0061ab; display: inline-block; font-family: Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 1.3; margin: 0; padding: 6px 0px 6px 0px; text-align: left; text-decoration: none;" href="http://localhost/client/web/Vols/checkin.php?id='.$_GET['idvol'].'&nom='.$_GET['prenom'].'" target="_blank">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        Check-in En Ligne
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                                                                              </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                            </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                      <center style="min-width: 532px; width: 100%;">
                                      </center>
                                    </center>
                                    
                                  </th>
                                </tr>
                              </tbody>
                            </table>
                            
                            
                            
                            
                            <hr class="black-solid" style="Margin: 20px auto; border-bottom: 1px solid #9da6ab; border-color: #9da6ab; border-left: 0; border-right: 0; border-top: 0; clear: both; height: 0; margin: 15px auto 35px auto; max-width: 600px;">

                            
                 
                     
                                  
                            
                            
                            
                            
                            

                            
                                <hr class="grey-dashed" style="border-bottom: 1px solid #cacaca; border-left: 0; border-right: 0; border-style: dashed; border-top: 0; clear: both; height: 0; margin: 10px auto; max-width: 600px;">
                                <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                                  <tbody>
                                    <tr style="padding: 0; text-align: left; vertical-align: top;">
                                      <td height="25px" style="font-size:25px;line-height:25px;">&nbsp;</td>
                                    </tr>
                                  </tbody>
                                </table>
                            
               
                            
                            
                            
                            
                            


                            

                <table class="spacer" style="border-collapse: collapse; border-spacing: 0; padding: 0; text-align: left; vertical-align: top; width: 100%;">
                      <tbody>
                        <tr style="padding: 0; text-align: left; vertical-align: top;">
                          <td height="16px" style="font-size:16px;line-height:16px;">&nbsp;</td>
                        </tr>
                      </tbody>
                    </table>
                    

                    
                    
                    <table cellpadding="0" cellspacing="0">
                        <tbody><tr>
                            <td class="grid-block" width="600">
                                <table cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                                    <tbody><tr>
                                        <td class="row" style="padding-top: 8px; padding-bottom: 8px;">
                                            <table cellpadding="0" cellspacing="0">
                                               <tbody><tr>
													<td class="section half" width="144" height="auto" align="center" valign="middle" style="font-family: arial,sans-serif; font-size: 14px; color: #fff; background: #ffffff;">
                                                         <a href="https://www.booking.com/" style="font-family: arial,sans-serif; font-size: 14px; font-weight: bold; color: #0078D2; padding-top: 5px; text-decoration: none;" urlid="3488755" reportname="Book_a_hotel-ICON" target="_blank" frontuid="5034258">
                                                          <img src="http://www.aa.com/content/images/email/-AirlineTriggers/OTAThankYou/icons/Hotel.jpg" width="95" alt="Book a hotel" style="display: block; border: 0; padding-bottom: 5px;width:95px;" title="Book a hotel">
                                                        Hotel&nbsp;offers</a>
                                                    </td>
													<td class="spacer" width="8" style="font-size: 1px;">&nbsp;</td>
                                                    <td class="section half" width="144" align="center" valign="middle" style="font-family: arial,sans-serif; font-size: 14px; color: #fff; background: #ffffff;">
                                                        <a href="#" style="color: #0078D2; text-decoration: none;" urlid="3488754" reportname="Book_a_car-ICON" target="_blank" frontuid="5034259">
                                                          <img src="http://www.aa.com/content/images/email/-AirlineTriggers/OTAThankYou/icons/Car.jpg" width="95" alt="Book a car" style="display: block; border: 0; padding-bottom: 5px; width:95px;" title="Book a car">
                                                        <span style="font-family: arial,sans-serif; font-size: 14px; line-height: 16px; font-weight: bold; color: #0078D2; padding-top: 10px; text-decoration: none;">Car&nbsp;rental&nbsp;offers</span></a>
                                                        
                                                    </td>
                                                    <td class="spacer" width="8" style="font-size: 1px;">&nbsp;</td>
                                                    <td class="section half" width="144" height="auto" align="center" valign="middle" style="font-family: arial,sans-serif; font-size: 14px; color: #fff; background: #ffffff;">
                                                       <a href="https://www.etravelprotection.com/aa/?csid=E11" style="font-family: arial,sans-serif; font-size: 14px; font-weight: bold; color: #0078D2; padding-top: 5px; text-decoration: none;" urlid="3488756" reportname="Trip_insurance-ICON" target="_blank" frontuid="5034257">
                                                          <img src="http://www.aa.com/content/images/email/-AirlineTriggers/OTAThankYou/icons/Insurance.jpg" width="95" alt="Buy trip insurance" style="display: block; border: 0; padding-bottom: 5px; width:95px;" title="Buy trip insurance">
                                                        Buy&nbsp;trip&nbsp;insurance</a>
                                                    </td>
                                                    <td class="spacer" width="8" style="font-size: 1px;">&nbsp;</td>
                                                    <td class="section half" width="144" height="auto" align="center" valign="middle" style="font-family: arial,sans-serif; font-size: 14px; color: #fff; background: #ffffff;">
                                                        <a href="https://www.supershuttle.com/american/?utm_source=aaemail&amp;utm_campaign=2017_07_21_American-Airlines-Email&amp;utm_medium=-&amp;utm_term=-&amp;utm_content=link" style="font-family: arial,sans-serif; font-size: 14px; font-weight: bold; color: #0078D2; padding-top: 5px; text-decoration: none;" urlid="3488757" reportname="SuperShuttle-Icon" target="_blank" frontuid="5034256">
                                                          <img src="http://www.aa.com//content/images/email/-AirlineTriggers/OTAThankYou/icons/ride_share.jpg" width="95" alt="SuperShuttle" style="display: block; border: 0; padding-bottom: 5px; width:95px;" title="SuperShuttle">
                                                        SuperShuttle</a>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        </td>
                                    </tr>
                                </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
                    
                    
                     

                    
                    
        
          
        </td>
      </tr>
    </tbody>
  </table>
  <img src="http://aa.appriss.com/marketing-api/icon_image" border="0" height="1" width="1">




</center></td></tr></tbody></table></body> ';


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $txt, $headers);


    header('Location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FlySyphax</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="wIdReclamationth=device-wIdReclamationth, initial-scale=1">
    <link rel="stylesheet" Message="text/css" href="../styles/bootstrap4/bootstrap.min.css">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" Message="text/css">
    <link rel="stylesheet" Message="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" Message="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" Message="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" Message="text/css" href="../styles/main_styles.css">
    <link rel="stylesheet" Message="text/css" href="../styles/responsive.css">
</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <?php

        session_start();

        if (!(isset($_SESSION['login']) && isset($_SESSION['pwd'])))
        {

            ?>
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="phone">+216 70 019 161</div>

                            <div class="user_box ml-auto">
                                <div class="user_box_login user_box_link"><a href="auth.php">login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else {   ?>
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex flex-row">
                            <div class="phone">Bonjour <?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?></div>

                            <div class="user_box ml-auto">
                                <div class="user_box_login user_box_link"><a href="logout.php">Déconnexion</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        <?php } ?>
        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <div class="logo"><a href="template/#"><img src="../images/logo.png" alt=""></a></div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="template/#">home</a></li>
                                <li class="main_nav_item"><a href="template/about.html">about us</a></li>
                                <li class="main_nav_item"><a href="template/offers.html">offers</a></li>
                                <li class="main_nav_item"><a href="template/blog.html">news</a></li>
                                <li class="main_nav_item"><a href="template/contact.html">contact</a></li>
                            </ul>
                        </div>
                        <div class="content_search ml-lg-0 ml-auto">
                            <svg version="1.1" IdReclamation="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 wIdReclamationth="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
                                    <g>
                                        <g>
                                            <path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
                                        </g>
                                    </g>
                                </g>
							</svg>
                        </div>

                        <form IdReclamation="search_form" class="search_form bez_1">
                            <input Message="search" class="search_content_input bez_1">
                        </form>

                        <div class="hamburger">
                            <i class="fa fa-bars trans_200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <div class="logo menu_logo"><a href="index.php"><img src="../images/logo.png" alt=""></a></div>
            <ul>
                <li class="menu_item"><a href="index.php">home</a></li>
                <li class="menu_item"><a href="template/about.html">about us</a></li>
                <li class="menu_item"><a href="template/offers.html">offers</a></li>
                <li class="menu_item"><a href="template/blog.html">news</a></li>
                <li class="menu_item"><a href="template/contact.html">contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <br>
    <br>
    <br>
    <br>
    <br>



        <br>
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Contact Form -->
                    <div class="contact_form_container" style="height: 100%; ">
                        <div class="contact_title text-center">Nouvelle reservation de vol</div>
                        <form  class="contact_form text-center">
                            <input  style="text-align: center;" Message="text"  class="contact_form_subject input_field" name="idvol" placeholder="Votre Prénom" hidden required value="<?php echo $_GET['idvol'] ; ?>" >

                            <input style="text-align: center;" Message="text"  class="contact_form_subject input_field" name="prenom" placeholder="Votre Prénom" required value="<?php if(isset($_SESSION['login'])) { echo $_SESSION['prenom'] ; } ?>" >

                            <input style="text-align: center;"  Message="text"  class="contact_form_subject input_field" name="nom" placeholder="Votre Nom" required value="<?php if(isset($_SESSION['login'])) { echo $_SESSION['nom'] ; } ?>">

                            <input type="date" style="text-align: center;" Message="date"  class="contact_form_subject input_field" name="datedenaissance" placeholder="Votre Date de naissance" required >

                            <input style="text-align: center;" Message="email"  class="contact_form_subject input_field" name="email" placeholder="Votre adresse mail" required value="<?php  if(isset($_SESSION['login'])) { echo $_SESSION['email'] ; } ?>">

                            <input style="text-align: center;" Message="text"  class="contact_form_subject input_field" name="numerodetelephone" placeholder="Votre Numero de telephone" required value="<?php if(isset($_SESSION['login'])) { echo $_SESSION['numero'] ; } ?>">

                             <br> <br>
                            <input  type="radio" class="contact_form_subject input_field" name="sexe" value="m" style="float: left;">
                            <label for="sexe" class="contact_form_subject input_field" >Masculin</label>
                            <input type="radio" class="contact_form_subject input_field" name="sexe" value="f">
                            <label for="sexe" class="contact_form_subject input_field" >Féminin</label>


                            <input type="radio" class="contact_form_subject input_field" name="classe" value="e">
                            <label for="classe" class="contact_form_subject input_field" >économique</label>
                            <input type="radio" class="contact_form_subject input_field" name="classe" value="b">
                            <label for="classe" class="contact_form_subject input_field" >buisness</label>
                            <input type="submit" class="button search_button" name="ajouter" value="Reserver"><span></span><span></span><span></span></button>

                        </form>
                    </div>

                </div>
            </div>
        </div>


    <!-- Search -->



    <!-- Footer -->



    <!-- Copyright -->


</div>
<br>



    <!-- Search Contents -->

</div>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../js/custom.js"></script>

</body>

</html>