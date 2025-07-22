<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Arr;
use Spatie\QueueableAction\QueueableAction;

class ReadTranslationFileAction
{
    use QueueableAction;

    /**
     * Read the content of a translation file.
     *
     * @param string $filePath Path to the translation file
     * @return array<string, mixed> Content of the translation file
     * @throws \Exception If the file does not exist or is not readable
     */
    public function execute(string $filePath): array
    {
        if (!file_exists($filePath)) {
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
        return $translations;
    }

    /**
     * Convert a translation array to PHP code.
     *
     * @param array<string, mixed> $translations Translations to convert
     * @return string PHP code for the translation file
     */
    public function toPhp(array $translations): string
    {
        $content = "<?php\n\nreturn [\n";
        $content .= $this->arrayToPhp($translations, 1);
        $content .= "];\n";

        return $content;
    }

    /**
     * Convert an array to PHP code with indentation.
     *
     * @param array<string, mixed> $array Array to convert
     * @param int $indent Indentation level
     * @return string PHP code for the array
     */
    private function arrayToPhp(array $array, int $indent = 0): string
    {
        $content = '';
        $indentStr = str_repeat('    ', $indent);

        foreach ($array as $key => $value) {
            $content .= $indentStr . "'" . addslashes($key) . "' => ";

            if (is_array($value)) {
                // @phpstan-ignore-next-line
                $content .= "[\n";
                $content .= $this->arrayToPhp($value, $indent + 1);
                $content .= $indentStr . "],\n";
            } else {
                $content .= "'" . addslashes((string) $value) . "',\n";
            }
        }

        return $content;
    }
} 