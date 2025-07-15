<?php

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
