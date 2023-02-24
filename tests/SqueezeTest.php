<?php

namespace Doefom\tests;

use Doefom\Squeeze\Modifiers\Squeeze;
use PHPUnit\Framework\TestCase;
use Statamic\Modifiers\Modifier;

class SqueezeTest extends TestCase
{

    private Modifier $squeeze;
    private $resultStr = "Astringtotestthesqueeze";

    public function setUp(): void
    {
        parent::setUp();

        $this->squeeze = new Squeeze();
    }

    public function test_squeeze_defaults()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index("A_string-to/test:the squeeze", null, null)
        );
    }

    public function test_squeeze_whitespace_at_beginning_defaults()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index(" A_string-to/test:the squeeze", null, null)
        );
    }

    public function test_squeeze_whitespace_at_beginning_defaults_end()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index(" A_string-to/test:the squeeze", null, null)
        );
    }

    public function test_squeeze_backslash_defaults()
    {
        $this->assertNotEquals(
            $this->resultStr,
            $this->squeeze->index(" A_string-to\\test:the squeeze", null, null)
        );
    }

    public function test_squeeze_with_params()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index("A_string to/test\\the-squeeze", ["_ /\\-"], null)
        );
    }

}
