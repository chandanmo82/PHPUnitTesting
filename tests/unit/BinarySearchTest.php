<?php
include "main/BinarySearch.php";

use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    public $array = array(20, 30, 40, 50, 60);
    /**
     * @test for return true
     */
    public function givenDataWhenTrueShouldReturnTrue()
    {
        $obj = new BinarySearch();
        $result = $obj->binarySearch(30, $this->array);
        $this->assertEquals($result, 1, $message = " Test 1");
    }
    /**
     * @test for return false
     */
    public function givenDataWhenFalseShouldReturnFalse(){
        $obj = new BinarySearch();
        $result = $obj->binarySearch(27,$this->array);
        $this->assertEquals($result,-1,$message="Test 2");
    }
}
?>