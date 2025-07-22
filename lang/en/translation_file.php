<?php

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 637747f (.)
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Translation Management',
        'group' => 'Settings',
        'icon' => 'heroicon-o-language',
        'sort' => 73,
    ],
<<<<<<< HEAD
=======
    'model' => [
        'label' => 'Translation File',
    ],
>>>>>>> 637747f (.)
    'fields' => [
        'key' => [
            'label' => 'Key',
            'placeholder' => 'Enter translation key',
            'help' => 'Unique identifier for the string to translate',
        ],
        'value' => [
            'label' => 'Value',
            'placeholder' => 'Enter translation',
            'help' => 'Translated text for the selected key',
<<<<<<< HEAD
=======
return [
    'model' => [
        'label' => 'translation file.model',
    ],
    'navigation' => [
        'label' => 'translation file.navigation',
        'group' => 'translation file.navigation',
        'icon' => 'translation file.navigation',
        'sort' => '23',
    ],
    'fields' => [
        'toggleColumns' => [
            'label' => 'toggleColumns',
        ],
        'reorderRecords' => [
            'label' => 'reorderRecords',
        ],
        'edit' => [
            'label' => 'edit',
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
=======
        ],
        'toggleColumns' => [
            'label' => 'Toggle Columns',
        ],
        'reorderRecords' => [
            'label' => 'Reorder Records',
        ],
        'edit' => [
            'label' => 'Edit',
        ],
        'resetFilters' => [
            'label' => 'Reset Filters',
        ],
        'content' => [
            'description' => 'Content',
            'helper_text' => 'Content field help',
            'placeholder' => 'Enter content',
        ],
        'applyFilters' => [
            'label' => 'Apply Filters',
>>>>>>> 637747f (.)
        ],
        'snapshots' => [
            'fields' => [
                'updated_at' => [
                    'help' => [
<<<<<<< HEAD
                        'description' => 'snapshots.fields.updated_at.help',
                        'helper_text' => 'snapshots.fields.updated_at.help',
                        'placeholder' => 'snapshots.fields.updated_at.help',
                        'label' => 'snapshots.fields.updated_at.help',
                    ],
                    'label' => [
                        'description' => 'snapshots.fields.updated_at.label',
                        'helper_text' => 'snapshots.fields.updated_at.label',
                        'placeholder' => 'snapshots.fields.updated_at.label',
=======
                        'description' => 'Help for updated at',
                        'helper_text' => 'Help for updated at',
                        'placeholder' => 'Help for updated at',
                        'label' => 'Help for updated at',
                    ],
                    'label' => [
                        'description' => 'Label for updated at',
                        'helper_text' => 'Label for updated at',
                        'placeholder' => 'Label for updated at',
>>>>>>> 637747f (.)
                    ],
                ],
            ],
        ],
        'openFilters' => [
<<<<<<< HEAD
            'label' => 'openFilters',
        ],
        'key' => [
            'label' => 'key',
>>>>>>> e3660f5 (.)
=======
            'label' => 'Open Filters',
>>>>>>> 637747f (.)
        ],
    ],
    'actions' => [
        'create' => [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 637747f (.)
            'label' => 'Create Translation',
            'success' => 'Translation created successfully',
            'error' => 'Error creating translation',
        ],
        'edit' => [
            'label' => 'Edit Translation',
            'success' => 'Translation updated successfully',
            'error' => 'Error updating translation',
        ],
<<<<<<< HEAD
=======
        'lang' => [
            'label' => 'Language',
        ],
>>>>>>> 637747f (.)
    ],
    'messages' => [
        'created' => 'Translation added',
        'updated' => 'Translation updated',
        'deleted' => 'Translation deleted',
    ],
    'validation' => [
        'key_required' => 'Key is required',
        'value_required' => 'Value is required',
    ],
<<<<<<< HEAD
=======
            'label' => 'create',
        ],
        'lang' => [
            'label' => 'lang',
        ],
    ],
>>>>>>> e3660f5 (.)
=======
>>>>>>> 637747f (.)
];
