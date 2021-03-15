<!DOCTYPE html>
<html lang = "it-IT">
<html>
   <head>
      <meta http-equiv="refresh" content="5" >
      <meta charset = "UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel = "stylesheet" type = "text/css" href = "../includes/css/style.css" />
      <script src="https://kit.fontawesome.com/16bf0b68bf.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@400;700;800&display=swap" rel="stylesheet">
   </head>
   <header>
      <div style="margin-left: 30%;">
        <img style="margin-top: 20px;"src="../includes/img/logo.png" width="250" alt="inorbita.com">
       <div style="margin-top: 20px;">
        <font style="font-family: 'Nanum Gothic', sans-serif; font-size: 25px;">Monitoraggio delle infrastrutture InOrbita</font>
      </div>
      </div>
   </header>
   <body>
     <!--
    <div style="margin-left: 20%; margin-top: 30px; margin-right: 20%;">
      <div class="alert alert-warning" role="alert">
<h4 class="alert-heading">Avviso!</h4>
<p>Al momento non risulta alcuna manutenzione pianificata alle infrastrutture.</p>
<hr>
<p class="mb-0">Ultimo controllo eseguito il: <?php // date_default_timezone_set("Europe/Rome"); echo "" . date("d/m/Y") . ", alle ore: "; echo "" . date("h:ia") . ""; ?></p>
</div>
   </div>
 -->
     <!----------->
     <div style="margin-top: 30px; margin-left: 30%;">
        <font style="font-family: 'Nanum Gothic', sans-serif; margin-top: 10px;"><b>Infrastruttura A00/00</b></font>
       <div style="margin-top: 5px;">
         <?php
    $ip = "77.39.210.94";
    if(isset($ip)){
    $host = $ip;
    $port = 80;
    $waitTimeoutInSeconds = 1;
    ?>
    <?php if($fp = fsockopen($host,$port,$errCode,$errStr,$waitTimeoutInSeconds)){ ?>
      <?php $alert = 0; ?>
      <font style="font-family: 'Nanum Gothic', sans-serif;" color="green"><i class="fas fa-check-circle"></i></font>&nbsp;&nbsp;Server Altair - Roma (Roma)</font>
      <div style="margin-top: 20px; margin-right: 40%;">
      <div class="alert alert-success" role="alert">
        <p>A seguito dell'ultimo controllo, tutte le infrastrutture sono risultate operative. </p>
        <hr>
        <p class="mb-0">Ultimo controllo eseguito il: <?php date_default_timezone_set("Europe/Rome"); echo "" . date("d/m/Y") . ", alle ore: "; echo "" . date("h:ia") . ""; ?></p>
      </div>
    </div>
    <?php } else { ?>
      <font style="font-family: 'Nanum Gothic', sans-serif;" color="red"><i class="fas fa-times-circle"></i></font>&nbsp;&nbsp;Server Altair - Roma (Roma)</font>
      <div style="margin-top: 20px; margin-right: 40%;">
      <div class="alert alert-danger" role="alert">
        <p>A seguito dell'ultimo controllo, &egrave; risultato un problema ad una infrastruttura. </p>
        <hr>
        <p class="mb-0">Ultimo controllo eseguito il: <?php date_default_timezone_set("Europe/Rome"); echo "" . date("d/m/Y") . ", alle ore: "; echo "" . date("h:ia") . ""; ?></p>
      </div>
    </div>
    <?php }
    fclose($fp);
    }
    ?>
      </div>
      </div>

     <!-------------->

     <!----------->
     <div style="margin-top: 30px;">
     </div>
     <center>
      <hr width="15%" color="grey">
   </center>
     <div style="margin-left: 30%;">
        <font style="font-family: 'Nanum Gothic', sans-serif; margin-top: 10px;"><b>Infrastruttura A01/00</b></font>
       <div style="margin-top: 5px;">
         <?php
    $ip2 = "lstrxne18zdiyozo.myfritz.net";
    if(isset($ip2)){
    $host2 = $ip2;
    $port2 = 42326;
    $waitTimeoutInSeconds2 = 1;
    ?>
    <?php if($fp2 = fsockopen($host2,$port2,$errCode2,$errStr2,$waitTimeoutInSeconds2)){ ?>
      <font style="font-family: 'Nanum Gothic', sans-serif;" color="green"><i class="fas fa-check-circle"></i></i></font>&nbsp;&nbsp;Router Fritz!Box A01/01 - Silvia Ghirardosi</font>
      <div style="margin-top: 20px; margin-right: 40%;">
      <div class="alert alert-success" role="alert">
        <p>A seguito dell'ultimo controllo, tutte le infrastrutture sono risultate operative. </p>
        <hr>
        <p class="mb-0">Ultimo controllo eseguito il: <?php date_default_timezone_set("Europe/Rome"); echo "" . date("d/m/Y") . ", alle ore: "; echo "" . date("h:ia") . ""; ?></p>
      </div>
    </div>
    <?php } else { ?>
      <font style="font-family: 'Nanum Gothic', sans-serif;" color="red"><i class="fas fa-times-circle"></i></font>&nbsp;&nbsp;Router Fritz!Box A01/01 - Silvia Ghirardosi</font>
      <div style="margin-top: 20px; margin-right: 40%;">
      <div class="alert alert-danger" role="alert">
        <p>A seguito dell'ultimo controllo, &egrave; risultato un problema ad una infrastruttura. </p>
        <hr>
        <p class="mb-0">Ultimo controllo eseguito il: <?php date_default_timezone_set("Europe/Rome"); echo "" . date("d/m/Y") . ", alle ore: "; echo "" . date("h:ia") . ""; ?></p>
      </div>
    </div>
    <?php }
    fclose($fp2);
    }
    ?>
      </div>
      </div>

     <!-------------->


          <!----------->
          <div style="margin-top: 30px;">
          </div>
          <center>
           <hr width="15%" color="grey">
        </center>
          <div style="margin-left: 30%;">
             <font style="font-family: 'Nanum Gothic', sans-serif; margin-top: 10px;"><b>Infrastruttura A04/00</b></font>
            <div style="margin-top: 5px;">
              <?php
         $ip2 = "128.116.128.228";
         if(isset($ip2)){
         $host2 = $ip2;
         $port2 = 80;
         $waitTimeoutInSeconds2 = 1;
         ?>
         <?php if($fp2 = fsockopen($host2,$port2,$errCode2,$errStr2,$waitTimeoutInSeconds2)){ ?>
           <font style="font-family: 'Nanum Gothic', sans-serif;" color="green"><i class="fas fa-check-circle"></i></i></font>&nbsp;&nbsp;Server A04/01 - Marostica SRL</font>
           <div style="margin-top: 20px; margin-right: 40%;">
           <div class="alert alert-success" role="alert">
             <p>A seguito dell'ultimo controllo, tutte le infrastrutture sono risultate operative. </p>
             <hr>
             <p class="mb-0">Ultimo controllo eseguito il: <?php date_default_timezone_set("Europe/Rome"); echo "" . date("d/m/Y") . ", alle ore: "; echo "" . date("h:ia") . ""; ?></p>
           </div>
         </div>
         <?php } else { ?>
           <font style="font-family: 'Nanum Gothic', sans-serif;" color="red"><i class="fas fa-times-circle"></i></font>&nbsp;&nbsp;Server A04/01 - Marostica SRL</font>
          <div style="margin-top: 20px; margin-right: 40%;">
           <div class="alert alert-danger" role="alert">
             <p>A seguito dell'ultimo controllo, &egrave; risultato un problema ad una infrastruttura. </p>
             <hr>
             <p class="mb-0">Ultimo controllo eseguito il: <?php date_default_timezone_set("Europe/Rome"); echo "" . date("d/m/Y") . ", alle ore: "; echo "" . date("h:ia") . ""; ?></p>
           </div>
         </div>
         <?php }
         fclose($fp2);
         }
         ?>
           </div>
           </div>

          <!-------------->


   </body>
   <footer>

     <div style="margin-top: 40px;">
     </div>
     <center>
      <hr width="25%" color="grey">
   </center>
   <center>
     <img src="../includes/img/logo.png" width="120" alt="inorbita.com">
    <div style="margin-top: 25px;">
     <font style="font-family: 'Nanum Gothic', sans-serif;">Il NOC di <a href="https://inorbita.com">InOrbita</a></font>
     <div style="margin-top: 10px;">
   <font style="font-family: 'Nanum Gothic', sans-serif;" class="center"><a href="https://inorbita.com/area-riservata/">Area riservata</a> - <a href="https://status.inorbita.com">Stato dei Servizi</a> - <a href="https://inorbita.com/contattaci">Contattaci</a></font>
 </div>
   </div>
   </center>

   </footer>
</html>
