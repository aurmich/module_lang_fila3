<?php

declare(strict_types=1);

namespace Modules\Lang\Filament\Forms\Components;

<<<<<<< HEAD
use Filament\Forms\Components\Select;
use Illuminate\Support\Arr;
=======
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Rinvex\Country\CountryLoader;
use Filament\Forms\Components\Select;
>>>>>>> 054e6ea (.)
use Modules\Xot\Actions\File\AssetAction;

/**
 * National Flag Select Component.
<<<<<<< HEAD
 *
=======
 * 
>>>>>>> 054e6ea (.)
 * A Filament Select component that displays countries with their flags
 * and supports searching by country name using localized translations.
 */
class NationalFlagSelect extends Select
{
    /**
     * Set up the component configuration.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 054e6ea (.)
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
=======
       
>>>>>>> 054e6ea (.)
        $countries = countries();
        $countries = Arr::sort($countries, function ($c) {
            return $c['name'];
        });

<<<<<<< HEAD
        $options = Arr::mapWithKeys($countries, function ($c) {
            $code = $c['iso_3166_1_alpha2'];
            // $label = $c['name'];
            $flag_name = strtolower($code);
            $localizedLabel = __('lang::countries.'.$flag_name);

            $flag_src = app(AssetAction::class)->execute('lang::svg/flag/'.$flag_name.'.svg');
            $flag = '<img src="'.$flag_src.'" class="h-4 w-6 mr-2" inline-block />';

            $html = '<span class="flex items-center gap-2">'.$flag.$localizedLabel.'</span>';

            return [$code => $html];
        });

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
        return $options;
    }

    /**
     * Get filtered country options based on search query.
     *
<<<<<<< HEAD
     * @param  string  $search  The search query
=======
     * @param string $search The search query
>>>>>>> 054e6ea (.)
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

=======
        
>>>>>>> 054e6ea (.)
        // Filter countries by search term
        $filteredCountries = array_filter($countries, function ($country) use ($searchLower) {
            $code = $country['iso_3166_1_alpha2'];
            $flag_name = strtolower($code);
<<<<<<< HEAD

            // Get localized country name
            $localizedName = __('lang::countries.'.$flag_name);

=======
            
            // Get localized country name
            $localizedName = __('lang::countries.' . $flag_name);
            
>>>>>>> 054e6ea (.)
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
            $localizedLabel = __('lang::countries.'.$flag_name);

            $flag_src = app(AssetAction::class)->execute('lang::svg/flag/'.$flag_name.'.svg');
            $flag = '<img src="'.$flag_src.'" class="h-4 w-6 mr-2" inline-block />';

            $html = '<span class="flex items-center gap-2">'.$flag.$localizedLabel.'</span>';

=======
            $localizedLabel = __('lang::countries.' . $flag_name);

            $flag_src = app(AssetAction::class)->execute('lang::svg/flag/' . $flag_name . '.svg');
            $flag = '<img src="' . $flag_src . '" class="h-4 w-6 mr-2" inline-block />';

            $html = '<span class="flex items-center gap-2">' . $flag . $localizedLabel . '</span>';
>>>>>>> 054e6ea (.)
            return [$code => $html];
        });

        return $options;
    }
}
