<?php

declare(strict_types=1);

namespace Modules\Lang\Actions;

use Illuminate\Support\Facades\File;
use Spatie\QueueableAction\QueueableAction;
<<<<<<< HEAD

use function Safe\exec;
use function Safe\file_put_contents;
use function Safe\tempnam;
=======
use function Safe\tempnam;
use function Safe\file_put_contents;
use function Safe\exec;
>>>>>>> 054e6ea (.)
use function Safe\unlink;

class WriteTranslationFileAction
{
    use QueueableAction;

    /**
     * Scrive il contenuto in un file di traduzione con backup automatico.
     *
<<<<<<< HEAD
     * @param  string  $filePath  Percorso del file di traduzione
     * @param  array<string, mixed>  $translations  Traduzioni da scrivere
     * @return bool True se il file è stato scritto con successo
     *
=======
     * @param string $filePath Percorso del file di traduzione
     * @param array<string, mixed> $translations Traduzioni da scrivere
     * @return bool True se il file è stato scritto con successo
>>>>>>> 054e6ea (.)
     * @throws \Exception Se il file non può essere scritto
     */
    public function execute(string $filePath, array $translations): bool
    {
        // Crea backup del file esistente
        $this->createBackup($filePath);

        // Converte le traduzioni in formato PHP
        $readAction = app(ReadTranslationFileAction::class);
        $phpContent = $readAction->toPhp($translations);

        // Verifica la sintassi PHP prima di scrivere
        $this->validatePhpSyntax($phpContent);

        // Scrivi il file
        $result = File::put($filePath, $phpContent);

        if ($result === false) {
            throw new \Exception("Impossibile scrivere il file: {$filePath}");
        }

        // Pulisci la cache delle traduzioni
        $this->clearTranslationCache();

        return true;
    }

    /**
     * Crea un backup del file di traduzione.
     *
<<<<<<< HEAD
     * @param  string  $filePath  Percorso del file
     */
    private function createBackup(string $filePath): void
    {
        if (! file_exists($filePath)) {
=======
     * @param string $filePath Percorso del file
     * @return void
     */
    private function createBackup(string $filePath): void
    {
        if (!file_exists($filePath)) {
>>>>>>> 054e6ea (.)
            return;
        }

        $backupDir = storage_path('app/backups/translations');
<<<<<<< HEAD
        $backupPath = $backupDir.'/'.date('Y-m-d_H-i-s').'_'.basename($filePath);

        // Crea la directory di backup se non esiste
        if (! File::exists($backupDir)) {
=======
        $backupPath = $backupDir . '/' . date('Y-m-d_H-i-s') . '_' . basename($filePath);

        // Crea la directory di backup se non esiste
        if (!File::exists($backupDir)) {
>>>>>>> 054e6ea (.)
            File::makeDirectory($backupDir, 0755, true);
        }

        // Copia il file
        File::copy($filePath, $backupPath);
    }

    /**
     * Valida la sintassi PHP del contenuto.
     *
<<<<<<< HEAD
     * @param  string  $phpContent  Contenuto PHP da validare
     *
=======
     * @param string $phpContent Contenuto PHP da validare
     * @return void
>>>>>>> 054e6ea (.)
     * @throws \Exception Se la sintassi PHP non è valida
     */
    private function validatePhpSyntax(string $phpContent): void
    {
        // Crea un file temporaneo per la validazione
        $tempFile = tempnam(sys_get_temp_dir(), 'translation_');
        file_put_contents($tempFile, $phpContent);

        // Esegue php -l per validare la sintassi
        $output = [];
        $returnCode = 0;
        exec("php -l {$tempFile} 2>&1", $output, $returnCode);

        // Rimuove il file temporaneo
        unlink($tempFile);

        if ($returnCode !== 0) {
            $error = implode("\n", $output);
            throw new \Exception("Sintassi PHP non valida: {$error}");
        }
    }

    /**
     * Pulisce la cache delle traduzioni.
<<<<<<< HEAD
=======
     *
     * @return void
>>>>>>> 054e6ea (.)
     */
    private function clearTranslationCache(): void
    {
        // Pulisce la cache di Laravel
        if (app()->bound('cache')) {
            app('cache')->flush();
        }

        // Pulisce la cache delle traduzioni
        if (app()->bound('translation.loader')) {
            /** @phpstan-ignore method.notFound */
            app('translation.loader')->flush();
        }
    }
<<<<<<< HEAD
}
=======
} 
>>>>>>> 054e6ea (.)
