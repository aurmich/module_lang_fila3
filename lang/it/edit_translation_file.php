<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'fields' => [
        'key' => [
            'label' => 'Chiave di Traduzione',
            'placeholder' => 'Inserisci la chiave di traduzione',
            'helper_text' => 'Identificatore univoco della stringa da tradurre',
            'description' => 'Chiave di traduzione',
        ],
        'data' => [
            'pippo' => [
                'description' => 'Esempio di dati per la chiave pippo',
                'helper_text' => 'Testo di aiuto per il campo pippo',
                'placeholder' => 'Inserisci un valore per pippo',
            ],
        ],
        'pippo' => [
            'description' => 'Campo di esempio pippo',
            'helper_text' => 'Testo di aiuto per pippo',
            'placeholder' => 'Inserisci il valore di pippo',
            'label' => 'Pippo',
        ],
        'pluto' => [
            'description' => 'Campo di esempio pluto',
            'label' => 'Pluto',
            'placeholder' => 'Inserisci il valore di pluto',
            'helper_text' => 'Testo di aiuto per pluto',
        ],
        'snapshots' => [
            'fields' => [
                'updated_at' => [
                    'help' => [
                        'description' => 'Data e ora dell’ultimo aggiornamento dello snapshot',
                        'helper_text' => 'Indica quando lo snapshot è stato aggiornato',
                        'placeholder' => 'Seleziona la data di aggiornamento',
                        'label' => 'Data aggiornamento',
                    ],
                ],
            ],
        ],
        'content' => [
            'snapshots' => [
                'fields' => [
                    'updated_at' => [
                        'help' => [
                            'description' => 'Data e ora dell’ultimo aggiornamento del contenuto',
                        ],
                    ],
                ],
            ],
            'search_placeholder' => [
                'description' => 'Testo di esempio per la ricerca nei contenuti',
                'helper_text' => 'Suggerimento per la ricerca nei contenuti',
            ],
            'badges' => [
                'level' => [
                    'debug' => [
                        'description' => 'Badge per livello debug',
                        'helper_text' => 'Indica che il livello è debug',
                        'placeholder' => 'Debug',
                        'label' => 'Debug',
                    ],
                    'info' => [
                        'description' => 'Badge per livello informativo',
                        'helper_text' => 'Indica che il livello è informativo',
                        'placeholder' => 'Info',
                        'label' => 'Info',
                    ],
                    'notice' => [
                        'description' => 'Badge per livello avviso',
                        'helper_text' => 'Indica che il livello è avviso',
                        'placeholder' => 'Avviso',
                        'label' => 'Avviso',
                    ],
                ],
            ],
            'fields' => [
                'id' => [
                    'label' => [
                        'label' => 'ID',
                        'placeholder' => 'Inserisci l’ID',
                        'helper_text' => 'Identificativo numerico univoco',
                        'description' => 'Identificativo del record',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip ID',
                        'placeholder' => 'Tooltip per ID',
                        'helper_text' => 'Ulteriori informazioni sull’ID',
                        'description' => 'Tooltip identificativo',
                    ],
                ],
                'description' => [
                    'label' => [
                        'label' => 'Descrizione',
                        'placeholder' => 'Inserisci la descrizione',
                        'helper_text' => 'Testo descrittivo del contenuto',
                        'description' => 'Descrizione dettagliata',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip descrizione',
                        'placeholder' => 'Tooltip per descrizione',
                        'helper_text' => 'Ulteriori informazioni sulla descrizione',
                        'description' => 'Tooltip per descrizione',
                    ],
                    'help' => [
                        'description' => 'Testo di aiuto per la descrizione',
                        'helper_text' => 'Suggerimento per la descrizione',
                        'placeholder' => 'Inserisci la descrizione',
                    ],
                ],
                'subject_type' => [
                    'label' => [
                        'label' => 'Tipo Oggetto',
                        'placeholder' => 'Inserisci il tipo di oggetto',
                        'helper_text' => 'Tipo di entità associata',
                        'description' => 'Tipo di oggetto collegato',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip tipo oggetto',
                        'placeholder' => 'Tooltip per tipo oggetto',
                        'helper_text' => 'Ulteriori informazioni sul tipo oggetto',
                        'description' => 'Tooltip per tipo oggetto',
                    ],
                ],
                'subject_id' => [
                    'label' => [
                        'label' => 'ID Oggetto',
                        'placeholder' => 'Inserisci l’ID dell’oggetto',
                        'helper_text' => 'Identificativo dell’oggetto associato',
                        'description' => 'ID dell’oggetto collegato',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip ID oggetto',
                        'placeholder' => 'Tooltip per ID oggetto',
                        'helper_text' => 'Ulteriori informazioni sull’ID oggetto',
                        'description' => 'Tooltip per ID oggetto',
                    ],
                ],
                'causer_type' => [
                    'label' => [
                        'label' => 'Tipo Causante',
                        'placeholder' => 'Inserisci il tipo di causante',
                        'helper_text' => 'Tipo di utente che ha causato l’azione',
                        'description' => 'Tipo di entità che ha generato l’evento',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip tipo causante',
                        'placeholder' => 'Tooltip per tipo causante',
                        'helper_text' => 'Ulteriori informazioni sul tipo causante',
                        'description' => 'Tooltip per tipo causante',
                    ],
                ],
                'causer_id' => [
                    'label' => [
                        'label' => 'ID Causante',
                        'placeholder' => 'Inserisci l’ID del causante',
                        'helper_text' => 'Identificativo dell’utente che ha generato l’evento',
                        'description' => 'ID dell’entità causante',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip ID causante',
                        'placeholder' => 'Tooltip per ID causante',
                        'helper_text' => 'Ulteriori informazioni sull’ID causante',
                        'description' => 'Tooltip per ID causante',
                    ],
                ],
                'created_at' => [
                    'label' => [
                        'label' => 'Data Creazione',
                        'placeholder' => 'Inserisci la data di creazione',
                        'helper_text' => 'Data e ora di creazione del record',
                        'description' => 'Data di creazione',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip data creazione',
                        'placeholder' => 'Tooltip per data creazione',
                        'helper_text' => 'Ulteriori informazioni sulla data di creazione',
                        'description' => 'Tooltip per data creazione',
                    ],
                ],
                'reorderRecords' => [
                    'label' => [
                        'description' => 'Riordina i record nella tabella',
                        'helper_text' => 'Trascina per riordinare',
                    ],
                ],
            ],
        ],
        'actions' => [
            'view' => [
                'label' => [
                    'label' => 'Visualizza',
                    'placeholder' => 'Inserisci la descrizione di visualizzazione',
                    'helper_text' => 'Aiuto per azione di visualizzazione',
                    'description' => 'Descrizione azione di visualizzazione',
                ],
                'tooltip' => [
                    'label' => 'Tooltip visualizzazione',
                    'placeholder' => 'Tooltip per azione di visualizzazione',
                    'helper_text' => 'Aiuto tooltip visualizzazione',
                    'description' => 'Tooltip per azione di visualizzazione',
                ],
            ],
            'delete' => [
                'label' => [
                    'label' => 'Elimina',
                    'placeholder' => 'Inserisci la descrizione di eliminazione',
                    'helper_text' => 'Aiuto per azione di eliminazione',
                    'description' => 'Descrizione azione di eliminazione',
                ],
                'tooltip' => [
                    'label' => 'Tooltip eliminazione',
                    'placeholder' => 'Tooltip per azione di eliminazione',
                    'helper_text' => 'Aiuto tooltip eliminazione',
                    'description' => 'Tooltip per azione di eliminazione',
                ],
                'confirmation' => [
                    'label' => [
                        'label' => 'Conferma eliminazione',
                        'placeholder' => 'Inserisci la descrizione di conferma eliminazione',
                        'helper_text' => 'Aiuto per conferma eliminazione',
                        'description' => 'Descrizione conferma eliminazione',
                    ],
                ],
            ],
            'WorkgroupSeederAction' => [
                'label' => [
                    'description' => 'Azione Seeder Gruppo di lavoro',
                ],
            ],
        ],
        'filters' => [
            'date' => [
                'label' => [
                    'label' => 'Filtra per data',
                    'placeholder' => 'Inserisci la data di filtro',
                    'helper_text' => 'Aiuto per filtro data',
                    'description' => 'Descrizione filtro data',
                ],
                'tooltip' => [
                    'label' => 'Tooltip filtro data',
                    'placeholder' => 'Tooltip per filtro data',
                    'helper_text' => 'Aiuto tooltip filtro data',
                    'description' => 'Tooltip per filtro data',
                ],
            ],
            'type' => [
                'label' => [
                    'label' => 'Filtra per tipo',
                    'placeholder' => 'Inserisci il tipo di filtro',
                    'helper_text' => 'Aiuto per filtro tipo',
                    'description' => 'Descrizione filtro tipo',
                ],
                'tooltip' => [
                    'label' => 'Tooltip filtro tipo',
                    'placeholder' => 'Tooltip per filtro tipo',
                    'helper_text' => 'Aiuto tooltip filtro tipo',
                    'description' => 'Tooltip per filtro tipo',
                ],
            ],
        ],
        'state_transition' => [
            'missing_data' => [
                'description' => 'Transizione stato: dati mancanti',
                'helper_text' => 'Aiuto per transizione stato dati mancanti',
            ],
        ],
        'specialties' => [
            'empty' => [
                'description' => 'Specializzazioni vuote',
                'helper_text' => 'Aiuto per specializzazioni vuote',
                'placeholder' => 'Inserisci specializzazioni vuote',
                'label' => 'Specializzazioni vuote',
            ],
            'description' => [
                'description' => 'Descrizione specializzazioni',
                'helper_text' => 'Aiuto per specializzazioni',
            ],
        ],
        'delete' => [
            'tooltip' => [
                'description' => 'Tooltip eliminazione',
                'helper_text' => 'Aiuto tooltip eliminazione',
                'placeholder' => 'Inserisci tooltip eliminazione',
                'label' => 'Tooltip eliminazione',
            ],
            'label' => [
                'description' => 'Label eliminazione',
                'helper_text' => 'Aiuto label eliminazione',
                'placeholder' => 'Inserisci label eliminazione',
                'label' => 'Label eliminazione',
            ],
        ],
        'studio_email' => [
            'description' => [
                'description' => 'Email studio',
            ],
        ],
        'enums' => [
            'appointment_type_descriptions' => [
                'prevention' => [
                    'description' => 'Descrizione tipo appuntamento prevenzione',
                ],
            ],
        ],
        'notifications' => [
            'account_reinstated' => [
                'description' => 'Notifica account ripristinato',
            ],
        ],
        'studios' => [
            'actions' => [
                'view' => [
                    'description' => 'Azione studio: visualizza',
                ],
            ],
        ],
        'stats' => [
            'no_show_rate' => [
                'description' => 'Tasso no-show',
            ],
        ],
        'resources' => [
            'liquidazione' => [
                'fields' => [
                    'stato' => [
                        'options' => [
                            'annullata' => [
                                'description' => 'Stato liquidazione: annullata',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'actions' => [
        'delete' => [
            'label' => 'Elimina',
        ],
        'activeLocale' => [
            'label' => 'Lingua attiva',
        ],
        'lang' => [
            'label' => 'Lingua',
        ],
    ],
];
=======
return array (
  'fields' => 
  array (
    'key' => 
    array (
      'label' => 'key',
      'placeholder' => 'key',
      'helper_text' => 'key',
      'description' => 'key',
    ),
    'data' => 
    array (
      'pippo' => 
      array (
        'description' => 'data.pippo',
        'helper_text' => 'data.pippo',
        'placeholder' => 'data.pippo',
      ),
    ),
    'pippo' => 
    array (
      'description' => 'pippo',
      'helper_text' => 'pippo',
      'placeholder' => 'pippo',
      'label' => 'pippo',
    ),
    'pluto' => 
    array (
      'description' => 'pluto',
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
        ),
      ),
    ),
    'content' => 
    array (
      'snapshots' => 
      array (
        'fields' => 
        array (
          'updated_at' => 
          array (
            'help' => 
            array (
              'description' => 'content.snapshots.fields.updated_at.help',
              'helper_text' => 'content.snapshots.fields.updated_at.help',
              'placeholder' => 'content.snapshots.fields.updated_at.help',
              'label' => 'content.snapshots.fields.updated_at.help',
            ),
            'label' => 
            array (
              'description' => 'content.snapshots.fields.updated_at.label',
              'helper_text' => 'content.snapshots.fields.updated_at.label',
              'placeholder' => 'content.snapshots.fields.updated_at.label',
              'label' => 'content.snapshots.fields.updated_at.label',
            ),
          ),
          'created_at' => 
          array (
            'help' => 
            array (
              'description' => 'content.snapshots.fields.created_at.help',
              'helper_text' => 'content.snapshots.fields.created_at.help',
              'placeholder' => 'content.snapshots.fields.created_at.help',
              'label' => 'content.snapshots.fields.created_at.help',
            ),
            'label' => 
            array (
              'description' => 'content.snapshots.fields.created_at.label',
              'helper_text' => 'content.snapshots.fields.created_at.label',
              'placeholder' => 'content.snapshots.fields.created_at.label',
              'label' => 'content.snapshots.fields.created_at.label',
            ),
          ),
          'state' => 
          array (
            'help' => 
            array (
              'description' => 'content.snapshots.fields.state.help',
              'helper_text' => 'content.snapshots.fields.state.help',
              'placeholder' => 'content.snapshots.fields.state.help',
              'label' => 'content.snapshots.fields.state.help',
            ),
            'label' => 
            array (
              'description' => 'content.snapshots.fields.state.label',
              'helper_text' => 'content.snapshots.fields.state.label',
              'placeholder' => 'content.snapshots.fields.state.label',
              'label' => 'content.snapshots.fields.state.label',
            ),
          ),
          'id' => 
          array (
            'label' => 
            array (
              'label' => 'content.snapshots.fields.id.label',
              'placeholder' => 'content.snapshots.fields.id.label',
              'helper_text' => 'content.snapshots.fields.id.label',
              'description' => 'content.snapshots.fields.id.label',
            ),
            'help' => 
            array (
              'label' => 'content.snapshots.fields.id.help',
              'placeholder' => 'content.snapshots.fields.id.help',
              'helper_text' => 'content.snapshots.fields.id.help',
              'description' => 'content.snapshots.fields.id.help',
            ),
          ),
          'aggregate_uuid' => 
          array (
            'label' => 
            array (
              'label' => 'content.snapshots.fields.aggregate_uuid.label',
              'placeholder' => 'content.snapshots.fields.aggregate_uuid.label',
              'helper_text' => 'content.snapshots.fields.aggregate_uuid.label',
              'description' => 'content.snapshots.fields.aggregate_uuid.label',
            ),
            'help' => 
            array (
              'label' => 'content.snapshots.fields.aggregate_uuid.help',
              'placeholder' => 'content.snapshots.fields.aggregate_uuid.help',
              'helper_text' => 'content.snapshots.fields.aggregate_uuid.help',
              'description' => 'content.snapshots.fields.aggregate_uuid.help',
            ),
          ),
          'aggregate_version' => 
          array (
            'label' => 
            array (
              'label' => 'content.snapshots.fields.aggregate_version.label',
              'placeholder' => 'content.snapshots.fields.aggregate_version.label',
              'helper_text' => 'content.snapshots.fields.aggregate_version.label',
              'description' => 'content.snapshots.fields.aggregate_version.label',
            ),
            'help' => 
            array (
              'label' => 'content.snapshots.fields.aggregate_version.help',
              'placeholder' => 'content.snapshots.fields.aggregate_version.help',
              'helper_text' => 'content.snapshots.fields.aggregate_version.help',
              'description' => 'content.snapshots.fields.aggregate_version.help',
            ),
          ),
        ),
      ),
      'content' => 
      array (
        'snapshots' => 
        array (
          'fields' => 
          array (
            'updated_at' => 
            array (
              'help' => 
              array (
                'description' => 'content.content.snapshots.fields.updated_at.help',
              ),
            ),
          ),
        ),
      ),
      'search_placeholder' => 
      array (
        'description' => 'content.search_placeholder',
        'helper_text' => 'content.search_placeholder',
      ),
      'badges' => 
      array (
        'level' => 
        array (
          'debug' => 
          array (
            'description' => 'content.badges.level.debug',
            'helper_text' => 'content.badges.level.debug',
            'placeholder' => 'content.badges.level.debug',
            'label' => 'content.badges.level.debug',
          ),
          'info' => 
          array (
            'description' => 'content.badges.level.info',
            'helper_text' => 'content.badges.level.info',
            'placeholder' => 'content.badges.level.info',
            'label' => 'content.badges.level.info',
          ),
          'notice' => 
          array (
            'description' => 'content.badges.level.notice',
            'helper_text' => 'content.badges.level.notice',
            'placeholder' => 'content.badges.level.notice',
          ),
        ),
      ),
      'fields' => 
      array (
        'id' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.id.label',
            'placeholder' => 'content.fields.id.label',
            'helper_text' => 'content.fields.id.label',
            'description' => 'content.fields.id.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.fields.id.tooltip',
            'placeholder' => 'content.fields.id.tooltip',
            'helper_text' => 'content.fields.id.tooltip',
            'description' => 'content.fields.id.tooltip',
          ),
        ),
        'description' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.description.label',
            'placeholder' => 'content.fields.description.label',
            'helper_text' => 'content.fields.description.label',
            'description' => 'content.fields.description.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.fields.description.tooltip',
            'placeholder' => 'content.fields.description.tooltip',
            'helper_text' => 'content.fields.description.tooltip',
            'description' => 'content.fields.description.tooltip',
          ),
          'help' => 
          array (
            'description' => 'content.fields.description.help',
            'helper_text' => 'content.fields.description.help',
            'placeholder' => 'content.fields.description.help',
          ),
        ),
        'subject_type' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.subject_type.label',
            'placeholder' => 'content.fields.subject_type.label',
            'helper_text' => 'content.fields.subject_type.label',
            'description' => 'content.fields.subject_type.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.fields.subject_type.tooltip',
            'placeholder' => 'content.fields.subject_type.tooltip',
            'helper_text' => 'content.fields.subject_type.tooltip',
            'description' => 'content.fields.subject_type.tooltip',
          ),
        ),
        'subject_id' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.subject_id.label',
            'placeholder' => 'content.fields.subject_id.label',
            'helper_text' => 'content.fields.subject_id.label',
            'description' => 'content.fields.subject_id.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.fields.subject_id.tooltip',
            'placeholder' => 'content.fields.subject_id.tooltip',
            'helper_text' => 'content.fields.subject_id.tooltip',
            'description' => 'content.fields.subject_id.tooltip',
          ),
        ),
        'causer_type' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.causer_type.label',
            'placeholder' => 'content.fields.causer_type.label',
            'helper_text' => 'content.fields.causer_type.label',
            'description' => 'content.fields.causer_type.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.fields.causer_type.tooltip',
            'placeholder' => 'content.fields.causer_type.tooltip',
            'helper_text' => 'content.fields.causer_type.tooltip',
            'description' => 'content.fields.causer_type.tooltip',
          ),
        ),
        'causer_id' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.causer_id.label',
            'placeholder' => 'content.fields.causer_id.label',
            'helper_text' => 'content.fields.causer_id.label',
            'description' => 'content.fields.causer_id.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.fields.causer_id.tooltip',
            'placeholder' => 'content.fields.causer_id.tooltip',
            'helper_text' => 'content.fields.causer_id.tooltip',
            'description' => 'content.fields.causer_id.tooltip',
          ),
        ),
        'created_at' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.created_at.label',
            'placeholder' => 'content.fields.created_at.label',
            'helper_text' => 'content.fields.created_at.label',
            'description' => 'content.fields.created_at.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.fields.created_at.tooltip',
            'placeholder' => 'content.fields.created_at.tooltip',
            'helper_text' => 'content.fields.created_at.tooltip',
            'description' => 'content.fields.created_at.tooltip',
          ),
        ),
        'reorderRecords' => 
        array (
          'label' => 
          array (
            'description' => 'content.fields.reorderRecords.label',
            'helper_text' => 'content.fields.reorderRecords.label',
          ),
        ),
      ),
      'actions' => 
      array (
        'view' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.view.label',
            'placeholder' => 'content.actions.view.label',
            'helper_text' => 'content.actions.view.label',
            'description' => 'content.actions.view.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.actions.view.tooltip',
            'placeholder' => 'content.actions.view.tooltip',
            'helper_text' => 'content.actions.view.tooltip',
            'description' => 'content.actions.view.tooltip',
          ),
        ),
        'delete' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.delete.label',
            'placeholder' => 'content.actions.delete.label',
            'helper_text' => 'content.actions.delete.label',
            'description' => 'content.actions.delete.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.actions.delete.tooltip',
            'placeholder' => 'content.actions.delete.tooltip',
            'helper_text' => 'content.actions.delete.tooltip',
            'description' => 'content.actions.delete.tooltip',
          ),
          'confirmation' => 
          array (
            'label' => 'content.actions.delete.confirmation',
            'placeholder' => 'content.actions.delete.confirmation',
            'helper_text' => 'content.actions.delete.confirmation',
            'description' => 'content.actions.delete.confirmation',
          ),
        ),
        'WorkgroupSeederAction' => 
        array (
          'label' => 
          array (
            'description' => 'content.actions.WorkgroupSeederAction.label',
          ),
        ),
      ),
      'filters' => 
      array (
        'date' => 
        array (
          'label' => 
          array (
            'label' => 'content.filters.date.label',
            'placeholder' => 'content.filters.date.label',
            'helper_text' => 'content.filters.date.label',
            'description' => 'content.filters.date.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.filters.date.tooltip',
            'placeholder' => 'content.filters.date.tooltip',
            'helper_text' => 'content.filters.date.tooltip',
            'description' => 'content.filters.date.tooltip',
          ),
        ),
        'type' => 
        array (
          'label' => 
          array (
            'label' => 'content.filters.type.label',
            'placeholder' => 'content.filters.type.label',
            'helper_text' => 'content.filters.type.label',
            'description' => 'content.filters.type.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.filters.type.tooltip',
            'placeholder' => 'content.filters.type.tooltip',
            'helper_text' => 'content.filters.type.tooltip',
            'description' => 'content.filters.type.tooltip',
          ),
        ),
      ),
      'state_transition' => 
      array (
        'missing_data' => 
        array (
          'description' => 'content.state_transition.missing_data',
          'helper_text' => 'content.state_transition.missing_data',
        ),
      ),
      'specialties' => 
      array (
        'empty' => 
        array (
          'description' => 'content.specialties.empty',
          'helper_text' => 'content.specialties.empty',
          'placeholder' => 'content.specialties.empty',
        ),
      ),
      'delete' => 
      array (
        'tooltip' => 
        array (
          'description' => 'content.delete.tooltip',
          'helper_text' => 'content.delete.tooltip',
          'placeholder' => 'content.delete.tooltip',
          'label' => 'content.delete.tooltip',
        ),
        'label' => 
        array (
          'description' => 'content.delete.label',
          'helper_text' => 'content.delete.label',
          'placeholder' => 'content.delete.label',
          'label' => 'content.delete.label',
        ),
      ),
      'studio_email' => 
      array (
        'description' => 
        array (
          'description' => 'content.studio_email.description',
        ),
      ),
      'enums' => 
      array (
        'appointment_type_descriptions' => 
        array (
          'prevention' => 
          array (
            'description' => 'content.enums.appointment_type_descriptions.prevention',
          ),
        ),
      ),
      'notifications' => 
      array (
        'account_reinstated' => 
        array (
          'description' => 'content.notifications.account_reinstated',
        ),
      ),
      'studios' => 
      array (
        'actions' => 
        array (
          'view' => 
          array (
            'description' => 'content.studios.actions.view',
          ),
        ),
      ),
      'stats' => 
      array (
        'no_show_rate' => 
        array (
          'description' => 'content.stats.no_show_rate',
        ),
      ),
      'status' => 
      array (
        'critical' => 
        array (
          'description' => 'content.status.critical',
        ),
      ),
      'resources' => 
      array (
        'liquidazione' => 
        array (
          'fields' => 
          array (
            'stato' => 
            array (
              'options' => 
              array (
                'annullata' => 
                array (
                  'description' => 'content.resources.liquidazione.fields.stato.options.annullata',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'actions' => 
  array (
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'activeLocale' => 
    array (
      'label' => 'activeLocale',
    ),
    'lang' => 
    array (
      'label' => 'lang',
    ),
  ),
);
>>>>>>> 7f8122e (.)
