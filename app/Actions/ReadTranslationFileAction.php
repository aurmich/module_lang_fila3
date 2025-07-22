<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Arr;
use Spatie\QueueableAction\QueueableAction;

class ReadTranslationFileAction
{
    use QueueableAction;

    /**
<<<<<<< HEAD
     * Legge il contenuto di un file di traduzione.
     *
     * @param string $filePath Percorso del file di traduzione
     * @return array<string, mixed> Contenuto del file di traduzione
     * @throws \Exception Se il file non esiste o non è leggibile
=======
     * Read the content of a translation file.
     *
     * @param string $filePath Path to the translation file
     * @return array<string, mixed> Content of the translation file
     * @throws \Exception If the file does not exist or is not readable
>>>>>>> 637747f (.)
     */
    public function execute(string $filePath): array
    {
        if (!file_exists($filePath)) {
<<<<<<< HEAD
            throw new \Exception("File di traduzione non trovato: {$filePath}");
        }

        if (!is_readable($filePath)) {
            throw new \Exception("File di traduzione non leggibile: {$filePath}");
        }

        // Carica il file di traduzione
        $translations = require $filePath;

        if (!is_array($translations)) {
            throw new \Exception("File di traduzione non valido: {$filePath}");
        }
<<<<<<< HEAD
        /** @phpstan-ignore-next-line */
=======
        /** @phpstan-ignore return.type */
>>>>>>> e3660f5 (.)
=======
            throw new \Exception("Translation file not found: {$filePath}");
        }

        if (!is_readable($filePath)) {
            throw new \Exception("Translation file not readable: {$filePath}");
        }

        // Load the translation file
        $translations = require $filePath;

        if (!is_array($translations)) {
            throw new \Exception("Invalid translation file: {$filePath}");
        }
        // @phpstan-ignore return.type
>>>>>>> 637747f (.)
        return $translations;
    }

    /**
<<<<<<< HEAD
     * Converte un array di traduzioni in formato PHP.
     *
     * @param array<string, mixed> $translations Traduzioni da convertire
     * @return string Codice PHP del file di traduzione
=======
     * Convert a translation array to PHP code.
     *
     * @param array<string, mixed> $translations Translations to convert
     * @return string PHP code for the translation file
>>>>>>> 637747f (.)
     */
    public function toPhp(array $translations): string
    {
        $content = "<?php\n\nreturn [\n";
        $content .= $this->arrayToPhp($translations, 1);
        $content .= "];\n";

        return $content;
    }

    /**
<<<<<<< HEAD
     * Converte un array in formato PHP con indentazione.
     *
     * @param array<string, mixed> $array Array da convertire
     * @param int $indent Livello di indentazione
     * @return string Codice PHP dell'array
=======
     * Convert an array to PHP code with indentation.
     *
     * @param array<string, mixed> $array Array to convert
     * @param int $indent Indentation level
     * @return string PHP code for the array
>>>>>>> 637747f (.)
     */
    private function arrayToPhp(array $array, int $indent = 0): string
    {
        $content = '';
        $indentStr = str_repeat('    ', $indent);

        foreach ($array as $key => $value) {
            $content .= $indentStr . "'" . addslashes($key) . "' => ";

            if (is_array($value)) {
                $content .= "[\n";
<<<<<<< HEAD
<<<<<<< HEAD
                /** @phpstan-ignore-next-line */
=======
                /** @phpstan-ignore argument.type */
>>>>>>> e3660f5 (.)
=======
                // @phpstan-ignore argument.type
>>>>>>> 637747f (.)
                $content .= $this->arrayToPhp($value, $indent + 1);
                $content .= $indentStr . "],\n";
            } else {
                $content .= "'" . addslashes((string) $value) . "',\n";
            }
        }

        return $content;
    }
} 