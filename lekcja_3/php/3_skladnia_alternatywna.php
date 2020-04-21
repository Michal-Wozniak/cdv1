<?php

$a=2;
$b=3;
if ($a < $b):
    echo "\$a jest mniejsze od \$b";
elseif($a > $b):
    echo "\$a jest większe od \$b";
else:
    echo "\$a jest równa \$b";
endif;

?>