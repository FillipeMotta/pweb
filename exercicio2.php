<!DOCTYPE html>
    <html>
        <body bgcolor="silver">
             <center> <h1>
                <?php 
                    
                    $idade = 11;
                   
                    if ($idade >=10 && $idade <=12)
                {
                    echo " Categoria infantil 1 <br> ";
                }

                     elseif ($idade >=13 && $idade <=14)
                {
                    echo " Categoria infantil 2 <br> ";
                }  

                    elseif ($idade <10 || $idade >14)
                {
                    echo " Idade não permitida para o campeonato <br> ";
                }
                ?>
    </body>
</html>
