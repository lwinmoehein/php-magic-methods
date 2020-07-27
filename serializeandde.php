<?php
    $atable = array ('Moga', 'Agra', 'Abohar', 'Punjab', 'Jaipur');
    $sSerialized = serialize ($atable);
    $aUnserialized = unserialize ($sSerialized);
    echo '<pre>';
    var_dump ($sSerialized, $aUnserialized);
    echo '</pre>';
?>
