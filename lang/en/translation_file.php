<?php

declare(strict_types=1);

return [
    'navigation' => [
        'label' => 'Translation Management',
        'group' => 'Settings',
        'icon' => 'heroicon-o-language',
        'sort' => 73,
    ],
<<<<<<< HEAD
    'model' => [
        'label' => 'Translation File',
    ],
    'fields' => [
        'key' => [
            'label' => 'Translation Key',
            'placeholder' => 'Enter the unique translation key',
            'help' => 'This key identifies the string to be translated.',
        ],
        'value' => [
            'label' => 'Translation Value',
            'placeholder' => 'Enter the translated text',
            'help' => 'The actual text that will be shown to users.',
        ],
        'locale' => [
            'label' => 'Language',
            'placeholder' => 'Select the language',
            'help' => 'Choose the language for this translation.',
        ],
        'group' => [
            'label' => 'Group',
            'placeholder' => 'Enter the translation group',
            'help' => 'Group translations for better organization.',
        ],
        'namespace' => [
            'label' => 'Namespace',
            'placeholder' => 'Enter the namespace',
            'help' => 'Namespace for modular translation management.',
        ],
        'file' => [
            'label' => 'File',
            'placeholder' => 'Enter the file name',
            'help' => 'The PHP file where this translation is stored.',
        ],
        'status' => [
            'label' => 'Status',
            'placeholder' => 'Select the status',
            'help' => 'Indicates if the translation is active or pending.',
        ],
        'updated_at' => [
            'label' => 'Last Updated',
            'placeholder' => 'Date of last update',
            'help' => 'The date and time when this translation was last modified.',
        ],
        'created_at' => [
            'label' => 'Created At',
            'placeholder' => 'Date of creation',
            'help' => 'The date and time when this translation was created.',
        ],
    ],
    'actions' => [
        'save' => [
            'label' => 'Save Translation',
            'success' => 'Translation saved successfully.',
            'error' => 'An error occurred while saving the translation.',
            'confirmation' => 'Are you sure you want to save this translation?',
        ],
        'delete' => [
            'label' => 'Delete Translation',
            'success' => 'Translation deleted successfully.',
            'error' => 'An error occurred while deleting the translation.',
            'confirmation' => 'Are you sure you want to delete this translation? This action cannot be undone.',
        ],
        'edit' => [
            'label' => 'Edit Translation',
            'success' => 'Translation updated successfully.',
            'error' => 'An error occurred while updating the translation.',
            'confirmation' => 'Are you sure you want to update this translation?',
        ],
        'import' => [
            'label' => 'Import Translations',
            'success' => 'Translations imported successfully.',
            'error' => 'An error occurred during import.',
            'confirmation' => 'Are you sure you want to import translations? Existing entries may be overwritten.',
        ],
        'export' => [
            'label' => 'Export Translations',
            'success' => 'Translations exported successfully.',
            'error' => 'An error occurred during export.',
            'confirmation' => 'Are you sure you want to export translations?',
        ],
        'toggle_columns' => [
            'label' => 'Show/Hide Columns',
            'help' => 'Select which columns to display in the table.',
        ],
    ],
    'messages' => [
        'no_translations' => 'No translations found for the selected criteria.',
        'import_success' => 'All translations have been imported successfully.',
        'import_error' => 'Some translations could not be imported. Please check the file and try again.',
        'export_success' => 'All translations have been exported successfully.',
        'export_error' => 'An error occurred during export. Please try again.',
        'delete_success' => 'The translation has been deleted.',
        'delete_error' => 'Unable to delete the translation. Please try again.',
        'save_success' => 'The translation has been saved.',
        'save_error' => 'Unable to save the translation. Please try again.',
        'update_success' => 'The translation has been updated.',
        'update_error' => 'Unable to update the translation. Please try again.',
    ],
    'validation' => [
        'key_required' => 'The translation key is required.',
        'value_required' => 'The translation value is required.',
        'locale_required' => 'The language selection is required.',
        'file_required' => 'The file name is required.',
        'group_required' => 'The group is required.',
        'namespace_required' => 'The namespace is required.',
        'unique_key' => 'This translation key already exists in the selected file and language.',
=======
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
>>>>>>> 7f8122e (.)
    ],
];
