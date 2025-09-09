<?php

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> 8da72fe (.)
=======
declare(strict_types=1);

>>>>>>> 3b02f37 (.)
=======
declare(strict_types=1);

>>>>>>> 1e3d805 (.)
namespace Modules\Lang\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use function Safe\json_encode;
use function Safe\shell_exec;
use Webmozart\Assert\Assert;
=======
>>>>>>> 8da72fe (.)
=======
use function Safe\json_encode;
use function Safe\shell_exec;
use Webmozart\Assert\Assert;
>>>>>>> 3b02f37 (.)
=======
use function Safe\json_encode;
use function Safe\shell_exec;
use Webmozart\Assert\Assert;
>>>>>>> 1e3d805 (.)

class FindMissingTranslations extends Command
{
    protected $signature = 'translations:missing 
                            {locale : The locale to check for missing translations}
                            {--path= : Path to scan for translations}
                            {--json : Output as JSON}';

    protected $description = 'Find missing translations in the application';

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    public function handle(): int
    {
        $localeArg = $this->argument('locale');
        $pathOption = $this->option('path');
        
        Assert::string($localeArg, 'Il parametro "locale" deve essere una stringa');
        
        $locale = $localeArg;
        $path = is_string($pathOption) ? $pathOption : app()->langPath("{$locale}");
        Assert::string($path, 'Il percorso deve essere una stringa');
<<<<<<< HEAD
<<<<<<< HEAD
=======
    public function handle()
    {
        $locale = $this->argument('locale');
        $path = $this->option('path') ?: app()->langPath("$locale");
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
        
        if (!File::exists($path)) {
            $this->error("Translation directory not found: {$path}");
            return 1;
        }

        $missing = $this->findMissingTranslations($path, $locale);
        
        if ($this->option('json')) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $jsonOutput = json_encode($missing, JSON_PRETTY_PRINT);
            $this->output->write($jsonOutput);
=======
            $this->output->write(json_encode($missing, JSON_PRETTY_PRINT));
>>>>>>> 8da72fe (.)
=======
            $jsonOutput = json_encode($missing, JSON_PRETTY_PRINT);
            $this->output->write($jsonOutput);
>>>>>>> 3b02f37 (.)
=======
            $jsonOutput = json_encode($missing, JSON_PRETTY_PRINT);
            $this->output->write($jsonOutput);
>>>>>>> 1e3d805 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    /**
     * @param string $path
     * @param string $locale
     * @return array<int, array<string, string|int>>
     */
    protected function findMissingTranslations(string $path, string $locale): array
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected function findMissingTranslations($path, $locale)
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    {
        $missing = [];
        $files = $this->getPhpFiles($path);
        
        foreach ($files as $file) {
            $relativePath = Str::after($file, $path . DIRECTORY_SEPARATOR);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::string($relativePath, 'Il percorso relativo deve essere una stringa');
=======
>>>>>>> 8da72fe (.)
=======
            Assert::string($relativePath, 'Il percorso relativo deve essere una stringa');
>>>>>>> 3b02f37 (.)
=======
            Assert::string($relativePath, 'Il percorso relativo deve essere una stringa');
>>>>>>> 1e3d805 (.)
            $relativePath = str_replace(DIRECTORY_SEPARATOR, '.', $relativePath);
            $namespace = str_replace('.php', '', $relativePath);
            
            $translations = require $file;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            Assert::isArray($translations, 'Le traduzioni devono essere un array');
            /** @var array<string, mixed> $translations */
=======
>>>>>>> 8da72fe (.)
=======
            Assert::isArray($translations, 'Le traduzioni devono essere un array');
            /** @var array<string, mixed> $translations */
>>>>>>> 3b02f37 (.)
=======
            Assert::isArray($translations, 'Le traduzioni devono essere un array');
            /** @var array<string, mixed> $translations */
>>>>>>> 1e3d805 (.)
            $missing = array_merge(
                $missing,
                $this->checkArrayForMissing($translations, $namespace, $file)
            );
        }
        
        return $missing;
    }
    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    /**
     * @param array<string, mixed> $array
     * @param string $namespace
     * @param string $file
     * @param string $parentKey
     * @return array<int, array<string, string|int>>
     */
    protected function checkArrayForMissing(array $array, string $namespace, string $file, string $parentKey = ''): array
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected function checkArrayForMissing($array, $namespace, $file, $parentKey = '')
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    {
        $missing = [];
        
        foreach ($array as $key => $value) {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
            Assert::string($key, 'Le chiavi delle traduzioni devono essere stringhe');
            $currentKey = $parentKey ? "{$parentKey}.{$key}" : $key;
            
            if (is_array($value)) {
                Assert::isArray($value, 'I valori annidati devono essere array');
                /** @var array<string, mixed> $value */
<<<<<<< HEAD
<<<<<<< HEAD
=======
            $currentKey = $parentKey ? "{$parentKey}.{$key}" : $key;
            
            if (is_array($value)) {
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    /**
     * @param string $key
     * @return int
     */
    protected function findOccurrences(string $key): int
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected function findOccurrences($key)
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    {
        $pattern = "__('" . str_replace('.', '\\.', $key) . "')";
        $command = "grep -r \"{$pattern}\" " . base_path() . " --include=\"*.php\" --include=\"*.blade.php\"";
        
        try {
            $result = shell_exec($command);
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
            if ($result === null) {
                return 0;
            }
            Assert::string($result, 'shell_exec deve restituire una stringa o null');
            return count(explode("\n", trim($result)));
<<<<<<< HEAD
<<<<<<< HEAD
=======
            return $result ? count(explode("\n", trim($result))) : 0;
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
        } catch (\Exception $e) {
            return 0;
        }
    }
    
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected function getPhpFiles($path)
    {
        return File::allFiles($path, function ($file) {
            return $file->getExtension() === 'php' && 
                   $file->getFilename() !== 'validation.php';
        });
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    }
}
