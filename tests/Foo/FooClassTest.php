<?php

declare(strict_types=1);

namespace Core\Tests\Foo;

use PHPUnit\Framework\TestCase;

final class FooClassTest extends TestCase
{
    /**
     * @test
     */
    public function it_assert_true(): void
    {
        $this->assertTrue(true);
    }
}
