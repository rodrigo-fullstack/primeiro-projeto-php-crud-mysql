<?php
    function mensagem($texto, $tipo){
        echo "<section class='$tipo' role = 'alert'>
            $texto
        </section>";
    }
?>