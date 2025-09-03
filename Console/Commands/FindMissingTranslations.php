<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 8da72fe (.)
namespace Modules\Lang\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
<<<<<<< HEAD
use function Safe\json_encode;
use function Safe\shell_exec;
use Webmozart\Assert\Assert;
=======
>>>>>>> 8da72fe (.)

class FindMissingTranslations extends Command
{
    protected $signature = 'translations:missing 
                            {locale : The locale to check for missing translations}
                            {--path= : Path to scan for translations}
                            {--json : Output as JSON}';

    protected $description = 'Find missing translations in the application';

<<<<<<< HEAD
    public function handle(): int
    {
        $localeArg = $this->argument('locale');
        $pathOption = $this->option('path');
        
        Assert::string($localeArg, 'Il parametro "locale" deve essere una stringa');
        
        $locale = $localeArg;
        $path = is_string($pathOption) ? $pathOption : app()->langPath("{$locale}");
        Assert::string($path, 'Il percorso deve essere una stringa');
=======
    public function handle()
    {
        $locale = $this->argument('locale');
        $path = $this->option('path') ?: app()->langPath("$locale");
>>>>>>> 8da72fe (.)
        
        if (!File::exists($path)) {
            $this->error("Translation directory not found: {$path}");
            return 1;
        }

        $missing = $this->findMissingTranslations($path, $locale);
        
        if ($this->option('json')) {
<<<<<<< HEAD
            $jsonOutput = json_encode($missing, JSON_PRETTY_PRINT);
            $this->output->write($jsonOutput);
=======
            $this->output->write(json_encode($missing, JSON_PRETTY_PRINT));
>>>>>>> 8da72fe (.)
            return 0;
        }

        if (empty($missing)) {
            $this->info("No missing translations found in {$locale}.");
            return 0;
        }

        $this->info("Missing translations in {$locale}:");
        $this->table(['Key', 'File', 'Occurrences'], $missing);
        
        return 0;
    }

<<<<<<< HEAD
    /**
     * @param string $path
     * @param string $locale
     * @return array<int, array<string, string|int>>
     */
    protected function findMissingTranslations(string $path, string $locale): array
=======
    protected function findMissingTranslations($path, $locale)
>>>>>>> 8da72fe (.)
    {
        $missing = [];
        $files = $this->getPhpFiles($path);
        
        foreach ($files as $file) {
            $relativePath = Str::after($file, $path . DIRECTORY_SEPARATOR);
<<<<<<< HEAD
            Assert::string($relativePath, 'Il percorso relativo deve essere una stringa');
=======
>>>>>>> 8da72fe (.)
            $relativePath = str_replace(DIRECTORY_SEPARATOR, '.', $relativePath);
            $namespace = str_replace('.php', '', $relativePath);
            
            $translations = require $file;
<<<<<<< HEAD
            Assert::isArray($translations, 'Le traduzioni devono essere un array');
            /** @var array<string, mixed> $translations */
=======
>>>>>>> 8da72fe (.)
            $missing = array_merge(
                $missing,
                $this->checkArrayForMissing($translations, $namespace, $file)
            );
        }
        
        return $missing;
    }
    
<<<<<<< HEAD
    /**
     * @param array<string, mixed> $array
     * @param string $namespace
     * @param string $file
     * @param string $parentKey
     * @return array<int, array<string, string|int>>
     */
    protected function checkArrayForMissing(array $array, string $namespace, string $file, string $parentKey = ''): array
=======
    protected function checkArrayForMissing($array, $namespace, $file, $parentKey = '')
>>>>>>> 8da72fe (.)
    {
        $missing = [];
        
        foreach ($array as $key => $value) {
<<<<<<< HEAD
            Assert::string($key, 'Le chiavi delle traduzioni devono essere stringhe');
            $currentKey = $parentKey ? "{$parentKey}.{$key}" : $key;
            
            if (is_array($value)) {
                Assert::isArray($value, 'I valori annidati devono essere array');
                /** @var array<string, mixed> $value */
=======
            $currentKey = $parentKey ? "{$parentKey}.{$key}" : $key;
            
            if (is_array($value)) {
>>>>>>> 8da72fe (.)
                $missing = array_merge(
                    $missing,
                    $this->checkArrayForMissing($value, $namespace, $file, $currentKey)
                );
            } elseif ($value === '' || $value === null) {
                $missing[] = [
                    'key' => $namespace . '.' . $currentKey,
                    'file' => $file,
                    'occurrences' => $this->findOccurrences($namespace . '.' . $currentKey)
                ];
            }
        }
        
        return $missing;
    }
    
<<<<<<< HEAD
    /**
     * @param string $key
     * @return int
     */
    protected function findOccurrences(string $key): int
=======
    protected function findOccurrences($key)
>>>>>>> 8da72fe (.)
    {
        $pattern = "__('" . str_replace('.', '\\.', $key) . "')";
        $command = "grep -r \"{$pattern}\" " . base_path() . " --include=\"*.php\" --include=\"*.blade.php\"";
        
        try {
            $result = shell_exec($command);
<<<<<<< HEAD
            if ($result === null) {
                return 0;
            }
            Assert::string($result, 'shell_exec deve restituire una stringa o null');
            return count(explode("\n", trim($result)));
=======
            return $result ? count(explode("\n", trim($result))) : 0;
>>>>>>> 8da72fe (.)
        } catch (\Exception $e) {
            return 0;
        }
    }
    
<<<<<<< HEAD
    /**
     * @param string $path
     * @return array<int, string>
     */
    protected function getPhpFiles(string $path): array
    {
        $files = File::allFiles($path);
        $phpFiles = [];
        
        foreach ($files as $file) {
            if ($file->getExtension() === 'php' && $file->getFilename() !== 'validation.php') {
                $phpFiles[] = $file->getPathname();
            }
        }
        
        return $phpFiles;
=======
    protected function getPhpFiles($path)
    {
        return File::allFiles($path, function ($file) {
            return $file->getExtension() === 'php' && 
                   $file->getFilename() !== 'validation.php';
        });
>>>>>>> 8da72fe (.)
    }
}
