<?php 

/**
 * Square Class
 */
class Square
{
    public $length;

    /**
     * @param int $lenght   this is all the same on 4 sides
     */
    public function __construct($length)
    {
        $this->length = $length;
    }
}
