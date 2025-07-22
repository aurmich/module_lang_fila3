<?php

<<<<<<< HEAD
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
      'label' => 'Lingue Disponibili',
      'placeholder' => 'Elenco lingue',
      'help' => 'Lingue disponibili per la selezione',
<<<<<<< HEAD
=======
    ),
    'value' => 
    array (
      'description' => 'value',
      'helper_text' => 'value',
      'placeholder' => 'value',
      'label' => 'value',
>>>>>>> e3660f5 (.)
    ),
    'updated_at' => 
    array (
      'description' => 'updated_at',
      'helper_text' => 'updated_at',
      'placeholder' => 'updated_at',
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
<<<<<<< HEAD
=======
    ),
    'save' => 
    array (
      'label' => 'save',
>>>>>>> e3660f5 (.)
    ),
    'save' => 
    array (
      'label' => 'save',
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
=======
declare(strict_types=1);

return [
    'fields' => [
        'language' => [
            'label' => 'Lingua',
            'placeholder' => 'Seleziona la lingua',
            'help' => "Lingua attualmente selezionata per l'interfaccia",
        ],
        'available_languages' => [
            'label' => 'Lingue Disponibili',
            'placeholder' => 'Elenco lingue',
            'help' => 'Lingue disponibili per la selezione',
        ],
        'value' => [
            'label' => 'Valore',
            'placeholder' => 'Inserisci il valore',
            'description' => 'Valore della traduzione',
            'helper_text' => 'Testo di aiuto per il valore',
        ],
        'updated_at' => [
            'label' => 'Data aggiornamento',
            'placeholder' => 'Inserisci la data di aggiornamento',
            'description' => 'Data di ultima modifica',
            'helper_text' => 'Testo di aiuto per la data di aggiornamento',
        ],
    ],
    'actions' => [
        'change_language' => [
            'label' => 'Cambia Lingua',
            'success' => 'Lingua cambiata con successo',
            'error' => 'Errore durante il cambio lingua',
        ],
        'cancel' => [
            'label' => 'Annulla',
        ],
        'save' => [
            'label' => 'Salva',
        ],
    ],
    'messages' => [
        'language_changed' => 'Lingua cambiata correttamente',
        'error' => 'Si è verificato un errore durante il cambio lingua',
    ],
    'validation' => [
        'language_required' => 'La lingua è obbligatoria',
        'language_valid' => 'La lingua selezionata non è valida',
    ],
];
>>>>>>> 637747f (.)
