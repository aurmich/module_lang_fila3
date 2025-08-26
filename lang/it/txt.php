<?php

declare(strict_types=1);

return [
    // ========================================
    // CAMPI DI AUTENTICAZIONE E UTENTE
    // ========================================
    'fields' => [
        // Autenticazione
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Inserisci la tua email',
            'help' => 'Usa un indirizzo email valido',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Inserisci la tua password',
            'help' => 'La password deve contenere almeno 8 caratteri',
        ],
        'remember' => [
            'label' => 'Ricordami',
            'placeholder' => 'Mantieni l\'accesso attivo',
            'help' => 'Ricorda le credenziali su questo dispositivo',
        ],
        'user_id' => [
            'label' => 'ID Utente',
            'placeholder' => 'Seleziona utente',
            'help' => 'Identificativo dell\'utente',
        ],
        
        // ========================================
        // CAMPI GENERICI DI SISTEMA
        // ========================================
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome',
            'help' => 'Nome dell\'elemento',
        ],
        'slug' => [
            'label' => 'Slug',
            'placeholder' => 'Inserisci lo slug',
            'help' => 'Identificatore URL-friendly',
        ],
        'description' => [
            'label' => 'Descrizione',
            'placeholder' => 'Inserisci descrizione',
            'help' => 'Descrizione dettagliata',
        ],
        'details' => [
            'label' => 'Dettagli',
            'placeholder' => 'Inserisci dettagli',
            'help' => 'Informazioni aggiuntive',
        ],
        'value' => [
            'label' => 'Valore',
            'placeholder' => 'Inserisci il valore',
            'help' => 'Valore del campo',
        ],
        'values_list' => [
            'label' => 'Lista Valori',
            'placeholder' => 'Inserisci lista valori',
            'help' => 'Elenco dei valori disponibili',
        ],
        
        // ========================================
        // CAMPI DI STATO E CONFIGURAZIONE
        // ========================================
        'is_active' => [
            'label' => 'Attivo',
            'placeholder' => 'Seleziona stato',
            'help' => 'Stato di attivazione',
        ],
        'ordering' => [
            'label' => 'Ordine',
            'placeholder' => 'Inserisci ordine',
            'help' => 'Posizione nell\'ordinamento',
        ],
        'category_id' => [
            'label' => 'Categoria',
            'placeholder' => 'Seleziona categoria',
            'help' => 'Categoria di appartenenza',
        ],
        
        // ========================================
        // CAMPI TEMPORALI
        // ========================================
        'start_date' => [
            'label' => 'Data Inizio',
            'placeholder' => 'Seleziona data inizio',
            'help' => 'Data di inizio del periodo',
        ],
        'end_date' => [
            'label' => 'Data Fine',
            'placeholder' => 'Seleziona data fine',
            'help' => 'Data di fine del periodo',
        ],
        'test_date' => [
            'label' => 'Data Test',
            'placeholder' => 'Seleziona data test',
            'help' => 'Data per il test del sistema',
        ],
        
        // ========================================
        // CAMPI DI TEST E DEBUG
        // ========================================
        'test' => [
            'label' => 'Test',
            'placeholder' => 'Inserisci valore test',
            'help' => 'Campo per test del sistema',
        ],
        
        // ========================================
        // CAMPI DI INTERFACCIA E FILTRI
        // ========================================
        'apply_filters' => [
            'label' => 'Applica Filtri',
            'placeholder' => 'Applica i filtri selezionati',
            'help' => 'Filtra i risultati secondo i criteri',
        ],
        'toggle_columns' => [
            'label' => 'Mostra/Nascondi Colonne',
            'placeholder' => 'Gestisci visibilità colonne',
            'help' => 'Personalizza le colonne visualizzate',
        ],
        'reorder_records' => [
            'label' => 'Riordina Records',
            'placeholder' => 'Modifica ordine elementi',
            'help' => 'Trascina per riordinare',
        ],
        'reset_filters' => [
            'label' => 'Reset Filtri',
            'placeholder' => 'Ripristina filtri predefiniti',
            'help' => 'Rimuovi tutti i filtri applicati',
        ],
        'open_filters' => [
            'label' => 'Apri Filtri',
            'placeholder' => 'Mostra pannello filtri',
            'help' => 'Visualizza opzioni di filtro',
        ],
    ],
    
    // ========================================
    // AZIONI DI SISTEMA
    // ========================================
    'actions' => [
        // Autenticazione
        'authenticate' => [
            'label' => 'Autentica',
            'success' => 'Autenticazione completata',
            'error' => 'Errore durante l\'autenticazione',
        ],
        'login' => [
            'label' => 'Accedi',
            'success' => 'Accesso effettuato con successo',
            'error' => 'Credenziali non valide',
        ],
        
        // Operazioni CRUD
        'create' => [
            'label' => 'Crea',
            'success' => 'Elemento creato',
            'error' => 'Errore durante la creazione',
        ],
        'create_another' => [
            'label' => 'Crea Altro',
            'success' => 'Nuovo elemento creato',
            'error' => 'Errore nella creazione',
        ],
        'save' => [
            'label' => 'Salva',
            'success' => 'Salvato con successo',
            'error' => 'Errore durante il salvataggio',
        ],
        
        // Operazioni di sistema
        'request' => [
            'label' => 'Richiedi',
            'success' => 'Richiesta inviata',
            'error' => 'Errore nell\'invio della richiesta',
        ],
        'cancel' => [
            'label' => 'Annulla',
            'success' => 'Operazione annullata',
            'error' => 'Impossibile annullare',
        ],
        'open' => [
            'label' => 'Apri',
            'success' => 'Elemento aperto',
            'error' => 'Impossibile aprire',
        ],
        
        // Configurazione locale
        'active_locale' => [
            'label' => 'Lingua Attiva',
            'success' => 'Lingua cambiata',
            'error' => 'Errore nel cambio lingua',
        ],
    ],
    
    // ========================================
    // MESSAGGI DI SISTEMA
    // ========================================
    'messages' => [
        'system' => [
            'ready' => 'Sistema pronto',
            'loading' => 'Caricamento in corso...',
            'processing' => 'Elaborazione in corso...',
            'completed' => 'Operazione completata',
            'failed' => 'Operazione fallita',
        ],
        'validation' => [
            'required' => 'Campo obbligatorio',
            'invalid_format' => 'Formato non valido',
            'min_length' => 'Lunghezza minima non rispettata',
            'max_length' => 'Lunghezza massima superata',
        ],
    ],
];
