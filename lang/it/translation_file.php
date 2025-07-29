<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Gestione Traduzioni',
        'group' => 'Impostazioni',
        'icon' => 'heroicon-o-language',
        'sort' => 73,
    ],
    'model' => [
        'label' => 'File di Traduzione',
    ],
    'fields' => [
        'key' => [
            'label' => 'Chiave',
            'placeholder' => 'Inserisci la chiave di traduzione',
            'help' => 'Identificatore univoco della stringa da tradurre',
        ],
        'value' => [
            'label' => 'Valore',
            'placeholder' => 'Inserisci la traduzione',
            'help' => 'Testo tradotto per la chiave selezionata',
        ],
        'toggleColumns' => [
            'label' => 'Mostra/Nascondi colonne',
        ],
        'reorderRecords' => [
            'label' => 'Riordina record',
        ],
        'edit' => [
            'label' => 'Modifica',
        ],
        'resetFilters' => [
            'label' => 'Resetta filtri',
        ],
        'content' => [
            'description' => 'Contenuto',
            'helper_text' => 'Aiuto per il campo contenuto',
            'placeholder' => 'Inserisci contenuto',
        ],
        'applyFilters' => [
            'label' => 'Applica filtri',
        ],
        'snapshots' => [
            'fields' => [
                'updated_at' => [
                    'help' => [
                        'description' => 'Aiuto per data aggiornamento',
                        'helper_text' => 'Testo di aiuto per data aggiornamento',
                        'placeholder' => 'Inserisci data aggiornamento',
                        'label' => 'Data aggiornamento',
                    ],
                    'label' => [
                        'description' => 'Etichetta per data aggiornamento',
                        'helper_text' => 'Etichetta per data aggiornamento',
                        'placeholder' => 'Etichetta per data aggiornamento',
                    ],
                ],
            ],
        ],
        'openFilters' => [
            'label' => 'Apri filtri',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Crea Traduzione',
            'success' => 'Traduzione creata con successo',
            'error' => 'Errore durante la creazione della traduzione',
        ],
        'edit' => [
            'label' => 'Modifica Traduzione',
            'success' => 'Traduzione aggiornata con successo',
            'error' => "Errore durante l'aggiornamento della traduzione",
        ],
        'lang' => [
            'label' => 'Lingua',
        ],
    ],
    'messages' => [
        'created' => 'Traduzione aggiunta',
        'updated' => 'Traduzione aggiornata',
        'deleted' => 'Traduzione eliminata',
    ],
    'validation' => [
        'key_required' => 'La chiave è obbligatoria',
        'value_required' => 'Il valore è obbligatorio',
    ],
];
=======
return array (
  'navigation' => 
  array (
    'label' => 'Gestione Traduzioni',
    'group' => 'Impostazioni',
    'icon' => 'heroicon-o-language',
    'sort' => 73,
  ),
  'fields' => 
  array (
    'key' => 
    array (
      'label' => 'Chiave',
      'placeholder' => 'Inserisci la chiave di traduzione',
      'help' => 'Identificatore univoco della stringa da tradurre',
    ),
    'value' => 
    array (
      'label' => 'Valore',
      'placeholder' => 'Inserisci la traduzione',
      'help' => 'Testo tradotto per la chiave selezionata',
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
  ),
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'Crea Traduzione',
      'success' => 'Traduzione creata con successo',
      'error' => 'Errore durante la creazione della traduzione',
    ),
    'edit' => 
    array (
      'label' => 'Modifica Traduzione',
      'success' => 'Traduzione aggiornata con successo',
      'error' => 'Errore durante l\'aggiornamento della traduzione',
    ),
    'lang' => 
    array (
      'label' => 'lang',
    ),
  ),
  'messages' => 
  array (
    'created' => 'Traduzione aggiunta',
    'updated' => 'Traduzione aggiornata',
    'deleted' => 'Traduzione eliminata',
  ),
  'validation' => 
  array (
    'key_required' => 'La chiave è obbligatoria',
    'value_required' => 'Il valore è obbligatorio',
  ),
  'model' => 
  array (
    'label' => 'translation file.model',
  ),
);
>>>>>>> 7f8122e (.)
