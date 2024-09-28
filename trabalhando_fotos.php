<?php
    function mover_foto($vetor_arquivo){
        $tipo_mime = $vetor_arquivo['type'];
        $vetor_tipo_mime = explode('/', $tipo_mime);
        $tipo_arquivo = $vetor_tipo_mime[0];


        //&& possui maior prioridade do que and */
        if(!$vetor_arquivo['error'] && $tipo_arquivo == 'image' && $vetor_arquivo['size'] < 500000){
            
            $extensao_foto = $vetor_tipo_mime[1];
            
            $nome_foto = md5(date('ymdhms') . $vetor_arquivo['name']) . ".$extensao_foto";
            
            //$_SERVER['DOCUMENT_ROOT'] realiza a captura da pasta raiz de execução do PHP
            $pasta_foto = $_SERVER['DOCUMENT_ROOT'] . '/BackEndPHP/PHP_CRUD_MySQL/ASSETS/IMG/';

            $tmp = $vetor_arquivo['tmp_name'];
            
            move_uploaded_file($tmp, $pasta_foto . $nome_foto);
    
            return $nome_foto;
        } else if($vetor_arquivo["error"]){
            mensagem("Foto vazia", "success");
            return null;
        } else{
            mensagem("Você não pode enviar arquivos de tipos diferentes", "error");
            return -1;
            //Enviando exceção
            // $erro = new Exception("Erro na imagem");
            // mensagem($erro->getMessage(), "error");            
            // throw $erro;
        }
    }
?>