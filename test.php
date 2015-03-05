<?php

require_once "spellcheck.php";

$m = "wrog spellng";
echo "You typed: $m<br />";
$h = new SpellCheck($m);
$h->prepend("Did you mean: ");
echo $h->corrected();
echo $h->error();
foreach($h->spell_errors() as $m){
    echo "<br />You seem to have mistyped &quot;".$m[1]."&quot; as &quot;".$m[0]."&quot;<br />";
}


?>
