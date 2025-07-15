<?php

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


