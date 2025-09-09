<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
declare(strict_types=1);

return [
    'fields' => [
        'language' => [
            'label' => 'Lingua',
            'placeholder' => 'Seleziona la lingua',
            'helper_text' => 'Lingua attualmente selezionata per l\'interfaccia',
        ],
        'available_languages' => [
            'label' => 'Lingue Disponibili',
            'placeholder' => 'Elenco lingue disponibili',
            'helper_text' => 'Lingue disponibili per la selezione nell\'interfaccia',
        ],
        'value' => [
            'label' => 'Valore',
            'placeholder' => 'Inserisci il valore',
            'helper_text' => 'Valore della traduzione',
        ],
        'key' => [
            'label' => 'Chiave',
            'placeholder' => 'Inserisci la chiave di traduzione',
            'helper_text' => 'Chiave identificativa per la traduzione',
        ],
        'locale' => [
            'label' => 'Locale',
            'placeholder' => 'Seleziona il locale',
            'helper_text' => 'Codice locale della lingua (es. it, en, de)',
        ],
    ],
    'actions' => [
        'change_language' => [
            'label' => 'Cambia Lingua',
            'tooltip' => 'Cambia la lingua dell\'interfaccia',
            'success' => 'Lingua cambiata con successo',
            'error' => 'Errore durante il cambio lingua',
            'confirmation' => 'Sei sicuro di voler cambiare la lingua?',
        ],
        'cancel' => [
            'label' => 'Annulla',
            'tooltip' => 'Annulla l\'operazione corrente',
        ],
        'save' => [
            'label' => 'Salva',
            'tooltip' => 'Salva le modifiche',
            'success' => 'Modifiche salvate con successo',
            'error' => 'Errore durante il salvataggio',
        ],
        'create' => [
            'label' => 'Crea Traduzione',
            'tooltip' => 'Crea una nuova traduzione',
            'success' => 'Traduzione creata con successo',
            'error' => 'Errore durante la creazione della traduzione',
        ],
        'edit' => [
            'label' => 'Modifica',
            'tooltip' => 'Modifica la traduzione selezionata',
            'success' => 'Traduzione modificata con successo',
            'error' => 'Errore durante la modifica della traduzione',
        ],
        'delete' => [
            'label' => 'Elimina',
            'tooltip' => 'Elimina la traduzione selezionata',
            'success' => 'Traduzione eliminata con successo',
            'error' => 'Errore durante l\'eliminazione della traduzione',
            'confirmation' => 'Sei sicuro di voler eliminare questa traduzione?',
        ],
    ],
    'messages' => [
        'language_changed' => 'Lingua cambiata correttamente',
        'error' => 'Si è verificato un errore durante il cambio lingua',
        'no_translations' => 'Nessuna traduzione trovata',
        'loading' => 'Caricamento traduzioni in corso...',
        'empty_state' => 'Nessuna traduzione disponibile',
        'search_placeholder' => 'Cerca traduzioni...',
    ],
    'validation' => [
        'language_required' => 'La lingua è obbligatoria',
        'language_valid' => 'La lingua selezionata non è valida',
        'key_required' => 'La chiave di traduzione è obbligatoria',
        'key_unique' => 'Questa chiave di traduzione esiste già',
        'value_required' => 'Il valore della traduzione è obbligatorio',
        'locale_required' => 'Il locale è obbligatorio',
        'locale_valid' => 'Il formato del locale non è valido',
    ],
    'navigation' => [
        'label' => 'Servizio Lingue',
        'group' => 'Localizzazione',
        'icon' => 'heroicon-o-language',
    ],
    'page' => [
        'title' => 'Gestione Traduzioni',
        'heading' => 'Servizio Lingue',
        'description' => 'Gestisci le traduzioni e le lingue disponibili nel sistema',
    ],
];
<<<<<<< HEAD
=======
return array (
  'fields' => 
  array (
    'language' => 
    array (
      'label' => 'Lingua',
      'placeholder' => 'Seleziona la lingua',
      'help' => 'Lingua attualmente selezionata per l\'interfaccia',
    ),
    'available_languages' => 
    array (
<<<<<<< HEAD
      'label' => 'Lingue Disponibili',
      'placeholder' => 'Elenco lingue',
      'help' => 'Lingue disponibili per la selezione',
=======
      'label' => 'Ultima modifica',
      'placeholder' => 'Seleziona data',
      'tooltip' => 'Data dell\'ultima modifica',
      'description' => 'updated_at',
      'helper_text' => 'updated_at',
    ),
    'name' => 
    array (
      'label' => 'Nome',
      'placeholder' => 'Inserisci il nome',
      'tooltip' => 'Nome dell\'elemento',
    ),
    'description' => 
    array (
      'label' => 'Descrizione',
      'placeholder' => 'Inserisci una descrizione',
      'tooltip' => 'Breve descrizione dell\'elemento',
    ),
    'values' => 
    array (
      'label' => 'Valori',
      'placeholder' => 'Inserisci i valori',
      'tooltip' => 'Lista dei valori associati',
      'description' => 'values',
      'helper_text' => 'values',
>>>>>>> bb902e8 (.)
    ),
    'value' => 
    array (
      'description' => 'value',
      'helper_text' => 'value',
<<<<<<< HEAD
      'placeholder' => 'value',
      'label' => 'value',
=======
    ),
    'email' => 
    array (
      'label' => 'Email',
      'placeholder' => 'esempio@dominio.it',
      'tooltip' => 'Indirizzo email valido',
    ),
    'password' => 
    array (
      'label' => 'Password',
      'placeholder' => '\\u2022\\u2022\\u2022\\u2022\\u2022\\u2022\\u2022\\u2022',
      'tooltip' => 'Password di accesso',
    ),
    'password_expires_at' => 
    array (
      'label' => 'Scadenza password',
      'placeholder' => 'Seleziona data',
      'tooltip' => 'Data di scadenza della password',
    ),
    'email_verified_at' => 
    array (
      'label' => 'Email verificata il',
      'placeholder' => 'Data verifica',
      'tooltip' => 'Data di verifica dell\'email',
    ),
    'remember' => 
    array (
      'label' => 'Ricordami',
      'tooltip' => 'Mantieni la sessione attiva',
    ),
    'id' => 
    array (
      'label' => 'ID',
      'tooltip' => 'Identificativo univoco',
    ),
    'isActive' => 
    array (
      'label' => 'Attivo',
      'tooltip' => 'Indica se l\'elemento è attivo',
      'description' => 'isActive',
      'helper_text' => 'isActive',
      'placeholder' => 'isActive',
    ),
    'file' => 
    array (
      'label' => 'File',
      'placeholder' => 'Seleziona file',
      'tooltip' => 'Seleziona un file da caricare',
    ),
    'data_scadenza' => 
    array (
      'label' => 'Data di scadenza',
    ),
    'indirizzo' => 
    array (
      'label' => 'Indirizzo',
    ),
    'telefono' => 
    array (
      'label' => 'Telefono',
    ),
    'workgroup' => 
    array (
      'denominazione' => 
      array (
        'label' => 'Gruppo di lavoro',
        'placeholder' => 'Seleziona il gruppo',
        'tooltip' => 'Gruppo di lavoro associato',
      ),
    ),
    'data_inizio_esecuzione' => 
    array (
      'label' => 'Data inizio esecuzione',
      'placeholder' => 'Seleziona la data di inizio',
      'tooltip' => 'Data di inizio dell\'esecuzione',
    ),
    'data_fine_esecuzione' => 
    array (
      'label' => 'Data fine esecuzione',
      'placeholder' => 'Seleziona la data di fine',
      'tooltip' => 'Data di fine dell\'esecuzione',
    ),
    'toggleColumns' => 
    array (
      'label' => 'Gestisci colonne',
      'tooltip' => 'Mostra/Nascondi colonne della tabella',
    ),
    'reorderRecords' => 
    array (
      'label' => 'Riordina',
      'tooltip' => 'Riordina gli elementi',
    ),
    'resetFilters' => 
    array (
      'label' => 'Reimposta filtri',
      'tooltip' => 'Rimuovi tutti i filtri applicati',
    ),
    'applyFilters' => 
    array (
      'label' => 'Applica filtri',
      'tooltip' => 'Applica i filtri selezionati',
    ),
    'openFilters' => 
    array (
      'label' => 'Filtri',
      'tooltip' => 'Apri il pannello dei filtri',
    ),
    'longitude' => 
    array (
      'label' => 'Longitudine',
    ),
    'latitude' => 
    array (
      'label' => 'Latitudine',
    ),
    'unit' => 
    array (
      'label' => 'Unità',
    ),
    'deleted_at' => 
    array (
      'label' => 'Data di eliminazione',
    ),
    'radius' => 
    array (
      'label' => 'Raggio',
    ),
    'polizza_convenzione_pratica_sconto' => 
    array (
      'label' => 'Polizza convenzione pratica sconto',
    ),
    'data_pagamento' => 
    array (
      'label' => 'Data pagamento',
    ),
    'polizza_convenzione_istanza' => 
    array (
      'polizza_convenzione' => 
      array (
        'compagnia_assicurativa' => 
        array (
          'nome' => 
          array (
            'label' => 'Nome compagnia assicurativa',
          ),
        ),
        'nome' => 
        array (
          'label' => 'Nome polizza convenzione',
        ),
      ),
    ),
    'stato_pratica' => 
    array (
      'descrizione' => 
      array (
        'label' => 'Descrizione stato pratica',
      ),
    ),
    'cliente' => 
    array (
      'nominativo' => 
      array (
        'label' => 'Nominativo cliente',
      ),
    ),
    'roles' => 
    array (
      'name' => 
      array (
        'label' => 'Nome ruolo',
      ),
    ),
    'competent_health_unit' => 
    array (
      'label' => 'Unità sanitaria competente',
    ),
    'tax_code' => 
    array (
      'label' => 'Codice fiscale',
    ),
    'vat_number' => 
    array (
      'label' => 'Partita IVA',
    ),
    'company_office' => 
    array (
      'label' => 'Sede aziendale',
    ),
    'business_closed' => 
    array (
      'label' => 'Attività chiusa',
    ),
    'company_name' => 
    array (
      'label' => 'Nome azienda',
    ),
    'street_number' => 
    array (
      'label' => 'Numero civico',
    ),
    'province' => 
    array (
      'label' => 'Provincia',
    ),
    'postal_code' => 
    array (
      'label' => 'CAP',
    ),
    'fax' => 
    array (
      'label' => 'Fax',
    ),
    'mobile' => 
    array (
      'label' => 'Cellulare',
    ),
    'notes' => 
    array (
      'label' => 'Note',
    ),
    'activity' => 
    array (
      'label' => 'Attività',
    ),
    'determina' => 
    array (
      'label' => 'Determina',
    ),
    'data_aggiudicazione' => 
    array (
      'label' => 'Data aggiudicazione',
    ),
    'updated_by' => 
    array (
      'description' => 'updated_by',
      'helper_text' => 'updated_by',
      'placeholder' => 'updated_by',
      'label' => 'updated_by',
    ),
    'created_by' => 
    array (
      'description' => 'created_by',
      'helper_text' => 'created_by',
      'placeholder' => 'created_by',
      'label' => 'created_by',
    ),
    'layout' => 
    array (
      'label' => 'layout',
>>>>>>> bb902e8 (.)
    ),
    'newstate' => 
    array (
      'description' => 'newstate',
      'helper_text' => 'newstate',
      'placeholder' => 'newstate',
      'label' => 'newstate',
    ),
    'icon' => 
    array (
      'description' => 'icon',
      'label' => 'icon',
      'placeholder' => 'icon',
      'helper_text' => 'icon',
    ),
    'user' => 
    array (
      'label' => 'user',
    ),
    'attributes' => 
    array (
      'label' => 'attributes',
    ),
    '946595X2254X48249SQ01' => 
    array (
      'label' => '946595X2254X48249SQ01',
    ),
    '946595X2255X48257SQ01' => 
    array (
      'label' => '946595X2255X48257SQ01',
    ),
    '946595X2256X48262SQ01' => 
    array (
      'label' => '946595X2256X48262SQ01',
    ),
    '946595X2257X48264' => 
    array (
      'label' => '946595X2257X48264',
    ),
    '946595X2257X48265SQ01' => 
    array (
      'label' => '946595X2257X48265SQ01',
    ),
    '946595X2258X48268SQ01' => 
    array (
      'label' => '946595X2258X48268SQ01',
    ),
    '946595X2259X48269SQ01' => 
    array (
      'label' => '946595X2259X48269SQ01',
    ),
    '946595X2259X48843SQ01' => 
    array (
      'label' => '946595X2259X48843SQ01',
    ),
    '946595X2259X48847SQ01' => 
    array (
      'label' => '946595X2259X48847SQ01',
    ),
    '946595X2259X48270SQ01' => 
    array (
      'label' => '946595X2259X48270SQ01',
    ),
    '946595X2259X48850SQ01' => 
    array (
      'label' => '946595X2259X48850SQ01',
    ),
    '946595X2259X48852SQ01' => 
    array (
      'label' => '946595X2259X48852SQ01',
    ),
    '946595X2259X48271SQ01' => 
    array (
      'label' => '946595X2259X48271SQ01',
    ),
    '946595X2259X48869SQ01' => 
    array (
      'label' => '946595X2259X48869SQ01',
    ),
    'changePassword' => 
    array (
      'label' => 'changePassword',
    ),
    'recordId' => 
    array (
      'description' => 'recordId',
      'helper_text' => 'recordId',
      'placeholder' => 'recordId',
      'label' => 'recordId',
    ),
    '892883X1302X3537801' => 
    array (
      'label' => '892883X1302X3537801',
    ),
    '892883X1303X3539819' => 
    array (
      'label' => '892883X1303X3539819',
    ),
    '892883X1303X3540021' => 
    array (
      'label' => '892883X1303X3540021',
    ),
    '892883X1304X3540524' => 
    array (
      'label' => '892883X1304X3540524',
    ),
    '892883X1304X3541634' => 
    array (
      'label' => '892883X1304X3541634',
    ),
    '892883X1305X3542239' => 
    array (
      'label' => '892883X1305X3542239',
    ),
    '892883X1306X3542441' => 
    array (
      'label' => '892883X1306X3542441',
    ),
    '892883X1306X3542743' => 
    array (
      'label' => '892883X1306X3542743',
    ),
    '892883X1306X3543345' => 
    array (
      'label' => '892883X1306X3543345',
    ),
    '892883X1307X3543747' => 
    array (
      'label' => '892883X1307X3543747',
    ),
    '892883X1307X3544049' => 
    array (
      'label' => '892883X1307X3544049',
    ),
    '892883X1307X3544351' => 
    array (
      'label' => '892883X1307X3544351',
    ),
    '892883X1308X3544653' => 
    array (
      'label' => '892883X1308X3544653',
    ),
    '892883X1308X3544955' => 
    array (
      'label' => '892883X1308X3544955',
    ),
    '892883X1308X3545257' => 
    array (
      'label' => '892883X1308X3545257',
    ),
    '981813X2509X5267701' => 
    array (
      'label' => '981813X2509X5267701',
    ),
    '981813X2510X5268519' => 
    array (
      'label' => '981813X2510X5268519',
    ),
    '981813X2510X5268721' => 
    array (
      'label' => '981813X2510X5268721',
    ),
    '981813X2511X5270034' => 
    array (
      'label' => '981813X2511X5270034',
    ),
    '981813X2512X53162SQ001' => 
    array (
      'label' => '981813X2512X53162SQ001',
    ),
    '981813X2513X52709SQ001' => 
    array (
      'label' => '981813X2513X52709SQ001',
    ),
    '981813X2514X52713' => 
    array (
      'label' => '981813X2514X52713',
    ),
    '981813X2514X52714SQ001' => 
    array (
      'label' => '981813X2514X52714SQ001',
    ),
    '981813X2514X52716SQ001' => 
    array (
      'label' => '981813X2514X52716SQ001',
    ),
    '981813X2514X53180SQ001' => 
    array (
      'label' => '981813X2514X53180SQ001',
    ),
    '981813X2515X52719' => 
    array (
      'label' => '981813X2515X52719',
    ),
    '981813X2515X52720SQ001' => 
    array (
      'label' => '981813X2515X52720SQ001',
    ),
    '981813X2515X53183SQ001' => 
    array (
      'label' => '981813X2515X53183SQ001',
    ),
    '981813X2515X52722SQ001' => 
    array (
      'label' => '981813X2515X52722SQ001',
    ),
    '981813X2516X52725SQ001' => 
    array (
      'label' => '981813X2516X52725SQ001',
    ),
    '981813X2516X53174SQ001' => 
    array (
      'label' => '981813X2516X53174SQ001',
    ),
    '981813X2516X53176SQ001' => 
    array (
      'label' => '981813X2516X53176SQ001',
    ),
    '947723X1161X34182' => 
    array (
      'label' => '947723X1161X34182',
    ),
  ),
  'actions' => 
  array (
    'change_language' => 
    array (
      'label' => 'Cambia Lingua',
      'success' => 'Lingua cambiata con successo',
      'error' => 'Errore durante il cambio lingua',
    ),
    'cancel' => 
    array (
      'label' => 'cancel',
    ),
    'save' => 
    array (
      'label' => 'save',
    ),
    'win_action' => 
    array (
      'label' => 'win_action',
    ),
    'bet_action' => 
    array (
      'label' => 'bet_action',
    ),
    'export_xls' => 
    array (
      'label' => 'export_xls',
    ),
  ),
  'messages' => 
  array (
    'language_changed' => 'Lingua cambiata correttamente',
    'error' => 'Si è verificato un errore durante il cambio lingua',
  ),
  'validation' => 
  array (
    'language_required' => 'La lingua è obbligatoria',
    'language_valid' => 'La lingua selezionata non è valida',
  ),
);
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
