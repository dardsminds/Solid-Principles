<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Classes\Circle;
use Classes\Square;
use Classes\AreaCalc;
use Classes\SumCalcOut;

/** @var array shapes */
$shapes = [
  new Circle(2),
  new Square(5),
  new Square(6),
];

$areas  = new AreaCalc($shapes);  // AreaCalc class has to do only area calculation and must not do other stuff not related.

$out    = new SumCalcOut($areas);  // use another Class to output data.

echo $out->Json();    // outputs data into json format.


