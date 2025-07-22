<?php

<<<<<<< HEAD
return array (
<<<<<<< HEAD
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
=======
  'actions' => 
  array (
    'create' => 
    array (
      'label' => 'create',
    ),
    'lang' => 
    array (
      'label' => 'lang',
    ),
  ),
  'fields' => 
  array (
    'edit' => 
    array (
      'label' => 'edit',
>>>>>>> e3660f5 (.)
    ),
    'toggleColumns' => 
    array (
      'label' => 'toggleColumns',
    ),
    'reorderRecords' => 
    array (
      'label' => 'reorderRecords',
    ),
<<<<<<< HEAD
<<<<<<< HEAD
=======
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
>>>>>>> 0c3d02d (.)
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
=======
    'resetFilters' => 
    array (
      'label' => 'resetFilters',
    ),
    'content' => 
    array (
      'description' => 'content',
      'helper_text' => 'content',
      'placeholder' => 'content',
    ),
    'applyFilters' => 
    array (
      'label' => 'applyFilters',
    ),
    'snapshots' => 
    array (
      'fields' => 
      array (
        'updated_at' => 
        array (
          'help' => 
          array (
            'description' => 'snapshots.fields.updated_at.help',
            'helper_text' => 'snapshots.fields.updated_at.help',
            'placeholder' => 'snapshots.fields.updated_at.help',
            'label' => 'snapshots.fields.updated_at.help',
          ),
          'label' => 
          array (
            'description' => 'snapshots.fields.updated_at.label',
            'helper_text' => 'snapshots.fields.updated_at.label',
            'placeholder' => 'snapshots.fields.updated_at.label',
          ),
        ),
      ),
    ),
    'openFilters' => 
    array (
      'label' => 'openFilters',
    ),
    'key' => 
    array (
      'label' => 'key',
    ),
  ),
  'navigation' => 
  array (
    'label' => 'translation file.navigation',
    'sort' => 73,
    'icon' => 'translation file.navigation',
    'group' => 'translation file.navigation',
>>>>>>> e3660f5 (.)
  ),
  'model' => 
  array (
    'label' => 'translation file.model',
  ),
);
=======
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
>>>>>>> 637747f (.)
