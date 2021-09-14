<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require __DIR__ . "/../Facility.php";

final class FacilityTest extends TestCase
{

    private $facility;

    protected function setUp(): void
    {
        
        $this->facility = new App\Http\Entities\Facility();
    }


    public function testToArray()
    {
        $this->assertIsArray($this->facility->toArray());
    }

    public function testIsIdInt()
    {
        $this->facility->setId(1);
        $this->assertIsInt($this->facility->getId());
    }

    public function testGetId()
    {
        $this->facility->setId(1);
        $this->assertEquals(1,$this->facility->getId());
    }

    public function testGetLocationCode(){
        $this->facility->setLocationCode("12345");
        $this->assertEquals('12345',$this->facility->getLocationCode("12345"));
    }

    public function testIsLocationCodeString(){
        $this->facility->setLocationCode("12345");
        $this->assertIsString($this->facility->getLocationCode("12345"));
    }

    public function testGetName(){
        $this->facility->setName("testing");
        $this->assertEquals('testing',$this->facility->getName("testing"));
    }

    public function testIsGetNameString(){
        $this->facility->setName("testing");
        $this->assertIsString($this->facility->getName("testing"));
    }

    public function testStreetAddress(){
        $this->facility->setStreetAddress("testing");
        $this->assertEquals('testing',$this->facility->getStreetAddress("testing"));
    }

    public function testIsStreetAddressString(){
        $this->facility->setStreetAddress("testing");
        $this->assertIsString($this->facility->getStreetAddress("testing"));
    }

    public function testGetState(){
        $this->facility->setState("AK");
        $this->assertEquals('AK',$this->facility->getState()); 
    }

    public function testIsGetStateString(){
        $this->facility->setState("AK");
        $this->assertIsString($this->facility->getState());
    }

    public function testGetCounty(){
        $this->facility->setCounty("USA");
        $this->assertEquals('USA',$this->facility->getCounty()); 
    }

    public function testIsGetCountString(){
        $this->facility->setCounty("USA");
        $this->assertIsString($this->facility->getCounty());
    }

    public function testGetFormattedCounty(){
        $this->facility->setState("AK");
        $this->facility->setCounty("USA");
        $this->assertEquals('USA Borough',$this->facility->getFormattedCounty()); 
    }
}
