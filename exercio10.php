<!DOCTYPE html>
<html>
<head>
  <body bgcolor="silver">
      <p align="center">
         <font size = 6 face = "verdana" color="#2E8B57">
        <?php
        $n1 = 5;
        $n2 = 7;
        $n3 = 9;
        $peso= 2 + 3 + 5;
        $total= (($n1*2)+($n2*3)+($n3*5));
        $media= $total/$peso;
        echo"<br>Suas notas foram: $n1, $n2 e $n3.";
        echo "<br> Sua nota final é:$media.";
        ?>        
  </body>
</html>