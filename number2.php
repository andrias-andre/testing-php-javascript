<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Test - PT OPINIA MEDIA TEKNOLOGI</title>
  </head>
  <body>
        <div class="container mt-4 mb-4">
        
            <?php

            $birthDate = "1993-11-05";
            $date      = "2020-05-01";
            $a         =  substr($date,5,3).substr($date,0,2).substr($date,-3);
            $b         =  date("m-y-d",strtotime($date));
            $c         =  date("Y-m-d",strtotime("+6 months",strtotime($date)));
            $diff      = abs(strtotime($birthDate)-strtotime($date));

            echo "Jawaban No 2.a : ".$a."<br>";
            echo "Jawaban No 2.b : ".$b."<br>";
            echo "Jawaban No 2.c : ".$c."<br>";

            $years  = floor($diff / (365*60*60*24)); 
            $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
            $days   = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

            echo "Jawaban no 2.d : Umur saya adalah ".$years.' Tahun '.$months.' Bulan '.$days.' Hari';

            ?>

        </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
   </body>
</html>