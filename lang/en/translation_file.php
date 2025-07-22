<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Translation Management',
        'group' => 'Settings',
        'icon' => 'heroicon-o-language',
        'sort' => 73,
    ],
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
>>>>>>> e3660f5 (.)
        ],
    ],
    'actions' => [
        'create' => [
<<<<<<< HEAD
            'label' => 'Create Translation',
            'success' => 'Translation created successfully',
            'error' => 'Error creating translation',
        ],
        'edit' => [
            'label' => 'Edit Translation',
            'success' => 'Translation updated successfully',
            'error' => 'Error updating translation',
        ],
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
=======
            'label' => 'create',
        ],
        'lang' => [
            'label' => 'lang',
        ],
    ],
>>>>>>> e3660f5 (.)
];
