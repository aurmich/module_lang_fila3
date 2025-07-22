<?php

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
