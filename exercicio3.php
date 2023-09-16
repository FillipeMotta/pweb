<!DOCTYPE html>
    <html>
        <body bgcolor="silver">
             <center> <h1>
                <?php 
                    
                    $rifas = 15;
                   
                    if ($rifas <10)
                {
                    echo " Precisa se esforçar mais para vender <br> ";
                }

                     elseif ($rifas >=11 && $rifas <=20)
                {
                    echo " Faltou pouco para atingir a meta <br> ";
                }  

                    elseif ($rifas >20)
                {
                    echo " Parabéns, você atingiu a meta de vendas. <br> ";
                }
                ?>
    </body>
</html>
