<!DOCTYPE html>
    <html>
        <body bgcolor="silver">
             <center> <h1>
                <?php 
                    
                    $nota1 = 9;
                    $nota2 = 7;
                    $nota3 = 7;
                    $nota4 = 10;

                    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

                   
                    if ($media >=9)
                {
                    echo " Nota MB <br> ";
                }

                     elseif ($media >=6 && $media <9)
                {
                    echo " Nota B <br> ";
                }  

                    elseif ($media >=3 && $media <6)
                {
                    echo " Nota R <br> ";
                }  

                    elseif ($media <3)
                {
                    echo " Nota I <br> ";
                }
                ?>
    </body>
</html>
