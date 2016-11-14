<?php
function texto_estado(int $valor){
    switch ($valor){
        case PHP_SESSION_DISABLED:
            return "PHP_SESSION_DISABLED";
        case PHP_SESSION_NONE:
            return "PHP_SESSION_NONE";
        case PHP_SESSION_ACTIVE:
            return "PHP_SESSION_ACTIVE";
    }
}
echo "Antes de SESSION_START(): " . texto_estado(session_status()) . "<br>";
session_start();
echo "Despues de SESSION_START(): " . texto_estado(session_status()) . "<br>";
session_destroy();
echo "Despues de SESSION_DESTROY(): " . texto_estado(session_status()) . "<br>";