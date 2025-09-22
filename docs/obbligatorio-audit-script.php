<?php

declare(strict_types=1);

/**
 * Script specifico per identificare la parola "obbligatorio" e varianti
 * in file di traduzione non italiani
 */

function auditObbligatorioInNonItalianFiles(string $basePath): array
{
    $issues = [];
    $nonItalianFiles = [];
<<<<<<< HEAD

    // Trova tutti i file di traduzione non italiani
    $patterns = [
        $basePath . '/*/lang/en/*.php',
        $basePath . '/*/lang/de/*.php',
        $basePath . '/*/lang/es/*.php',
        $basePath . '/*/lang/fr/*.php',
    ];

=======
    
    // Trova tutti i file di traduzione non italiani
    $patterns = [
        $basePath . '/*/lang/en/*.php',
        $basePath . '/*/lang/de/*.php', 
        $basePath . '/*/lang/es/*.php',
        $basePath . '/*/lang/fr/*.php'
    ];
    
>>>>>>> 1e3d805 (.)
    foreach ($patterns as $pattern) {
        $files = glob($pattern);
        $nonItalianFiles = array_merge($nonItalianFiles, $files);
    }
<<<<<<< HEAD

=======
    
>>>>>>> 1e3d805 (.)
    // Pattern specifici per "obbligatorio" e varianti
    $obbligatorioPatterns = [
        'obbligatorio',
        'obbligatoria',
        'obbligatori',
        'obbligatorie',
        'è obbligatorio',
        'è obbligatoria',
        'sono obbligatori',
        'sono obbligatorie',
        'campo obbligatorio',
        'campi obbligatori',
        'dato obbligatorio',
        'dati obbligatori',
        'informazione obbligatoria',
        'informazioni obbligatorie',
        'valore obbligatorio',
        'valori obbligatori',
        'Obbligatorio',
        'Obbligatoria',
        'Obbligatori',
        'Obbligatorie',
        'OBBLIGATORIO',
        'OBBLIGATORIA',
        'OBBLIGATORI',
        'OBBLIGATORIE',
    ];
<<<<<<< HEAD

=======
    
>>>>>>> 1e3d805 (.)
    foreach ($nonItalianFiles as $file) {
        $content = file_get_contents($file);
        if (!$content) {
            continue;
        }
<<<<<<< HEAD

        $fileIssues = [];
        $lines = explode("\n", $content);

=======
        
        $fileIssues = [];
        $lines = explode("\n", $content);
        
>>>>>>> 1e3d805 (.)
        foreach ($obbligatorioPatterns as $pattern) {
            $lineNumber = 0;
            foreach ($lines as $line) {
                $lineNumber++;
                if (stripos($line, $pattern) !== false) {
                    $fileIssues[] = [
                        'pattern' => $pattern,
                        'line' => $lineNumber,
                        'content' => trim($line),
                        'language' => getLanguageFromPath($file),
<<<<<<< HEAD
                        'suggested_translation' => getSuggestedTranslation($pattern, getLanguageFromPath($file)),
=======
                        'suggested_translation' => getSuggestedTranslation($pattern, getLanguageFromPath($file))
>>>>>>> 1e3d805 (.)
                    ];
                }
            }
        }
<<<<<<< HEAD

=======
        
>>>>>>> 1e3d805 (.)
        if (!empty($fileIssues)) {
            $issues[$file] = $fileIssues;
        }
    }
<<<<<<< HEAD

=======
    
>>>>>>> 1e3d805 (.)
    return $issues;
}

function getLanguageFromPath(string $file): string
{
<<<<<<< HEAD
    if (str_contains($file, '/lang/en/') )
        return 'English';
    if (str_contains($file, '/lang/de/') )
        return 'German';
    if (str_contains($file, '/lang/es/') )
        return 'Spanish';
    if (str_contains($file, '/lang/fr/') )
        return 'French';
=======
    if (strpos($file, '/lang/en/') !== false) return 'English';
    if (strpos($file, '/lang/de/') !== false) return 'German';
    if (strpos($file, '/lang/es/') !== false) return 'Spanish';
    if (strpos($file, '/lang/fr/') !== false) return 'French';
>>>>>>> 1e3d805 (.)
    return 'Unknown';
}

function getSuggestedTranslation(string $italianText, string $targetLanguage): string
{
    $translations = [
        'obbligatorio' => [
            'English' => 'required',
            'German' => 'erforderlich',
            'Spanish' => 'obligatorio',
<<<<<<< HEAD
            'French' => 'obligatoire',
=======
            'French' => 'obligatoire'
>>>>>>> 1e3d805 (.)
        ],
        'obbligatoria' => [
            'English' => 'required',
            'German' => 'erforderlich',
            'Spanish' => 'obligatoria',
<<<<<<< HEAD
            'French' => 'obligatoire',
=======
            'French' => 'obligatoire'
>>>>>>> 1e3d805 (.)
        ],
        'obbligatori' => [
            'English' => 'required',
            'German' => 'erforderlich',
            'Spanish' => 'obligatorios',
<<<<<<< HEAD
            'French' => 'obligatoires',
=======
            'French' => 'obligatoires'
>>>>>>> 1e3d805 (.)
        ],
        'obbligatorie' => [
            'English' => 'required',
            'German' => 'erforderlich',
            'Spanish' => 'obligatorias',
<<<<<<< HEAD
            'French' => 'obligatoires',
=======
            'French' => 'obligatoires'
>>>>>>> 1e3d805 (.)
        ],
        'è obbligatorio' => [
            'English' => 'is required',
            'German' => 'ist erforderlich',
            'Spanish' => 'es obligatorio',
<<<<<<< HEAD
            'French' => 'est obligatoire',
=======
            'French' => 'est obligatoire'
>>>>>>> 1e3d805 (.)
        ],
        'campo obbligatorio' => [
            'English' => 'required field',
            'German' => 'Pflichtfeld',
            'Spanish' => 'campo obligatorio',
<<<<<<< HEAD
            'French' => 'champ obligatoire',
        ],
    ];

=======
            'French' => 'champ obligatoire'
        ]
    ];
    
>>>>>>> 1e3d805 (.)
    $lowerPattern = strtolower($italianText);
    if (isset($translations[$lowerPattern][$targetLanguage])) {
        return $translations[$lowerPattern][$targetLanguage];
    }
<<<<<<< HEAD

=======
    
>>>>>>> 1e3d805 (.)
    // Fallback generico
    switch ($targetLanguage) {
        case 'English':
            return 'required';
        case 'German':
            return 'erforderlich';
        case 'Spanish':
            return 'obligatorio';
        case 'French':
            return 'obligatoire';
        default:
            return 'required';
    }
}

function generateObbligatorioReport(array $issues): string
{
    $report = "# Audit \"Obbligatorio\" in Non-Italian Translation Files\n\n";
<<<<<<< HEAD
    $report .= '**Data**: ' . date('Y-m-d H:i:s') . "\n";
    $report .= "**Scope**: Identificazione della parola \"obbligatorio\" e varianti in file di traduzione non italiani\n\n";

    $totalIssues = 0;
    $totalFiles = count($issues);

    if ($totalFiles > 0) {
        $report .= "## ❌ Problemi Identificati\n\n";

        foreach ($issues as $file => $fileIssues) {
            $totalIssues += count($fileIssues);
            $language = getLanguageFromPath($file);
            $report .= '### File: `' . basename($file) . "` ({$language})\n\n";
            $report .= "**Path completo**: `{$file}`\n\n";

=======
    $report .= "**Data**: " . date('Y-m-d H:i:s') . "\n";
    $report .= "**Scope**: Identificazione della parola \"obbligatorio\" e varianti in file di traduzione non italiani\n\n";
    
    $totalIssues = 0;
    $totalFiles = count($issues);
    
    if ($totalFiles > 0) {
        $report .= "## ❌ Problemi Identificati\n\n";
        
        foreach ($issues as $file => $fileIssues) {
            $totalIssues += count($fileIssues);
            $language = getLanguageFromPath($file);
            $report .= "### File: `" . basename($file) . "` ({$language})\n\n";
            $report .= "**Path completo**: `{$file}`\n\n";
            
>>>>>>> 1e3d805 (.)
            foreach ($fileIssues as $issue) {
                $report .= "- **Linea {$issue['line']}**: Testo italiano `{$issue['pattern']}` trovato\n";
                $report .= "  ```php\n  {$issue['content']}\n  ```\n";
                $report .= "  **Traduzione suggerita**: `{$issue['suggested_translation']}`\n\n";
            }
        }
<<<<<<< HEAD

        $report .= "## Correzioni Richieste\n\n";
        foreach ($issues as $file => $fileIssues) {
            $language = getLanguageFromPath($file);
            $report .= '### ' . basename($file) . " ({$language})\n\n";
=======
        
        $report .= "## Correzioni Richieste\n\n";
        foreach ($issues as $file => $fileIssues) {
            $language = getLanguageFromPath($file);
            $report .= "### " . basename($file) . " ({$language})\n\n";
>>>>>>> 1e3d805 (.)
            foreach ($fileIssues as $issue) {
                $report .= "- Linea {$issue['line']}: `{$issue['pattern']}` → `{$issue['suggested_translation']}`\n";
            }
            $report .= "\n";
        }
    } else {
        $report .= "## ✅ Risultato Audit\n\n";
        $report .= "**Nessuna occorrenza di \"obbligatorio\" trovata nei file di traduzione non italiani!**\n\n";
        $report .= "Tutti i file di traduzione sono conformi e non contengono la parola \"obbligatorio\" in italiano.\n\n";
    }
<<<<<<< HEAD

    $report .= "## Riepilogo\n\n";
    $report .= "- **File con problemi**: {$totalFiles}\n";
    $report .= "- **Problemi totali**: {$totalIssues}\n\n";

=======
    
    $report .= "## Riepilogo\n\n";
    $report .= "- **File con problemi**: {$totalFiles}\n";
    $report .= "- **Problemi totali**: {$totalIssues}\n\n";
    
>>>>>>> 1e3d805 (.)
    $report .= "## Traduzioni Standard\n\n";
    $report .= "| Italiano | English | German | Spanish | French |\n";
    $report .= "|----------|---------|--------|---------|--------|\n";
    $report .= "| obbligatorio | required | erforderlich | obligatorio | obligatoire |\n";
    $report .= "| è obbligatorio | is required | ist erforderlich | es obligatorio | est obligatoire |\n";
    $report .= "| campo obbligatorio | required field | Pflichtfeld | campo obligatorio | champ obligatoire |\n\n";
<<<<<<< HEAD

    $report .= "## Regola Applicata\n\n";
    $report .= "**La parola \"obbligatorio\" e sue varianti NON devono apparire in file di traduzione non italiani.**\n\n";
    $report .= "Ogni occorrenza deve essere tradotta nella lingua appropriata del file.\n\n";

=======
    
    $report .= "## Regola Applicata\n\n";
    $report .= "**La parola \"obbligatorio\" e sue varianti NON devono apparire in file di traduzione non italiani.**\n\n";
    $report .= "Ogni occorrenza deve essere tradotta nella lingua appropriata del file.\n\n";
    
>>>>>>> 1e3d805 (.)
    return $report;
}

// Esegui audit specifico per "obbligatorio"
<<<<<<< HEAD
$basePath = '/var/www/html/_bases/base_TechPlanner/laravel';
=======
$basePath = '/var/www/html/_bases/base_saluteora/laravel';
>>>>>>> 1e3d805 (.)
echo "Inizio audit specifico per \"obbligatorio\" in file non italiani...\n";

$issues = auditObbligatorioInNonItalianFiles($basePath);
$report = generateObbligatorioReport($issues);

// Salva report
file_put_contents($basePath . '/docs/obbligatorio-audit-report.md', $report);

echo "Audit \"obbligatorio\" completato. Report salvato in: docs/obbligatorio-audit-report.md\n";
<<<<<<< HEAD
echo 'File con problemi: ' . count($issues) . "\n";
=======
echo "File con problemi: " . count($issues) . "\n";
>>>>>>> 1e3d805 (.)

// Output dettagliato
if (!empty($issues)) {
    echo "\nProblemi \"obbligatorio\" trovati:\n";
    foreach ($issues as $file => $fileIssues) {
<<<<<<< HEAD
        echo "\n" . basename($file) . ' (' . getLanguageFromPath($file) . "):\n";
=======
        echo "\n" . basename($file) . " (" . getLanguageFromPath($file) . "):\n";
>>>>>>> 1e3d805 (.)
        foreach ($fileIssues as $issue) {
            echo "  Linea {$issue['line']}: '{$issue['pattern']}' → '{$issue['suggested_translation']}'\n";
        }
    }
} else {
    echo "\n✅ Nessuna occorrenza di \"obbligatorio\" trovata in file non italiani!\n";
    echo "Tutti i file di traduzione sono conformi.\n";
}
