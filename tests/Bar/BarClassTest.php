<?php

declare(strict_types=1);

namespace Core\Tests\Bar;

use PHPUnit\Framework\TestCase;

final class BarClassTest extends TestCase
{
    /**
     * @test
     */
    public function it_assert_true(): void
    {
        $this->assertTrue(true);
    }
}
