<?php

use DarioMinds\Reference\Circle;
use DarioMinds\Reference\Square;
use DarioMinds\Reference\AreaCalc;

$shapes = [
  new Circle(2),
  new Square(5),
  new Square(6),
];

$areas = new AreaCalc($shapes);

echo $areas->output();

