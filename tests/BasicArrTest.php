<?php
class BasicArrTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider smallArrayProvider
     */
    public function testArray_keys($array)
    {
        $this->assertEquals(Arr($array)->keys(), array_keys($array));
    }

    /**
     * @dataProvider smallArrayProvider
     */
    public function testArray_values($array)
    {
        $this->assertEquals(Arr($array)->values(), array_values($array));
    }

    public function smallArrayProvider()
    {
        return [
            'small array' => [
                [
                    'hello' => 'world',
                ]
            ]
        ];
    }

    public function nestedArrayProvider()
    {
        return [
            'nested array' => [
                [
                        'hello' => ['world', 'europe', 'netherlands', 'utrecht'],
                        'test'  => ['array' => 'string'],
                ]
            ]
        ];
    }

    public function arraysProvider()
    {
        return [
            'nested array' => [
                [
                    'hello' => ['world', 'europe', 'netherlands', 'utrecht'],
                    'test'  => ['array' => 'string'],
                ]
            ],
            'small array' => [
                [
                    'hello' => 'world',
                ]
            ]
        ];
    }

    /**
     * @dataProvider additionProvider
     /
    public function testAdd($a, $b, $expected)
    {
        true;//$this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return array(
            'adding zeros'  => array(0, 0, 0),
            'zero plus one' => array(0, 1, 1),
            'one plus zero' => array(1, 0, 1),
            'one plus one'  => array(1, 1, 3)
        );
    }*/

}
