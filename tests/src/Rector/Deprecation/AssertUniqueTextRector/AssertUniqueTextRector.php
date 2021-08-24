<?php declare(strict_types=1);

namespace DrupalRector\Tests\Rector\Deprecation\AssertUniqueTextRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

class AssertUniqueTextRector extends AbstractRectorTestCase {

    /**
     * @covers ::refactor
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->doTestFileInfo($fileInfo);
    }

    /**
     * @return Iterator<SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/fixture');
    }

    public function provideConfigFilePath(): string
    {
        // must be implemented
        return __DIR__ . '/config/configured_rule.php';
    }

}