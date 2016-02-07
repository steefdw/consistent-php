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

}
