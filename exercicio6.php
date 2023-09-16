<!DOCTYPE html>
<html>
<head>
  <body bgcolor="silver">
      <p align="center">
         <font size = 6 face = "verdana" color="#2E8B57">
        <?php
        $v1 = 63;

        $porcent = ($v1 *7)/100;
        $cd = $v1 - $porcent;
        echo "<br> O valor original é: $v1.";
        echo " <br> O valor do desconto é: $porcent";
        echo "<br> O valor com o desconto é: $cd";
        ?>


  </body>
</html>