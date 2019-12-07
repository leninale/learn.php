<?php
namespace Test\FindValuesT;

use phpDocumentor\Reflection\Types\Integer;
use PHPUnit\Framework\TestCase;

class FindValuesTest extends TestCase
{
    private $findMissingValues;
    protected function setUp(): void
    {
        $this->findMissingValues = new \App\FindValues\FindMissingValues();
    }
    protected function tearDown(): void
    {

    }

    /**
     * @dataProvider valuesProvider
     */

   public function testFindValuesEquals(array $testArray)
   {
       $array = [-2,-1,3,4,5];
       $this->assertEquals($testArray, $this->findMissingValues->searchLostElems($array));
   }

   public function valuesProvider()
   {
       return [
           'correct' => [[0,1,2]],
           'one' => [[1]],
           'emty' => [[]],
       ];
   }


   public function testFindValuesEmpty()
   {
    $array = [1,2,3];
    $this->assertEmpty($this->findMissingValues->searchLostElems($array));
   }


 /*  public function testFindValuesContains()
   {
       $array = [0,2,-1,3];
       $this->assertContainsOnly('integer', $this->findMissingValues->searchLostElems($array));
   }
*/

}