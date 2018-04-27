<?php

use PHPUnit\Framework\TestCase;
use InvalidArgumentException;
use Yuca\Qif2Array;

/**
 * @group unit
 */
final class Qif2ArrayTest extends TestCase
{
    public function testInvalidFile()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('File not found.');

        Qif2Array::parse('fake/path/file.qif');
    }
}
