<?php
class BasicArrSortTest extends PHPUnit_Framework_TestCase
{
    public function unsortedArrayProvider()
    {
        return [
            'small array' => [
                [
                    'a' => 'apple',
                    'o' => 'orange',
                    'l' => 'lemon',
                    'b' => 'banana',
                ]
            ]
        ];
    }

    /**
     * @dataProvider unsortedArrayProvider
     */
    public function test_ksort($array)
    {
        $arr1 = $arr2 = $array;
        Arr($arr1)->ksort();
        ksort($arr2);

        $this->assertEquals($arr1, $arr2);
    }

    /**
     * @dataProvider unsortedArrayProvider
     */
    public function test_krsort($array)
    {
        $arr1 = $arr2 = $array;
        Arr($arr1)->krsort();
        krsort($arr2);

        $this->assertEquals($arr1, $arr2);
    }

    /**
     * @dataProvider unsortedArrayProvider
     */
    public function test_natsort($array)
    {
        $arr1 = $arr2 = $array;
        Arr($arr1)->natsort();
        natsort($arr2);

        $this->assertEquals($arr1, $arr2);
    }

    /**
     * @dataProvider unsortedArrayProvider
     */
    public function test_natcasesort($array)
    {
        $arr1 = $arr2 = $array;
        Arr($arr1)->natcasesort();
        natcasesort($arr2);

        $this->assertEquals($arr1, $arr2);
    }

    /**
     * @dataProvider unsortedArrayProvider
     */
    public function test_asort($array)
    {
        $arr1 = $arr2 = $array;
        Arr($arr1)->asort();
        asort($arr2);

        $this->assertEquals($arr1, $arr2);
    }

    /**
     * @dataProvider unsortedArrayProvider
     */
    public function test_arsort($array)
    {
        $arr1 = $arr2 = $array;
        Arr($arr1)->arsort();
        arsort($arr2);

        $this->assertEquals($arr1, $arr2);
    }

    /**
     * @dataProvider unsortedArrayProvider
     */
    public function test_sort($array)
    {
        $arr1 = $arr2 = $array;
        Arr($arr1)->sort();
        sort($arr2);

        $this->assertEquals($arr1, $arr2);
    }

    /**
     * @dataProvider unsortedArrayProvider
     */
    public function test_rsort($array)
    {
        $arr1 = $arr2 = $array;
        Arr($arr1)->rsort();
        rsort($arr2);

        $this->assertEquals($arr1, $arr2);
    }

}
