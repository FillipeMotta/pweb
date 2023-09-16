<!DOCTYPE html>
    <html>
        <body bgcolor="silver">
             <center> <h1>
                <?php 
                    
                    $salario = 1600;
                   
                    if ($salario <774)
                {
                    echo " Salário inválido! <br> ";
                }

                     elseif ($salario >=774 && $salario <1000)
                {
                    echo " Bom salário <br> ";
                }  

                    elseif ($salario >=1000 && $salario <2000)
                {
                    echo " Ótimo salário <br> ";
                }  

                    elseif ($salario >=3000)
                {
                    echo " Excelente salário. <br> ";
                }
                ?>
    </body>
</html>
