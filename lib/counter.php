<?php

require_once ‘lib/counter.php’;
$counter = new SimpleCounter(new FileDataProvider);
echo “Questa pagina è stata visitata “.$counter->visits.” volte”;

?> 