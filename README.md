# OOD SOLID principles
SOLID is the acronym for the first five object-oriented design; (S) Single-responsibility, (O) Open-closed, (L) Liskov Substitution, (I) Interface Segregation, and (D) Dependency inversion

## Single-Responsibility Principle
A class should have only one job for itself, if the job appears outside of its scope then create a new class for that

*src/SampleSingle.php*
```php

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

$areas  = new AreaCalc($shapes);  // AreaCalc class will only do area calculation and must not do other stuff outside its scope.

$out    = new SumCalcOut($areas);  // use another Class to output data.

echo $out->Json();

```
## Open-Closed Principle
Objects or entities should be open for extension but closed for modification, you need to use interface for this.

## Liskov Substitution Principle
Objects of a superclass shall be replaceable with objects of its subclasses without breaking the application.

## Interface Segregation Principle
Clients shouldn’t be forced to depend on methods they do not use.

## Dependency Inversion Principle
It states that the high-level module must not depend on the low-level module, but they should depend on abstractions.

