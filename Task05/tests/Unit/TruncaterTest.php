<?php

namespace Danil\Tests;
use \PHPUnit\Framework\TestCase;
use Danil\Task05\Truncater;

class TruncaterTest extends TestCase
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Нагаев Данила Геннадьевич...', $truncater->truncate('Нагаев Данила Геннадьевич'));
        $this->assertSame('Нагаев Дан...', $truncater->truncate('Нагаев Данила Геннадьевич', ['length' => 10]));
        $this->assertSame('Нагаев Данила Геннадьевич...', $truncater->truncate('Нагаев Данила Геннадьевич', ['length' => 50]));
        $this->assertSame('Нагаев Данила Геннадьевич...', $truncater->truncate('Нагаев Данила Геннадьевич', ['length' => -10]));
        $this->assertSame('Нагаев Дан*', $truncater->truncate('Нагаев Данила Геннадьевич', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Нагаев Данила Геннадьевич*', $truncater->truncate('Нагаев Данила Геннадьевич', ['separator' => '*']));
    }
}
