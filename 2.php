<!DOCTYPE html>
    <html>
        <body bgcolor="silver">
             <center> <h1>
                <?php 
                    
                    $regiao = 31;
                   
                    if ($regiao >1 && $regiao <=10)
                {
                    echo " Região Sul <br> ";
                }

                     elseif ($regiao >=11 && $regiao <=30)
                {
                    echo " Regiao Sudeste <br> ";
                }

                     elseif ($regiao >=31 && $regiao <=50)
                {
                    echo " Regiao CEntro oeste <br> ";
                }  

                    elseif ($regiao >=51 && $regiao <=70)
                {
                    echo "Regiao Norte <br> ";
                }  

                    elseif ($regiao <=0 || $regiao >70)
                {
                    echo " Valor invalido <br> ";
                }
                ?>
    </body>
</html>
