<?php
$nombres = array('nombre' => "Aitor" , "Angel + Adrian");
echo http_build_query($nombres) . "<br>";
echo http_build_query($nombres, "v_");