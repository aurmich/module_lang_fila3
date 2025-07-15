<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'fields' => [
        'id' => [
            'label' => 'ID',
            'placeholder' => 'Identificativo automatico',
            'help' => 'Identificativo univoco del record, generato automaticamente dal sistema',
        ],
        'created_at' => [
            'label' => 'Data Creazione',
            'placeholder' => 'Seleziona data e ora',
            'help' => 'Data e ora di creazione del record nel sistema',
        ],
        'updated_at' => [
            'label' => 'Ultima Modifica',
            'placeholder' => 'Aggiornamento automatico',
            'help' => 'Data e ora dell\'ultima modifica apportata al record',
        ],
        'deleted_at' => [
            'label' => 'Data Eliminazione',
            'placeholder' => 'Record attivo',
            'help' => 'Data di eliminazione logica, null se il record è ancora attivo',
        ],
        'created_by' => [
            'label' => 'Creato da',
            'placeholder' => 'Utente creatore',
            'help' => 'Utente che ha creato questo record',
        ],
        'updated_by' => [
            'label' => 'Modificato da',
            'placeholder' => 'Ultimo editore',
            'help' => 'Ultimo utente che ha modificato questo record',
        ],
        'name' => [
            'label' => 'Nome',
            'placeholder' => 'Inserisci il nome completo',
            'help' => 'Nome identificativo dell\'elemento o della persona',
        ],
        'description' => [
            'label' => 'Descrizione',
            'placeholder' => 'Fornisci una descrizione dettagliata',
            'help' => 'Descrizione completa per maggiori informazioni sull\'elemento',
        ],
        'email' => [
            'label' => 'Indirizzo Email',
            'placeholder' => 'nome@dominio.it',
            'help' => 'Indirizzo email valido per comunicazioni e accesso al sistema',
        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => '••••••••',
            'help' => 'Password di accesso al sistema, minimo 8 caratteri',
        ],
        'password_expires_at' => [
            'label' => 'Scadenza Password',
            'placeholder' => 'Data scadenza automatica',
            'help' => 'Data dopo la quale la password dovrà essere cambiata',
        ],
        'email_verified_at' => [
            'label' => 'Email Verificata',
            'placeholder' => 'Verifica in attesa',
            'help' => 'Data di conferma dell\'indirizzo email tramite link di verifica',
        ],
        'remember' => [
            'label' => 'Ricorda Accesso',
            'placeholder' => 'Mantieni sessione',
            'help' => 'Mantieni l\'utente collegato anche dopo la chiusura del browser',
        ],
        'telefono' => [
            'label' => 'Numero Telefono',
            'placeholder' => '+39 123 456 7890',
            'help' => 'Numero di telefono fisso per contatti diretti',
        ],
        'mobile' => [
            'label' => 'Numero Cellulare',
            'placeholder' => '+39 333 123 4567',
            'help' => 'Numero di cellulare per contatti urgenti',
        ],
        'address' => [
            'label' => 'Indirizzo',
            'placeholder' => 'Via Roma, 123 - 00100 Roma',
            'help' => 'Indirizzo completo di residenza',
        ],
        'city' => [
            'label' => 'Città',
            'placeholder' => 'Roma',
            'help' => 'Città di residenza',
        ],
        'postal_code' => [
            'label' => 'CAP',
            'placeholder' => '00100',
            'help' => 'Codice di avviamento postale',
        ],
        'country' => [
            'label' => 'Paese',
            'placeholder' => 'Italia',
            'help' => 'Paese di residenza',
        ],
        'birth_date' => [
            'label' => 'Data di Nascita',
            'placeholder' => 'Seleziona data di nascita',
            'help' => 'Data di nascita per verifiche anagrafiche',
        ],
        'gender' => [
            'label' => 'Sesso',
            'placeholder' => 'Seleziona sesso',
            'help' => 'Sesso per statistiche e personalizzazione',
        ],
        'active' => [
            'label' => 'Attivo',
            'placeholder' => 'Stato attivo',
            'help' => 'Indica se l\'elemento è attivo nel sistema',
        ],
        'status' => [
            'label' => 'Stato',
            'placeholder' => 'Seleziona stato',
            'help' => 'Stato corrente dell\'elemento',
        ],
        'type' => [
            'label' => 'Tipo',
            'placeholder' => 'Seleziona tipo',
            'help' => 'Tipo di classificazione dell\'elemento',
        ],
        'category' => [
            'label' => 'Categoria',
            'placeholder' => 'Seleziona categoria',
            'help' => 'Categoria di appartenenza',
        ],
        'tags' => [
            'label' => 'Tag',
            'placeholder' => 'Inserisci tag separati da virgole',
            'help' => 'Tag per categorizzazione e ricerca',
        ],
        'notes' => [
            'label' => 'Note',
            'placeholder' => 'Inserisci note aggiuntive',
            'help' => 'Note e commenti aggiuntivi',
        ],
        'priority' => [
            'label' => 'Priorità',
            'placeholder' => 'Seleziona priorità',
            'help' => 'Livello di priorità dell\'elemento',
        ],
        'sort_order' => [
            'label' => 'Ordine',
            'placeholder' => 'Inserisci numero ordine',
            'help' => 'Ordine di visualizzazione nell\'elenco',
        ],
    ],

    'actions' => [
        'create' => [
            'label' => 'Crea Nuovo',
            'success' => 'Elemento creato con successo',
            'error' => 'Errore durante la creazione',
        ],
        'edit' => [
            'label' => 'Modifica',
            'success' => 'Elemento modificato con successo',
            'error' => 'Errore durante la modifica',
        ],
        'delete' => [
            'label' => 'Elimina',
            'success' => 'Elemento eliminato con successo',
            'error' => 'Errore durante l\'eliminazione',
            'confirmation' => 'Sei sicuro di voler eliminare questo elemento?',
        ],
        'view' => [
            'label' => 'Visualizza',
            'success' => 'Dettagli caricati',
            'error' => 'Errore nel caricamento dei dettagli',
        ],
        'duplicate' => [
            'label' => 'Duplica',
            'success' => 'Elemento duplicato con successo',
            'error' => 'Errore durante la duplicazione',
        ],
        'export' => [
            'label' => 'Esporta',
            'success' => 'Esportazione completata',
            'error' => 'Errore durante l\'esportazione',
        ],
        'import' => [
            'label' => 'Importa',
            'success' => 'Importazione completata',
            'error' => 'Errore durante l\'importazione',
        ],
    ],

    'messages' => [
        'welcome' => 'Benvenuto nel sistema',
        'loading' => 'Caricamento in corso...',
        'saving' => 'Salvataggio in corso...',
        'saved' => 'Dati salvati correttamente',
        'error' => 'Si è verificato un errore',
        'success' => 'Operazione completata con successo',
        'warning' => 'Attenzione',
        'info' => 'Informazione',
        'confirm' => 'Conferma',
        'cancel' => 'Annulla',
        'close' => 'Chiudi',
        'back' => 'Indietro',
        'next' => 'Avanti',
        'previous' => 'Precedente',
        'finish' => 'Completa',
        'search' => 'Cerca',
        'filter' => 'Filtra',
        'clear' => 'Pulisci',
        'refresh' => 'Aggiorna',
        'download' => 'Scarica',
        'upload' => 'Carica',
        'preview' => 'Anteprima',
        'print' => 'Stampa',
        'share' => 'Condividi',
        'copy' => 'Copia',
        'paste' => 'Incolla',
        'cut' => 'Taglia',
        'undo' => 'Annulla',
        'redo' => 'Ripeti',
        'select_all' => 'Seleziona tutto',
        'deselect_all' => 'Deseleziona tutto',
        'no_results' => 'Nessun risultato trovato',
        'no_data' => 'Nessun dato disponibile',
        'empty_state' => 'Nessun elemento presente',
        'permission_denied' => 'Permesso negato',
        'not_found' => 'Elemento non trovato',
        'validation_error' => 'Errore di validazione',
        'server_error' => 'Errore del server',
        'network_error' => 'Errore di rete',
        'timeout_error' => 'Timeout della richiesta',
    ],

    'navigation' => [
        'dashboard' => 'Pannello di Controllo',
        'users' => 'Gestione Utenti',
        'settings' => 'Impostazioni',
        'profile' => 'Profilo Utente',
        'logout' => 'Disconnetti',
        'login' => 'Accedi',
        'register' => 'Registrati',
        'forgot_password' => 'Password dimenticata',
        'reset_password' => 'Reimposta password',
        'admin' => 'Amministrazione',
        'reports' => 'Report',
        'analytics' => 'Analytics',
        'logs' => 'Log',
        'backup' => 'Backup',
        'maintenance' => 'Manutenzione',
        'help' => 'Aiuto',
        'support' => 'Supporto',
        'documentation' => 'Documentazione',
        'about' => 'Informazioni',
        'contact' => 'Contatti',
        'privacy' => 'Privacy',
        'terms' => 'Termini di servizio',
    ],

    'validation' => [
        'required' => 'Il campo :attribute è obbligatorio',
        'email' => 'Il campo :attribute deve essere un indirizzo email valido',
        'min' => [
            'string' => 'Il campo :attribute deve contenere almeno :min caratteri',
            'numeric' => 'Il campo :attribute deve essere almeno :min',
        ],
        'max' => [
            'string' => 'Il campo :attribute non può superare :max caratteri',
            'numeric' => 'Il campo :attribute non può essere maggiore di :max',
        ],
        'unique' => 'Il valore del campo :attribute è già stato utilizzato',
        'confirmed' => 'La conferma del campo :attribute non corrisponde',
        'date' => 'Il campo :attribute non è una data valida',
        'numeric' => 'Il campo :attribute deve essere un numero',
        'integer' => 'Il campo :attribute deve essere un numero intero',
        'string' => 'Il campo :attribute deve essere una stringa',
        'boolean' => 'Il campo :attribute deve essere vero o falso',
        'array' => 'Il campo :attribute deve essere un array',
        'file' => 'Il campo :attribute deve essere un file',
        'image' => 'Il campo :attribute deve essere un\'immagine',
        'url' => 'Il campo :attribute deve essere un URL valido',
        'ip' => 'Il campo :attribute deve essere un indirizzo IP valido',
        'phone' => 'Il campo :attribute deve essere un numero di telefono valido',
        'postal_code' => 'Il campo :attribute deve essere un CAP valido',
    ],
];
=======
return array (
  'fields' => 
  array (
    'id' => 
    array (
      'label' => 'ID',
      'placeholder' => 'Identificativo univoco',
      'help' => 'Identificativo numerico univoco del record',
    ),
    'name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'help' => 'Nome principale dell\'elemento',
      'description' => 'name',
      'helper_text' => 'name',
    ),
    'surname' => 
    array (
      'label' => 'Cognome',
      'placeholder' => 'Inserisci il cognome',
      'help' => 'Cognome della persona',
    ),
    'full_name' => 
    array (
      'label' => 'Nome Completo',
      'placeholder' => 'Nome e cognome',
      'help' => 'Nome e cognome completi della persona',
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'esempio@dominio.com',
      'help' => 'Indirizzo email per le comunicazioni',
    ),
    'phone' => 
    array (
      'label' => 'Telefono',
      'placeholder' => '+39 123 456 7890',
      'help' => 'Numero di telefono per contatti',
    ),
    'mobile' => 
    array (
      'label' => 'Cellulare',
      'placeholder' => '+39 333 123 4567',
      'help' => 'Numero di telefono mobile per comunicazioni urgenti',
    ),
    'fax' => 
    array (
      'label' => 'Numero Fax',
      'placeholder' => '+39 123 456 7891',
      'help' => 'Numero fax per comunicazioni formali e documenti',
    ),
    'indirizzo' => 
    array (
      'label' => 'Indirizzo Completo',
      'placeholder' => 'Via/Piazza, numero civico',
      'help' => 'Indirizzo completo di residenza o sede',
    ),
    'street_number' => 
    array (
      'label' => 'Numero Civico',
      'placeholder' => '123/A',
      'help' => 'Numero civico dell\'indirizzo specificato',
    ),
    'province' => 
    array (
      'label' => 'Provincia',
      'placeholder' => 'Seleziona provincia',
      'help' => 'Provincia di appartenenza dell\'indirizzo',
    ),
    'postal_code' => 
    array (
      'label' => 'Codice Postale',
      'placeholder' => '12345',
      'help' => 'CAP del comune di riferimento',
    ),
    'latitude' => 
    array (
      'label' => 'Latitudine',
      'placeholder' => '45.4642',
      'help' => 'Coordinata geografica latitudine per geolocalizzazione',
    ),
    'longitude' => 
    array (
      'label' => 'Longitudine',
      'placeholder' => '9.1900',
      'help' => 'Coordinata geografica longitudine per geolocalizzazione',
    ),
    'tax_code' => 
    array (
      'label' => 'Codice Fiscale',
      'placeholder' => 'RSSMRA80A01H501U',
      'help' => 'Codice fiscale italiano di 16 caratteri',
    ),
    'vat_number' => 
    array (
      'label' => 'Partita IVA',
      'placeholder' => '12345678901',
      'help' => 'Numero di partita IVA per attività commerciali',
    ),
    'identity_document' => 
    array (
      'label' => 'Documento Identità',
      'placeholder' => 'Carta d\'identità, patente, passaporto',
      'help' => 'Documento di identità valido per il riconoscimento',
    ),
    'health_card' => 
    array (
      'label' => 'Tessera Sanitaria',
      'placeholder' => 'Codice tessera sanitaria',
      'help' => 'Tessera sanitaria nazionale per prestazioni mediche',
    ),
    'isee_certificate' => 
    array (
      'label' => 'Certificato ISEE',
      'placeholder' => 'Carica certificato ISEE',
      'help' => 'Certificato ISEE per valutazione situazione economica',
    ),
    'pregnancy_certificate' => 
    array (
      'label' => 'Certificato Gravidanza',
      'placeholder' => 'Carica certificato medico',
      'help' => 'Certificato medico che attesta lo stato di gravidanza',
    ),
    'certifications' => 
    array (
      'label' => 'Certificazioni',
      'placeholder' => 'Elenca certificazioni possedute',
      'help' => 'Elenco delle certificazioni professionali e qualifiche',
    ),
    'company_name' => 
    array (
      'label' => 'Ragione Sociale',
      'placeholder' => 'Nome dell\'azienda o organizzazione',
      'help' => 'Denominazione ufficiale dell\'azienda o ente',
    ),
    'company_office' => 
    array (
      'label' => 'Sede Legale',
      'placeholder' => 'Indirizzo sede principale',
      'help' => 'Indirizzo della sede legale dell\'azienda',
    ),
    'activity' => 
    array (
      'label' => 'Attività Svolta',
      'placeholder' => 'Descrivi l\'attività principale',
      'help' => 'Descrizione dell\'attività professionale o commerciale',
    ),
    'business_closed' => 
    array (
      'label' => 'Attività Cessata',
      'placeholder' => 'Attività attualmente attiva',
      'help' => 'Indica se l\'attività commerciale è stata chiusa',
    ),
    'competent_health_unit' => 
    array (
      'label' => 'ASL Competente',
      'placeholder' => 'Seleziona ASL di riferimento',
      'help' => 'Azienda Sanitaria Locale di competenza territoriale',
    ),
    'value' => 
    array (
      'label' => 'Valore Singolo',
      'placeholder' => 'Inserisci un valore',
      'help' => 'Valore specifico per il campo corrente',
      'description' => 'value',
      'helper_text' => 'value',
    ),
    'values' => 
    array (
      'label' => 'Valori Multipli',
      'placeholder' => 'Lista valori separati da virgola',
      'help' => 'Elenco di valori multipli associati all\'elemento',
    ),
    'notes' => 
    array (
      'label' => 'Note Aggiuntive',
      'placeholder' => 'Aggiungi note o commenti',
      'help' => 'Campo libero per note, commenti o osservazioni aggiuntive',
    ),
    'file' => 
    array (
      'label' => 'File Allegato',
      'placeholder' => 'Seleziona file da caricare',
      'help' => 'Carica un file dal tuo dispositivo',
    ),
    'icon' => 
    array (
      'label' => 'Icona',
      'placeholder' => 'heroicon-o-document',
      'help' => 'Icona identificativa per l\'elemento nell\'interfaccia',
    ),
    'isActive' => 
    array (
      'label' => 'Stato Attivo',
      'placeholder' => 'Elemento attivo',
      'help' => 'Indica se l\'elemento è attualmente attivo e visibile',
    ),
    'state' => 
    array (
      'label' => 'Stato Corrente',
      'placeholder' => 'Stato del workflow',
      'help' => 'Stato attuale dell\'elemento nel flusso di lavoro',
    ),
    'newstate' => 
    array (
      'label' => 'Nuovo Stato',
      'placeholder' => 'Seleziona nuovo stato',
      'help' => 'Nuovo stato da assegnare all\'elemento',
    ),
    'layout' => 
    array (
      'label' => 'Layout',
      'placeholder' => 'Configurazione layout',
      'help' => 'Configurazione del layout di visualizzazione',
    ),
    'view' => 
    array (
      'label' => 'Modalità Vista',
      'placeholder' => 'Seleziona modalità di visualizzazione',
      'help' => 'Modalità di visualizzazione dei dati nell\'interfaccia',
    ),
    'data_scadenza' => 
    array (
      'label' => 'Data Scadenza',
      'placeholder' => 'Seleziona data di scadenza',
      'help' => 'Data limite entro cui completare l\'operazione',
    ),
    'data_inizio_esecuzione' => 
    array (
      'label' => 'Inizio Esecuzione',
      'placeholder' => 'Data e ora di inizio',
      'help' => 'Data e ora previste per l\'inizio dell\'esecuzione',
    ),
    'data_fine_esecuzione' => 
    array (
      'label' => 'Fine Esecuzione',
      'placeholder' => 'Data e ora di fine',
      'help' => 'Data e ora previste per il completamento dell\'esecuzione',
    ),
    'data_aggiudicazione' => 
    array (
      'label' => 'Data Aggiudicazione',
      'placeholder' => 'Data assegnazione',
      'help' => 'Data in cui è stata effettuata l\'aggiudicazione',
    ),
    'data_pagamento' => 
    array (
      'label' => 'Data Pagamento',
      'placeholder' => 'Data transazione',
      'help' => 'Data in cui è stato effettuato il pagamento',
    ),
    'toggleColumns' => 
    array (
      'label' => 'Gestione Colonne',
      'placeholder' => 'Personalizza tabella',
      'help' => 'Mostra o nascondi le colonne della tabella',
    ),
    'reorderRecords' => 
    array (
      'label' => 'Riordina Elementi',
      'placeholder' => 'Trascina per riordinare',
      'help' => 'Riordina manualmente gli elementi della lista',
    ),
    'resetFilters' => 
    array (
      'label' => 'Azzera Filtri',
      'placeholder' => 'Rimuovi tutti i filtri',
      'help' => 'Rimuove tutti i filtri applicati e mostra tutti i record',
    ),
    'applyFilters' => 
    array (
      'label' => 'Applica Filtri',
      'placeholder' => 'Filtra risultati',
      'help' => 'Applica i filtri selezionati per limitare i risultati',
    ),
    'openFilters' => 
    array (
      'label' => 'Pannello Filtri',
      'placeholder' => 'Apri opzioni filtro',
      'help' => 'Apre il pannello per configurare i filtri di ricerca',
    ),
    'user' => 
    array (
      'label' => 'Utente Associato',
      'placeholder' => 'Seleziona utente',
      'help' => 'Utente associato a questo elemento o operazione',
    ),
    'roles' => 
    array (
      'name' => 
      array (
        'label' => 'Nome Ruolo',
        'placeholder' => 'Inserisci nome del ruolo',
        'help' => 'Nome identificativo del ruolo nel sistema',
      ),
    ),
    'attributes' => 
    array (
      'label' => 'Attributi Aggiuntivi',
      'placeholder' => 'Configurazione attributi',
      'help' => 'Attributi personalizzati per configurazioni avanzate',
    ),
    'changePassword' => 
    array (
      'label' => 'Cambia Password',
      'placeholder' => 'Richiedi cambio password',
      'help' => 'Forza l\'utente a cambiare la password al prossimo accesso',
    ),
    'session_id' => 
    array (
      'label' => 'ID Sessione',
      'placeholder' => 'Identificativo sessione',
      'help' => 'Identificativo univoco della sessione utente attiva',
    ),
    'recordId' => 
    array (
      'label' => 'ID Record',
      'placeholder' => 'Riferimento record',
      'help' => 'Identificativo del record associato all\'operazione',
    ),
    'workgroup' => 
    array (
      'denominazione' => 
      array (
        'label' => 'Gruppo di Lavoro',
        'placeholder' => 'Seleziona gruppo',
        'help' => 'Gruppo di lavoro responsabile dell\'attività',
      ),
    ),
    'determina' => 
    array (
      'label' => 'Numero Determina',
      'placeholder' => 'Inserisci numero determina',
      'help' => 'Numero della determina dirigenziale di riferimento',
    ),
    'radius' => 
    array (
      'label' => 'Raggio Ricerca',
      'placeholder' => 'Distanza in km',
      'help' => 'Raggio di ricerca in chilometri dal punto selezionato',
    ),
    'unit' => 
    array (
      'label' => 'Unità Misura',
      'placeholder' => 'km, m, mi',
      'help' => 'Unità di misura per distanze e dimensioni',
    ),
    'addresses' => 
    array (
      'label' => 'Indirizzi Strutture',
      'placeholder' => 'Gestisci indirizzi multipli',
      'help' => 'Elenco degli indirizzi delle strutture mediche associate',
    ),
    'schedule' => 
    array (
      'label' => 'Orario Servizio',
      'placeholder' => 'Configura orari apertura',
      'help' => 'Orari di apertura e disponibilità del servizio medico',
    ),
    'schedule1' => 
    array (
      'label' => 'Orario Alternativo',
      'placeholder' => 'Orario secondario',
      'help' => 'Orario alternativo o di emergenza per il servizio',
    ),
    'selected_studio' => 
    array (
      'label' => 'Studio Selezionato',
      'placeholder' => 'Scegli studio medico',
      'help' => 'Studio medico attualmente selezionato per l\'operazione',
    ),
    'studio_selection' => 
    array (
      'label' => 'Studio',
      'placeholder' => 'Modalità selezione',
      'help' => 'Modalità di selezione dello studio medico',
    ),
    'studio_id' => 
    array (
      'label' => 'Studio Medico',
      'placeholder' => 'Identificativo studio',
      'help' => 'Identificativo univoco dello studio medico',
    ),
    'selected_product_id' => 
    array (
      'label' => 'Servizio Selezionato',
      'placeholder' => 'ID servizio medico',
      'help' => 'Identificativo del servizio medico selezionato',
    ),
    'availability' => 
    array (
      'label' => 'Disponibilità',
      'placeholder' => 'Verifica disponibilità',
      'help' => 'Stato di disponibilità per appuntamenti e servizi',
    ),
    'appointment_date' => 
    array (
      'label' => 'Data Appuntamento',
      'placeholder' => 'Seleziona data',
      'help' => 'Data prescelta per l\'appuntamento medico',
    ),
    'appointment_time' => 
    array (
      'label' => 'Ora Appuntamento',
      'placeholder' => 'Seleziona orario',
      'help' => 'Orario specifico per l\'appuntamento medico',
    ),
    'polizza_convenzione_pratica_sconto' => 
    array (
      'label' => 'Sconto Convenzione',
      'placeholder' => 'Percentuale sconto applicata',
      'help' => 'Sconto applicato tramite polizza o convenzione attiva',
    ),
    'polizza_convenzione_istanza' => 
    array (
      'polizza_convenzione' => 
      array (
        'compagnia_assicurativa' => 
        array (
          'nome' => 
          array (
            'label' => 'Compagnia Assicurativa',
            'placeholder' => 'Nome compagnia',
            'help' => 'Denominazione della compagnia assicurativa',
          ),
        ),
        'nome' => 
        array (
          'label' => 'Nome Polizza',
          'placeholder' => 'Descrizione polizza',
          'help' => 'Nome identificativo della polizza o convenzione',
        ),
      ),
    ),
    'stato_pratica' => 
    array (
      'descrizione' => 
      array (
        'label' => 'Stato Pratica',
        'placeholder' => 'Stato corrente',
        'help' => 'Descrizione dello stato attuale della pratica',
      ),
    ),
    'cliente' => 
    array (
      'nominativo' => 
      array (
        'label' => 'Nominativo Cliente',
        'placeholder' => 'Nome e cognome',
        'help' => 'Nome completo del cliente o paziente',
      ),
    ),
    'certification' => 
    array (
      'label' => 'Certificazione',
      'placeholder' => 'Carica certificazione',
      'help' => 'Documento di certificazione professionale',
    ),
    'doctor_certificate' => 
    array (
      'label' => 'Certificato Medico',
      'placeholder' => 'Carica certificato medico',
      'help' => 'Tesserino sanitario o certificato di iscrizione all\'Ordine',
    ),
    'values-list' => 
    array (
      'description' => 'values-list',
      'helper_text' => 'values-list',
      'placeholder' => 'values-list',
      'label' => 'values-list',
    ),
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'Crea Nuovo',
      'success' => 'Elemento creato con successo',
      'error' => 'Errore durante la creazione',
    ),
    'edit' => 
    array (
      'label' => 'Modifica',
      'success' => 'Elemento modificato con successo',
      'error' => 'Errore durante la modifica',
    ),
    'delete' => 
    array (
      'label' => 'Elimina',
      'success' => 'Elemento eliminato con successo',
      'error' => 'Errore durante l\'eliminazione',
      'confirmation' => 'Sei sicuro di voler eliminare questo elemento?',
    ),
    'view' => 
    array (
      'label' => 'Visualizza',
      'tooltip' => 'Visualizza dettagli completi',
    ),
    'save' => 
    array (
      'label' => 'Salva',
      'success' => 'Dati salvati correttamente',
      'error' => 'Errore durante il salvataggio',
    ),
    'cancel' => 
    array (
      'label' => 'Annulla',
      'tooltip' => 'Annulla l\'operazione corrente',
    ),
    'back' => 
    array (
      'label' => 'Indietro',
      'tooltip' => 'Torna alla pagina precedente',
    ),
    'next' => 
    array (
      'label' => 'Avanti',
      'tooltip' => 'Procedi al passo successivo',
    ),
    'previous' => 
    array (
      'label' => 'Precedente',
      'tooltip' => 'Torna al passo precedente',
    ),
    'submit' => 
    array (
      'label' => 'Invia',
      'success' => 'Dati inviati correttamente',
      'error' => 'Errore durante l\'invio',
    ),
    'reset' => 
    array (
      'label' => 'Ripristina',
      'tooltip' => 'Ripristina i valori originali',
      'confirmation' => 'Ripristinare i valori originali?',
    ),
    'search' => 
    array (
      'label' => 'Cerca',
      'placeholder' => 'Inserisci termini di ricerca',
      'tooltip' => 'Avvia la ricerca',
    ),
    'filter' => 
    array (
      'label' => 'Filtra',
      'tooltip' => 'Applica filtri di ricerca',
    ),
    'export' => 
    array (
      'label' => 'Esporta',
      'success' => 'Esportazione completata',
      'error' => 'Errore durante l\'esportazione',
    ),
    'import' => 
    array (
      'label' => 'Importa',
      'success' => 'Importazione completata',
      'error' => 'Errore durante l\'importazione',
    ),
    'refresh' => 
    array (
      'label' => 'Aggiorna',
      'tooltip' => 'Ricarica i dati',
    ),
    'upload' => 
    array (
      'label' => 'Carica File',
      'success' => 'File caricato con successo',
      'error' => 'Errore durante il caricamento',
    ),
    'download' => 
    array (
      'label' => 'Scarica',
      'tooltip' => 'Scarica il file',
    ),
    'export_xls' => 
    array (
      'label' => 'Esporta Excel',
      'tooltip' => 'Esporta i dati in formato Excel',
    ),
    'createAnother' => 
    array (
      'label' => 'Crea Altro',
      'tooltip' => 'Crea un nuovo elemento dopo aver salvato',
    ),
    'change-password' => 
    array (
      'label' => 'Cambia Password',
      'tooltip' => 'Modifica la password dell\'utente',
    ),
  ),
  'messages' => 
  array (
    'welcome' => 'Benvenuto nel sistema',
    'loading' => 'Caricamento in corso...',
    'saving' => 'Salvataggio in corso...',
    'saved' => 'Dati salvati correttamente',
    'error' => 'Si è verificato un errore',
    'success' => 'Operazione completata con successo',
    'warning' => 'Attenzione: verificare i dati inseriti',
    'info' => 'Informazione importante',
    'no_data' => 'Nessun dato disponibile',
    'no_results' => 'Nessun risultato trovato',
    'confirm_delete' => 'Confermi l\'eliminazione?',
    'confirm_action' => 'Confermi di voler procedere?',
    'unsaved_changes' => 'Ci sono modifiche non salvate',
    'session_expired' => 'Sessione scaduta, effettua nuovamente l\'accesso',
    'unauthorized' => 'Non autorizzato ad accedere a questa risorsa',
    'forbidden' => 'Accesso negato',
    'not_found' => 'Risorsa non trovata',
    'server_error' => 'Errore del server, riprova più tardi',
    'validation_failed' => 'Errori di validazione nei dati inseriti',
    'operation_successful' => 'Operazione eseguita con successo',
    'operation_failed' => 'Operazione fallita, controllare i dati',
  ),
  'navigation' => 
  array (
    'dashboard' => 'Pannello di Controllo',
    'users' => 'Gestione Utenti',
    'settings' => 'Impostazioni',
    'profile' => 'Profilo Utente',
    'logout' => 'Disconnetti',
    'home' => 'Home',
    'back_to_dashboard' => 'Torna al Pannello',
    'administration' => 'Amministrazione',
    'reports' => 'Report e Statistiche',
    'help' => 'Aiuto e Supporto',
    'documentation' => 'Documentazione',
  ),
  'validation' => 
  array (
    'required' => 'Il campo :attribute è obbligatorio',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido',
    'min' => 'Il campo :attribute deve essere di almeno :min caratteri',
    'max' => 'Il campo :attribute non può superare :max caratteri',
    'unique' => 'Il valore del campo :attribute è già in uso',
    'confirmed' => 'La conferma del campo :attribute non corrisponde',
    'numeric' => 'Il campo :attribute deve essere un numero',
    'date' => 'Il campo :attribute deve essere una data valida',
    'file' => 'Il campo :attribute deve essere un file valido',
    'image' => 'Il campo :attribute deve essere un\'immagine valida',
    'mimes' => 'Il campo :attribute deve essere un file di tipo: :values',
    'size' => 'Il campo :attribute deve essere di :size MB',
  ),
);
>>>>>>> 6bc2950 (.)
