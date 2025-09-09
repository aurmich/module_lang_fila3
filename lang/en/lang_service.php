<?php

declare(strict_types=1);

return [
    'fields' => [
        'language' => [
            'label' => 'Language',
            'placeholder' => 'Select language',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
            'helper_text' => 'Currently selected interface language',
        ],
        'available_languages' => [
            'label' => 'Available Languages',
            'placeholder' => 'Available languages list',
            'helper_text' => 'Languages available for interface selection',
        ],
        'value' => [
            'label' => 'Value',
            'placeholder' => 'Enter value',
            'helper_text' => 'Translation value',
        ],
        'key' => [
            'label' => 'Key',
            'placeholder' => 'Enter translation key',
            'helper_text' => 'Unique identifier for the translation',
        ],
        'locale' => [
            'label' => 'Locale',
            'placeholder' => 'Select locale',
            'helper_text' => 'Language locale code (e.g. it, en, de)',
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'help' => 'Currently selected interface language',
        ],
        'available_languages' => [
            'label' => 'Available Languages',
            'placeholder' => 'List of languages',
            'help' => 'Languages available for selection',
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
        ],
    ],
    'actions' => [
        'change_language' => [
            'label' => 'Change Language',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
            'tooltip' => 'Change interface language',
            'success' => 'Language changed successfully',
            'error' => 'Error changing language',
            'confirmation' => 'Are you sure you want to change the language?',
        ],
        'cancel' => [
            'label' => 'Cancel',
            'tooltip' => 'Cancel current operation',
        ],
        'save' => [
            'label' => 'Save',
            'tooltip' => 'Save changes',
            'success' => 'Changes saved successfully',
            'error' => 'Error saving changes',
        ],
        'create' => [
            'label' => 'Create Translation',
            'tooltip' => 'Create a new translation',
            'success' => 'Translation created successfully',
            'error' => 'Error creating translation',
        ],
        'edit' => [
            'label' => 'Edit',
            'tooltip' => 'Edit selected translation',
            'success' => 'Translation updated successfully',
            'error' => 'Error updating translation',
        ],
        'delete' => [
            'label' => 'Delete',
            'tooltip' => 'Delete selected translation',
            'success' => 'Translation deleted successfully',
            'error' => 'Error deleting translation',
            'confirmation' => 'Are you sure you want to delete this translation?',
<<<<<<< HEAD
<<<<<<< HEAD
=======
            'success' => 'Language changed successfully',
            'error' => 'Error changing language',
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
        ],
    ],
    'messages' => [
        'language_changed' => 'Language changed successfully',
        'error' => 'An error occurred while changing language',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
        'no_translations' => 'No translations found',
        'loading' => 'Loading translations...',
        'empty_state' => 'No translations available',
        'search_placeholder' => 'Search translations...',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    ],
    'validation' => [
        'language_required' => 'Language is required',
        'language_valid' => 'Selected language is not valid',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
        'key_required' => 'Translation key is required',
        'key_unique' => 'This translation key already exists',
        'value_required' => 'Translation value is required',
        'locale_required' => 'Locale is required',
        'locale_valid' => 'Locale format is not valid',
    ],
    'navigation' => [
        'label' => 'Language Service',
        'group' => 'Localization',
        'icon' => 'heroicon-o-language',
    ],
    'page' => [
        'title' => 'Translation Management',
        'heading' => 'Language Service',
        'description' => 'Manage translations and available languages in the system',
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 8da72fe (.)
=======
>>>>>>> 3b02f37 (.)
=======
>>>>>>> 1e3d805 (.)
    ],
];
