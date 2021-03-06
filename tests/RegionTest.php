<?php

namespace EddTurtle\DirectUpload\Tests;

use EddTurtle\DirectUpload\Region;

class RegionTest extends \PHPUnit_Framework_TestCase
{

    public function testValid()
    {
        $object = new Region('eu-west-1');
        $this->assertTrue($object instanceof Region);
        $this->assertTrue($object->getName() === "eu-west-1");
    }

    /**
     * @expectedException \EddTurtle\DirectUpload\InvalidRegionException
     */
    public function testInvalid()
    {
        new Region('invalid region');
    }

    public function testLowerCaseName()
    {
        $object = new Region('eu-WEST-1');
        $this->assertTrue($object->getName() === "eu-west-1");
    }

}