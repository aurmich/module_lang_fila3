<?php

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
        ],
    ],
    'actions' => [
        'create' => [
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
];
