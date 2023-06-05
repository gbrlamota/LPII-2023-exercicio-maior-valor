<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $numTexto = $_POST["numero"];
            $numInt = intval($numTexto);
            $numeros = array(1,2,3);

            //Adiciona o novo numero no array
            array_push($numeros, $numInt);
        ?>
        <form action="index.php">
            <p>O número <?php echo $numInt ?> foi adicionado com sucesso ao array 
                <?php 
                foreach($numeros as $numero){
                    echo "$numero ";
                }
                
                ?>
                <br>
            <input type="submit" value="Voltar">
        </form>
    </body>
</html>