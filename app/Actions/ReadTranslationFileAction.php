<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

<<<<<<< HEAD
<<<<<<< HEAD
=======
use Illuminate\Support\Arr;
>>>>>>> 054e6ea (.)
=======
use Illuminate\Support\Arr;
>>>>>>> bb1b835 (.)
use Spatie\QueueableAction\QueueableAction;

class ReadTranslationFileAction
{
    use QueueableAction;

    /**
     * Legge il contenuto di un file di traduzione.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string  $filePath  Percorso del file di traduzione
     * @return array<string, mixed> Contenuto del file di traduzione
     *
=======
     * @param string $filePath Percorso del file di traduzione
     * @return array<string, mixed> Contenuto del file di traduzione
>>>>>>> 054e6ea (.)
=======
     * @param string $filePath Percorso del file di traduzione
     * @return array<string, mixed> Contenuto del file di traduzione
>>>>>>> bb1b835 (.)
     * @throws \Exception Se il file non esiste o non è leggibile
     */
    public function execute(string $filePath): array
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! file_exists($filePath)) {
            throw new \Exception("File di traduzione non trovato: {$filePath}");
        }

        if (! is_readable($filePath)) {
=======
        if (!file_exists($filePath)) {
            throw new \Exception("File di traduzione non trovato: {$filePath}");
        }

        if (!is_readable($filePath)) {
>>>>>>> 054e6ea (.)
=======
        if (!file_exists($filePath)) {
            throw new \Exception("File di traduzione non trovato: {$filePath}");
        }

        if (!is_readable($filePath)) {
>>>>>>> bb1b835 (.)
            throw new \Exception("File di traduzione non leggibile: {$filePath}");
        }

        // Carica il file di traduzione
        $translations = require $filePath;

<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_array($translations)) {
            throw new \Exception("File di traduzione non valido: {$filePath}");
        }

=======
        if (!is_array($translations)) {
            throw new \Exception("File di traduzione non valido: {$filePath}");
        }
>>>>>>> 054e6ea (.)
=======
        if (!is_array($translations)) {
            throw new \Exception("File di traduzione non valido: {$filePath}");
        }
>>>>>>> bb1b835 (.)
        /** @phpstan-ignore return.type */
        return $translations;
    }

    /**
     * Converte un array di traduzioni in formato PHP.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array<string, mixed>  $translations  Traduzioni da convertire
=======
     * @param array<string, mixed> $translations Traduzioni da convertire
>>>>>>> 054e6ea (.)
=======
     * @param array<string, mixed> $translations Traduzioni da convertire
>>>>>>> bb1b835 (.)
     * @return string Codice PHP del file di traduzione
     */
    public function toPhp(array $translations): string
    {
        $content = "<?php\n\nreturn [\n";
        $content .= $this->arrayToPhp($translations, 1);
        $content .= "];\n";

        return $content;
    }

    /**
     * Converte un array in formato PHP con indentazione.
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
     * @return string Codice PHP dell'array
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
                /** @phpstan-ignore argument.type */
                $content .= $this->arrayToPhp($value, $indent + 1);
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
