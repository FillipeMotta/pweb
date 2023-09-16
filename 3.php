<!DOCTYPE html>
    <html>
        <body bgcolor="silver">
             <center> <h1>
                <?php 
                    
                    $media = 8;
                   
                    if ($media >=9 && $media <=10)
                {
                    echo " Nota MB! <br> ";
                }

                     elseif ($media >=7 && $media <9)
                {
                    echo " Nota B <br> ";
                }

                     elseif ($media >=5 && $media <7)
                {
                    echo " Nota r <br> ";
                }  

                    elseif ($media <5 && $media >=0)
                {
                    echo " Nota I <br> ";
                }  

                    elseif ($media <0 || $media >10)
                {
                    echo " Valor invalido <br> ";
                }
                ?>
    </body>
</html>
