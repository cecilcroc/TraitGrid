<?php
/**
 * Tests for TraitGrid
 */

use PHPUnit\Framework\TestCase;
use Traitgrid\Traitgrid;

class TraitgridTest extends TestCase {
    private Traitgrid $instance;

    protected function setUp(): void {
        $this->instance = new Traitgrid(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Traitgrid::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
