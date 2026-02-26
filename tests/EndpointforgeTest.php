<?php
/**
 * Tests for EndpointForge
 */

use PHPUnit\Framework\TestCase;
use Endpointforge\Endpointforge;

class EndpointforgeTest extends TestCase {
    private Endpointforge $instance;

    protected function setUp(): void {
        $this->instance = new Endpointforge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Endpointforge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
