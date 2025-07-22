<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Übersetzungsverwaltung',
        'group' => 'Einstellungen',
        'icon' => 'heroicon-o-language',
        'sort' => 73,
    ],
    'fields' => [
        'key' => [
            'label' => 'Schlüssel',
            'placeholder' => 'Übersetzungsschlüssel eingeben',
            'help' => 'Eindeutiger Bezeichner für die zu übersetzende Zeichenkette',
        ],
        'value' => [
            'label' => 'Wert',
            'placeholder' => 'Übersetzung eingeben',
            'help' => 'Übersetzter Text für den ausgewählten Schlüssel',
        ],
    ],
    'actions' => [
        'create' => [
            'label' => 'Übersetzung erstellen',
            'success' => 'Übersetzung erfolgreich erstellt',
            'error' => 'Fehler beim Erstellen der Übersetzung',
        ],
        'edit' => [
            'label' => 'Übersetzung bearbeiten',
            'success' => 'Übersetzung erfolgreich aktualisiert',
            'error' => 'Fehler beim Aktualisieren der Übersetzung',
        ],
    ],
    'messages' => [
        'created' => 'Übersetzung hinzugefügt',
        'updated' => 'Übersetzung aktualisiert',
        'deleted' => 'Übersetzung gelöscht',
    ],
    'validation' => [
        'key_required' => 'Schlüssel ist erforderlich',
        'value_required' => 'Wert ist erforderlich',
    ],
];


=======
return [
    'actions' => [
        'create' => [
            'label' => 'create',
        ],
        'lang' => [
            'label' => 'lang',
        ],
    ],
    'fields' => [
        'edit' => [
            'label' => 'edit',
        ],
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'resetFilters' => [
            'label' => 'resetFilters',
        ],
        'content' => [
            'description' => 'content',
            'helper_text' => 'content',
            'placeholder' => 'content',
        ],
        'applyFilters' => [
            'label' => 'applyFilters',
        ],
        'snapshots' => [
            'fields' => [
                'updated_at' => [
                    'help' => [
                        'description' => 'snapshots.fields.updated_at.help',
                        'helper_text' => 'snapshots.fields.updated_at.help',
                        'placeholder' => 'snapshots.fields.updated_at.help',
                        'label' => 'snapshots.fields.updated_at.help',
                    ],
                    'label' => [
                        'description' => 'snapshots.fields.updated_at.label',
                        'helper_text' => 'snapshots.fields.updated_at.label',
                        'placeholder' => 'snapshots.fields.updated_at.label',
                    ],
                ],
            ],
        ],
        'openFilters' => [
            'label' => 'openFilters',
        ],
        'key' => [
            'label' => 'key',
        ],
    ],
    'navigation' => [
        'label' => 'translation file.navigation',
        'sort' => '73',
        'icon' => 'translation file.navigation',
        'group' => 'translation file.navigation',
    ],
    'model' => [
        'label' => 'translation file.model',
    ],
];
>>>>>>> e3660f5 (.)
