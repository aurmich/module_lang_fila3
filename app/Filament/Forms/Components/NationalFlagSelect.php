<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Forms\Components;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Forms\Components\Select;
use Illuminate\Support\Arr;
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Rinvex\Country\CountryLoader;
use Filament\Forms\Components\Select;
>>>>>>> 054e6ea (.)
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Rinvex\Country\CountryLoader;
use Filament\Forms\Components\Select;
>>>>>>> bb1b835 (.)
use Modules\Xot\Actions\File\AssetAction;

/**
 * National Flag Select Component.
<<<<<<< HEAD
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 054e6ea (.)
=======
 * 
>>>>>>> bb1b835 (.)
 * A Filament Select component that displays countries with their flags
 * and supports searching by country name using localized translations.
 */
class NationalFlagSelect extends Select
{
    /**
     * Set up the component configuration.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 054e6ea (.)
=======
     *
     * @return void
>>>>>>> bb1b835 (.)
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this
            ->searchable()
            ->allowHtml()
            ->optionsLimit(300)
            ->native(false)
            ->options(fn () => $this->getCountryOptions())
            ->getSearchResultsUsing(fn (string $search): array => $this->getFilteredCountryOptions($search));
    }

    /**
     * Get all country options with flags and localized names.
     *
     * @return array<string, string>
     */
    protected function getCountryOptions(): array
    {

<<<<<<< HEAD
<<<<<<< HEAD
=======
       
>>>>>>> 054e6ea (.)
=======
       
>>>>>>> bb1b835 (.)
        $countries = countries();
        $countries = Arr::sort($countries, function ($c) {
            return $c['name'];
        });

<<<<<<< HEAD
<<<<<<< HEAD
=======
       

>>>>>>> bb1b835 (.)
        $options = Arr::mapWithKeys($countries, function ($c) {
            $code = $c['iso_3166_1_alpha2'];
            //$label = $c['name'];
            $flag_name = strtolower($code);
            $localizedLabel = __('lang::countries.' . $flag_name);

            $flag_src = app(AssetAction::class)->execute('lang::svg/flag/' . $flag_name . '.svg');
            $flag = '<img src="' . $flag_src . '" class="h-4 w-6 mr-2" inline-block />';

            $html = '<span class="flex items-center gap-2">' . $flag . $localizedLabel . '</span>';
            return [$code => $html];
        });
<<<<<<< HEAD

=======
       

        $options = Arr::mapWithKeys($countries, function ($c) {
            $code = $c['iso_3166_1_alpha2'];
            //$label = $c['name'];
            $flag_name = strtolower($code);
            $localizedLabel = __('lang::countries.' . $flag_name);

            $flag_src = app(AssetAction::class)->execute('lang::svg/flag/' . $flag_name . '.svg');
            $flag = '<img src="' . $flag_src . '" class="h-4 w-6 mr-2" inline-block />';

            $html = '<span class="flex items-center gap-2">' . $flag . $localizedLabel . '</span>';
            return [$code => $html];
        });
        
>>>>>>> 054e6ea (.)
=======
        
>>>>>>> bb1b835 (.)
        return $options;
    }

    /**
     * Get filtered country options based on search query.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $search  The search query
=======
     * @param string $search The search query
>>>>>>> 054e6ea (.)
=======
     * @param string $search The search query
>>>>>>> bb1b835 (.)
     * @return array<string, string>
     */
    protected function getFilteredCountryOptions(string $search): array
    {
        if (empty(trim($search))) {
            return $this->getCountryOptions();
        }

        $countries = countries();
        $searchLower = strtolower($search);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 054e6ea (.)
=======
        
>>>>>>> bb1b835 (.)
        // Filter countries by search term
        $filteredCountries = array_filter($countries, function ($country) use ($searchLower) {
            $code = $country['iso_3166_1_alpha2'];
            $flag_name = strtolower($code);
<<<<<<< HEAD
<<<<<<< HEAD

            // Get localized country name
            $localizedName = __('lang::countries.'.$flag_name);

=======
            
            // Get localized country name
            $localizedName = __('lang::countries.' . $flag_name);
            
>>>>>>> 054e6ea (.)
=======
            
            // Get localized country name
            $localizedName = __('lang::countries.' . $flag_name);
            
>>>>>>> bb1b835 (.)
            // Search in both English name and localized name
            return str_contains(strtolower($country['name']), $searchLower) ||
                   str_contains(strtolower($localizedName), $searchLower) ||
                   str_contains(strtolower($code), $searchLower);
        });

        // Sort filtered results by name
        $filteredCountries = Arr::sort($filteredCountries, function ($c) {
            return $c['name'];
        });

        // Map to options format with flags
        $options = Arr::mapWithKeys($filteredCountries, function ($c) {
            $code = $c['iso_3166_1_alpha2'];
            $flag_name = strtolower($code);
<<<<<<< HEAD
<<<<<<< HEAD
            $localizedLabel = __('lang::countries.'.$flag_name);
=======
            $localizedLabel = __('lang::countries.' . $flag_name);
>>>>>>> bb1b835 (.)

            $flag_src = app(AssetAction::class)->execute('lang::svg/flag/' . $flag_name . '.svg');
            $flag = '<img src="' . $flag_src . '" class="h-4 w-6 mr-2" inline-block />';

<<<<<<< HEAD
=======
            $localizedLabel = __('lang::countries.' . $flag_name);

            $flag_src = app(AssetAction::class)->execute('lang::svg/flag/' . $flag_name . '.svg');
            $flag = '<img src="' . $flag_src . '" class="h-4 w-6 mr-2" inline-block />';

            $html = '<span class="flex items-center gap-2">' . $flag . $localizedLabel . '</span>';
>>>>>>> 054e6ea (.)
=======
            $html = '<span class="flex items-center gap-2">' . $flag . $localizedLabel . '</span>';
>>>>>>> bb1b835 (.)
            return [$code => $html];
        });

        return $options;
    }
}
