<?php
  function mostra_data($data){
    $d = explode("-", $data);
    return $d[2] . "/" . $d[1] . "/" . $d[0];
  }
?>