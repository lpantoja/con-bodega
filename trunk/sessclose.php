<?php

// Finalizamos la Sesion.
session_start();
session_unset();
session_destroy();

// Volvemos al menu principal
echo "<html><title>Finalizar Sesión</title><head>";
echo "<script language='JavaScript'>alert('Te has desconectado correctamente');";
echo "</script></head><body onLoad='{formulario.submit();}'>";
echo "<form name='formulario' action='index.php' method='POST'></form>";
echo "</body></html>";
