<?php

namespace Doefom\tests;

use Doefom\Squeeze\Modifiers\Squeeze;
use PHPUnit\Framework\TestCase;
use Statamic\Modifiers\Modifier;

class SqueezeTest extends TestCase
{

    private Modifier $squeeze;

    public function setUp(): void
    {
        parent::setUp();

        $this->squeeze = new Squeeze();
    }

    public function test_squeeze_mixed()
    {
        $result = $this->squeeze->index("A_string-to/test:the squeeze", null, null);
        $this->assertEquals("Astringtotestthesqueeze", $result);
    }

    public function test_squeeze_underscore()
    {
        $result = $this->squeeze->index("A_string_to_test_the_squeeze", null, null);
        $this->assertEquals("Astringtotestthesqueeze", $result);
    }

    public function test_squeeze_dash()
    {
        $result = $this->squeeze->index("A-string-to-test-the-squeeze", null, null);
        $this->assertEquals("Astringtotestthesqueeze", $result);
    }

    public function test_squeeze_slash()
    {
        $result = $this->squeeze->index("A/string/to/test/the/squeeze", null, null);
        $this->assertEquals("Astringtotestthesqueeze", $result);
    }

    public function test_squeeze_colon()
    {
        $result = $this->squeeze->index("A:string:to:test:the:squeeze", null, null);
        $this->assertEquals("Astringtotestthesqueeze", $result);
    }

    public function test_squeeze_whitespace()
    {
        $result = $this->squeeze->index("A string to test the squeeze", null, null);
        $this->assertEquals("Astringtotestthesqueeze", $result);
    }

}
