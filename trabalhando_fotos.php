<?php
    function mover_foto($vetor_arquivo){
        $tipo_mime = $vetor_arquivo['type'];
        $vetor_tipo_mime = explode('/', $tipo_mime);
        $tipo_arquivo = $vetor_tipo_mime[0];
        
        if(!$vetor_arquivo['error'] && $tipo_arquivo == "image"){
            
            $extensao_foto = $vetor_tipo_mime[1];
            $nome_foto = md5($vetor_arquivo['name']) . ".$extensao_foto";
            //$_SERVER['DOCUMENT_ROOT'] realiza a captura da pasta raiz de execução do PHP
            $pasta_foto = $_SERVER['DOCUMENT_ROOT'] . '/BackEndPHP/PHP_CRUD_MySQL/ASSETS/IMG/';

            move_uploaded_file($vetor_arquivo['tmp_name'], $pasta_foto . $nome_foto);
    
            return $nome_foto;
        } else if($vetor_arquivo["error"]){
            mensagem("Foto vazia", "success");
            return 0;
        } else{
            mensagem("Você não pode enviar arquivos de tipos diferentes de imagens", "error");
            return -1;
            //Enviando exceção
            // $erro = new Exception("Erro na imagem");
            // mensagem($erro->getMessage(), "error");            
            // throw $erro;
        }
    }
?>