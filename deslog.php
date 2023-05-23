<?php
session_start();

session_abort();

echo '
    <script>
        alert("Deslogado");
        window.location = "index.html";   
       </script>
';

?>