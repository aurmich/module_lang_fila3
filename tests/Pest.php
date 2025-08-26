<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Lang\Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Configuration
|--------------------------------------------------------------------------
|
| This file configures Pest testing for the Lang module.
| It sets up the test environment, custom expectations, and helper functions.
|
*/

<<<<<<< HEAD
uses(
    TestCase::class,
    RefreshDatabase::class,
    WithFaker::class,
)->in('Feature', 'Unit');

uses()->group('lang')->in('Feature', 'Unit');
=======
pest()->extend(TestCase::class)
<<<<<<< HEAD
<<<<<<< HEAD
    ->use(Illuminate\Foundation\Testing\RefreshDatabase::class)
=======
>>>>>>> 0cd7164 (.)
=======
>>>>>>> 0f52eb1 (.)
    ->in('Feature', 'Unit');
>>>>>>> 685d248 (.)

/*
|--------------------------------------------------------------------------
| Custom Expectations
|--------------------------------------------------------------------------
|
| Custom expectations for testing Lang module specific functionality.
| These expectations extend the base Pest expectations with module-specific assertions.
|
*/

expect()->extend('toBeTranslation', function () {
    return $this->toBeInstanceOf(\Modules\Lang\Models\Translation::class);
});

expect()->extend('toBeTranslationFile', function () {
    return $this->toBeInstanceOf(\Modules\Lang\Models\TranslationFile::class);
});

/*
|--------------------------------------------------------------------------
| Helper Functions
|--------------------------------------------------------------------------
|
| Helper functions to create test data for the Lang module.
| These functions provide a clean API for test setup.
|
*/

/**
 * Create a translation record for testing.
 *
 * @param array<string, mixed> $attributes
 * @return \Modules\Lang\Models\Translation
 */
function createTranslation(array $attributes = []): \Modules\Lang\Models\Translation
{
    return \Modules\Lang\Models\Translation::factory()->create($attributes);
}

/**
 * Make a translation record without saving to database.
 *
 * @param array<string, mixed> $attributes
 * @return \Modules\Lang\Models\Translation
 */
function makeTranslation(array $attributes = []): \Modules\Lang\Models\Translation
{
    return \Modules\Lang\Models\Translation::factory()->make($attributes);
}

/**
 * Create a translation file record for testing.
 *
 * @param array<string, mixed> $attributes
 * @return \Modules\Lang\Models\TranslationFile
 */
function createTranslationFile(array $attributes = []): \Modules\Lang\Models\TranslationFile
{
    return \Modules\Lang\Models\TranslationFile::factory()->create($attributes);
}

/**
 * Make a translation file record without saving to database.
 *
 * @param array<string, mixed> $attributes
 * @return \Modules\Lang\Models\TranslationFile
 */
function makeTranslationFile(array $attributes = []): \Modules\Lang\Models\TranslationFile
{
    return \Modules\Lang\Models\TranslationFile::factory()->make($attributes);
}

/**
 * Create a complete translation setup for testing.
 *
 * @param array<string, mixed> $translationAttributes
 * @param array<string, mixed> $fileAttributes
 * @return array{
 *     translation: \Modules\Lang\Models\Translation,
 *     file: \Modules\Lang\Models\TranslationFile
 * }
 */
function createTranslationSetup(
    array $translationAttributes = [],
    array $fileAttributes = []
): array {
    $translation = createTranslation($translationAttributes);
    $file = createTranslationFile($fileAttributes);

    return [
        'translation' => $translation,
        'file' => $file,
    ];
}
