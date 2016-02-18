<?php
class PagesTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){
        $this->pages = new \Controllers\Core\Web\Pages();
    }
    public function testRenderReturnHelloWorld()
    {
        $expected = 'Hello World';
        return $this->assertEquals($expected, $this->pages->render());
    }
    public function testReturnTrue()
    {
        $this->assertTrue($this->pages->returnTrue());
    }
    public function testReturnArray()
    {
        $array = ["Hello","World","This","Is","An","Array"];
        return $this->assertEquals($array,$this->pages->returnArray());
    }
    //check if is not empty
    public function testReturnArrayReturnsNonEmpty()
    {

        $this->assertTrue((count($this->pages->returnArray()) > 0));
    }
}

