<?php

declare(strict_types=1);

namespace Rector\Privatization\Tests\Rector\ClassConst\PrivatizeLocalClassConstantRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Privatization\Rector\ClassConst\PrivatizeLocalClassConstantRector;

final class PrivatizeLocalClassConstantRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return PrivatizeLocalClassConstantRector::class;
    }
}
