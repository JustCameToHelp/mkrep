<?php

function printfln()
{
    $argv = func_get_args();
    $format = array_shift( $argv );
    vprintf( $format, $argv );
    print "<br />";
}

?>