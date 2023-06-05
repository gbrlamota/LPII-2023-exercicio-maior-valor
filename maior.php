<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        
        <?php

            function maior($vetor){
                $maior = $vetor[0];
                foreach($vetor as $numero){
                    if ($numero > $maior){
                        $maior = $numero;
                    }
                }
                return $maior;
            }

            $numeros = array(1,2,3);
            echo "O maior número é ";
            echo maior($numeros);
                      
            ?>

        <form action="index.php">
            <input type="submit" value="Voltar">
        </form>

    </body>
</html>