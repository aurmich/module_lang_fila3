<?php

declare(strict_types=1);

/**
 * Script per identificare testi italiani residui in file di traduzione non italiani
 */

function auditItalianTextInNonItalianFiles(string $basePath): array
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
    // Pattern italiani comuni da cercare
    $italianPatterns = [
        // Parole comuni
        'è obbligatorio',
        'obbligatorio',
        'inserisci',
        'seleziona',
        'campo',
        'campi',
        'dati',
        'informazioni',
        'dettagli',
        'descrizione',
        'nome',
        'cognome',
        'indirizzo',
        'telefono',
        'email',
        'password',
        'conferma',
        'salva',
        'annulla',
        'elimina',
        'modifica',
        'visualizza',
        'crea',
        'nuovo',
        'nuova',
        'aggiungi',
        'rimuovi',
        'cerca',
        'filtra',
        'ordina',
        'pagina',
        'precedente',
        'successivo',
        'primo',
        'ultimo',
        'tutto',
        'tutti',
        'tutte',
        'nessuno',
        'nessuna',
        'errore',
        'successo',
        'attenzione',
        'avviso',
        'messaggio',
        'notifica',
        'conferma',
        'cancella',
        'chiudi',
        'apri',
        'mostra',
        'nascondi',
<<<<<<< HEAD
=======
        
>>>>>>> 1e3d805 (.)
        // Frasi comuni
        'Inserisci il',
        'Inserisci la',
        'Seleziona il',
        'Seleziona la',
        'Questo campo',
        'Il campo',
        'La password',
        'L\'email',
        'Il nome',
        'Il cognome',
        'L\'indirizzo',
        'Il telefono',
<<<<<<< HEAD
        // Caratteri accentati italiani
        'à',
        'è',
        'é',
        'ì',
        'ò',
        'ù',
        // Articoli italiani
        ' il ',
        ' la ',
        ' lo ',
        ' gli ',
        ' le ',
        ' un ',
        ' una ',
        ' uno ',
        ' del ',
        ' della ',
        ' dello ',
        ' degli ',
        ' delle ',
        ' al ',
        ' alla ',
        ' allo ',
        ' agli ',
        ' alle ',
        ' dal ',
        ' dalla ',
        ' dallo ',
        ' dagli ',
        ' dalle ',
        ' nel ',
        ' nella ',
        ' nello ',
        ' negli ',
        ' nelle ',
        ' sul ',
        ' sulla ',
        ' sullo ',
        ' sugli ',
        ' sulle ',
        // Preposizioni italiane
        ' di ',
        ' da ',
        ' in ',
        ' con ',
        ' su ',
        ' per ',
        ' tra ',
        ' fra ',
        // Congiunzioni italiane
        ' e ',
        ' o ',
        ' ma ',
        ' però ',
        ' quindi ',
        ' allora ',
        // Avverbi italiani
        ' non ',
        ' più ',
        ' molto ',
        ' poco ',
        ' tanto ',
        ' sempre ',
        ' mai ',
        ' già ',
        ' ancora ',
    ];

=======
        
        // Caratteri accentati italiani
        'à', 'è', 'é', 'ì', 'ò', 'ù',
        
        // Articoli italiani
        ' il ', ' la ', ' lo ', ' gli ', ' le ',
        ' un ', ' una ', ' uno ',
        ' del ', ' della ', ' dello ', ' degli ', ' delle ',
        ' al ', ' alla ', ' allo ', ' agli ', ' alle ',
        ' dal ', ' dalla ', ' dallo ', ' dagli ', ' dalle ',
        ' nel ', ' nella ', ' nello ', ' negli ', ' nelle ',
        ' sul ', ' sulla ', ' sullo ', ' sugli ', ' sulle ',
        
        // Preposizioni italiane
        ' di ', ' da ', ' in ', ' con ', ' su ', ' per ', ' tra ', ' fra ',
        
        // Congiunzioni italiane
        ' e ', ' o ', ' ma ', ' però ', ' quindi ', ' allora ',
        
        // Avverbi italiani
        ' non ', ' più ', ' molto ', ' poco ', ' tanto ', ' sempre ', ' mai ', ' già ', ' ancora ',
    ];
    
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
        foreach ($italianPatterns as $pattern) {
            $lineNumber = 0;
            foreach ($lines as $line) {
                $lineNumber++;
                if (stripos($line, $pattern) !== false) {
                    $fileIssues[] = [
                        'pattern' => $pattern,
                        'line' => $lineNumber,
                        'content' => trim($line),
<<<<<<< HEAD
                        'language' => getLanguageFromPath($file),
=======
                        'language' => getLanguageFromPath($file)
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

function generateItalianTextReport(array $issues): string
{
    $report = "# Italian Text in Non-Italian Translation Files - Audit Report\n\n";
<<<<<<< HEAD
    $report .= '**Data**: ' . date('Y-m-d H:i:s') . "\n\n";
    $report .= "## Problemi Identificati\n\n";

    $totalIssues = 0;
    $totalFiles = count($issues);

    foreach ($issues as $file => $fileIssues) {
        $totalIssues += count($fileIssues);
        $language = getLanguageFromPath($file);
        $report .= '### File: `' . basename($file) . "` ({$language})\n\n";
        $report .= "**Path completo**: `{$file}`\n\n";

=======
    $report .= "**Data**: " . date('Y-m-d H:i:s') . "\n\n";
    $report .= "## Problemi Identificati\n\n";
    
    $totalIssues = 0;
    $totalFiles = count($issues);
    
    foreach ($issues as $file => $fileIssues) {
        $totalIssues += count($fileIssues);
        $language = getLanguageFromPath($file);
        $report .= "### File: `" . basename($file) . "` ({$language})\n\n";
        $report .= "**Path completo**: `{$file}`\n\n";
        
>>>>>>> 1e3d805 (.)
        foreach ($fileIssues as $issue) {
            $report .= "- **Linea {$issue['line']}**: Pattern italiano `{$issue['pattern']}` trovato\n";
            $report .= "  ```php\n  {$issue['content']}\n  ```\n\n";
        }
    }
<<<<<<< HEAD

    if ($totalFiles === 0) {
        $report .= "✅ **Nessun problema trovato!** Tutti i file di traduzione non italiani sono puliti.\n\n";
    }

    $report .= "## Riepilogo\n\n";
    $report .= "- **File con problemi**: {$totalFiles}\n";
    $report .= "- **Problemi totali**: {$totalIssues}\n\n";

    $report .= "## Regola Applicata\n\n";
    $report .= "**I file di traduzione non italiani NON devono contenere testi in italiano.**\n\n";
    $report .= "Ogni testo deve essere tradotto nella lingua appropriata del file.\n\n";

=======
    
    if ($totalFiles === 0) {
        $report .= "✅ **Nessun problema trovato!** Tutti i file di traduzione non italiani sono puliti.\n\n";
    }
    
    $report .= "## Riepilogo\n\n";
    $report .= "- **File con problemi**: {$totalFiles}\n";
    $report .= "- **Problemi totali**: {$totalIssues}\n\n";
    
    $report .= "## Regola Applicata\n\n";
    $report .= "**I file di traduzione non italiani NON devono contenere testi in italiano.**\n\n";
    $report .= "Ogni testo deve essere tradotto nella lingua appropriata del file.\n\n";
    
>>>>>>> 1e3d805 (.)
    return $report;
}

// Esegui audit
<<<<<<< HEAD
$basePath = '/var/www/html/_bases/base_TechPlanner/laravel';
=======
$basePath = '/var/www/html/_bases/base_saluteora/laravel';
>>>>>>> 1e3d805 (.)
echo "Inizio audit per testi italiani in file non italiani...\n";

$issues = auditItalianTextInNonItalianFiles($basePath);
$report = generateItalianTextReport($issues);

// Salva report
file_put_contents($basePath . '/docs/italian-text-audit-report.md', $report);

echo "Audit completato. Report salvato in: docs/italian-text-audit-report.md\n";
<<<<<<< HEAD
echo 'File con problemi: ' . count($issues) . "\n";
=======
echo "File con problemi: " . count($issues) . "\n";
>>>>>>> 1e3d805 (.)

// Output dettagliato per debug
if (!empty($issues)) {
    echo "\nDettagli problemi trovati:\n";
    foreach ($issues as $file => $fileIssues) {
<<<<<<< HEAD
        echo "\n" . basename($file) . ' (' . getLanguageFromPath($file) . "):\n";
=======
        echo "\n" . basename($file) . " (" . getLanguageFromPath($file) . "):\n";
>>>>>>> 1e3d805 (.)
        foreach ($fileIssues as $issue) {
            echo "  Linea {$issue['line']}: '{$issue['pattern']}'\n";
        }
    }
} else {
    echo "\n✅ Nessun testo italiano trovato in file non italiani!\n";
}
