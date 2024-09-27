<?php
    function mover_foto($vetor_foto){
        $nome_foto = md5($vetor_foto["name"]) . ".jpg";
        move_uploaded_file($vetor_foto["tmp_name"], "img/" . $nome_foto);

        return $nome_foto;
    }
?>