<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;

class SyncTranslationsAction
{
    use QueueableAction;

    /**
     * Sincronizza le traduzioni da una lingua sorgente a lingue target.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $sourceLang  Lingua sorgente (default: 'it')
     * @param  array<string>  $targetLangs  Lingue target (default: ['en', 'de'])
     * @param  string|null  $specificModule  Modulo specifico (opzionale)
=======
     * @param string $sourceLang Lingua sorgente (default: 'it')
     * @param array<string> $targetLangs Lingue target (default: ['en', 'de'])
     * @param string|null $specificModule Modulo specifico (opzionale)
>>>>>>> 054e6ea (.)
=======
     * @param string $sourceLang Lingua sorgente (default: 'it')
     * @param array<string> $targetLangs Lingue target (default: ['en', 'de'])
     * @param string|null $specificModule Modulo specifico (opzionale)
>>>>>>> bb1b835 (.)
     * @return array<string, mixed> Risultato della sincronizzazione
     */
    public function execute(string $sourceLang = 'it', array $targetLangs = ['en', 'de'], ?string $specificModule = null): array
    {
        $modulesPath = base_path('Modules');
        $modules = $specificModule ? [$specificModule] : $this->getModules($modulesPath);

        $results = [
            'total_modules' => 0,
            'total_files' => 0,
            'total_translations' => 0,
            'modules' => [],
        ];

        foreach ($modules as $module) {
            $moduleResults = $this->syncModule($module, $sourceLang, $targetLangs);
            $results['modules'][$module] = $moduleResults;
            $results['total_files'] += is_numeric($moduleResults['files_processed'] ?? null) ? (int) $moduleResults['files_processed'] : 0;
            $results['total_translations'] += is_numeric($moduleResults['translations_added'] ?? null) ? (int) $moduleResults['translations_added'] : 0;
            $results['total_modules']++;
        }

        return $results;
    }

    /**
     * Sincronizza le traduzioni per un modulo specifico.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $module  Nome del modulo
     * @param  string  $sourceLang  Lingua sorgente
     * @param  array<string>  $targetLangs  Lingue target
=======
     * @param string $module Nome del modulo
     * @param string $sourceLang Lingua sorgente
     * @param array<string> $targetLangs Lingue target
>>>>>>> 054e6ea (.)
=======
     * @param string $module Nome del modulo
     * @param string $sourceLang Lingua sorgente
     * @param array<string> $targetLangs Lingue target
>>>>>>> bb1b835 (.)
     * @return array<string, mixed> Risultato per il modulo
     */
    private function syncModule(string $module, string $sourceLang, array $targetLangs): array
    {
        $moduleLangPath = base_path("Modules/{$module}/lang");
<<<<<<< HEAD
<<<<<<< HEAD

        if (! File::exists($moduleLangPath)) {
=======
        
        if (!File::exists($moduleLangPath)) {
>>>>>>> 054e6ea (.)
=======
        
        if (!File::exists($moduleLangPath)) {
>>>>>>> bb1b835 (.)
            return [
                'status' => 'skipped',
                'reason' => 'No lang directory',
                'files_processed' => 0,
                'translations_added' => 0,
            ];
        }

        $sourcePath = "{$moduleLangPath}/{$sourceLang}";
<<<<<<< HEAD
<<<<<<< HEAD
        if (! File::exists($sourcePath)) {
=======
        if (!File::exists($sourcePath)) {
>>>>>>> 054e6ea (.)
=======
        if (!File::exists($sourcePath)) {
>>>>>>> bb1b835 (.)
            return [
                'status' => 'skipped',
                'reason' => "Source language {$sourceLang} not found",
                'files_processed' => 0,
                'translations_added' => 0,
            ];
        }

        $sourceFiles = File::glob("{$sourcePath}/*.php");
        $filesProcessed = 0;
        $translationsAdded = 0;

        foreach ($sourceFiles as $sourceFile) {
            $fileName = basename($sourceFile);
            $sourceTranslations = $this->loadTranslations($sourceFile);

            if (empty($sourceTranslations)) {
                continue;
            }

            $filesProcessed++;

            foreach ($targetLangs as $targetLang) {
                $targetPath = "{$moduleLangPath}/{$targetLang}";
                $targetFile = "{$targetPath}/{$fileName}";

                // Create target directory if it doesn't exist
<<<<<<< HEAD
<<<<<<< HEAD
                if (! File::exists($targetPath)) {
=======
                if (!File::exists($targetPath)) {
>>>>>>> 054e6ea (.)
=======
                if (!File::exists($targetPath)) {
>>>>>>> bb1b835 (.)
                    File::makeDirectory($targetPath, 0755, true);
                }

                // Load existing target translations
                $targetTranslations = File::exists($targetFile) ? $this->loadTranslations($targetFile) : [];

                // Merge translations
                /** @var array<string, mixed> $sourceTranslations */
                /** @var array<string, mixed> $targetTranslations */
                $mergedTranslations = $this->mergeTranslations($sourceTranslations, $targetTranslations);

                // Save merged translations
                $this->saveTranslations($targetFile, $mergedTranslations);

                $newKeys = count($mergedTranslations) - count($targetTranslations);
                $translationsAdded += (int) $newKeys;
            }
        }

        return [
            'status' => 'completed',
            'files_processed' => $filesProcessed,
            'translations_added' => $translationsAdded,
        ];
    }

    /**
     * Ottiene la lista dei moduli con cartella lang.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $modulesPath  Percorso dei moduli
=======
     * @param string $modulesPath Percorso dei moduli
>>>>>>> 054e6ea (.)
=======
     * @param string $modulesPath Percorso dei moduli
>>>>>>> bb1b835 (.)
     * @return array<string> Lista dei moduli
     */
    private function getModules(string $modulesPath): array
    {
        $modules = [];
        $directories = File::directories($modulesPath);
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> 054e6ea (.)
=======
        
>>>>>>> bb1b835 (.)
        foreach ($directories as $directory) {
            $moduleName = basename($directory);
            if (File::exists("{$directory}/lang")) {
                $modules[] = $moduleName;
            }
        }

        return $modules;
    }

    /**
     * Carica le traduzioni da un file.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $filePath  Percorso del file
=======
     * @param string $filePath Percorso del file
>>>>>>> 054e6ea (.)
=======
     * @param string $filePath Percorso del file
>>>>>>> bb1b835 (.)
     * @return array<string, mixed> Traduzioni caricate
     */
    private function loadTranslations(string $filePath): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! File::exists($filePath)) {
=======
        if (!File::exists($filePath)) {
>>>>>>> 054e6ea (.)
=======
        if (!File::exists($filePath)) {
>>>>>>> bb1b835 (.)
            return [];
        }

        try {
            $translations = require $filePath;
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 054e6ea (.)
=======
>>>>>>> bb1b835 (.)
            return is_array($translations) ? $translations : [];
        } catch (\Exception $e) {
            return [];
        }
    }

    /**
     * Filtra un array per avere solo chiavi stringa (aiuta PHPStan).
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<mixed, mixed>  $arr
=======
     * @param array<mixed, mixed> $arr
>>>>>>> 054e6ea (.)
=======
     * @param array<mixed, mixed> $arr
>>>>>>> bb1b835 (.)
     * @return array<string, mixed>
     */
    private function filterStringKeyArray(array $arr): array
    {
        $out = [];
        foreach ($arr as $k => $v) {
            if (is_string($k)) {
                $out[$k] = $v;
            }
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 054e6ea (.)
=======
>>>>>>> bb1b835 (.)
        return $out;
    }

    /**
     * Unisce le traduzioni sorgente con quelle target.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $source  Traduzioni sorgente
     * @param  array<string, mixed>  $target  Traduzioni target
=======
     * @param array<string, mixed> $source Traduzioni sorgente
     * @param array<string, mixed> $target Traduzioni target
>>>>>>> 054e6ea (.)
=======
     * @param array<string, mixed> $source Traduzioni sorgente
     * @param array<string, mixed> $target Traduzioni target
>>>>>>> bb1b835 (.)
     * @return array<string, mixed> Traduzioni unite
     */
    private function mergeTranslations(array $source, array $target): array
    {
        $merged = $target;

        foreach ($source as $key => $value) {
            if (is_array($value)) {
                /** @var array<string, mixed> $subTarget */
                $subTarget = isset($target[$key]) && is_array($target[$key]) ? $this->filterStringKeyArray($target[$key]) : [];
                $merged[$key] = $this->mergeTranslations($this->filterStringKeyArray($value), $subTarget);
            } else {
<<<<<<< HEAD
<<<<<<< HEAD
                if (! isset($merged[$key])) {
=======
                if (!isset($merged[$key])) {
>>>>>>> 054e6ea (.)
=======
                if (!isset($merged[$key])) {
>>>>>>> bb1b835 (.)
                    $merged[$key] = $value;
                }
            }
        }

        return $merged;
    }

    /**
     * Salva le traduzioni in un file.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $filePath  Percorso del file
     * @param  array<string, mixed>  $translations  Traduzioni da salvare
=======
     * @param string $filePath Percorso del file
     * @param array<string, mixed> $translations Traduzioni da salvare
     * @return void
>>>>>>> 054e6ea (.)
=======
     * @param string $filePath Percorso del file
     * @param array<string, mixed> $translations Traduzioni da salvare
     * @return void
>>>>>>> bb1b835 (.)
     */
    private function saveTranslations(string $filePath, array $translations): void
    {
        $content = "<?php\n\nreturn [\n";
        $content .= $this->arrayToPhp($this->filterStringKeyArray($translations), 1);
        $content .= "];\n";

        File::put($filePath, $content);
    }

    /**
     * Converte un array in formato PHP.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $array  Array da convertire
     * @param  int  $indent  Livello di indentazione
=======
     * @param array<string, mixed> $array Array da convertire
     * @param int $indent Livello di indentazione
>>>>>>> 054e6ea (.)
=======
     * @param array<string, mixed> $array Array da convertire
     * @param int $indent Livello di indentazione
>>>>>>> bb1b835 (.)
     * @return string Codice PHP
     */
    private function arrayToPhp(array $array, int $indent = 0): string
    {
        $content = '';
        $indentStr = str_repeat('    ', $indent);

        foreach ($array as $key => $value) {
<<<<<<< HEAD
<<<<<<< HEAD
            $content .= $indentStr."'".addslashes($key)."' => ";
=======
            $content .= $indentStr . "'" . addslashes($key) . "' => ";
>>>>>>> 054e6ea (.)
=======
            $content .= $indentStr . "'" . addslashes($key) . "' => ";
>>>>>>> bb1b835 (.)

            if (is_array($value)) {
                $content .= "[\n";
                $content .= $this->arrayToPhp($this->filterStringKeyArray($value), $indent + 1);
<<<<<<< HEAD
<<<<<<< HEAD
                $content .= $indentStr."],\n";
            } else {
                /** @phpstan-ignore-next-line */
                $content .= "'".addslashes((string) $value)."',\n";
=======
                $content .= $indentStr . "],\n";
            } else {
                /** @phpstan-ignore-next-line */
                $content .= "'" . addslashes((string) $value) . "',\n";
>>>>>>> 054e6ea (.)
=======
                $content .= $indentStr . "],\n";
            } else {
                /** @phpstan-ignore-next-line */
                $content .= "'" . addslashes((string) $value) . "',\n";
>>>>>>> bb1b835 (.)
            }
        }

        return $content;
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
} 
>>>>>>> 054e6ea (.)
=======
} 
>>>>>>> bb1b835 (.)
