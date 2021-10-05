--TEST--
Live range construction should not break if coalesce assign branch is optimized away
--FILE--
<?php
function test() {
    $a[X] ??= Y;
    var_dump($a);
}
define('X', 1);
define('Y', 2);
test();
?>
--EXPECT--
array(1) {
  [1]=>
  int(2)
}
