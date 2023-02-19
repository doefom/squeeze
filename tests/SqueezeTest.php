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

    public function test_squeeze_mixed()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index("A_string-to/test:the squeeze", null, null)
        );
    }

    public function test_squeeze_underscore()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index("A_string_to_test_the_squeeze", null, null)
        );
    }

    public function test_squeeze_dash()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index("A-string-to-test-the-squeeze", null, null)
        );
    }

    public function test_squeeze_slash()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index("A/string/to/test/the/squeeze", null, null)
        );
    }

    public function test_squeeze_colon()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index("A:string:to:test:the:squeeze", null, null)
        );
    }

    public function test_squeeze_whitespace()
    {
        $this->assertEquals(
            $this->resultStr,
            $this->squeeze->index("A string to test the squeeze", null, null)
        );
    }

}
