<?php
use App\Libraries\Calculator;
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){
        $this->calculator = new Calculator;
    }
    public function inputNumbers()
{
    return [
        [2,2,4],
        [2.5,2.5,5],
        [-3,1,-2],
        [-9, -9, -18],
    ];
}
    public function inputMNumbers()
    {
        return [
            [2,2,0],
            [2,a,0],

        ];
    }

    /**
     * @dataProvider inputNumbers
     */
    public function testAdd($x, $y, $equal)
    {
            $this->assertEquals($equal, $this->calculator->addNumber($x,$y));
    }
    /**
     * @dataProvider inputMNumbers
     */
    public function testSub($x, $y, $equal)
    {
        $this->assertEquals($equal, $this->calculator->subtractNumber($x,$y));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowExceptionIfNonNumericIsPassed()
    {
        $this->calculator->addNumber('a',[]);
    }
}