<?php
/**
 * Tests for BlockToken
 */

use PHPUnit\Framework\TestCase;
use Blocktoken\Blocktoken;

class BlocktokenTest extends TestCase {
    private Blocktoken $instance;

    protected function setUp(): void {
        $this->instance = new Blocktoken(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blocktoken::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
