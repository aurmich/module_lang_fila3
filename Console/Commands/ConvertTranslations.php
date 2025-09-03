<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 8da72fe (.)
namespace Modules\Lang\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
<<<<<<< HEAD
use function Safe\json_encode;
use function Safe\json_decode;
use Webmozart\Assert\Assert;
=======
>>>>>>> 8da72fe (.)

class ConvertTranslations extends Command
{
    protected $signature = 'translations:convert 
                            {from : Current format (php|json)}
                            {to : Target format (php|json)}
                            {locale=it : Locale to convert}
                            {--path= : Custom path to translations}';

    protected $description = 'Convert translation files between PHP and JSON formats';

<<<<<<< HEAD
    public function handle(): int
    {
        $fromArg = $this->argument('from');
        $toArg = $this->argument('to');
        $localeArg = $this->argument('locale');
        $pathOption = $this->option('path');
        
        Assert::string($fromArg, 'Il parametro "from" deve essere una stringa');
        Assert::string($toArg, 'Il parametro "to" deve essere una stringa');
        Assert::string($localeArg, 'Il parametro "locale" deve essere una stringa');
        
        $from = strtolower($fromArg);
        $to = strtolower($toArg);
        $locale = $localeArg;
        $path = $pathOption ?: lang_path($locale);
        Assert::string($path, 'Il percorso deve essere una stringa');
=======
    public function handle()
    {
        $from = strtolower($this->argument('from'));
        $to = strtolower($this->argument('to'));
        $locale = $this->argument('locale');
        $path = $this->option('path') ?: lang_path($locale);
>>>>>>> 8da72fe (.)

        if (!in_array($from, ['php', 'json']) || !in_array($to, ['php', 'json'])) {
            $this->error('Invalid format. Use "php" or "json"');
            return 1;
        }

        if ($from === $to) {
            $this->info('Source and target formats are the same. Nothing to do.');
            return 0;
        }

        if (!File::exists($path)) {
            $this->error("Directory not found: {$path}");
            return 1;
        }

        try {
            if ($from === 'php' && $to === 'json') {
                $this->phpToJson($path, $locale);
            } else {
                $this->jsonToPhp($path, $locale);
            }
            
            $this->info('\nConversion completed successfully!');
            return 0;
        } catch (\Exception $e) {
            $this->error("Error during conversion: " . $e->getMessage());
            return 1;
        }
    }

<<<<<<< HEAD
    protected function phpToJson(string $path, string $locale): void
    {
        /** @var array<string, array<string, mixed>> $translations */
=======
    protected function phpToJson($path, $locale)
    {
>>>>>>> 8da72fe (.)
        $translations = [];
        $files = File::files($path);
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && $file->getFilename() !== 'validation.php') {
                $key = $file->getFilenameWithoutExtension();
<<<<<<< HEAD
                $fileTranslations = require $file->getPathname();
                Assert::isArray($fileTranslations, 'Le traduzioni caricate devono essere un array');
                /** @var array<string, mixed> $fileTranslations */
                $translations[$key] = $fileTranslations;
=======
                $translations[$key] = require $file->getPathname();
>>>>>>> 8da72fe (.)
            }
        }

        // Flatten the array
<<<<<<< HEAD
        /** @var array<string, mixed> $translationsForFlatten */
        $translationsForFlatten = $translations;
        $flattened = $this->flattenArray($translationsForFlatten);
        
        // Save to JSON
        $jsonPath = lang_path("{$locale}.json");
        $jsonContent = json_encode($flattened, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        Assert::string($jsonContent, 'json_encode deve restituire una stringa');
        File::put($jsonPath, $jsonContent);
=======
        $flattened = $this->flattenArray($translations);
        
        // Save to JSON
        $jsonPath = lang_path("{$locale}.json");
        File::put($jsonPath, json_encode($flattened, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
>>>>>>> 8da72fe (.)
        
        $this->info("Converted PHP files to {$jsonPath}");
    }

<<<<<<< HEAD
    protected function jsonToPhp(string $path, string $locale): void
=======
    protected function jsonToPhp($path, $locale)
>>>>>>> 8da72fe (.)
    {
        $jsonFile = lang_path("{$locale}.json");
        
        if (!File::exists($jsonFile)) {
            $this->error("JSON file not found: {$jsonFile}");
            return;
        }

<<<<<<< HEAD
        $jsonContent = File::get($jsonFile);
        Assert::string($jsonContent, 'Il contenuto del file JSON deve essere una stringa');
        $translations = json_decode($jsonContent, true);
        
        if (!is_array($translations)) {
            $this->error("Invalid JSON content in {$jsonFile}");
            return;
        }
        
        $nested = [];

        foreach ($translations as $key => $value) {
            Assert::string($key, 'Le chiavi delle traduzioni devono essere stringhe');
=======
        $translations = json_decode(File::get($jsonFile), true);
        $nested = [];

        foreach ($translations as $key => $value) {
>>>>>>> 8da72fe (.)
            $this->setNestedValue($nested, $key, $value);
        }

        // Save PHP files
        foreach ($nested as $file => $content) {
<<<<<<< HEAD
            Assert::string($file, 'Il nome del file deve essere una stringa');
=======
>>>>>>> 8da72fe (.)
            $filePath = lang_path("{$locale}/{$file}.php");
            
            $content = "<?php\n\nreturn " . $this->varExport($content, true) . ";\n";
            File::ensureDirectoryExists(dirname($filePath));
            File::put($filePath, $content);
            
            $this->info("Created: {$filePath}");
        }
    }

<<<<<<< HEAD
    /**
     * @param array<string, mixed> $array
     * @param string $prefix
     * @return array<string, string>
     */
    protected function flattenArray(array $array, string $prefix = ''): array
=======
    protected function flattenArray($array, $prefix = '')
>>>>>>> 8da72fe (.)
    {
        $result = [];
        
        foreach ($array as $key => $value) {
<<<<<<< HEAD
            Assert::string($key, 'Le chiavi degli array devono essere stringhe');
            $newKey = $prefix ? "{$prefix}.{$key}" : $key;
            
            if (is_array($value)) {
                Assert::isArray($value, 'I valori annidati devono essere array');
                /** @var array<string, mixed> $value */
                $result = array_merge($result, $this->flattenArray($value, $newKey));
            } else {
                Assert::string($value, 'I valori delle traduzioni devono essere stringhe');
=======
            $newKey = $prefix ? "{$prefix}.{$key}" : $key;
            
            if (is_array($value)) {
                $result = array_merge($result, $this->flattenArray($value, $newKey));
            } else {
>>>>>>> 8da72fe (.)
                $result[$newKey] = $value;
            }
        }
        
        return $result;
    }

<<<<<<< HEAD
    /**
     * @param array<string, mixed> $array
     * @param string $key
     * @param mixed $value
     */
    protected function setNestedValue(array &$array, string $key, mixed $value): void
=======
    protected function setNestedValue(&$array, $key, $value)
>>>>>>> 8da72fe (.)
    {
        $keys = explode('.', $key);
        $current = &$array;
        
        foreach ($keys as $k) {
<<<<<<< HEAD
            Assert::string($k, 'Le chiavi annidate devono essere stringhe');
            if (!isset($current[$k]) || !is_array($current[$k])) {
=======
            if (!isset($current[$k])) {
>>>>>>> 8da72fe (.)
                $current[$k] = [];
            }
            $current = &$current[$k];
        }
        
        $current = $value;
    }
    
<<<<<<< HEAD
    /**
     * @param mixed $var
     * @param bool $return
     * @return string
     */
    protected function varExport(mixed $var, bool $return = false): string
=======
    protected function varExport($var, $return = false)
>>>>>>> 8da72fe (.)
    {
        if (is_array($var)) {
            $toImplode = [];
            $isAssoc = array_keys($var) !== range(0, count($var) - 1);
            
            foreach ($var as $key => $value) {
<<<<<<< HEAD
                Assert::string($key, 'Le chiavi degli array devono essere stringhe');
=======
>>>>>>> 8da72fe (.)
                $key = $isAssoc ? "\n    '" . addcslashes($key, "'\\") . "' => " : '';
                $toImplode[] = $key . $this->varExport($value, true);
            }
            
            $code = "[" . implode(", ", $toImplode) . "\n]";
            return $code;
        } else {
            $export = var_export($var, true);
<<<<<<< HEAD
            Assert::string($export, 'var_export deve restituire una stringa');
=======
>>>>>>> 8da72fe (.)
            return $export;
        }
    }
}
