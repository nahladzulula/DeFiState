<?php
/**
 * Tests for DeFiState
 */

use PHPUnit\Framework\TestCase;
use Defistate\Defistate;

class DefistateTest extends TestCase {
    private Defistate $instance;

    protected function setUp(): void {
        $this->instance = new Defistate(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defistate::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
