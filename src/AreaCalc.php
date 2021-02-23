<?php

namespace Classes;

/**
 * AreaCalc     class to collect an array of shape and calculate thier total area.
 * 
  */
class AreaCalc
{
    /** @var arrays $shapes */
    protected $shapes;

    /**
     * Construct
     * 
     * @param array object $shapes (Square, Circle)
     */
    public function __construct($shapes = [])
    {
        $this->shapes = $shapes;
    }

    /**
     * @method sum() compute the sum area of all the shapes.
     * 
     * @return float array_sum   the total values from the array.
     */
    public function sum()
    {
        $area=array();
        
        foreach ($this->shapes as $shape) {
            if (is_a($shape, 'Classes\Square')) {
                
                $area[] = pow($shape->length, 2);
            } elseif (is_a($shape, 'Classes\Circle')) {
                $area[] = pi() * pow($shape->radius, 2); 
            }
        }

        return array_sum($area);
    }
}
