<h1>Le rectangle</h1>
<?php
require __DIR__.'/Rectangle.php';
$r = new Rectangle(10, 20);
echo $r->perimeter().'<br />'; // 60
echo $r->area(); // 200
var_dump($r->isValid()); // true
$r2 = new Rectangle(-10, 20);
var_dump($r2->isValid()); // false
if ($r2->isValid()) {
    echo $r2->perimeter();
}
?>

<h1>Le calculator</h1>
<?php
require __DIR__.'/Calculator.php';
$c = new Calculator();
$c->add(10)->substract(4);
$c->multiply(2)->divide(4);
echo $c->result(); // 3
var_dump($c);
?>
