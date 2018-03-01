<?php


namespace ClassLoad\Tests;


use PHPUnit\Framework\Error\Warning;
use PHPUnit\Framework\TestCase;

class ClassAliasTest extends TestCase
{

    public function testClassAlias()
    {
        $this->expectException(Warning::class);
        $this->expectExceptionMessage('Cannot declare class \ClassLoad\FileLoader, because the name is already in use');

        if (class_exists('\ClassLoad\Fileloader')) {
            class_alias('\ClassLoad\Fileloader', '\ClassLoad\FileLoader');
        }
    }

}