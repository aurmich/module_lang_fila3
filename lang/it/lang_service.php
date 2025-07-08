<?php

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
        // ... altri campi ...
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
        // ... altre azioni ...
    ],
    'messages' => [
        'welcome' => 'Benvenuto nel sistema',
        'loading' => 'Caricamento in corso...',
        'saving' => 'Salvataggio in corso...',
        'saved' => 'Dati salvati correttamente',
        'error' => 'Si è verificato un errore',
        'success' => 'Operazione completata con successo',
        // ... altri messaggi ...
    ],
    'navigation' => [
        'dashboard' => 'Pannello di Controllo',
        'users' => 'Gestione Utenti',
        'settings' => 'Impostazioni',
        'profile' => 'Profilo Utente',
        'logout' => 'Disconnetti',
        // ... altre voci ...
    ],
    'validation' => [
        'required' => 'Il campo :attribute è obbligatorio',
        'email' => 'Il campo :attribute deve essere un indirizzo email valido',
        // ... altre regole ...
    ],
];
