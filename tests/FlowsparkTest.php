<?php
/**
 * Tests for FlowSpark
 */

use PHPUnit\Framework\TestCase;
use Flowspark\Flowspark;

class FlowsparkTest extends TestCase {
    private Flowspark $instance;

    protected function setUp(): void {
        $this->instance = new Flowspark(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Flowspark::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
