<?php

declare(strict_types=1);

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
>>>>>>> 1e3d805 (.)
=======
>>>>>>> 5ad6943 (.)
use Modules\Lang\Tests\TestCase;

/*
|--------------------------------------------------------------------------
| Test Case
|--------------------------------------------------------------------------
|
| The closure you provide to your test functions is always bound to a specific PHPUnit test
| case class. By default, that class is "PHPUnit\Framework\TestCase". Of course, you may
| need to change it using the "pest()" function to bind a different classes or traits.
|
*/

<<<<<<< HEAD
<<<<<<< HEAD
pest()->extend(TestCase::class)
    ->in('Feature', 'Unit');
=======
uses(
    TestCase::class,
    DatabaseTransactions::class, // ✅ CORRETTO - Rollback automatico
    WithFaker::class,
)->in('Feature', 'Unit');

uses()->group('lang')->in('Feature', 'Unit');
>>>>>>> 1e3d805 (.)
=======
pest()->extend(TestCase::class)
    ->in('Feature', 'Unit');
>>>>>>> 5ad6943 (.)

/*
|--------------------------------------------------------------------------
| Expectations
|--------------------------------------------------------------------------
|
<<<<<<< HEAD
<<<<<<< HEAD
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

=======
| Here you may define your custom expectations to be used in your tests.
|
*/

expect()->extend('toBeOne', function () {
    return $this->toBe(1);
});

>>>>>>> 1e3d805 (.)
=======
| When you're writing tests, you often need to check that values meet certain conditions. The
| "expect()" function gives you access to a set of "expectations" methods that you can use
| to assert different things. Of course, you may extend the Expectation API at any time.
|
*/

>>>>>>> 5ad6943 (.)
expect()->extend('toBeTranslation', function () {
    return $this->toBeInstanceOf(\Modules\Lang\Models\Translation::class);
});

expect()->extend('toBeLanguage', function () {
    return $this->toBeInstanceOf(\Modules\Lang\Models\Language::class);
});

<<<<<<< HEAD
<<<<<<< HEAD
=======
expect()->extend('toBePost', function () {
    return $this->toBeInstanceOf(\Modules\Lang\Models\Post::class);
});

expect()->extend('toHaveTranslationKey', function (string $key) {
    return expect($this->value->hasTranslationKey($key))->toBeTrue();
});

>>>>>>> 1e3d805 (.)
=======
>>>>>>> 5ad6943 (.)
/*
|--------------------------------------------------------------------------
| Functions
|--------------------------------------------------------------------------
|
<<<<<<< HEAD
<<<<<<< HEAD
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function createTranslation(array $attributes = []): \Modules\Lang\Models\Translation
=======
| Here you may define your custom helper functions to be used in your tests.
|
*/

function createLangTranslation(array $attributes = []): \Modules\Lang\Models\Translation
>>>>>>> 1e3d805 (.)
=======
| While Pest is very powerful out-of-the-box, you may have some testing code specific to your
| project that you don't want to repeat in every file. Here you can also expose helpers as
| global functions to help you to reduce the number of lines of code in your test files.
|
*/

function createTranslation(array $attributes = []): \Modules\Lang\Models\Translation
>>>>>>> 5ad6943 (.)
{
    return \Modules\Lang\Models\Translation::factory()->create($attributes);
}

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 5ad6943 (.)
function makeTranslation(array $attributes = []): \Modules\Lang\Models\Translation
{
    return \Modules\Lang\Models\Translation::factory()->make($attributes);
}

function createLanguage(array $attributes = []): \Modules\Lang\Models\Language
<<<<<<< HEAD
=======
function createLangTranslationFile(array $attributes = []): \Modules\Lang\Models\TranslationFile
>>>>>>> 1e3d805 (.)
=======
>>>>>>> 5ad6943 (.)
{
    return \Modules\Lang\Models\Language::factory()->create($attributes);
}

<<<<<<< HEAD
<<<<<<< HEAD
function makeLanguage(array $attributes = []): \Modules\Lang\Models\Language
{
    return \Modules\Lang\Models\Language::factory()->make($attributes);
=======
function createLangPost(array $attributes = []): \Modules\Lang\Models\Post
{
    return \Modules\Lang\Models\Post::factory()->create($attributes);
>>>>>>> 1e3d805 (.)
=======
function makeLanguage(array $attributes = []): \Modules\Lang\Models\Language
{
    return \Modules\Lang\Models\Language::factory()->make($attributes);
>>>>>>> 5ad6943 (.)
}
