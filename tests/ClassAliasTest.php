<?php


namespace ClassLoad\Tests;


use PHPUnit\Framework\Error\Warning;
use PHPUnit\Framework\TestCase;

class ClassAliasTest extends TestCase
{

    public function testClassAlias()
    {
        $this->expectException(Warning::class);
        if (class_exists('\ClassLoad\Fileloader')) {
            class_alias('\ClassLoad\Fileloader', '\ClassLoad\FileLoader');
        }
    }

}