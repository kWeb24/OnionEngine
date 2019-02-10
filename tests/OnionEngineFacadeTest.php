<?php

use Orchestra\Testbench\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

final class OnionEngineFacadeTest extends TestCase
{

   /**
    * Setup aliases
    */
   protected function getPackageAliases($app)
    {
        return [
            'OnionEngine' => 'Kweber\\OnionEngine\\App\\Facades\\OnionEngine'
        ];
    }

    public function testIsReturningCorrectFacadeAccessor(): void
    {
        $this->assertEquals('OnionEngine', OnionEngine::getFacadeAccessor());
    }

    public function testIsReturningVersionString(): void
    {
        $this->assertIsString(OnionEngine::version());
    }

    /**
     * Expected format 0.0.0-{single-char-label}
     */
    public function testIsReturningCorrectVersionFormat(): void
    {
        $this->assertStringMatchesFormat('%d.%d.%d-%c', OnionEngine::version());
    }

    public function testIsReturningStabilityString(): void
    {
        $this->assertIsString(OnionEngine::stability());
    }
}
