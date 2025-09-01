<?php

declare(strict_types=1);

namespace Modules\Lang\Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Tests\CreatesApplication;

/**
 * Base test case for Lang module tests.
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    /**
     * Setup the test environment.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Load Lang module specific configurations
        $this->loadLaravelMigrations();
<<<<<<< HEAD

=======
        
>>>>>>> 054e6ea (.)
        // Seed any required data for Lang tests
        $this->artisan('module:seed', ['module' => 'Lang']);
    }

    /**
     * Get package providers.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Foundation\Application  $app
=======
     * @param \Illuminate\Foundation\Application $app
>>>>>>> 054e6ea (.)
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            \Modules\Lang\Providers\LangServiceProvider::class,
        ];
    }
}
