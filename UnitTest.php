<?php
/**
 * Unit Test file
 *
 * @author vinothr196@gmail.com
 */
require_once 'index.php';

use PHPUnit\Framework\TestCase;

/**
 * UnitTest class for file index.php
 */
class UnitTest extends TestCase
{
    /**
     * validate the process function
     *
     * @return void
     */
    public function testProcess()
    {
        for ($i = 1; $i <= 100; $i++) {
            $expectedResult = $i;
            if (($i % 3) == 0 && ($i % 5) == 0) {
                $expectedResult = "Linianos";
            } elseif (($i % 3) == 0) {
                $expectedResult = "Linio";
            } elseif (($i % 5) == 0) {
                $expectedResult = "IT";
            }

            $this->assertEquals(process($i), $expectedResult);
        }
    }
}
