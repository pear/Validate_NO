<?php
// $Id$

require_once 'PHPUnit.php';
require_once 'Validate/DE.php';

class Validate_DE_Test extends PHPUnit_TestCase{
    function Validate_DE_Test($name)
    {
        $this->PHPUnit_TestCase($name);
    }
    function setUp(){}
    function tearDown(){}

    function testpostcode()
    {
        $this->assertTrue(Validate_DE::postcode('10115'));
        $this->assertTrue(Validate_DE::postcode('09111'));
        $this->assertTrue(Validate_DE::postcode('80331'));
        $this->assertFalse(Validate_DE::postcode('0115'));
        $this->assertFalse(Validate_DE::postcode('101154'));
        $this->assertFalse(Validate_DE::postcode('x1154'));
    }
    
    function testbankcode()
    {
        $this->assertTrue(Validate_DE::bankcode('59050101'));
        $this->assertTrue(Validate_DE::bankcode('60250010'));
        $this->assertTrue(Validate_DE::bankcode('70051805'));
        $this->assertFalse(Validate_DE::bankcode('7005180'));
        $this->assertFalse(Validate_DE::bankcode('700518073'));
    }
}

$s = &new PHPUnit_TestSuite("Validate_DE_Test");
$r = PHPUnit::run($s);
echo $r->toString();

?>