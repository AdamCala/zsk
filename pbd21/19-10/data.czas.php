<html lang="PL-pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Czas</title>
  </head>
  <body>
    <?php
     echo "dzień-miesiąc-rok: ".date('d-m-y').'r.<br>';
     echo date('m-d-y').'r.<br>';
     echo date('m-M-Y').'r.<br>';
     echo date('m-F-Y').'r.<br>';

     setlocale(LC_ALL, 'PL');
     echo strftime('%d %B %Y').'<br>';

     echo date('G:i:s');
     ?>
     <script>
      setTimeout(function(){
        //window.location.reload()
      }, 1000);
     </script>
     <?php
      echo date('H:i:s').'<br>';
      echo date('H:i:sa').'<br>';

      //getdate()

      $date=getdate();
      echo "<pre>";
        print_r($date);
      echo "<pre>";

      echo $date['wday'].'<br>';
      echo $date['yday'].'<br>';

      //rok przestępny

      echo date("L").'<br>'; // 0 - rok nie przestępny

      //mktime

      $today  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
      echo $today.'<br>';

      //lata od 1 stycznia 1970
      $year = $today/(60*60*24*365);
      echo (int)$year.'<br>';

      $lastMonth = mktime(0, 0, 0, date("m"), date("d"),   date("Y")-1);
      echo $lastMonth.'<br>';
      $year1 = $lastMonth/(60*60*24*365);
      echo (int)$year1.'<br>';

      ?>
</body>
</html>
