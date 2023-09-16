<!DOCTYPE html>
<html>
<head>
  <body bgcolor="silver">
      <p align="center">
         <font size = 6 face = "verdana" color="#2E8B57">
        <?php
        $produto = 500;
        $porcent= ($produto * 16)/100;
        $total= $produto + $porcent;
        $dvd= $total/ 10;
        echo "<br> Valor total da compra:$total.";
        echo "<br> Valor de cada parcela: $dvd.";
        ?>        
  </body>
</html>