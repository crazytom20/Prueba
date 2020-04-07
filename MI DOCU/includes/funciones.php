<?php
   // Muestra en una página el contenido de $valor
   // 1. Convierte todos los caracteres aplicables a entidades HTML
   // 2. Transforma los saltos de línea en <br>

   function hacia_pagina($valor) {
      return nl2br(htmlentities($valor,ENT_QUOTES,'UTF-8'));
   }
?>