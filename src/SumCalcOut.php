<?php 

namespace Classes;

/**
 * SumCalcCout  use to output the sum from the AreaCalc class on several format
 */
class SumCalcOut
{
    protected $calculator;

    /**
     * Construct
     * 
     * @param object AreaCalc
     */
    public function __construct(AreaCalc $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * @method Json output data in json format
     * 
     * @return json encoded array
     */
    public function Json()
    {
        $data = [
          'sum' => $this->calculator->sum(),
        ];

        return json_encode($data);
    }

}