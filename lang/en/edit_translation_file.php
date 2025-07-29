<?php

<<<<<<< HEAD
declare(strict_types=1);

return [
    'fields' => [
        'content' => [
            'navigation' => [
                'name' => [
                    'label' => 'Navigation Name',
                    'placeholder' => 'Enter the navigation name',
                    'helper_text' => 'Name of the navigation section',
                    'description' => 'The name displayed in the navigation menu',
                ],
                'plural' => [
                    'label' => 'Navigation Plural',
                    'placeholder' => 'Enter the plural form',
                    'helper_text' => 'Plural form for navigation',
                    'description' => 'Used for lists or multiple items',
                ],
                'group' => [
                    'name' => [
                        'label' => 'Navigation Group Name',
                        'placeholder' => 'Enter the group name',
                        'helper_text' => 'Name of the navigation group',
                        'description' => 'Group label for navigation sections',
                    ],
                    'description' => [
                        'label' => 'Group Description',
                        'placeholder' => 'Enter group description',
                        'helper_text' => 'Description for the group',
                        'description' => 'Additional info about the group',
                    ],
                    'label' => 'Navigation Group',
                    'placeholder' => 'Enter navigation group',
                    'helper_text' => 'Group for organizing navigation',
                ],
                'label' => [
                    'label' => 'Navigation Label',
                    'placeholder' => 'Enter navigation label',
                    'helper_text' => 'Label for the navigation item',
                    'description' => 'Displayed label in the navigation',
                ],
                'sort' => [
                    'label' => 'Sort Order',
                    'placeholder' => 'Enter sort order',
                    'helper_text' => 'Order in which the item appears',
                    'description' => 'Defines the position in the menu',
                ],
                'icon' => [
                    'label' => 'Navigation Icon',
                    'placeholder' => 'Select an icon',
                    'helper_text' => 'Icon for the navigation item',
                    'description' => 'Visual icon shown in the menu',
                ],
                'color' => [
                    'label' => 'Navigation Color',
                    'placeholder' => 'Select a color',
                    'helper_text' => 'Color for the navigation item',
                    'description' => 'Used for highlighting or grouping',
                ],
                'tooltip' => [
                    'label' => 'Navigation Tooltip',
                    'placeholder' => 'Enter tooltip text',
                    'helper_text' => 'Tooltip shown on hover',
                    'description' => 'Additional info shown as tooltip',
                ],
            ],
            'fields' => [
                'level' => [
                    'label' => [
                        'label' => 'Content Level',
                        'placeholder' => 'Enter content level',
                        'helper_text' => 'Level of the content',
                        'description' => 'Defines the severity or importance of the content',
                    ],
                    'emergency' => [
                        'label' => 'Emergency',
                        'placeholder' => 'Enter emergency level',
                        'helper_text' => 'Highest level of urgency',
                        'description' => 'Indicates a critical situation',
                    ],
                    'alert' => [
                        'label' => 'Alert',
                        'placeholder' => 'Enter alert level',
                        'helper_text' => 'Moderate level of urgency',
                        'description' => 'Indicates a situation that requires attention',
                    ],
                    'critical' => [
                        'label' => 'Critical',
                        'placeholder' => 'Enter critical level',
                        'helper_text' => 'High level of urgency',
                        'description' => 'Indicates a serious situation',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Enter error level',
                        'helper_text' => 'Medium level of urgency',
                        'description' => 'Indicates a problem that needs attention',
                    ],
                    'warning' => [
                        'label' => 'Warning',
                        'placeholder' => 'Enter warning level',
                        'helper_text' => 'Low level of urgency',
                        'description' => 'Indicates a potential issue',
                    ],
                    'notice' => [
                        'label' => 'Notice',
                        'placeholder' => 'Enter notice level',
                        'helper_text' => 'Lowest level of urgency',
                        'description' => 'Informational message',
                    ],
                    'info' => [
                        'label' => 'Info',
                        'placeholder' => 'Enter info level',
                        'helper_text' => 'Lowest level of urgency',
                        'description' => 'General information',
                    ],
                    'debug' => [
                        'label' => 'Debug',
                        'placeholder' => 'Enter debug level',
                        'helper_text' => 'Lowest level of urgency',
                        'description' => 'Detailed information for debugging',
                    ],
                ],
                'message' => [
                    'label' => 'Message',
                    'placeholder' => 'Enter message',
                    'helper_text' => 'Description of the content',
                    'description' => 'Details about the content',
                ],
                'context' => [
                    'label' => [
                        'label' => 'Context',
                        'placeholder' => 'Enter context',
                        'helper_text' => 'Additional details about the content',
                        'description' => 'Details about the situation or environment',
                    ],
                    'exception' => [
                        'label' => 'Exception',
                        'placeholder' => 'Enter exception',
                        'helper_text' => 'Description of the exception',
                        'description' => 'Details about the error or exception',
                    ],
                    'stack_trace' => [
                        'label' => 'Stack Trace',
                        'placeholder' => 'Enter stack trace',
                        'helper_text' => 'Description of the stack trace',
                        'description' => 'Details about the call stack',
                    ],
                    'additional' => [
                        'label' => 'Additional Details',
                        'placeholder' => 'Enter additional details',
                        'helper_text' => 'Additional information',
                        'description' => 'Any extra information',
                    ],
                ],
                'channel' => [
                    'label' => [
                        'label' => 'Channel',
                        'placeholder' => 'Enter channel',
                        'helper_text' => 'The channel the content is related to',
                        'description' => 'The system or application where the content is generated',
                    ],
                    'system' => [
                        'label' => 'System',
                        'placeholder' => 'Enter system',
                        'helper_text' => 'The system name',
                        'description' => 'The name of the system',
                    ],
                    'application' => [
                        'label' => 'Application',
                        'placeholder' => 'Enter application',
                        'helper_text' => 'The application name',
                        'description' => 'The name of the application',
                    ],
                    'security' => [
                        'label' => 'Security',
                        'placeholder' => 'Enter security',
                        'helper_text' => 'The security context',
                        'description' => 'The security implications of the content',
                    ],
                    'database' => [
                        'label' => 'Database',
                        'placeholder' => 'Enter database',
                        'helper_text' => 'The database name',
                        'description' => 'The name of the database',
                    ],
                    'queue' => [
                        'label' => 'Queue',
                        'placeholder' => 'Enter queue',
                        'helper_text' => 'The queue name',
                        'description' => 'The name of the queue',
                    ],
                ],
                'datetime' => [
                    'label' => 'Date and Time',
                    'placeholder' => 'Enter date and time',
                    'helper_text' => 'The date and time the content was created',
                    'description' => 'The timestamp of the content',
                ],
                'environment' => [
                    'label' => 'Environment',
                    'placeholder' => 'Enter environment',
                    'helper_text' => 'The environment the content is related to',
                    'description' => 'The environment where the content is generated',
                ],
                'id' => [
                    'label' => [
                        'label' => 'ID',
                        'placeholder' => 'Enter ID',
                        'helper_text' => 'The unique identifier',
                        'description' => 'The unique identifier for the content',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about the content',
                    ],
                ],
                'description' => [
                    'label' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Additional details about the content',
                        'description' => 'Any extra information about the content',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about the content',
                    ],
                ],
                'subject_type' => [
                    'label' => [
                        'label' => 'Subject Type',
                        'placeholder' => 'Enter subject type',
                        'helper_text' => 'The type of the subject',
                        'description' => 'The type of the entity the content is about',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about the subject',
                    ],
                ],
                'subject_id' => [
                    'label' => [
                        'label' => 'Subject ID',
                        'placeholder' => 'Enter subject ID',
                        'helper_text' => 'The ID of the subject',
                        'description' => 'The unique identifier of the entity the content is about',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about the subject',
                    ],
                ],
                'causer_type' => [
                    'label' => [
                        'label' => 'Causer Type',
                        'placeholder' => 'Enter causer type',
                        'helper_text' => 'The type of the causer',
                        'description' => 'The type of the entity causing the content',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about the causer',
                    ],
                ],
                'causer_id' => [
                    'label' => [
                        'label' => 'Causer ID',
                        'placeholder' => 'Enter causer ID',
                        'helper_text' => 'The ID of the causer',
                        'description' => 'The unique identifier of the entity causing the content',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about the causer',
                    ],
                ],
                'created_at' => [
                    'label' => [
                        'label' => 'Created At',
                        'placeholder' => 'Enter created at',
                        'helper_text' => 'The date and time the content was created',
                        'description' => 'The timestamp of when the content was created',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about when the content was created',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'title' => [
                    'label' => [
                        'label' => 'Title',
                        'placeholder' => 'Enter title',
                        'helper_text' => 'The title of the content',
                        'description' => 'The main heading of the content',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'patient_id' => [
                    'label' => [
                        'label' => 'Patient ID',
                        'placeholder' => 'Enter patient ID',
                        'helper_text' => 'The ID of the patient',
                        'description' => 'The unique identifier of the patient',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'doctor_id' => [
                    'label' => [
                        'label' => 'Doctor ID',
                        'placeholder' => 'Enter doctor ID',
                        'helper_text' => 'The ID of the doctor',
                        'description' => 'The unique identifier of the doctor',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'dentist_id' => [
                    'label' => [
                        'label' => 'Dentist ID',
                        'placeholder' => 'Enter dentist ID',
                        'helper_text' => 'The ID of the dentist',
                        'description' => 'The unique identifier of the dentist',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'studio_id' => [
                    'label' => [
                        'label' => 'Studio ID',
                        'placeholder' => 'Enter studio ID',
                        'helper_text' => 'The ID of the studio',
                        'description' => 'The unique identifier of the studio',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'start_time' => [
                    'label' => [
                        'label' => 'Start Time',
                        'placeholder' => 'Enter start time',
                        'helper_text' => 'The start time of the content',
                        'description' => 'The time the content starts',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'end_time' => [
                    'label' => [
                        'label' => 'End Time',
                        'placeholder' => 'Enter end time',
                        'helper_text' => 'The end time of the content',
                        'description' => 'The time the content ends',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'treatment_id' => [
                    'label' => [
                        'label' => 'Treatment ID',
                        'placeholder' => 'Enter treatment ID',
                        'helper_text' => 'The ID of the treatment',
                        'description' => 'The unique identifier of the treatment',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'status' => [
                    'label' => [
                        'label' => 'Status',
                        'placeholder' => 'Enter status',
                        'helper_text' => 'The current status of the content',
                        'description' => 'The current state of the content',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                    'options' => [
                        'scheduled' => [
                            'label' => 'Scheduled',
                            'placeholder' => 'Enter scheduled status',
                            'helper_text' => 'The content is scheduled',
                            'description' => 'The content is planned to be published at a specific time',
                        ],
                        'confirmed' => [
                            'label' => 'Confirmed',
                            'placeholder' => 'Enter confirmed status',
                            'helper_text' => 'The content is confirmed',
                            'description' => 'The content has been approved and is ready to be published',
                        ],
                        'completed' => [
                            'label' => 'Completed',
                            'placeholder' => 'Enter completed status',
                            'helper_text' => 'The content is completed',
                            'description' => 'The content has been successfully published',
                        ],
                        'cancelled' => [
                            'label' => 'Cancelled',
                            'placeholder' => 'Enter cancelled status',
                            'helper_text' => 'The content is cancelled',
                            'description' => 'The content has been cancelled and will not be published',
                        ],
                        'no_show' => [
                            'label' => 'No Show',
                            'placeholder' => 'Enter no show status',
                            'helper_text' => 'The content is a no show',
                            'description' => 'The content is not published due to a no show',
                        ],
                    ],
                ],
                'type' => [
                    'label' => [
                        'label' => 'Type',
                        'placeholder' => 'Enter type',
                        'helper_text' => 'The type of the content',
                        'description' => 'The category or classification of the content',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                    'options' => [
                        'consultation' => [
                            'label' => 'Consultation',
                            'placeholder' => 'Enter consultation type',
                            'helper_text' => 'The content is a consultation',
                            'description' => 'The content is related to a consultation',
                        ],
                        'follow_up' => [
                            'label' => 'Follow Up',
                            'placeholder' => 'Enter follow up type',
                            'helper_text' => 'The content is a follow up',
                            'description' => 'The content is related to a follow up',
                        ],
                        'treatment' => [
                            'label' => 'Treatment',
                            'placeholder' => 'Enter treatment type',
                            'helper_text' => 'The content is a treatment',
                            'description' => 'The content is related to a treatment',
                        ],
                        'surgery' => [
                            'label' => 'Surgery',
                            'placeholder' => 'Enter surgery type',
                            'helper_text' => 'The content is a surgery',
                            'description' => 'The content is related to a surgery',
                        ],
                        'emergency' => [
                            'label' => 'Emergency',
                            'placeholder' => 'Enter emergency type',
                            'helper_text' => 'The content is an emergency',
                            'description' => 'The content is related to an emergency',
                        ],
                    ],
                ],
                'notes' => [
                    'label' => [
                        'label' => 'Notes',
                        'placeholder' => 'Enter notes',
                        'helper_text' => 'Additional notes about the content',
                        'description' => 'Any extra information about the content',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'reason' => [
                    'label' => [
                        'label' => 'Reason',
                        'placeholder' => 'Enter reason',
                        'helper_text' => 'The reason for the content',
                        'description' => 'The reason the content was created',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'emergency' => [
                    'label' => [
                        'label' => 'Emergency',
                        'placeholder' => 'Enter emergency',
                        'helper_text' => 'The emergency level',
                        'description' => 'The level of urgency',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
                'eligibility_confirmed' => [
                    'label' => [
                        'label' => 'Eligibility Confirmed',
                        'placeholder' => 'Enter eligibility confirmed',
                        'helper_text' => 'The eligibility confirmation status',
                        'description' => 'The status of eligibility confirmation',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter placeholder text',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the input field',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The help text for the input field',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the input field',
                        'description' => 'The helper text for the input field',
                    ],
                ],
            ],
            'filters' => [
                'level' => [
                    'label' => 'Content Level',
                    'placeholder' => 'Enter content level',
                    'helper_text' => 'Level of the content',
                    'description' => 'Defines the severity or importance of the content',
                ],
                'channel' => [
                    'label' => 'Channel',
                    'placeholder' => 'Enter channel',
                    'helper_text' => 'The channel the content is related to',
                    'description' => 'The system or application where the content is generated',
                ],
                'date_range' => [
                    'label' => 'Date Range',
                    'placeholder' => 'Enter date range',
                    'helper_text' => 'The start and end dates of the content',
                    'description' => 'The range of dates the content is relevant',
                ],
                'environment' => [
                    'label' => 'Environment',
                    'placeholder' => 'Enter environment',
                    'helper_text' => 'The environment the content is related to',
                    'description' => 'The environment where the content is generated',
                ],
                'search' => [
                    'label' => 'Search',
                    'placeholder' => 'Enter search term',
                    'helper_text' => 'Search for content',
                    'description' => 'Search for specific content',
                ],
                'type' => [
                    'tooltip' => [
                        'description' => 'Tooltip for content type',
                        'helper_text' => 'Additional info about content type',
                        'label' => 'Content Type',
                        'placeholder' => 'Enter content type',
                    ],
                    'label' => [
                        'label' => 'Content Type',
                        'placeholder' => 'Enter content type',
                        'helper_text' => 'The category or classification of the content',
                        'description' => 'The type of content',
                    ],
                ],
                'date' => [
                    'label' => [
                        'label' => 'Date',
                        'placeholder' => 'Enter date',
                        'helper_text' => 'The date the content was created',
                        'description' => 'The date the content was published',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about the date',
                    ],
                ],
                'today' => [
                    'label' => [
                        'label' => 'Today',
                        'placeholder' => 'Today',
                        'helper_text' => 'Today',
                        'description' => 'The current date',
                    ],
                    'description' => [
                        'label' => 'Today',
                        'placeholder' => 'Today',
                        'helper_text' => 'Today',
                        'description' => 'The current date',
                    ],
                ],
                'upcoming' => [
                    'label' => [
                        'label' => 'Upcoming',
                        'placeholder' => 'Upcoming',
                        'helper_text' => 'Upcoming',
                        'description' => 'Content scheduled for the future',
                    ],
                    'description' => [
                        'label' => 'Upcoming',
                        'placeholder' => 'Upcoming',
                        'helper_text' => 'Upcoming',
                        'description' => 'Content scheduled for the future',
                    ],
                ],
                'past' => [
                    'label' => [
                        'label' => 'Past',
                        'placeholder' => 'Past',
                        'helper_text' => 'Past',
                        'description' => 'Content published in the past',
                    ],
                    'description' => [
                        'label' => 'Past',
                        'placeholder' => 'Past',
                        'helper_text' => 'Past',
                        'description' => 'Content published in the past',
                    ],
                ],
                'by_status' => [
                    'label' => [
                        'label' => 'By Status',
                        'placeholder' => 'By status',
                        'helper_text' => 'Filter by status',
                        'description' => 'Filter content by status',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter status',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the status filter',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the status filter',
                        'description' => 'Details about filtering content by status',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the status filter',
                        'description' => 'The helper text for the status filter',
                    ],
                ],
                'by_doctor' => [
                    'label' => [
                        'label' => 'By Doctor',
                        'placeholder' => 'By doctor',
                        'helper_text' => 'Filter by doctor',
                        'description' => 'Filter content by doctor',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter doctor ID',
                        'helper_text' => 'Text to be displayed when no value is entered',
                        'description' => 'The placeholder text for the doctor filter',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the doctor filter',
                        'description' => 'Details about filtering content by doctor',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the doctor filter',
                        'description' => 'The helper text for the doctor filter',
                    ],
                ],
                'by_date_range' => [
                    'label' => [
                        'label' => 'By Date Range',
                        'placeholder' => 'By date range',
                        'helper_text' => 'The start and end dates of the content',
                        'description' => 'The range of dates the content is relevant',
                    ],
                    'placeholder' => [
                        'label' => 'Placeholder',
                        'placeholder' => 'Enter start date',
                        'helper_text' => 'Enter start date',
                        'description' => 'The start date of the date range',
                    ],
                    'help' => [
                        'label' => 'Help',
                        'placeholder' => 'Enter help text',
                        'helper_text' => 'Additional information about the date range',
                        'description' => 'Details about the date range',
                    ],
                    'helper_text' => [
                        'label' => 'Helper Text',
                        'placeholder' => 'Enter helper text',
                        'helper_text' => 'Additional information about the date range',
                        'description' => 'The helper text for the date range',
                    ],
                ],
            ],
            'actions' => [
                'view_details' => [
                    'label' => 'View Details',
                    'placeholder' => 'View details',
                    'helper_text' => 'View the details of the content',
                    'description' => 'View the full details of the content',
                ],
                'download' => [
                    'label' => 'Download',
                    'placeholder' => 'Download',
                    'helper_text' => 'Download the content',
                    'description' => 'Download the content as a file',
                ],
                'clear' => [
                    'label' => 'Clear',
                    'placeholder' => 'Clear',
                    'helper_text' => 'Clear the content',
                    'description' => 'Clear the content from the list',
                ],
                'archive' => [
                    'label' => 'Archive',
                    'placeholder' => 'Archive',
                    'helper_text' => 'Archive the content',
                    'description' => 'Archive the content for future reference',
                ],
                'view' => [
                    'label' => [
                        'label' => 'View',
                        'placeholder' => 'View',
                        'helper_text' => 'View the content',
                        'description' => 'View the content',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about viewing the content',
                    ],
                    'modal_heading' => [
                        'label' => 'View Content',
                        'placeholder' => 'View Content',
                        'helper_text' => 'View the content',
                        'description' => 'View the content',
                    ],
                ],
                'delete' => [
                    'label' => [
                        'label' => 'Delete',
                        'placeholder' => 'Delete',
                        'helper_text' => 'Delete the content',
                        'description' => 'Delete the content from the list',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about deleting the content',
                    ],
                    'confirmation' => [
                        'label' => 'Confirmation',
                        'placeholder' => 'Confirm',
                        'helper_text' => 'Confirm the deletion',
                        'description' => 'Confirm the deletion of the content',
                    ],
                    'success' => [
                        'label' => 'Success',
                        'placeholder' => 'Success',
                        'helper_text' => 'Content deleted successfully',
                        'description' => 'The content has been successfully deleted',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Error',
                        'helper_text' => 'Failed to delete content',
                        'description' => 'An error occurred while deleting the content',
                    ],
                ],
                'create' => [
                    'label' => [
                        'label' => 'Create',
                        'placeholder' => 'Create',
                        'helper_text' => 'Create new content',
                        'description' => 'Create a new content item',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about creating content',
                    ],
                    'modal_heading' => [
                        'label' => 'Create Content',
                        'placeholder' => 'Create Content',
                        'helper_text' => 'Create new content',
                        'description' => 'Create a new content item',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the content',
                    ],
                    'success' => [
                        'label' => 'Success',
                        'placeholder' => 'Success',
                        'helper_text' => 'Content created successfully',
                        'description' => 'The content has been successfully created',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Error',
                        'helper_text' => 'Failed to create content',
                        'description' => 'An error occurred while creating the content',
                    ],
                ],
                'edit' => [
                    'label' => [
                        'label' => 'Edit',
                        'placeholder' => 'Edit',
                        'helper_text' => 'Edit the content',
                        'description' => 'Edit the existing content',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about editing the content',
                    ],
                    'modal_heading' => [
                        'label' => 'Edit Content',
                        'placeholder' => 'Edit Content',
                        'helper_text' => 'Edit the content',
                        'description' => 'Edit the existing content',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the content',
                    ],
                    'success' => [
                        'label' => 'Success',
                        'placeholder' => 'Success',
                        'helper_text' => 'Content updated successfully',
                        'description' => 'The content has been successfully updated',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Error',
                        'helper_text' => 'Failed to update content',
                        'description' => 'An error occurred while updating the content',
                    ],
                ],
                'confirm' => [
                    'label' => [
                        'label' => 'Confirm',
                        'placeholder' => 'Confirm',
                        'helper_text' => 'Confirm the content',
                        'description' => 'Confirm the existing content',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about confirming the content',
                    ],
                    'success' => [
                        'label' => 'Success',
                        'placeholder' => 'Success',
                        'helper_text' => 'Content confirmed successfully',
                        'description' => 'The content has been successfully confirmed',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Error',
                        'helper_text' => 'Failed to confirm content',
                        'description' => 'An error occurred while confirming the content',
                    ],
                ],
                'cancel' => [
                    'label' => [
                        'label' => 'Cancel',
                        'placeholder' => 'Cancel',
                        'helper_text' => 'Cancel the content',
                        'description' => 'Cancel the existing content',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about cancelling the content',
                    ],
                    'confirmation' => [
                        'label' => 'Confirmation',
                        'placeholder' => 'Confirm',
                        'helper_text' => 'Confirm the cancellation',
                        'description' => 'Confirm the cancellation of the content',
                    ],
                    'success' => [
                        'label' => 'Success',
                        'placeholder' => 'Success',
                        'helper_text' => 'Content cancelled successfully',
                        'description' => 'The content has been successfully cancelled',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Error',
                        'helper_text' => 'Failed to cancel content',
                        'description' => 'An error occurred while cancelling the content',
                    ],
                ],
                'reschedule' => [
                    'label' => [
                        'label' => 'Reschedule',
                        'placeholder' => 'Reschedule',
                        'helper_text' => 'Reschedule the content',
                        'description' => 'Reschedule the existing content',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about rescheduling the content',
                    ],
                    'modal_heading' => [
                        'label' => 'Reschedule Content',
                        'placeholder' => 'Reschedule Content',
                        'helper_text' => 'Reschedule the content',
                        'description' => 'Reschedule the existing content',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the rescheduled content',
                    ],
                    'success' => [
                        'label' => 'Success',
                        'placeholder' => 'Success',
                        'helper_text' => 'Content rescheduled successfully',
                        'description' => 'The content has been successfully rescheduled',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Error',
                        'helper_text' => 'Failed to reschedule content',
                        'description' => 'An error occurred while rescheduling the content',
                    ],
                ],
                'mark_completed' => [
                    'label' => [
                        'label' => 'Mark Completed',
                        'placeholder' => 'Mark Completed',
                        'helper_text' => 'Mark the content as completed',
                        'description' => 'Mark the existing content as completed',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about marking content as completed',
                    ],
                    'confirmation' => [
                        'label' => 'Confirmation',
                        'placeholder' => 'Confirm',
                        'helper_text' => 'Confirm marking completed',
                        'description' => 'Confirm the marking of the content as completed',
                    ],
                    'success' => [
                        'label' => 'Success',
                        'placeholder' => 'Success',
                        'helper_text' => 'Content marked as completed successfully',
                        'description' => 'The content has been successfully marked as completed',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Error',
                        'helper_text' => 'Failed to mark content as completed',
                        'description' => 'An error occurred while marking the content as completed',
                    ],
                ],
                'mark_no_show' => [
                    'label' => [
                        'label' => 'Mark No Show',
                        'placeholder' => 'Mark No Show',
                        'helper_text' => 'Mark the content as no show',
                        'description' => 'Mark the existing content as no show',
                    ],
                    'tooltip' => [
                        'label' => 'Tooltip',
                        'placeholder' => 'Enter tooltip text',
                        'helper_text' => 'Additional info shown as tooltip',
                        'description' => 'Additional information about marking content as no show',
                    ],
                    'confirmation' => [
                        'label' => 'Confirmation',
                        'placeholder' => 'Confirm',
                        'helper_text' => 'Confirm marking no show',
                        'description' => 'Confirm the marking of the content as no show',
                    ],
                    'success' => [
                        'label' => 'Success',
                        'placeholder' => 'Success',
                        'helper_text' => 'Content marked as no show successfully',
                        'description' => 'The content has been successfully marked as no show',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Error',
                        'helper_text' => 'Failed to mark content as no show',
                        'description' => 'An error occurred while marking the content as no show',
                    ],
                ],
                'legend' => [
                    'label' => [
                        'label' => 'Legend',
                        'placeholder' => 'Legend',
                        'helper_text' => 'Legend for actions',
                        'description' => 'Legend for the actions available',
                    ],
                    'modal_heading' => [
                        'label' => 'Legend',
                        'placeholder' => 'Legend',
                        'helper_text' => 'Legend for actions',
                        'description' => 'Legend for the actions available',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the legend',
                    ],
                ],
            ],
            'messages' => [
                'no_logs' => [
                    'label' => 'No Logs',
                    'placeholder' => 'No logs',
                    'helper_text' => 'No logs available',
                    'description' => 'No logs have been generated for this content',
                ],
                'cleared' => [
                    'label' => 'Cleared',
                    'placeholder' => 'Cleared',
                    'helper_text' => 'Content cleared',
                    'description' => 'The content has been cleared from the list',
                ],
                'archived' => [
                    'label' => 'Archived',
                    'placeholder' => 'Archived',
                    'helper_text' => 'Content archived',
                    'description' => 'The content has been archived for future reference',
                ],
                'downloaded' => [
                    'label' => 'Downloaded',
                    'placeholder' => 'Downloaded',
                    'helper_text' => 'Content downloaded',
                    'description' => 'The content has been downloaded as a file',
                ],
                'created' => [
                    'label' => 'Created',
                    'placeholder' => 'Created',
                    'helper_text' => 'Content created',
                    'description' => 'The content has been successfully created',
                ],
                'updated' => [
                    'label' => 'Updated',
                    'placeholder' => 'Updated',
                    'helper_text' => 'Content updated',
                    'description' => 'The content has been successfully updated',
                ],
                'deleted' => [
                    'label' => 'Deleted',
                    'placeholder' => 'Deleted',
                    'helper_text' => 'Content deleted',
                    'description' => 'The content has been successfully deleted',
                ],
                'confirmed' => [
                    'label' => 'Confirmed',
                    'placeholder' => 'Confirmed',
                    'helper_text' => 'Content confirmed',
                    'description' => 'The content has been successfully confirmed',
                ],
                'cancelled' => [
                    'label' => 'Cancelled',
                    'placeholder' => 'Cancelled',
                    'helper_text' => 'Content cancelled',
                    'description' => 'The content has been successfully cancelled',
                ],
                'completed' => [
                    'label' => 'Completed',
                    'placeholder' => 'Completed',
                    'helper_text' => 'Content completed',
                    'description' => 'The content has been successfully completed',
                ],
                'rescheduled' => [
                    'label' => 'Rescheduled',
                    'placeholder' => 'Rescheduled',
                    'helper_text' => 'Content rescheduled',
                    'description' => 'The content has been successfully rescheduled',
                ],
                'conflict' => [
                    'label' => 'Conflict',
                    'placeholder' => 'Conflict',
                    'helper_text' => 'Content conflict',
                    'description' => 'There is a conflict with the content',
                ],
                'unavailable_slot' => [
                    'label' => 'Unavailable Slot',
                    'placeholder' => 'Unavailable Slot',
                    'helper_text' => 'No available slot',
                    'description' => 'There is no available slot for the content',
                ],
                'past_date' => [
                    'label' => 'Past Date',
                    'placeholder' => 'Past Date',
                    'helper_text' => 'Content is past',
                    'description' => 'The content is no longer relevant',
                ],
                'unavailable' => [
                    'label' => 'Unavailable',
                    'placeholder' => 'Unavailable',
                    'helper_text' => 'Content unavailable',
                    'description' => 'The content is not available',
                ],
                'availability_created' => [
                    'label' => 'Availability Created',
                    'placeholder' => 'Availability Created',
                    'helper_text' => 'Availability created',
                    'description' => 'The availability for the content has been successfully created',
                ],
                'availability_updated' => [
                    'label' => 'Availability Updated',
                    'placeholder' => 'Availability Updated',
                    'helper_text' => 'Availability updated',
                    'description' => 'The availability for the content has been successfully updated',
                ],
                'availability_deleted' => [
                    'label' => 'Availability Deleted',
                    'placeholder' => 'Availability Deleted',
                    'helper_text' => 'Availability deleted',
                    'description' => 'The availability for the content has been successfully deleted',
                ],
                'appointment_updated' => [
                    'label' => 'Appointment Updated',
                    'placeholder' => 'Appointment Updated',
                    'helper_text' => 'Appointment updated',
                    'description' => 'The appointment for the content has been successfully updated',
                ],
                'error_booking_appointment' => [
                    'description' => 'Error booking appointment',
                ],
            ],
            'badges' => [
                'level' => [
                    'emergency' => [
                        'label' => 'Emergency',
                        'placeholder' => 'Emergency',
                        'helper_text' => 'Highest level of urgency',
                        'description' => 'Indicates a critical situation',
                    ],
                    'alert' => [
                        'label' => 'Alert',
                        'placeholder' => 'Alert',
                        'helper_text' => 'Moderate level of urgency',
                        'description' => 'Indicates a situation that requires attention',
                    ],
                    'critical' => [
                        'label' => 'Critical',
                        'placeholder' => 'Critical',
                        'helper_text' => 'High level of urgency',
                        'description' => 'Indicates a serious situation',
                    ],
                    'error' => [
                        'label' => 'Error',
                        'placeholder' => 'Error',
                        'helper_text' => 'Medium level of urgency',
                        'description' => 'Indicates a problem that needs attention',
                    ],
                    'warning' => [
                        'label' => 'Warning',
                        'placeholder' => 'Warning',
                        'helper_text' => 'Low level of urgency',
                        'description' => 'Indicates a potential issue',
                    ],
                    'notice' => [
                        'label' => 'Notice',
                        'placeholder' => 'Notice',
                        'helper_text' => 'Lowest level of urgency',
                        'description' => 'Informational message',
                    ],
                    'info' => [
                        'label' => 'Info',
                        'placeholder' => 'Info',
                        'helper_text' => 'Lowest level of urgency',
                        'description' => 'General information',
                    ],
                    'debug' => [
                        'label' => 'Debug',
                        'placeholder' => 'Debug',
                        'helper_text' => 'Lowest level of urgency',
                        'description' => 'Detailed information for debugging',
                    ],
                ],
            ],
            'specialties' => [
                'empty' => [
                    'description' => 'No specialties available',
                    'helper_text' => 'No specialties have been added',
                ],
            ],
            'snapshots' => [
                'fields' => [
                    'updated_at' => [
                        'help' => [
                            'description' => 'Help for updated at',
                            'helper_text' => 'Additional info about updated at',
                            'placeholder' => 'Enter updated at',
                            'label' => 'Updated At',
                        ],
                        'label' => [
                            'description' => 'Label for updated at',
                            'helper_text' => 'Label for updated at',
                            'placeholder' => 'Enter updated at',
                            'label' => 'Updated At',
                        ],
                    ],
                    'created_at' => [
                        'help' => [
                            'description' => 'Help for created at',
                            'helper_text' => 'Additional info about created at',
                            'placeholder' => 'Enter created at',
                            'label' => 'Created At',
                        ],
                        'label' => [
                            'description' => 'Label for created at',
                            'helper_text' => 'Label for created at',
                            'placeholder' => 'Enter created at',
                            'label' => 'Created At',
                        ],
                    ],
                    'state' => [
                        'help' => [
                            'description' => 'Help for state',
                            'helper_text' => 'Additional info about state',
                            'placeholder' => 'Enter state',
                            'label' => 'State',
                        ],
                        'label' => [
                            'description' => 'Label for state',
                            'helper_text' => 'Label for state',
                            'placeholder' => 'Enter state',
                            'label' => 'State',
                        ],
                    ],
                    'id' => [
                        'label' => [
                            'label' => 'ID',
                            'placeholder' => 'Enter ID',
                            'helper_text' => 'The unique identifier',
                            'description' => 'The unique identifier for the snapshot',
                        ],
                        'help' => [
                            'label' => 'Help',
                            'placeholder' => 'Enter help text',
                            'helper_text' => 'Additional information about the snapshot',
                            'description' => 'Details about the snapshot',
                        ],
                    ],
                    'aggregate_uuid' => [
                        'label' => [
                            'label' => 'Aggregate UUID',
                            'placeholder' => 'Enter aggregate UUID',
                            'helper_text' => 'The UUID of the aggregate',
                            'description' => 'The UUID of the aggregate the snapshot belongs to',
                        ],
                        'help' => [
                            'label' => 'Help',
                            'placeholder' => 'Enter help text',
                            'helper_text' => 'Additional information about the aggregate UUID',
                            'description' => 'Details about the aggregate UUID',
                        ],
                    ],
                    'aggregate_version' => [
                        'label' => [
                            'label' => 'Aggregate Version',
                            'placeholder' => 'Enter aggregate version',
                            'helper_text' => 'The version of the aggregate',
                            'description' => 'The version of the aggregate the snapshot belongs to',
                        ],
                        'help' => [
                            'label' => 'Help',
                            'placeholder' => 'Enter help text',
                            'helper_text' => 'Additional information about the aggregate version',
                            'description' => 'Details about the aggregate version',
                        ],
                    ],
                ],
            ],
            'content' => [
                'snapshots' => [
                    'fields' => [
                        'updated_at' => [
                            'help' => [
                                'description' => 'Help for updated at',
                            ],
                        ],
                    ],
                ],
            ],
            'search_placeholder' => [
                'description' => 'Enter search term',
                'helper_text' => 'Search for content',
            ],
            'state_transition' => [
                'missing_data' => [
                    'description' => 'Missing data',
                    'helper_text' => 'Data is missing',
                ],
            ],
            'delete' => [
                'tooltip' => [
                    'description' => 'Tooltip for delete',
                    'helper_text' => 'Additional info about delete',
                    'placeholder' => 'Enter tooltip text',
                ],
            ],
            'states' => [
                'rescheduled' => [
                    'modal_description' => [
                        'description' => 'Description for rescheduled state',
                        'label' => 'Rescheduled',
                        'placeholder' => 'Enter rescheduled description',
                        'helper_text' => 'Enter a brief description',
                    ],
                    'label' => [
                        'label' => 'Rescheduled',
                        'placeholder' => 'Rescheduled',
                        'helper_text' => 'Rescheduled',
                        'description' => 'The content has been rescheduled',
                    ],
                    'color' => [
                        'label' => 'Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Color for the rescheduled state',
                        'description' => 'Used for highlighting the rescheduled state',
                    ],
                    'bg_color' => [
                        'label' => 'Background Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Background color for the rescheduled state',
                        'description' => 'Used for background color of the rescheduled state',
                    ],
                    'icon' => [
                        'label' => 'Icon',
                        'placeholder' => 'Select an icon',
                        'helper_text' => 'Icon for the rescheduled state',
                        'description' => 'Visual icon for the rescheduled state',
                    ],
                    'modal_heading' => [
                        'label' => 'Reschedule Content',
                        'placeholder' => 'Reschedule Content',
                        'helper_text' => 'Reschedule the content',
                        'description' => 'Reschedule the existing content',
                    ],
                ],
                'confirmed' => [
                    'label' => [
                        'label' => 'Confirmed',
                        'placeholder' => 'Confirmed',
                        'helper_text' => 'Confirmed',
                        'description' => 'The content has been confirmed',
                    ],
                    'color' => [
                        'label' => 'Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Color for the confirmed state',
                        'description' => 'Used for highlighting the confirmed state',
                    ],
                    'icon' => [
                        'label' => 'Icon',
                        'placeholder' => 'Select an icon',
                        'helper_text' => 'Icon for the confirmed state',
                        'description' => 'Visual icon for the confirmed state',
                    ],
                    'modal_heading' => [
                        'label' => 'Confirm Content',
                        'placeholder' => 'Confirm Content',
                        'helper_text' => 'Confirm the content',
                        'description' => 'Confirm the existing content',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the confirmed content',
                    ],
                    'bg_color' => [
                        'label' => 'Background Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Background color for the confirmed state',
                        'description' => 'Used for background color of the confirmed state',
                    ],
                ],
                'rejected' => [
                    'label' => [
                        'label' => 'Rejected',
                        'placeholder' => 'Rejected',
                        'helper_text' => 'Rejected',
                        'description' => 'The content has been rejected',
                    ],
                    'color' => [
                        'label' => 'Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Color for the rejected state',
                        'description' => 'Used for highlighting the rejected state',
                    ],
                    'icon' => [
                        'label' => 'Icon',
                        'placeholder' => 'Select an icon',
                        'helper_text' => 'Icon for the rejected state',
                        'description' => 'Visual icon for the rejected state',
                    ],
                    'modal_heading' => [
                        'label' => 'Reject Content',
                        'placeholder' => 'Reject Content',
                        'helper_text' => 'Reject the content',
                        'description' => 'Reject the existing content',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the rejected content',
                    ],
                    'bg_color' => [
                        'label' => 'Background Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Background color for the rejected state',
                        'description' => 'Used for background color of the rejected state',
                    ],
                ],
                'pending' => [
                    'label' => [
                        'label' => 'Pending',
                        'placeholder' => 'Pending',
                        'helper_text' => 'Pending',
                        'description' => 'The content is pending approval',
                    ],
                    'color' => [
                        'label' => 'Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Color for the pending state',
                        'description' => 'Used for highlighting the pending state',
                    ],
                    'bg_color' => [
                        'label' => 'Background Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Background color for the pending state',
                        'description' => 'Used for background color of the pending state',
                    ],
                    'icon' => [
                        'label' => 'Icon',
                        'placeholder' => 'Select an icon',
                        'helper_text' => 'Icon for the pending state',
                        'description' => 'Visual icon for the pending state',
                    ],
                    'modal_heading' => [
                        'label' => 'Pending Approval',
                        'placeholder' => 'Pending Approval',
                        'helper_text' => 'Pending approval',
                        'description' => 'Content is awaiting approval',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the pending content',
                    ],
                ],
                'scheduled' => [
                    'label' => [
                        'label' => 'Scheduled',
                        'placeholder' => 'Scheduled',
                        'helper_text' => 'Scheduled',
                        'description' => 'The content is scheduled',
                    ],
                    'color' => [
                        'label' => 'Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Color for the scheduled state',
                        'description' => 'Used for highlighting the scheduled state',
                    ],
                    'bg_color' => [
                        'label' => 'Background Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Background color for the scheduled state',
                        'description' => 'Used for background color of the scheduled state',
                    ],
                    'icon' => [
                        'label' => 'Icon',
                        'placeholder' => 'Select an icon',
                        'helper_text' => 'Icon for the scheduled state',
                        'description' => 'Visual icon for the scheduled state',
                    ],
                    'modal_heading' => [
                        'label' => 'Schedule Content',
                        'placeholder' => 'Schedule Content',
                        'helper_text' => 'Schedule the content',
                        'description' => 'Schedule the existing content',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the scheduled content',
                    ],
                ],
                'in_progress' => [
                    'label' => [
                        'label' => 'In Progress',
                        'placeholder' => 'In Progress',
                        'helper_text' => 'In Progress',
                        'description' => 'The content is in progress',
                    ],
                    'color' => [
                        'label' => 'Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Color for the in progress state',
                        'description' => 'Used for highlighting the in progress state',
                    ],
                    'bg_color' => [
                        'label' => 'Background Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Background color for the in progress state',
                        'description' => 'Used for background color of the in progress state',
                    ],
                    'icon' => [
                        'label' => 'Icon',
                        'placeholder' => 'Select an icon',
                        'helper_text' => 'Icon for the in progress state',
                        'description' => 'Visual icon for the in progress state',
                    ],
                    'modal_heading' => [
                        'label' => 'In Progress',
                        'placeholder' => 'In Progress',
                        'helper_text' => 'In Progress',
                        'description' => 'The content is in progress',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the in progress content',
                    ],
                ],
                'completed' => [
                    'label' => [
                        'label' => 'Completed',
                        'placeholder' => 'Completed',
                        'helper_text' => 'Completed',
                        'description' => 'The content has been completed',
                    ],
                    'color' => [
                        'label' => 'Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Color for the completed state',
                        'description' => 'Used for highlighting the completed state',
                    ],
                    'bg_color' => [
                        'label' => 'Background Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Background color for the completed state',
                        'description' => 'Used for background color of the completed state',
                    ],
                    'icon' => [
                        'label' => 'Icon',
                        'placeholder' => 'Select an icon',
                        'helper_text' => 'Icon for the completed state',
                        'description' => 'Visual icon for the completed state',
                    ],
                    'modal_heading' => [
                        'label' => 'Complete Content',
                        'placeholder' => 'Complete Content',
                        'helper_text' => 'Complete the content',
                        'description' => 'Complete the existing content',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the completed content',
                    ],
                ],
                'cancelled' => [
                    'label' => [
                        'label' => 'Cancelled',
                        'placeholder' => 'Cancelled',
                        'helper_text' => 'Cancelled',
                        'description' => 'The content has been cancelled',
                    ],
                    'color' => [
                        'label' => 'Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Color for the cancelled state',
                        'description' => 'Used for highlighting the cancelled state',
                    ],
                    'bg_color' => [
                        'label' => 'Background Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Background color for the cancelled state',
                        'description' => 'Used for background color of the cancelled state',
                    ],
                    'icon' => [
                        'label' => 'Icon',
                        'placeholder' => 'Select an icon',
                        'helper_text' => 'Icon for the cancelled state',
                        'description' => 'Visual icon for the cancelled state',
                    ],
                    'modal_heading' => [
                        'label' => 'Cancel Content',
                        'placeholder' => 'Cancel Content',
                        'helper_text' => 'Cancel the content',
                        'description' => 'Cancel the existing content',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the cancelled content',
                    ],
                ],
                'no_show' => [
                    'label' => [
                        'label' => 'No Show',
                        'placeholder' => 'No Show',
                        'helper_text' => 'No Show',
                        'description' => 'The content is a no show',
                    ],
                    'color' => [
                        'label' => 'Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Color for the no show state',
                        'description' => 'Used for highlighting the no show state',
                    ],
                    'bg_color' => [
                        'label' => 'Background Color',
                        'placeholder' => 'Select a color',
                        'helper_text' => 'Background color for the no show state',
                        'description' => 'Used for background color of the no show state',
                    ],
                    'icon' => [
                        'label' => 'Icon',
                        'placeholder' => 'Select an icon',
                        'helper_text' => 'Icon for the no show state',
                        'description' => 'Visual icon for the no show state',
                    ],
                    'modal_heading' => [
                        'label' => 'No Show',
                        'placeholder' => 'No Show',
                        'helper_text' => 'No Show',
                        'description' => 'The content is a no show',
                    ],
                    'modal_description' => [
                        'label' => 'Description',
                        'placeholder' => 'Enter description',
                        'helper_text' => 'Enter a brief description',
                        'description' => 'Provide a brief description of the no show content',
                    ],
                ],
            ],
            'name' => [
                'label' => 'Name',
                'placeholder' => 'Enter name',
                'helper_text' => 'The name of the content',
                'description' => 'The title or heading of the content',
            ],
            'model' => [
                'label' => [
                    'label' => 'Model',
                    'placeholder' => 'Enter model',
                    'helper_text' => 'The model of the content',
                    'description' => 'The type or class of the content',
                ],
                'plural' => [
                    'label' => 'Plural',
                    'placeholder' => 'Enter plural form',
                    'helper_text' => 'The plural form of the content',
                    'description' => 'Used for lists or multiple items',
                ],
                'description' => [
                    'label' => 'Description',
                    'placeholder' => 'Enter description',
                    'helper_text' => 'Additional details about the content',
                    'description' => 'Any extra information about the content',
                ],
            ],
            'pages' => [
                'index' => [
                    'title' => [
                        'label' => 'Index Title',
                        'placeholder' => 'Enter index title',
                        'helper_text' => 'The title for the index page',
                        'description' => 'The title of the index page',
                    ],
                    'subtitle' => [
                        'label' => 'Index Subtitle',
                        'placeholder' => 'Enter index subtitle',
                        'helper_text' => 'The subtitle for the index page',
                        'description' => 'The subtitle of the index page',
                    ],
                    'description' => [
                        'label' => 'Index Description',
                        'placeholder' => 'Enter index description',
                        'helper_text' => 'The description for the index page',
                        'description' => 'The description of the index page',
                    ],
                ],
                'create' => [
                    'title' => [
                        'label' => 'Create Title',
                        'placeholder' => 'Enter create title',
                        'helper_text' => 'The title for the create page',
                        'description' => 'The title of the create page',
                    ],
                    'subtitle' => [
                        'label' => 'Create Subtitle',
                        'placeholder' => 'Enter create subtitle',
                        'helper_text' => 'The subtitle for the create page',
                        'description' => 'The subtitle of the create page',
                    ],
                    'description' => [
                        'label' => 'Create Description',
                        'placeholder' => 'Enter create description',
                        'helper_text' => 'The description for the create page',
                        'description' => 'The description of the create page',
                    ],
                ],
                'edit' => [
                    'title' => [
                        'label' => 'Edit Title',
                        'placeholder' => 'Enter edit title',
                        'helper_text' => 'The title for the edit page',
                        'description' => 'The title of the edit page',
                    ],
                    'subtitle' => [
                        'label' => 'Edit Subtitle',
                        'placeholder' => 'Enter edit subtitle',
                        'helper_text' => 'The subtitle for the edit page',
                        'description' => 'The subtitle of the edit page',
                    ],
                    'description' => [
                        'label' => 'Edit Description',
                        'placeholder' => 'Enter edit description',
                        'helper_text' => 'The description for the edit page',
                        'description' => 'The description of the edit page',
                    ],
                ],
                'availability' => [
                    'title' => [
                        'label' => 'Availability Title',
                        'placeholder' => 'Enter availability title',
                        'helper_text' => 'The title for the availability page',
                        'description' => 'The title of the availability page',
                    ],
                    'heading' => [
                        'label' => 'Availability Heading',
                        'placeholder' => 'Enter availability heading',
                        'helper_text' => 'The heading for the availability page',
                        'description' => 'The heading of the availability page',
                    ],
                    'subheading' => [
                        'label' => 'Availability Subheading',
                        'placeholder' => 'Enter availability subheading',
                        'helper_text' => 'The subheading for the availability page',
                        'description' => 'The subheading of the availability page',
                    ],
                    'description' => [
                        'label' => 'Availability Description',
                        'placeholder' => 'Enter availability description',
                        'helper_text' => 'The description for the availability page',
                        'description' => 'The description of the availability page',
                    ],
                ],
            ],
            'calendar' => [
                'title' => [
                    'label' => 'Calendar Title',
                    'placeholder' => 'Enter calendar title',
                    'helper_text' => 'The title for the calendar',
                    'description' => 'The title of the calendar',
                ],
                'today' => [
                    'label' => 'Today',
                    'placeholder' => 'Today',
                    'helper_text' => 'Today',
                    'description' => 'The current date',
                ],
                'month' => [
                    'label' => 'Month',
                    'placeholder' => 'Month',
                    'helper_text' => 'Month',
                    'description' => 'The month',
                ],
                'week' => [
                    'label' => 'Week',
                    'placeholder' => 'Week',
                    'helper_text' => 'Week',
                    'description' => 'The week',
                ],
                'day' => [
                    'label' => 'Day',
                    'placeholder' => 'Day',
                    'helper_text' => 'Day',
                    'description' => 'The day',
                ],
                'list' => [
                    'label' => 'List',
                    'placeholder' => 'List',
                    'helper_text' => 'List',
                    'description' => 'List view',
                ],
                'next' => [
                    'label' => 'Next',
                    'placeholder' => 'Next',
                    'helper_text' => 'Next',
                    'description' => 'Next',
                ],
                'previous' => [
                    'label' => 'Previous',
                    'placeholder' => 'Previous',
                    'helper_text' => 'Previous',
                    'description' => 'Previous',
                ],
                'day_view' => [
                    'label' => 'Day View',
                    'placeholder' => 'Day View',
                    'helper_text' => 'Day View',
                    'description' => 'Day view',
                ],
                'week_view' => [
                    'label' => 'Week View',
                    'placeholder' => 'Week View',
                    'helper_text' => 'Week View',
                    'description' => 'Week view',
                ],
                'month_view' => [
                    'label' => 'Month View',
                    'placeholder' => 'Month View',
                    'helper_text' => 'Month View',
                    'description' => 'Month view',
                ],
            ],
            'availability' => [
                'title' => [
                    'label' => 'Availability Title',
                    'placeholder' => 'Enter availability title',
                    'helper_text' => 'The title for the availability page',
                    'description' => 'The title of the availability page',
                ],
                'add' => [
                    'label' => 'Add',
                    'placeholder' => 'Add',
                    'helper_text' => 'Add new availability',
                    'description' => 'Add a new availability item',
                ],
                'edit' => [
                    'label' => 'Edit',
                    'placeholder' => 'Edit',
                    'helper_text' => 'Edit availability',
                    'description' => 'Edit the existing availability',
                ],
                'delete' => [
                    'label' => 'Delete',
                    'placeholder' => 'Delete',
                    'helper_text' => 'Delete availability',
                    'description' => 'Delete the existing availability',
                ],
                'create_success' => [
                    'label' => 'Create Success',
                    'placeholder' => 'Create Success',
                    'helper_text' => 'Availability created successfully',
                    'description' => 'The availability has been successfully created',
                ],
                'update_success' => [
                    'label' => 'Update Success',
                    'placeholder' => 'Update Success',
                    'helper_text' => 'Availability updated successfully',
                    'description' => 'The availability has been successfully updated',
                ],
                'delete_success' => [
                    'label' => 'Delete Success',
                    'placeholder' => 'Delete Success',
                    'helper_text' => 'Availability deleted successfully',
                    'description' => 'The availability has been successfully deleted',
                ],
            ],
            'legend' => [
                'description' => [
                    'label' => 'Description',
                    'placeholder' => 'Enter description',
                    'helper_text' => 'Additional details about the legend',
                    'description' => 'Any extra information about the legend',
                ],
                'types' => [
                    'label' => 'Types',
                    'placeholder' => 'Enter types',
                    'helper_text' => 'Types of content',
                    'description' => 'Different categories or types of content',
                ],
                'icons' => [
                    'label' => 'Icons',
                    'placeholder' => 'Enter icons',
                    'helper_text' => 'Icons for content',
                    'description' => 'Visual icons for different types of content',
                ],
                'availability' => [
                    'label' => 'Availability',
                    'placeholder' => 'Enter availability',
                    'helper_text' => 'Availability status',
                    'description' => 'The status of availability',
                ],
                'pending' => [
                    'label' => 'Pending',
                    'placeholder' => 'Pending',
                    'helper_text' => 'Pending approval',
                    'description' => 'Content is awaiting approval',
                ],
                'confirmed' => [
                    'label' => 'Confirmed',
                    'placeholder' => 'Confirmed',
                    'helper_text' => 'Confirmed',
                    'description' => 'The content has been confirmed',
                ],
                'completed' => [
                    'label' => 'Completed',
                    'placeholder' => 'Completed',
                    'helper_text' => 'Completed',
                    'description' => 'The content has been completed',
                ],
                'cancelled' => [
                    'label' => 'Cancelled',
                    'placeholder' => 'Cancelled',
                    'helper_text' => 'Cancelled',
                    'description' => 'The content has been cancelled',
                ],
                'availability_icon' => [
                    'label' => 'Availability Icon',
                    'placeholder' => 'Select an icon',
                    'helper_text' => 'Icon for availability',
                    'description' => 'Visual icon for availability',
                ],
                'pending_icon' => [
                    'label' => 'Pending Icon',
                    'placeholder' => 'Select an icon',
                    'helper_text' => 'Icon for pending',
                    'description' => 'Visual icon for pending content',
                ],
                'confirmed_icon' => [
                    'label' => 'Confirmed Icon',
                    'placeholder' => 'Select an icon',
                    'helper_text' => 'Icon for confirmed',
                    'description' => 'Visual icon for confirmed content',
                ],
                'completed_icon' => [
                    'label' => 'Completed Icon',
                    'placeholder' => 'Select an icon',
                    'helper_text' => 'Icon for completed',
                    'description' => 'Visual icon for completed content',
                ],
                'cancelled_icon' => [
                    'label' => 'Cancelled Icon',
                    'placeholder' => 'Select an icon',
                    'helper_text' => 'Icon for cancelled',
                    'description' => 'Visual icon for cancelled content',
                ],
                'instructions' => [
                    'label' => 'Instructions',
                    'placeholder' => 'Enter instructions',
                    'helper_text' => 'Instructions for content',
                    'description' => 'Any additional instructions for the content',
                ],
                'instruction_add' => [
                    'label' => 'Add Instruction',
                    'placeholder' => 'Add Instruction',
                    'helper_text' => 'Add a new instruction',
                    'description' => 'Add a new instruction for the content',
                ],
                'instruction_edit' => [
                    'label' => 'Edit Instruction',
                    'placeholder' => 'Edit Instruction',
                    'helper_text' => 'Edit an existing instruction',
                    'description' => 'Edit an existing instruction for the content',
                ],
                'instruction_delete' => [
                    'label' => 'Delete Instruction',
                    'placeholder' => 'Delete Instruction',
                    'helper_text' => 'Delete an existing instruction',
                    'description' => 'Delete an existing instruction for the content',
                ],
                'instruction_approve' => [
                    'label' => 'Approve Instruction',
                    'placeholder' => 'Approve Instruction',
                    'helper_text' => 'Approve an existing instruction',
                    'description' => 'Approve an existing instruction for the content',
                ],
            ],
            'notifications' => [
                'reminder' => [
                    'title' => [
                        'label' => 'Reminder Title',
                        'placeholder' => 'Enter reminder title',
                        'helper_text' => 'The title for the reminder notification',
                        'description' => 'The title of the reminder notification',
                    ],
                    'body' => [
                        'label' => 'Reminder Body',
                        'placeholder' => 'Enter reminder body',
                        'helper_text' => 'The body of the reminder notification',
                        'description' => 'The body of the reminder notification',
                    ],
                ],
                'confirmation' => [
                    'title' => [
                        'label' => 'Confirmation Title',
                        'placeholder' => 'Enter confirmation title',
                        'helper_text' => 'The title for the confirmation notification',
                        'description' => 'The title of the confirmation notification',
                    ],
                    'body' => [
                        'label' => 'Confirmation Body',
                        'placeholder' => 'Enter confirmation body',
                        'helper_text' => 'The body of the confirmation notification',
                        'description' => 'The body of the confirmation notification',
                    ],
                ],
                'cancellation' => [
                    'title' => [
                        'label' => 'Cancellation Title',
                        'placeholder' => 'Enter cancellation title',
                        'helper_text' => 'The title for the cancellation notification',
                        'description' => 'The title of the cancellation notification',
                    ],
                    'body' => [
                        'label' => 'Cancellation Body',
                        'placeholder' => 'Enter cancellation body',
                        'helper_text' => 'The body of the cancellation notification',
                        'description' => 'The body of the cancellation notification',
                    ],
                ],
            ],
            'validation' => [
                'required' => [
                    'label' => 'Required',
                    'placeholder' => 'Required',
                    'helper_text' => 'This field is required',
                    'description' => 'This field must be filled out',
                ],
                'date' => [
                    'label' => 'Date',
                    'placeholder' => 'Enter date',
                    'helper_text' => 'The date format is YYYY-MM-DD',
                    'description' => 'The date format is YYYY-MM-DD',
                ],
                'after' => [
                    'label' => 'After',
                    'placeholder' => 'Enter date',
                    'helper_text' => 'The date must be after the start date',
                    'description' => 'The date must be after the start date',
                ],
                'before' => [
                    'label' => 'Before',
                    'placeholder' => 'Enter date',
                    'helper_text' => 'The date must be before the end date',
                    'description' => 'The date must be before the end date',
                ],
                'time_conflict' => [
                    'label' => 'Time Conflict',
                    'placeholder' => 'Enter time conflict',
                    'helper_text' => 'The start time must be before the end time',
                    'description' => 'The start time must be before the end time',
                ],
                'past_appointment' => [
                    'label' => 'Past Appointment',
                    'placeholder' => 'Enter past appointment',
                    'helper_text' => 'The appointment must be in the past',
                    'description' => 'The appointment must have occurred in the past',
                ],
                'doctor_unavailable' => [
                    'label' => 'Doctor Unavailable',
                    'placeholder' => 'Enter doctor unavailable',
                    'helper_text' => 'The doctor is unavailable',
                    'description' => 'The doctor is not available for the appointment',
                ],
            ],
            'empty_state' => [
                'heading' => [
                    'label' => 'Empty State Heading',
                    'placeholder' => 'Enter empty state heading',
                    'helper_text' => 'The heading for the empty state',
                    'description' => 'The title or heading for the empty state',
                ],
                'description' => [
                    'label' => 'Empty State Description',
                    'placeholder' => 'Enter empty state description',
                    'helper_text' => 'The description for the empty state',
                    'description' => 'The text to be displayed when there is no content',
                ],
                'action' => [
                    'label' => 'Empty State Action',
                    'placeholder' => 'Enter empty state action',
                    'helper_text' => 'The action for the empty state',
                    'description' => 'The button or link for the empty state',
                ],
            ],
            'resources' => [
                'doctor' => [
                    'navigation' => [
                        'group' => [
                            'description' => 'Description for doctor navigation group',
                        ],
                    ],
                ],
            ],
            'YEAR_10_99' => [
                'description' => [
                    'description' => 'Description for YEAR_10_99',
                ],
            ],
        ],
        'key' => [
            'label' => 'Key',
            'placeholder' => 'Enter key',
            'helper_text' => 'Enter key',
            'description' => 'Enter key',
        ],
        'data' => [
            'pippo' => [
                'description' => 'Data for pippo',
                'helper_text' => 'Data for pippo',
                'placeholder' => 'Enter pippo data',
            ],
        ],
        'pippo' => [
            'description' => 'pippo',
            'helper_text' => 'pippo',
            'placeholder' => 'pippo',
            'label' => 'pippo',
        ],
        'pluto' => [
            'description' => 'pluto',
        ],
        'snapshots' => [
            'fields' => [
                'updated_at' => [
                    'help' => [
                        'description' => 'Help for updated at',
                        'helper_text' => 'Additional info about updated at',
                        'placeholder' => 'Enter updated at',
                        'label' => 'Updated At',
                    ],
                ],
            ],
        ],
    ],
    'actions' => [
        'lang' => [
            'label' => 'Language',
        ],
        'delete' => [
            'label' => 'Delete',
        ],
        'activeLocale' => [
            'label' => 'Active Locale',
        ],
    ],
];
=======
return array (
  'fields' => 
  array (
    'content' => 
    array (
      'navigation' => 
      array (
        'name' => 
        array (
          'label' => 'content.navigation.name',
          'placeholder' => 'content.navigation.name',
          'helper_text' => 'content.navigation.name',
          'description' => 'content.navigation.name',
        ),
        'plural' => 
        array (
          'label' => 'content.navigation.plural',
          'placeholder' => 'content.navigation.plural',
          'helper_text' => 'content.navigation.plural',
          'description' => 'content.navigation.plural',
        ),
        'group' => 
        array (
          'name' => 
          array (
            'label' => 'content.navigation.group.name',
            'placeholder' => 'content.navigation.group.name',
            'helper_text' => 'content.navigation.group.name',
            'description' => 'content.navigation.group.name',
          ),
          'description' => 
          array (
            'label' => 'content.navigation.group.description',
            'placeholder' => 'content.navigation.group.description',
            'helper_text' => 'content.navigation.group.description',
            'description' => 'content.navigation.group.description',
          ),
          'label' => 'content.navigation.group',
          'placeholder' => 'content.navigation.group',
          'helper_text' => 'content.navigation.group',
        ),
        'label' => 
        array (
          'label' => 'content.navigation.label',
          'placeholder' => 'content.navigation.label',
          'helper_text' => 'content.navigation.label',
          'description' => 'content.navigation.label',
        ),
        'sort' => 
        array (
          'label' => 'content.navigation.sort',
          'placeholder' => 'content.navigation.sort',
          'helper_text' => 'content.navigation.sort',
          'description' => 'content.navigation.sort',
        ),
        'icon' => 
        array (
          'label' => 'content.navigation.icon',
          'placeholder' => 'content.navigation.icon',
          'helper_text' => 'content.navigation.icon',
          'description' => 'content.navigation.icon',
        ),
        'color' => 
        array (
          'label' => 'content.navigation.color',
          'placeholder' => 'content.navigation.color',
          'helper_text' => 'content.navigation.color',
          'description' => 'content.navigation.color',
        ),
        'tooltip' => 
        array (
          'label' => 'content.navigation.tooltip',
          'placeholder' => 'content.navigation.tooltip',
          'helper_text' => 'content.navigation.tooltip',
          'description' => 'content.navigation.tooltip',
        ),
      ),
      'fields' => 
      array (
        'level' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.level.label',
            'placeholder' => 'content.fields.level.label',
            'helper_text' => 'content.fields.level.label',
            'description' => 'content.fields.level.label',
          ),
          'emergency' => 
          array (
            'label' => 'content.fields.level.emergency',
            'placeholder' => 'content.fields.level.emergency',
            'helper_text' => 'content.fields.level.emergency',
            'description' => 'content.fields.level.emergency',
          ),
          'alert' => 
          array (
            'label' => 'content.fields.level.alert',
            'placeholder' => 'content.fields.level.alert',
            'helper_text' => 'content.fields.level.alert',
            'description' => 'content.fields.level.alert',
          ),
          'critical' => 
          array (
            'label' => 'content.fields.level.critical',
            'placeholder' => 'content.fields.level.critical',
            'helper_text' => 'content.fields.level.critical',
            'description' => 'content.fields.level.critical',
          ),
          'error' => 
          array (
            'label' => 'content.fields.level.error',
            'placeholder' => 'content.fields.level.error',
            'helper_text' => 'content.fields.level.error',
            'description' => 'content.fields.level.error',
          ),
          'warning' => 
          array (
            'label' => 'content.fields.level.warning',
            'placeholder' => 'content.fields.level.warning',
            'helper_text' => 'content.fields.level.warning',
            'description' => 'content.fields.level.warning',
          ),
          'notice' => 
          array (
            'label' => 'content.fields.level.notice',
            'placeholder' => 'content.fields.level.notice',
            'helper_text' => 'content.fields.level.notice',
            'description' => 'content.fields.level.notice',
          ),
          'info' => 
          array (
            'label' => 'content.fields.level.info',
            'placeholder' => 'content.fields.level.info',
            'helper_text' => 'content.fields.level.info',
            'description' => 'content.fields.level.info',
          ),
          'debug' => 
          array (
            'label' => 'content.fields.level.debug',
            'placeholder' => 'content.fields.level.debug',
            'helper_text' => 'content.fields.level.debug',
            'description' => 'content.fields.level.debug',
          ),
        ),
        'message' => 
        array (
          'label' => 'content.fields.message',
          'placeholder' => 'content.fields.message',
          'helper_text' => 'content.fields.message',
          'description' => 'content.fields.message',
        ),
        'context' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.context.label',
            'placeholder' => 'content.fields.context.label',
            'helper_text' => 'content.fields.context.label',
            'description' => 'content.fields.context.label',
          ),
          'exception' => 
          array (
            'label' => 'content.fields.context.exception',
            'placeholder' => 'content.fields.context.exception',
            'helper_text' => 'content.fields.context.exception',
            'description' => 'content.fields.context.exception',
          ),
          'stack_trace' => 
          array (
            'label' => 'content.fields.context.stack_trace',
            'placeholder' => 'content.fields.context.stack_trace',
            'helper_text' => 'content.fields.context.stack_trace',
            'description' => 'content.fields.context.stack_trace',
          ),
          'additional' => 
          array (
            'label' => 'content.fields.context.additional',
            'placeholder' => 'content.fields.context.additional',
            'helper_text' => 'content.fields.context.additional',
            'description' => 'content.fields.context.additional',
          ),
        ),
        'channel' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.channel.label',
            'placeholder' => 'content.fields.channel.label',
            'helper_text' => 'content.fields.channel.label',
            'description' => 'content.fields.channel.label',
          ),
          'system' => 
          array (
            'label' => 'content.fields.channel.system',
            'placeholder' => 'content.fields.channel.system',
            'helper_text' => 'content.fields.channel.system',
            'description' => 'content.fields.channel.system',
          ),
          'application' => 
          array (
            'label' => 'content.fields.channel.application',
            'placeholder' => 'content.fields.channel.application',
            'helper_text' => 'content.fields.channel.application',
            'description' => 'content.fields.channel.application',
          ),
          'security' => 
          array (
            'label' => 'content.fields.channel.security',
            'placeholder' => 'content.fields.channel.security',
            'helper_text' => 'content.fields.channel.security',
            'description' => 'content.fields.channel.security',
          ),
          'database' => 
          array (
            'label' => 'content.fields.channel.database',
            'placeholder' => 'content.fields.channel.database',
            'helper_text' => 'content.fields.channel.database',
            'description' => 'content.fields.channel.database',
          ),
          'queue' => 
          array (
            'label' => 'content.fields.channel.queue',
            'placeholder' => 'content.fields.channel.queue',
            'helper_text' => 'content.fields.channel.queue',
            'description' => 'content.fields.channel.queue',
          ),
        ),
        'datetime' => 
        array (
          'label' => 'content.fields.datetime',
          'placeholder' => 'content.fields.datetime',
          'helper_text' => 'content.fields.datetime',
          'description' => 'content.fields.datetime',
        ),
        'environment' => 
        array (
          'label' => 'content.fields.environment',
          'placeholder' => 'content.fields.environment',
          'helper_text' => 'content.fields.environment',
          'description' => 'content.fields.environment',
        ),
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
          'placeholder' => 
          array (
            'label' => 'content.fields.created_at.placeholder',
            'placeholder' => 'content.fields.created_at.placeholder',
            'helper_text' => 'content.fields.created_at.placeholder',
            'description' => 'content.fields.created_at.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.created_at.help',
            'placeholder' => 'content.fields.created_at.help',
            'helper_text' => 'content.fields.created_at.help',
            'description' => 'content.fields.created_at.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.created_at.helper_text',
            'placeholder' => 'content.fields.created_at.helper_text',
            'helper_text' => 'content.fields.created_at.helper_text',
            'description' => 'content.fields.created_at.helper_text',
          ),
        ),
        'title' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.title.label',
            'placeholder' => 'content.fields.title.label',
            'helper_text' => 'content.fields.title.label',
            'description' => 'content.fields.title.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.title.placeholder',
            'placeholder' => 'content.fields.title.placeholder',
            'helper_text' => 'content.fields.title.placeholder',
            'description' => 'content.fields.title.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.title.help',
            'placeholder' => 'content.fields.title.help',
            'helper_text' => 'content.fields.title.help',
            'description' => 'content.fields.title.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.title.helper_text',
            'placeholder' => 'content.fields.title.helper_text',
            'helper_text' => 'content.fields.title.helper_text',
            'description' => 'content.fields.title.helper_text',
          ),
        ),
        'patient_id' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.patient_id.label',
            'placeholder' => 'content.fields.patient_id.label',
            'helper_text' => 'content.fields.patient_id.label',
            'description' => 'content.fields.patient_id.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.patient_id.placeholder',
            'placeholder' => 'content.fields.patient_id.placeholder',
            'helper_text' => 'content.fields.patient_id.placeholder',
            'description' => 'content.fields.patient_id.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.patient_id.help',
            'placeholder' => 'content.fields.patient_id.help',
            'helper_text' => 'content.fields.patient_id.help',
            'description' => 'content.fields.patient_id.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.patient_id.helper_text',
            'placeholder' => 'content.fields.patient_id.helper_text',
            'helper_text' => 'content.fields.patient_id.helper_text',
            'description' => 'content.fields.patient_id.helper_text',
          ),
        ),
        'doctor_id' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.doctor_id.label',
            'placeholder' => 'content.fields.doctor_id.label',
            'helper_text' => 'content.fields.doctor_id.label',
            'description' => 'content.fields.doctor_id.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.doctor_id.placeholder',
            'placeholder' => 'content.fields.doctor_id.placeholder',
            'helper_text' => 'content.fields.doctor_id.placeholder',
            'description' => 'content.fields.doctor_id.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.doctor_id.help',
            'placeholder' => 'content.fields.doctor_id.help',
            'helper_text' => 'content.fields.doctor_id.help',
            'description' => 'content.fields.doctor_id.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.doctor_id.helper_text',
            'placeholder' => 'content.fields.doctor_id.helper_text',
            'helper_text' => 'content.fields.doctor_id.helper_text',
            'description' => 'content.fields.doctor_id.helper_text',
          ),
        ),
        'dentist_id' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.dentist_id.label',
            'placeholder' => 'content.fields.dentist_id.label',
            'helper_text' => 'content.fields.dentist_id.label',
            'description' => 'content.fields.dentist_id.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.dentist_id.placeholder',
            'placeholder' => 'content.fields.dentist_id.placeholder',
            'helper_text' => 'content.fields.dentist_id.placeholder',
            'description' => 'content.fields.dentist_id.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.dentist_id.help',
            'placeholder' => 'content.fields.dentist_id.help',
            'helper_text' => 'content.fields.dentist_id.help',
            'description' => 'content.fields.dentist_id.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.dentist_id.helper_text',
            'placeholder' => 'content.fields.dentist_id.helper_text',
            'helper_text' => 'content.fields.dentist_id.helper_text',
            'description' => 'content.fields.dentist_id.helper_text',
          ),
        ),
        'studio_id' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.studio_id.label',
            'placeholder' => 'content.fields.studio_id.label',
            'helper_text' => 'content.fields.studio_id.label',
            'description' => 'content.fields.studio_id.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.studio_id.placeholder',
            'placeholder' => 'content.fields.studio_id.placeholder',
            'helper_text' => 'content.fields.studio_id.placeholder',
            'description' => 'content.fields.studio_id.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.studio_id.help',
            'placeholder' => 'content.fields.studio_id.help',
            'helper_text' => 'content.fields.studio_id.help',
            'description' => 'content.fields.studio_id.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.studio_id.helper_text',
            'placeholder' => 'content.fields.studio_id.helper_text',
            'helper_text' => 'content.fields.studio_id.helper_text',
            'description' => 'content.fields.studio_id.helper_text',
          ),
        ),
        'start_time' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.start_time.label',
            'placeholder' => 'content.fields.start_time.label',
            'helper_text' => 'content.fields.start_time.label',
            'description' => 'content.fields.start_time.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.start_time.placeholder',
            'placeholder' => 'content.fields.start_time.placeholder',
            'helper_text' => 'content.fields.start_time.placeholder',
            'description' => 'content.fields.start_time.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.start_time.help',
            'placeholder' => 'content.fields.start_time.help',
            'helper_text' => 'content.fields.start_time.help',
            'description' => 'content.fields.start_time.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.start_time.helper_text',
            'placeholder' => 'content.fields.start_time.helper_text',
            'helper_text' => 'content.fields.start_time.helper_text',
            'description' => 'content.fields.start_time.helper_text',
          ),
        ),
        'end_time' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.end_time.label',
            'placeholder' => 'content.fields.end_time.label',
            'helper_text' => 'content.fields.end_time.label',
            'description' => 'content.fields.end_time.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.end_time.placeholder',
            'placeholder' => 'content.fields.end_time.placeholder',
            'helper_text' => 'content.fields.end_time.placeholder',
            'description' => 'content.fields.end_time.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.end_time.help',
            'placeholder' => 'content.fields.end_time.help',
            'helper_text' => 'content.fields.end_time.help',
            'description' => 'content.fields.end_time.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.end_time.helper_text',
            'placeholder' => 'content.fields.end_time.helper_text',
            'helper_text' => 'content.fields.end_time.helper_text',
            'description' => 'content.fields.end_time.helper_text',
          ),
        ),
        'treatment_id' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.treatment_id.label',
            'placeholder' => 'content.fields.treatment_id.label',
            'helper_text' => 'content.fields.treatment_id.label',
            'description' => 'content.fields.treatment_id.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.treatment_id.placeholder',
            'placeholder' => 'content.fields.treatment_id.placeholder',
            'helper_text' => 'content.fields.treatment_id.placeholder',
            'description' => 'content.fields.treatment_id.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.treatment_id.help',
            'placeholder' => 'content.fields.treatment_id.help',
            'helper_text' => 'content.fields.treatment_id.help',
            'description' => 'content.fields.treatment_id.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.treatment_id.helper_text',
            'placeholder' => 'content.fields.treatment_id.helper_text',
            'helper_text' => 'content.fields.treatment_id.helper_text',
            'description' => 'content.fields.treatment_id.helper_text',
          ),
        ),
        'status' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.status.label',
            'placeholder' => 'content.fields.status.label',
            'helper_text' => 'content.fields.status.label',
            'description' => 'content.fields.status.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.status.placeholder',
            'placeholder' => 'content.fields.status.placeholder',
            'helper_text' => 'content.fields.status.placeholder',
            'description' => 'content.fields.status.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.status.help',
            'placeholder' => 'content.fields.status.help',
            'helper_text' => 'content.fields.status.help',
            'description' => 'content.fields.status.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.status.helper_text',
            'placeholder' => 'content.fields.status.helper_text',
            'helper_text' => 'content.fields.status.helper_text',
            'description' => 'content.fields.status.helper_text',
          ),
          'options' => 
          array (
            'scheduled' => 
            array (
              'label' => 'content.fields.status.options.scheduled',
              'placeholder' => 'content.fields.status.options.scheduled',
              'helper_text' => 'content.fields.status.options.scheduled',
              'description' => 'content.fields.status.options.scheduled',
            ),
            'confirmed' => 
            array (
              'label' => 'content.fields.status.options.confirmed',
              'placeholder' => 'content.fields.status.options.confirmed',
              'helper_text' => 'content.fields.status.options.confirmed',
              'description' => 'content.fields.status.options.confirmed',
            ),
            'completed' => 
            array (
              'label' => 'content.fields.status.options.completed',
              'placeholder' => 'content.fields.status.options.completed',
              'helper_text' => 'content.fields.status.options.completed',
              'description' => 'content.fields.status.options.completed',
            ),
            'cancelled' => 
            array (
              'label' => 'content.fields.status.options.cancelled',
              'placeholder' => 'content.fields.status.options.cancelled',
              'helper_text' => 'content.fields.status.options.cancelled',
              'description' => 'content.fields.status.options.cancelled',
            ),
            'no_show' => 
            array (
              'label' => 'content.fields.status.options.no_show',
              'placeholder' => 'content.fields.status.options.no_show',
              'helper_text' => 'content.fields.status.options.no_show',
              'description' => 'content.fields.status.options.no_show',
            ),
          ),
        ),
        'type' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.type.label',
            'placeholder' => 'content.fields.type.label',
            'helper_text' => 'content.fields.type.label',
            'description' => 'content.fields.type.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.type.placeholder',
            'placeholder' => 'content.fields.type.placeholder',
            'helper_text' => 'content.fields.type.placeholder',
            'description' => 'content.fields.type.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.type.help',
            'placeholder' => 'content.fields.type.help',
            'helper_text' => 'content.fields.type.help',
            'description' => 'content.fields.type.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.type.helper_text',
            'placeholder' => 'content.fields.type.helper_text',
            'helper_text' => 'content.fields.type.helper_text',
            'description' => 'content.fields.type.helper_text',
          ),
          'options' => 
          array (
            'consultation' => 
            array (
              'label' => 'content.fields.type.options.consultation',
              'placeholder' => 'content.fields.type.options.consultation',
              'helper_text' => 'content.fields.type.options.consultation',
              'description' => 'content.fields.type.options.consultation',
            ),
            'follow_up' => 
            array (
              'label' => 'content.fields.type.options.follow_up',
              'placeholder' => 'content.fields.type.options.follow_up',
              'helper_text' => 'content.fields.type.options.follow_up',
              'description' => 'content.fields.type.options.follow_up',
            ),
            'treatment' => 
            array (
              'label' => 'content.fields.type.options.treatment',
              'placeholder' => 'content.fields.type.options.treatment',
              'helper_text' => 'content.fields.type.options.treatment',
              'description' => 'content.fields.type.options.treatment',
            ),
            'surgery' => 
            array (
              'label' => 'content.fields.type.options.surgery',
              'placeholder' => 'content.fields.type.options.surgery',
              'helper_text' => 'content.fields.type.options.surgery',
              'description' => 'content.fields.type.options.surgery',
            ),
            'emergency' => 
            array (
              'label' => 'content.fields.type.options.emergency',
              'placeholder' => 'content.fields.type.options.emergency',
              'helper_text' => 'content.fields.type.options.emergency',
              'description' => 'content.fields.type.options.emergency',
            ),
          ),
        ),
        'notes' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.notes.label',
            'placeholder' => 'content.fields.notes.label',
            'helper_text' => 'content.fields.notes.label',
            'description' => 'content.fields.notes.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.notes.placeholder',
            'placeholder' => 'content.fields.notes.placeholder',
            'helper_text' => 'content.fields.notes.placeholder',
            'description' => 'content.fields.notes.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.notes.help',
            'placeholder' => 'content.fields.notes.help',
            'helper_text' => 'content.fields.notes.help',
            'description' => 'content.fields.notes.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.notes.helper_text',
            'placeholder' => 'content.fields.notes.helper_text',
            'helper_text' => 'content.fields.notes.helper_text',
            'description' => 'content.fields.notes.helper_text',
          ),
        ),
        'reason' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.reason.label',
            'placeholder' => 'content.fields.reason.label',
            'helper_text' => 'content.fields.reason.label',
            'description' => 'content.fields.reason.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.reason.placeholder',
            'placeholder' => 'content.fields.reason.placeholder',
            'helper_text' => 'content.fields.reason.placeholder',
            'description' => 'content.fields.reason.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.reason.help',
            'placeholder' => 'content.fields.reason.help',
            'helper_text' => 'content.fields.reason.help',
            'description' => 'content.fields.reason.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.reason.helper_text',
            'placeholder' => 'content.fields.reason.helper_text',
            'helper_text' => 'content.fields.reason.helper_text',
            'description' => 'content.fields.reason.helper_text',
          ),
        ),
        'emergency' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.emergency.label',
            'placeholder' => 'content.fields.emergency.label',
            'helper_text' => 'content.fields.emergency.label',
            'description' => 'content.fields.emergency.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.emergency.placeholder',
            'placeholder' => 'content.fields.emergency.placeholder',
            'helper_text' => 'content.fields.emergency.placeholder',
            'description' => 'content.fields.emergency.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.emergency.help',
            'placeholder' => 'content.fields.emergency.help',
            'helper_text' => 'content.fields.emergency.help',
            'description' => 'content.fields.emergency.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.emergency.helper_text',
            'placeholder' => 'content.fields.emergency.helper_text',
            'helper_text' => 'content.fields.emergency.helper_text',
            'description' => 'content.fields.emergency.helper_text',
          ),
        ),
        'eligibility_confirmed' => 
        array (
          'label' => 
          array (
            'label' => 'content.fields.eligibility_confirmed.label',
            'placeholder' => 'content.fields.eligibility_confirmed.label',
            'helper_text' => 'content.fields.eligibility_confirmed.label',
            'description' => 'content.fields.eligibility_confirmed.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.fields.eligibility_confirmed.placeholder',
            'placeholder' => 'content.fields.eligibility_confirmed.placeholder',
            'helper_text' => 'content.fields.eligibility_confirmed.placeholder',
            'description' => 'content.fields.eligibility_confirmed.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.fields.eligibility_confirmed.help',
            'placeholder' => 'content.fields.eligibility_confirmed.help',
            'helper_text' => 'content.fields.eligibility_confirmed.help',
            'description' => 'content.fields.eligibility_confirmed.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.fields.eligibility_confirmed.helper_text',
            'placeholder' => 'content.fields.eligibility_confirmed.helper_text',
            'helper_text' => 'content.fields.eligibility_confirmed.helper_text',
            'description' => 'content.fields.eligibility_confirmed.helper_text',
          ),
        ),
      ),
      'filters' => 
      array (
        'level' => 
        array (
          'label' => 'content.filters.level',
          'placeholder' => 'content.filters.level',
          'helper_text' => 'content.filters.level',
          'description' => 'content.filters.level',
        ),
        'channel' => 
        array (
          'label' => 'content.filters.channel',
          'placeholder' => 'content.filters.channel',
          'helper_text' => 'content.filters.channel',
          'description' => 'content.filters.channel',
        ),
        'date_range' => 
        array (
          'label' => 'content.filters.date_range',
          'placeholder' => 'content.filters.date_range',
          'helper_text' => 'content.filters.date_range',
          'description' => 'content.filters.date_range',
        ),
        'environment' => 
        array (
          'label' => 'content.filters.environment',
          'placeholder' => 'content.filters.environment',
          'helper_text' => 'content.filters.environment',
          'description' => 'content.filters.environment',
        ),
        'search' => 
        array (
          'label' => 'content.filters.search',
          'placeholder' => 'content.filters.search',
          'helper_text' => 'content.filters.search',
          'description' => 'content.filters.search',
        ),
        'type' => 
        array (
          'tooltip' => 
          array (
            'description' => 'content.filters.type.tooltip',
            'helper_text' => 'content.filters.type.tooltip',
            'label' => 'content.filters.type.tooltip',
            'placeholder' => 'content.filters.type.tooltip',
          ),
          'label' => 
          array (
            'label' => 'content.filters.type.label',
            'placeholder' => 'content.filters.type.label',
            'helper_text' => 'content.filters.type.label',
            'description' => 'content.filters.type.label',
          ),
        ),
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
        'today' => 
        array (
          'label' => 
          array (
            'label' => 'content.filters.today.label',
            'placeholder' => 'content.filters.today.label',
            'helper_text' => 'content.filters.today.label',
            'description' => 'content.filters.today.label',
          ),
          'description' => 
          array (
            'label' => 'content.filters.today.description',
            'placeholder' => 'content.filters.today.description',
            'helper_text' => 'content.filters.today.description',
            'description' => 'content.filters.today.description',
          ),
        ),
        'upcoming' => 
        array (
          'label' => 
          array (
            'label' => 'content.filters.upcoming.label',
            'placeholder' => 'content.filters.upcoming.label',
            'helper_text' => 'content.filters.upcoming.label',
            'description' => 'content.filters.upcoming.label',
          ),
          'description' => 
          array (
            'label' => 'content.filters.upcoming.description',
            'placeholder' => 'content.filters.upcoming.description',
            'helper_text' => 'content.filters.upcoming.description',
            'description' => 'content.filters.upcoming.description',
          ),
        ),
        'past' => 
        array (
          'label' => 
          array (
            'label' => 'content.filters.past.label',
            'placeholder' => 'content.filters.past.label',
            'helper_text' => 'content.filters.past.label',
            'description' => 'content.filters.past.label',
          ),
          'description' => 
          array (
            'label' => 'content.filters.past.description',
            'placeholder' => 'content.filters.past.description',
            'helper_text' => 'content.filters.past.description',
            'description' => 'content.filters.past.description',
          ),
        ),
        'by_status' => 
        array (
          'label' => 
          array (
            'label' => 'content.filters.by_status.label',
            'placeholder' => 'content.filters.by_status.label',
            'helper_text' => 'content.filters.by_status.label',
            'description' => 'content.filters.by_status.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.filters.by_status.placeholder',
            'placeholder' => 'content.filters.by_status.placeholder',
            'helper_text' => 'content.filters.by_status.placeholder',
            'description' => 'content.filters.by_status.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.filters.by_status.help',
            'placeholder' => 'content.filters.by_status.help',
            'helper_text' => 'content.filters.by_status.help',
            'description' => 'content.filters.by_status.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.filters.by_status.helper_text',
            'placeholder' => 'content.filters.by_status.helper_text',
            'helper_text' => 'content.filters.by_status.helper_text',
            'description' => 'content.filters.by_status.helper_text',
          ),
        ),
        'by_doctor' => 
        array (
          'label' => 
          array (
            'label' => 'content.filters.by_doctor.label',
            'placeholder' => 'content.filters.by_doctor.label',
            'helper_text' => 'content.filters.by_doctor.label',
            'description' => 'content.filters.by_doctor.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.filters.by_doctor.placeholder',
            'placeholder' => 'content.filters.by_doctor.placeholder',
            'helper_text' => 'content.filters.by_doctor.placeholder',
            'description' => 'content.filters.by_doctor.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.filters.by_doctor.help',
            'placeholder' => 'content.filters.by_doctor.help',
            'helper_text' => 'content.filters.by_doctor.help',
            'description' => 'content.filters.by_doctor.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.filters.by_doctor.helper_text',
            'placeholder' => 'content.filters.by_doctor.helper_text',
            'helper_text' => 'content.filters.by_doctor.helper_text',
            'description' => 'content.filters.by_doctor.helper_text',
          ),
        ),
        'by_date_range' => 
        array (
          'label' => 
          array (
            'label' => 'content.filters.by_date_range.label',
            'placeholder' => 'content.filters.by_date_range.label',
            'helper_text' => 'content.filters.by_date_range.label',
            'description' => 'content.filters.by_date_range.label',
          ),
          'placeholder' => 
          array (
            'label' => 'content.filters.by_date_range.placeholder',
            'placeholder' => 'content.filters.by_date_range.placeholder',
            'helper_text' => 'content.filters.by_date_range.placeholder',
            'description' => 'content.filters.by_date_range.placeholder',
          ),
          'help' => 
          array (
            'label' => 'content.filters.by_date_range.help',
            'placeholder' => 'content.filters.by_date_range.help',
            'helper_text' => 'content.filters.by_date_range.help',
            'description' => 'content.filters.by_date_range.help',
          ),
          'helper_text' => 
          array (
            'label' => 'content.filters.by_date_range.helper_text',
            'placeholder' => 'content.filters.by_date_range.helper_text',
            'helper_text' => 'content.filters.by_date_range.helper_text',
            'description' => 'content.filters.by_date_range.helper_text',
          ),
        ),
      ),
      'actions' => 
      array (
        'view_details' => 
        array (
          'label' => 'content.actions.view_details',
          'placeholder' => 'content.actions.view_details',
          'helper_text' => 'content.actions.view_details',
          'description' => 'content.actions.view_details',
        ),
        'download' => 
        array (
          'label' => 'content.actions.download',
          'placeholder' => 'content.actions.download',
          'helper_text' => 'content.actions.download',
          'description' => 'content.actions.download',
        ),
        'clear' => 
        array (
          'label' => 'content.actions.clear',
          'placeholder' => 'content.actions.clear',
          'helper_text' => 'content.actions.clear',
          'description' => 'content.actions.clear',
        ),
        'archive' => 
        array (
          'label' => 'content.actions.archive',
          'placeholder' => 'content.actions.archive',
          'helper_text' => 'content.actions.archive',
          'description' => 'content.actions.archive',
        ),
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
          'modal_heading' => 
          array (
            'label' => 'content.actions.view.modal_heading',
            'placeholder' => 'content.actions.view.modal_heading',
            'helper_text' => 'content.actions.view.modal_heading',
            'description' => 'content.actions.view.modal_heading',
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
          'success' => 
          array (
            'label' => 'content.actions.delete.success',
            'placeholder' => 'content.actions.delete.success',
            'helper_text' => 'content.actions.delete.success',
            'description' => 'content.actions.delete.success',
          ),
          'error' => 
          array (
            'label' => 'content.actions.delete.error',
            'placeholder' => 'content.actions.delete.error',
            'helper_text' => 'content.actions.delete.error',
            'description' => 'content.actions.delete.error',
          ),
        ),
        'create' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.create.label',
            'placeholder' => 'content.actions.create.label',
            'helper_text' => 'content.actions.create.label',
            'description' => 'content.actions.create.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.actions.create.tooltip',
            'placeholder' => 'content.actions.create.tooltip',
            'helper_text' => 'content.actions.create.tooltip',
            'description' => 'content.actions.create.tooltip',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.actions.create.modal_heading',
            'placeholder' => 'content.actions.create.modal_heading',
            'helper_text' => 'content.actions.create.modal_heading',
            'description' => 'content.actions.create.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.actions.create.modal_description',
            'placeholder' => 'content.actions.create.modal_description',
            'helper_text' => 'content.actions.create.modal_description',
            'description' => 'content.actions.create.modal_description',
          ),
          'success' => 
          array (
            'label' => 'content.actions.create.success',
            'placeholder' => 'content.actions.create.success',
            'helper_text' => 'content.actions.create.success',
            'description' => 'content.actions.create.success',
          ),
          'error' => 
          array (
            'label' => 'content.actions.create.error',
            'placeholder' => 'content.actions.create.error',
            'helper_text' => 'content.actions.create.error',
            'description' => 'content.actions.create.error',
          ),
        ),
        'edit' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.edit.label',
            'placeholder' => 'content.actions.edit.label',
            'helper_text' => 'content.actions.edit.label',
            'description' => 'content.actions.edit.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.actions.edit.tooltip',
            'placeholder' => 'content.actions.edit.tooltip',
            'helper_text' => 'content.actions.edit.tooltip',
            'description' => 'content.actions.edit.tooltip',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.actions.edit.modal_heading',
            'placeholder' => 'content.actions.edit.modal_heading',
            'helper_text' => 'content.actions.edit.modal_heading',
            'description' => 'content.actions.edit.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.actions.edit.modal_description',
            'placeholder' => 'content.actions.edit.modal_description',
            'helper_text' => 'content.actions.edit.modal_description',
            'description' => 'content.actions.edit.modal_description',
          ),
          'success' => 
          array (
            'label' => 'content.actions.edit.success',
            'placeholder' => 'content.actions.edit.success',
            'helper_text' => 'content.actions.edit.success',
            'description' => 'content.actions.edit.success',
          ),
          'error' => 
          array (
            'label' => 'content.actions.edit.error',
            'placeholder' => 'content.actions.edit.error',
            'helper_text' => 'content.actions.edit.error',
            'description' => 'content.actions.edit.error',
          ),
        ),
        'confirm' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.confirm.label',
            'placeholder' => 'content.actions.confirm.label',
            'helper_text' => 'content.actions.confirm.label',
            'description' => 'content.actions.confirm.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.actions.confirm.tooltip',
            'placeholder' => 'content.actions.confirm.tooltip',
            'helper_text' => 'content.actions.confirm.tooltip',
            'description' => 'content.actions.confirm.tooltip',
          ),
          'success' => 
          array (
            'label' => 'content.actions.confirm.success',
            'placeholder' => 'content.actions.confirm.success',
            'helper_text' => 'content.actions.confirm.success',
            'description' => 'content.actions.confirm.success',
          ),
          'error' => 
          array (
            'label' => 'content.actions.confirm.error',
            'placeholder' => 'content.actions.confirm.error',
            'helper_text' => 'content.actions.confirm.error',
            'description' => 'content.actions.confirm.error',
          ),
        ),
        'cancel' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.cancel.label',
            'placeholder' => 'content.actions.cancel.label',
            'helper_text' => 'content.actions.cancel.label',
            'description' => 'content.actions.cancel.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.actions.cancel.tooltip',
            'placeholder' => 'content.actions.cancel.tooltip',
            'helper_text' => 'content.actions.cancel.tooltip',
            'description' => 'content.actions.cancel.tooltip',
          ),
          'confirmation' => 
          array (
            'label' => 'content.actions.cancel.confirmation',
            'placeholder' => 'content.actions.cancel.confirmation',
            'helper_text' => 'content.actions.cancel.confirmation',
            'description' => 'content.actions.cancel.confirmation',
          ),
          'success' => 
          array (
            'label' => 'content.actions.cancel.success',
            'placeholder' => 'content.actions.cancel.success',
            'helper_text' => 'content.actions.cancel.success',
            'description' => 'content.actions.cancel.success',
          ),
          'error' => 
          array (
            'label' => 'content.actions.cancel.error',
            'placeholder' => 'content.actions.cancel.error',
            'helper_text' => 'content.actions.cancel.error',
            'description' => 'content.actions.cancel.error',
          ),
        ),
        'reschedule' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.reschedule.label',
            'placeholder' => 'content.actions.reschedule.label',
            'helper_text' => 'content.actions.reschedule.label',
            'description' => 'content.actions.reschedule.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.actions.reschedule.tooltip',
            'placeholder' => 'content.actions.reschedule.tooltip',
            'helper_text' => 'content.actions.reschedule.tooltip',
            'description' => 'content.actions.reschedule.tooltip',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.actions.reschedule.modal_heading',
            'placeholder' => 'content.actions.reschedule.modal_heading',
            'helper_text' => 'content.actions.reschedule.modal_heading',
            'description' => 'content.actions.reschedule.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.actions.reschedule.modal_description',
            'placeholder' => 'content.actions.reschedule.modal_description',
            'helper_text' => 'content.actions.reschedule.modal_description',
            'description' => 'content.actions.reschedule.modal_description',
          ),
          'success' => 
          array (
            'label' => 'content.actions.reschedule.success',
            'placeholder' => 'content.actions.reschedule.success',
            'helper_text' => 'content.actions.reschedule.success',
            'description' => 'content.actions.reschedule.success',
          ),
          'error' => 
          array (
            'label' => 'content.actions.reschedule.error',
            'placeholder' => 'content.actions.reschedule.error',
            'helper_text' => 'content.actions.reschedule.error',
            'description' => 'content.actions.reschedule.error',
          ),
        ),
        'mark_completed' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.mark_completed.label',
            'placeholder' => 'content.actions.mark_completed.label',
            'helper_text' => 'content.actions.mark_completed.label',
            'description' => 'content.actions.mark_completed.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.actions.mark_completed.tooltip',
            'placeholder' => 'content.actions.mark_completed.tooltip',
            'helper_text' => 'content.actions.mark_completed.tooltip',
            'description' => 'content.actions.mark_completed.tooltip',
          ),
          'confirmation' => 
          array (
            'label' => 'content.actions.mark_completed.confirmation',
            'placeholder' => 'content.actions.mark_completed.confirmation',
            'helper_text' => 'content.actions.mark_completed.confirmation',
            'description' => 'content.actions.mark_completed.confirmation',
          ),
          'success' => 
          array (
            'label' => 'content.actions.mark_completed.success',
            'placeholder' => 'content.actions.mark_completed.success',
            'helper_text' => 'content.actions.mark_completed.success',
            'description' => 'content.actions.mark_completed.success',
          ),
          'error' => 
          array (
            'label' => 'content.actions.mark_completed.error',
            'placeholder' => 'content.actions.mark_completed.error',
            'helper_text' => 'content.actions.mark_completed.error',
            'description' => 'content.actions.mark_completed.error',
          ),
        ),
        'mark_no_show' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.mark_no_show.label',
            'placeholder' => 'content.actions.mark_no_show.label',
            'helper_text' => 'content.actions.mark_no_show.label',
            'description' => 'content.actions.mark_no_show.label',
          ),
          'tooltip' => 
          array (
            'label' => 'content.actions.mark_no_show.tooltip',
            'placeholder' => 'content.actions.mark_no_show.tooltip',
            'helper_text' => 'content.actions.mark_no_show.tooltip',
            'description' => 'content.actions.mark_no_show.tooltip',
          ),
          'confirmation' => 
          array (
            'label' => 'content.actions.mark_no_show.confirmation',
            'placeholder' => 'content.actions.mark_no_show.confirmation',
            'helper_text' => 'content.actions.mark_no_show.confirmation',
            'description' => 'content.actions.mark_no_show.confirmation',
          ),
          'success' => 
          array (
            'label' => 'content.actions.mark_no_show.success',
            'placeholder' => 'content.actions.mark_no_show.success',
            'helper_text' => 'content.actions.mark_no_show.success',
            'description' => 'content.actions.mark_no_show.success',
          ),
          'error' => 
          array (
            'label' => 'content.actions.mark_no_show.error',
            'placeholder' => 'content.actions.mark_no_show.error',
            'helper_text' => 'content.actions.mark_no_show.error',
            'description' => 'content.actions.mark_no_show.error',
          ),
        ),
        'legend' => 
        array (
          'label' => 
          array (
            'label' => 'content.actions.legend.label',
            'placeholder' => 'content.actions.legend.label',
            'helper_text' => 'content.actions.legend.label',
            'description' => 'content.actions.legend.label',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.actions.legend.modal_heading',
            'placeholder' => 'content.actions.legend.modal_heading',
            'helper_text' => 'content.actions.legend.modal_heading',
            'description' => 'content.actions.legend.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.actions.legend.modal_description',
            'placeholder' => 'content.actions.legend.modal_description',
            'helper_text' => 'content.actions.legend.modal_description',
            'description' => 'content.actions.legend.modal_description',
          ),
        ),
      ),
      'messages' => 
      array (
        'no_logs' => 
        array (
          'label' => 'content.messages.no_logs',
          'placeholder' => 'content.messages.no_logs',
          'helper_text' => 'content.messages.no_logs',
          'description' => 'content.messages.no_logs',
        ),
        'cleared' => 
        array (
          'label' => 'content.messages.cleared',
          'placeholder' => 'content.messages.cleared',
          'helper_text' => 'content.messages.cleared',
          'description' => 'content.messages.cleared',
        ),
        'archived' => 
        array (
          'label' => 'content.messages.archived',
          'placeholder' => 'content.messages.archived',
          'helper_text' => 'content.messages.archived',
          'description' => 'content.messages.archived',
        ),
        'downloaded' => 
        array (
          'label' => 'content.messages.downloaded',
          'placeholder' => 'content.messages.downloaded',
          'helper_text' => 'content.messages.downloaded',
          'description' => 'content.messages.downloaded',
        ),
        'created' => 
        array (
          'label' => 'content.messages.created',
          'placeholder' => 'content.messages.created',
          'helper_text' => 'content.messages.created',
          'description' => 'content.messages.created',
        ),
        'updated' => 
        array (
          'label' => 'content.messages.updated',
          'placeholder' => 'content.messages.updated',
          'helper_text' => 'content.messages.updated',
          'description' => 'content.messages.updated',
        ),
        'deleted' => 
        array (
          'label' => 'content.messages.deleted',
          'placeholder' => 'content.messages.deleted',
          'helper_text' => 'content.messages.deleted',
          'description' => 'content.messages.deleted',
        ),
        'confirmed' => 
        array (
          'label' => 'content.messages.confirmed',
          'placeholder' => 'content.messages.confirmed',
          'helper_text' => 'content.messages.confirmed',
          'description' => 'content.messages.confirmed',
        ),
        'cancelled' => 
        array (
          'label' => 'content.messages.cancelled',
          'placeholder' => 'content.messages.cancelled',
          'helper_text' => 'content.messages.cancelled',
          'description' => 'content.messages.cancelled',
        ),
        'completed' => 
        array (
          'label' => 'content.messages.completed',
          'placeholder' => 'content.messages.completed',
          'helper_text' => 'content.messages.completed',
          'description' => 'content.messages.completed',
        ),
        'rescheduled' => 
        array (
          'label' => 'content.messages.rescheduled',
          'placeholder' => 'content.messages.rescheduled',
          'helper_text' => 'content.messages.rescheduled',
          'description' => 'content.messages.rescheduled',
        ),
        'conflict' => 
        array (
          'label' => 'content.messages.conflict',
          'placeholder' => 'content.messages.conflict',
          'helper_text' => 'content.messages.conflict',
          'description' => 'content.messages.conflict',
        ),
        'unavailable_slot' => 
        array (
          'label' => 'content.messages.unavailable_slot',
          'placeholder' => 'content.messages.unavailable_slot',
          'helper_text' => 'content.messages.unavailable_slot',
          'description' => 'content.messages.unavailable_slot',
        ),
        'past_date' => 
        array (
          'label' => 'content.messages.past_date',
          'placeholder' => 'content.messages.past_date',
          'helper_text' => 'content.messages.past_date',
          'description' => 'content.messages.past_date',
        ),
        'unavailable' => 
        array (
          'label' => 'content.messages.unavailable',
          'placeholder' => 'content.messages.unavailable',
          'helper_text' => 'content.messages.unavailable',
          'description' => 'content.messages.unavailable',
        ),
        'availability_created' => 
        array (
          'label' => 'content.messages.availability_created',
          'placeholder' => 'content.messages.availability_created',
          'helper_text' => 'content.messages.availability_created',
          'description' => 'content.messages.availability_created',
        ),
        'availability_updated' => 
        array (
          'label' => 'content.messages.availability_updated',
          'placeholder' => 'content.messages.availability_updated',
          'helper_text' => 'content.messages.availability_updated',
          'description' => 'content.messages.availability_updated',
        ),
        'availability_deleted' => 
        array (
          'label' => 'content.messages.availability_deleted',
          'placeholder' => 'content.messages.availability_deleted',
          'helper_text' => 'content.messages.availability_deleted',
          'description' => 'content.messages.availability_deleted',
        ),
        'appointment_updated' => 
        array (
          'label' => 'content.messages.appointment_updated',
          'placeholder' => 'content.messages.appointment_updated',
          'helper_text' => 'content.messages.appointment_updated',
          'description' => 'content.messages.appointment_updated',
        ),
        'error_booking_appointment' => 
        array (
          'description' => 'content.messages.error_booking_appointment',
        ),
      ),
      'badges' => 
      array (
        'level' => 
        array (
          'emergency' => 
          array (
            'label' => 'content.badges.level.emergency',
            'placeholder' => 'content.badges.level.emergency',
            'helper_text' => 'content.badges.level.emergency',
            'description' => 'content.badges.level.emergency',
          ),
          'alert' => 
          array (
            'label' => 'content.badges.level.alert',
            'placeholder' => 'content.badges.level.alert',
            'helper_text' => 'content.badges.level.alert',
            'description' => 'content.badges.level.alert',
          ),
          'critical' => 
          array (
            'label' => 'content.badges.level.critical',
            'placeholder' => 'content.badges.level.critical',
            'helper_text' => 'content.badges.level.critical',
            'description' => 'content.badges.level.critical',
          ),
          'error' => 
          array (
            'label' => 'content.badges.level.error',
            'placeholder' => 'content.badges.level.error',
            'helper_text' => 'content.badges.level.error',
            'description' => 'content.badges.level.error',
          ),
          'warning' => 
          array (
            'label' => 'content.badges.level.warning',
            'placeholder' => 'content.badges.level.warning',
            'helper_text' => 'content.badges.level.warning',
            'description' => 'content.badges.level.warning',
          ),
          'notice' => 
          array (
            'label' => 'content.badges.level.notice',
            'placeholder' => 'content.badges.level.notice',
            'helper_text' => 'content.badges.level.notice',
            'description' => 'content.badges.level.notice',
          ),
          'info' => 
          array (
            'label' => 'content.badges.level.info',
            'placeholder' => 'content.badges.level.info',
            'helper_text' => 'content.badges.level.info',
            'description' => 'content.badges.level.info',
          ),
          'debug' => 
          array (
            'label' => 'content.badges.level.debug',
            'placeholder' => 'content.badges.level.debug',
            'helper_text' => 'content.badges.level.debug',
            'description' => 'content.badges.level.debug',
          ),
        ),
      ),
      'specialties' => 
      array (
        'empty' => 
        array (
          'description' => 'content.specialties.empty',
          'helper_text' => 'content.specialties.empty',
        ),
      ),
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
      'state_transition' => 
      array (
        'missing_data' => 
        array (
          'description' => 'content.state_transition.missing_data',
          'helper_text' => 'content.state_transition.missing_data',
        ),
      ),
      'delete' => 
      array (
        'tooltip' => 
        array (
          'description' => 'content.delete.tooltip',
          'helper_text' => 'content.delete.tooltip',
          'placeholder' => 'content.delete.tooltip',
        ),
      ),
      'states' => 
      array (
        'rescheduled' => 
        array (
          'modal_description' => 
          array (
            'description' => 'content.states.rescheduled.modal_description',
            'label' => 'content.states.rescheduled.modal_description',
            'placeholder' => 'content.states.rescheduled.modal_description',
            'helper_text' => 'content.states.rescheduled.modal_description',
          ),
          'label' => 
          array (
            'label' => 'content.states.rescheduled.label',
            'placeholder' => 'content.states.rescheduled.label',
            'helper_text' => 'content.states.rescheduled.label',
            'description' => 'content.states.rescheduled.label',
          ),
          'color' => 
          array (
            'label' => 'content.states.rescheduled.color',
            'placeholder' => 'content.states.rescheduled.color',
            'helper_text' => 'content.states.rescheduled.color',
            'description' => 'content.states.rescheduled.color',
          ),
          'bg_color' => 
          array (
            'label' => 'content.states.rescheduled.bg_color',
            'placeholder' => 'content.states.rescheduled.bg_color',
            'helper_text' => 'content.states.rescheduled.bg_color',
            'description' => 'content.states.rescheduled.bg_color',
          ),
          'icon' => 
          array (
            'label' => 'content.states.rescheduled.icon',
            'placeholder' => 'content.states.rescheduled.icon',
            'helper_text' => 'content.states.rescheduled.icon',
            'description' => 'content.states.rescheduled.icon',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.states.rescheduled.modal_heading',
            'placeholder' => 'content.states.rescheduled.modal_heading',
            'helper_text' => 'content.states.rescheduled.modal_heading',
            'description' => 'content.states.rescheduled.modal_heading',
          ),
        ),
        'confirmed' => 
        array (
          'label' => 
          array (
            'label' => 'content.states.confirmed.label',
            'placeholder' => 'content.states.confirmed.label',
            'helper_text' => 'content.states.confirmed.label',
            'description' => 'content.states.confirmed.label',
          ),
          'color' => 
          array (
            'label' => 'content.states.confirmed.color',
            'placeholder' => 'content.states.confirmed.color',
            'helper_text' => 'content.states.confirmed.color',
            'description' => 'content.states.confirmed.color',
          ),
          'icon' => 
          array (
            'label' => 'content.states.confirmed.icon',
            'placeholder' => 'content.states.confirmed.icon',
            'helper_text' => 'content.states.confirmed.icon',
            'description' => 'content.states.confirmed.icon',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.states.confirmed.modal_heading',
            'placeholder' => 'content.states.confirmed.modal_heading',
            'helper_text' => 'content.states.confirmed.modal_heading',
            'description' => 'content.states.confirmed.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.states.confirmed.modal_description',
            'placeholder' => 'content.states.confirmed.modal_description',
            'helper_text' => 'content.states.confirmed.modal_description',
            'description' => 'content.states.confirmed.modal_description',
          ),
          'bg_color' => 
          array (
            'label' => 'content.states.confirmed.bg_color',
            'placeholder' => 'content.states.confirmed.bg_color',
            'helper_text' => 'content.states.confirmed.bg_color',
            'description' => 'content.states.confirmed.bg_color',
          ),
        ),
        'rejected' => 
        array (
          'label' => 
          array (
            'label' => 'content.states.rejected.label',
            'placeholder' => 'content.states.rejected.label',
            'helper_text' => 'content.states.rejected.label',
            'description' => 'content.states.rejected.label',
          ),
          'color' => 
          array (
            'label' => 'content.states.rejected.color',
            'placeholder' => 'content.states.rejected.color',
            'helper_text' => 'content.states.rejected.color',
            'description' => 'content.states.rejected.color',
          ),
          'icon' => 
          array (
            'label' => 'content.states.rejected.icon',
            'placeholder' => 'content.states.rejected.icon',
            'helper_text' => 'content.states.rejected.icon',
            'description' => 'content.states.rejected.icon',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.states.rejected.modal_heading',
            'placeholder' => 'content.states.rejected.modal_heading',
            'helper_text' => 'content.states.rejected.modal_heading',
            'description' => 'content.states.rejected.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.states.rejected.modal_description',
            'placeholder' => 'content.states.rejected.modal_description',
            'helper_text' => 'content.states.rejected.modal_description',
            'description' => 'content.states.rejected.modal_description',
          ),
          'bg_color' => 
          array (
            'label' => 'content.states.rejected.bg_color',
            'placeholder' => 'content.states.rejected.bg_color',
            'helper_text' => 'content.states.rejected.bg_color',
            'description' => 'content.states.rejected.bg_color',
          ),
        ),
        'pending' => 
        array (
          'label' => 
          array (
            'label' => 'content.states.pending.label',
            'placeholder' => 'content.states.pending.label',
            'helper_text' => 'content.states.pending.label',
            'description' => 'content.states.pending.label',
          ),
          'color' => 
          array (
            'label' => 'content.states.pending.color',
            'placeholder' => 'content.states.pending.color',
            'helper_text' => 'content.states.pending.color',
            'description' => 'content.states.pending.color',
          ),
          'bg_color' => 
          array (
            'label' => 'content.states.pending.bg_color',
            'placeholder' => 'content.states.pending.bg_color',
            'helper_text' => 'content.states.pending.bg_color',
            'description' => 'content.states.pending.bg_color',
          ),
          'icon' => 
          array (
            'label' => 'content.states.pending.icon',
            'placeholder' => 'content.states.pending.icon',
            'helper_text' => 'content.states.pending.icon',
            'description' => 'content.states.pending.icon',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.states.pending.modal_heading',
            'placeholder' => 'content.states.pending.modal_heading',
            'helper_text' => 'content.states.pending.modal_heading',
            'description' => 'content.states.pending.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.states.pending.modal_description',
            'placeholder' => 'content.states.pending.modal_description',
            'helper_text' => 'content.states.pending.modal_description',
            'description' => 'content.states.pending.modal_description',
          ),
        ),
        'scheduled' => 
        array (
          'label' => 
          array (
            'label' => 'content.states.scheduled.label',
            'placeholder' => 'content.states.scheduled.label',
            'helper_text' => 'content.states.scheduled.label',
            'description' => 'content.states.scheduled.label',
          ),
          'color' => 
          array (
            'label' => 'content.states.scheduled.color',
            'placeholder' => 'content.states.scheduled.color',
            'helper_text' => 'content.states.scheduled.color',
            'description' => 'content.states.scheduled.color',
          ),
          'bg_color' => 
          array (
            'label' => 'content.states.scheduled.bg_color',
            'placeholder' => 'content.states.scheduled.bg_color',
            'helper_text' => 'content.states.scheduled.bg_color',
            'description' => 'content.states.scheduled.bg_color',
          ),
          'icon' => 
          array (
            'label' => 'content.states.scheduled.icon',
            'placeholder' => 'content.states.scheduled.icon',
            'helper_text' => 'content.states.scheduled.icon',
            'description' => 'content.states.scheduled.icon',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.states.scheduled.modal_heading',
            'placeholder' => 'content.states.scheduled.modal_heading',
            'helper_text' => 'content.states.scheduled.modal_heading',
            'description' => 'content.states.scheduled.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.states.scheduled.modal_description',
            'placeholder' => 'content.states.scheduled.modal_description',
            'helper_text' => 'content.states.scheduled.modal_description',
            'description' => 'content.states.scheduled.modal_description',
          ),
        ),
        'in_progress' => 
        array (
          'label' => 
          array (
            'label' => 'content.states.in_progress.label',
            'placeholder' => 'content.states.in_progress.label',
            'helper_text' => 'content.states.in_progress.label',
            'description' => 'content.states.in_progress.label',
          ),
          'color' => 
          array (
            'label' => 'content.states.in_progress.color',
            'placeholder' => 'content.states.in_progress.color',
            'helper_text' => 'content.states.in_progress.color',
            'description' => 'content.states.in_progress.color',
          ),
          'bg_color' => 
          array (
            'label' => 'content.states.in_progress.bg_color',
            'placeholder' => 'content.states.in_progress.bg_color',
            'helper_text' => 'content.states.in_progress.bg_color',
            'description' => 'content.states.in_progress.bg_color',
          ),
          'icon' => 
          array (
            'label' => 'content.states.in_progress.icon',
            'placeholder' => 'content.states.in_progress.icon',
            'helper_text' => 'content.states.in_progress.icon',
            'description' => 'content.states.in_progress.icon',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.states.in_progress.modal_heading',
            'placeholder' => 'content.states.in_progress.modal_heading',
            'helper_text' => 'content.states.in_progress.modal_heading',
            'description' => 'content.states.in_progress.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.states.in_progress.modal_description',
            'placeholder' => 'content.states.in_progress.modal_description',
            'helper_text' => 'content.states.in_progress.modal_description',
            'description' => 'content.states.in_progress.modal_description',
          ),
        ),
        'completed' => 
        array (
          'label' => 
          array (
            'label' => 'content.states.completed.label',
            'placeholder' => 'content.states.completed.label',
            'helper_text' => 'content.states.completed.label',
            'description' => 'content.states.completed.label',
          ),
          'color' => 
          array (
            'label' => 'content.states.completed.color',
            'placeholder' => 'content.states.completed.color',
            'helper_text' => 'content.states.completed.color',
            'description' => 'content.states.completed.color',
          ),
          'bg_color' => 
          array (
            'label' => 'content.states.completed.bg_color',
            'placeholder' => 'content.states.completed.bg_color',
            'helper_text' => 'content.states.completed.bg_color',
            'description' => 'content.states.completed.bg_color',
          ),
          'icon' => 
          array (
            'label' => 'content.states.completed.icon',
            'placeholder' => 'content.states.completed.icon',
            'helper_text' => 'content.states.completed.icon',
            'description' => 'content.states.completed.icon',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.states.completed.modal_heading',
            'placeholder' => 'content.states.completed.modal_heading',
            'helper_text' => 'content.states.completed.modal_heading',
            'description' => 'content.states.completed.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.states.completed.modal_description',
            'placeholder' => 'content.states.completed.modal_description',
            'helper_text' => 'content.states.completed.modal_description',
            'description' => 'content.states.completed.modal_description',
          ),
        ),
        'cancelled' => 
        array (
          'label' => 
          array (
            'label' => 'content.states.cancelled.label',
            'placeholder' => 'content.states.cancelled.label',
            'helper_text' => 'content.states.cancelled.label',
            'description' => 'content.states.cancelled.label',
          ),
          'color' => 
          array (
            'label' => 'content.states.cancelled.color',
            'placeholder' => 'content.states.cancelled.color',
            'helper_text' => 'content.states.cancelled.color',
            'description' => 'content.states.cancelled.color',
          ),
          'bg_color' => 
          array (
            'label' => 'content.states.cancelled.bg_color',
            'placeholder' => 'content.states.cancelled.bg_color',
            'helper_text' => 'content.states.cancelled.bg_color',
            'description' => 'content.states.cancelled.bg_color',
          ),
          'icon' => 
          array (
            'label' => 'content.states.cancelled.icon',
            'placeholder' => 'content.states.cancelled.icon',
            'helper_text' => 'content.states.cancelled.icon',
            'description' => 'content.states.cancelled.icon',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.states.cancelled.modal_heading',
            'placeholder' => 'content.states.cancelled.modal_heading',
            'helper_text' => 'content.states.cancelled.modal_heading',
            'description' => 'content.states.cancelled.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.states.cancelled.modal_description',
            'placeholder' => 'content.states.cancelled.modal_description',
            'helper_text' => 'content.states.cancelled.modal_description',
            'description' => 'content.states.cancelled.modal_description',
          ),
        ),
        'no_show' => 
        array (
          'label' => 
          array (
            'label' => 'content.states.no_show.label',
            'placeholder' => 'content.states.no_show.label',
            'helper_text' => 'content.states.no_show.label',
            'description' => 'content.states.no_show.label',
          ),
          'color' => 
          array (
            'label' => 'content.states.no_show.color',
            'placeholder' => 'content.states.no_show.color',
            'helper_text' => 'content.states.no_show.color',
            'description' => 'content.states.no_show.color',
          ),
          'bg_color' => 
          array (
            'label' => 'content.states.no_show.bg_color',
            'placeholder' => 'content.states.no_show.bg_color',
            'helper_text' => 'content.states.no_show.bg_color',
            'description' => 'content.states.no_show.bg_color',
          ),
          'icon' => 
          array (
            'label' => 'content.states.no_show.icon',
            'placeholder' => 'content.states.no_show.icon',
            'helper_text' => 'content.states.no_show.icon',
            'description' => 'content.states.no_show.icon',
          ),
          'modal_heading' => 
          array (
            'label' => 'content.states.no_show.modal_heading',
            'placeholder' => 'content.states.no_show.modal_heading',
            'helper_text' => 'content.states.no_show.modal_heading',
            'description' => 'content.states.no_show.modal_heading',
          ),
          'modal_description' => 
          array (
            'label' => 'content.states.no_show.modal_description',
            'placeholder' => 'content.states.no_show.modal_description',
            'helper_text' => 'content.states.no_show.modal_description',
            'description' => 'content.states.no_show.modal_description',
          ),
        ),
      ),
      'name' => 
      array (
        'label' => 'content.name',
        'placeholder' => 'content.name',
        'helper_text' => 'content.name',
        'description' => 'content.name',
      ),
      'model' => 
      array (
        'label' => 
        array (
          'label' => 'content.model.label',
          'placeholder' => 'content.model.label',
          'helper_text' => 'content.model.label',
          'description' => 'content.model.label',
        ),
        'plural' => 
        array (
          'label' => 'content.model.plural',
          'placeholder' => 'content.model.plural',
          'helper_text' => 'content.model.plural',
          'description' => 'content.model.plural',
        ),
        'description' => 
        array (
          'label' => 'content.model.description',
          'placeholder' => 'content.model.description',
          'helper_text' => 'content.model.description',
          'description' => 'content.model.description',
        ),
      ),
      'pages' => 
      array (
        'index' => 
        array (
          'title' => 
          array (
            'label' => 'content.pages.index.title',
            'placeholder' => 'content.pages.index.title',
            'helper_text' => 'content.pages.index.title',
            'description' => 'content.pages.index.title',
          ),
          'subtitle' => 
          array (
            'label' => 'content.pages.index.subtitle',
            'placeholder' => 'content.pages.index.subtitle',
            'helper_text' => 'content.pages.index.subtitle',
            'description' => 'content.pages.index.subtitle',
          ),
          'description' => 
          array (
            'label' => 'content.pages.index.description',
            'placeholder' => 'content.pages.index.description',
            'helper_text' => 'content.pages.index.description',
            'description' => 'content.pages.index.description',
          ),
        ),
        'create' => 
        array (
          'title' => 
          array (
            'label' => 'content.pages.create.title',
            'placeholder' => 'content.pages.create.title',
            'helper_text' => 'content.pages.create.title',
            'description' => 'content.pages.create.title',
          ),
          'subtitle' => 
          array (
            'label' => 'content.pages.create.subtitle',
            'placeholder' => 'content.pages.create.subtitle',
            'helper_text' => 'content.pages.create.subtitle',
            'description' => 'content.pages.create.subtitle',
          ),
          'description' => 
          array (
            'label' => 'content.pages.create.description',
            'placeholder' => 'content.pages.create.description',
            'helper_text' => 'content.pages.create.description',
            'description' => 'content.pages.create.description',
          ),
        ),
        'edit' => 
        array (
          'title' => 
          array (
            'label' => 'content.pages.edit.title',
            'placeholder' => 'content.pages.edit.title',
            'helper_text' => 'content.pages.edit.title',
            'description' => 'content.pages.edit.title',
          ),
          'subtitle' => 
          array (
            'label' => 'content.pages.edit.subtitle',
            'placeholder' => 'content.pages.edit.subtitle',
            'helper_text' => 'content.pages.edit.subtitle',
            'description' => 'content.pages.edit.subtitle',
          ),
          'description' => 
          array (
            'label' => 'content.pages.edit.description',
            'placeholder' => 'content.pages.edit.description',
            'helper_text' => 'content.pages.edit.description',
            'description' => 'content.pages.edit.description',
          ),
        ),
        'availability' => 
        array (
          'title' => 
          array (
            'label' => 'content.pages.availability.title',
            'placeholder' => 'content.pages.availability.title',
            'helper_text' => 'content.pages.availability.title',
            'description' => 'content.pages.availability.title',
          ),
          'heading' => 
          array (
            'label' => 'content.pages.availability.heading',
            'placeholder' => 'content.pages.availability.heading',
            'helper_text' => 'content.pages.availability.heading',
            'description' => 'content.pages.availability.heading',
          ),
          'subheading' => 
          array (
            'label' => 'content.pages.availability.subheading',
            'placeholder' => 'content.pages.availability.subheading',
            'helper_text' => 'content.pages.availability.subheading',
            'description' => 'content.pages.availability.subheading',
          ),
          'description' => 
          array (
            'label' => 'content.pages.availability.description',
            'placeholder' => 'content.pages.availability.description',
            'helper_text' => 'content.pages.availability.description',
            'description' => 'content.pages.availability.description',
          ),
        ),
      ),
      'calendar' => 
      array (
        'title' => 
        array (
          'label' => 'content.calendar.title',
          'placeholder' => 'content.calendar.title',
          'helper_text' => 'content.calendar.title',
          'description' => 'content.calendar.title',
        ),
        'today' => 
        array (
          'label' => 'content.calendar.today',
          'placeholder' => 'content.calendar.today',
          'helper_text' => 'content.calendar.today',
          'description' => 'content.calendar.today',
        ),
        'month' => 
        array (
          'label' => 'content.calendar.month',
          'placeholder' => 'content.calendar.month',
          'helper_text' => 'content.calendar.month',
          'description' => 'content.calendar.month',
        ),
        'week' => 
        array (
          'label' => 'content.calendar.week',
          'placeholder' => 'content.calendar.week',
          'helper_text' => 'content.calendar.week',
          'description' => 'content.calendar.week',
        ),
        'day' => 
        array (
          'label' => 'content.calendar.day',
          'placeholder' => 'content.calendar.day',
          'helper_text' => 'content.calendar.day',
          'description' => 'content.calendar.day',
        ),
        'list' => 
        array (
          'label' => 'content.calendar.list',
          'placeholder' => 'content.calendar.list',
          'helper_text' => 'content.calendar.list',
          'description' => 'content.calendar.list',
        ),
        'next' => 
        array (
          'label' => 'content.calendar.next',
          'placeholder' => 'content.calendar.next',
          'helper_text' => 'content.calendar.next',
          'description' => 'content.calendar.next',
        ),
        'previous' => 
        array (
          'label' => 'content.calendar.previous',
          'placeholder' => 'content.calendar.previous',
          'helper_text' => 'content.calendar.previous',
          'description' => 'content.calendar.previous',
        ),
        'day_view' => 
        array (
          'label' => 'content.calendar.day_view',
          'placeholder' => 'content.calendar.day_view',
          'helper_text' => 'content.calendar.day_view',
          'description' => 'content.calendar.day_view',
        ),
        'week_view' => 
        array (
          'label' => 'content.calendar.week_view',
          'placeholder' => 'content.calendar.week_view',
          'helper_text' => 'content.calendar.week_view',
          'description' => 'content.calendar.week_view',
        ),
        'month_view' => 
        array (
          'label' => 'content.calendar.month_view',
          'placeholder' => 'content.calendar.month_view',
          'helper_text' => 'content.calendar.month_view',
          'description' => 'content.calendar.month_view',
        ),
      ),
      'availability' => 
      array (
        'title' => 
        array (
          'label' => 'content.availability.title',
          'placeholder' => 'content.availability.title',
          'helper_text' => 'content.availability.title',
          'description' => 'content.availability.title',
        ),
        'add' => 
        array (
          'label' => 'content.availability.add',
          'placeholder' => 'content.availability.add',
          'helper_text' => 'content.availability.add',
          'description' => 'content.availability.add',
        ),
        'edit' => 
        array (
          'label' => 'content.availability.edit',
          'placeholder' => 'content.availability.edit',
          'helper_text' => 'content.availability.edit',
          'description' => 'content.availability.edit',
        ),
        'delete' => 
        array (
          'label' => 'content.availability.delete',
          'placeholder' => 'content.availability.delete',
          'helper_text' => 'content.availability.delete',
          'description' => 'content.availability.delete',
        ),
        'create_success' => 
        array (
          'label' => 'content.availability.create_success',
          'placeholder' => 'content.availability.create_success',
          'helper_text' => 'content.availability.create_success',
          'description' => 'content.availability.create_success',
        ),
        'update_success' => 
        array (
          'label' => 'content.availability.update_success',
          'placeholder' => 'content.availability.update_success',
          'helper_text' => 'content.availability.update_success',
          'description' => 'content.availability.update_success',
        ),
        'delete_success' => 
        array (
          'label' => 'content.availability.delete_success',
          'placeholder' => 'content.availability.delete_success',
          'helper_text' => 'content.availability.delete_success',
          'description' => 'content.availability.delete_success',
        ),
      ),
      'legend' => 
      array (
        'description' => 
        array (
          'label' => 'content.legend.description',
          'placeholder' => 'content.legend.description',
          'helper_text' => 'content.legend.description',
          'description' => 'content.legend.description',
        ),
        'types' => 
        array (
          'label' => 'content.legend.types',
          'placeholder' => 'content.legend.types',
          'helper_text' => 'content.legend.types',
          'description' => 'content.legend.types',
        ),
        'icons' => 
        array (
          'label' => 'content.legend.icons',
          'placeholder' => 'content.legend.icons',
          'helper_text' => 'content.legend.icons',
          'description' => 'content.legend.icons',
        ),
        'availability' => 
        array (
          'label' => 'content.legend.availability',
          'placeholder' => 'content.legend.availability',
          'helper_text' => 'content.legend.availability',
          'description' => 'content.legend.availability',
        ),
        'pending' => 
        array (
          'label' => 'content.legend.pending',
          'placeholder' => 'content.legend.pending',
          'helper_text' => 'content.legend.pending',
          'description' => 'content.legend.pending',
        ),
        'confirmed' => 
        array (
          'label' => 'content.legend.confirmed',
          'placeholder' => 'content.legend.confirmed',
          'helper_text' => 'content.legend.confirmed',
          'description' => 'content.legend.confirmed',
        ),
        'completed' => 
        array (
          'label' => 'content.legend.completed',
          'placeholder' => 'content.legend.completed',
          'helper_text' => 'content.legend.completed',
          'description' => 'content.legend.completed',
        ),
        'cancelled' => 
        array (
          'label' => 'content.legend.cancelled',
          'placeholder' => 'content.legend.cancelled',
          'helper_text' => 'content.legend.cancelled',
          'description' => 'content.legend.cancelled',
        ),
        'availability_icon' => 
        array (
          'label' => 'content.legend.availability_icon',
          'placeholder' => 'content.legend.availability_icon',
          'helper_text' => 'content.legend.availability_icon',
          'description' => 'content.legend.availability_icon',
        ),
        'pending_icon' => 
        array (
          'label' => 'content.legend.pending_icon',
          'placeholder' => 'content.legend.pending_icon',
          'helper_text' => 'content.legend.pending_icon',
          'description' => 'content.legend.pending_icon',
        ),
        'confirmed_icon' => 
        array (
          'label' => 'content.legend.confirmed_icon',
          'placeholder' => 'content.legend.confirmed_icon',
          'helper_text' => 'content.legend.confirmed_icon',
          'description' => 'content.legend.confirmed_icon',
        ),
        'completed_icon' => 
        array (
          'label' => 'content.legend.completed_icon',
          'placeholder' => 'content.legend.completed_icon',
          'helper_text' => 'content.legend.completed_icon',
          'description' => 'content.legend.completed_icon',
        ),
        'cancelled_icon' => 
        array (
          'label' => 'content.legend.cancelled_icon',
          'placeholder' => 'content.legend.cancelled_icon',
          'helper_text' => 'content.legend.cancelled_icon',
          'description' => 'content.legend.cancelled_icon',
        ),
        'instructions' => 
        array (
          'label' => 'content.legend.instructions',
          'placeholder' => 'content.legend.instructions',
          'helper_text' => 'content.legend.instructions',
          'description' => 'content.legend.instructions',
        ),
        'instruction_add' => 
        array (
          'label' => 'content.legend.instruction_add',
          'placeholder' => 'content.legend.instruction_add',
          'helper_text' => 'content.legend.instruction_add',
          'description' => 'content.legend.instruction_add',
        ),
        'instruction_edit' => 
        array (
          'label' => 'content.legend.instruction_edit',
          'placeholder' => 'content.legend.instruction_edit',
          'helper_text' => 'content.legend.instruction_edit',
          'description' => 'content.legend.instruction_edit',
        ),
        'instruction_delete' => 
        array (
          'label' => 'content.legend.instruction_delete',
          'placeholder' => 'content.legend.instruction_delete',
          'helper_text' => 'content.legend.instruction_delete',
          'description' => 'content.legend.instruction_delete',
        ),
        'instruction_approve' => 
        array (
          'label' => 'content.legend.instruction_approve',
          'placeholder' => 'content.legend.instruction_approve',
          'helper_text' => 'content.legend.instruction_approve',
          'description' => 'content.legend.instruction_approve',
        ),
      ),
      'notifications' => 
      array (
        'reminder' => 
        array (
          'title' => 
          array (
            'label' => 'content.notifications.reminder.title',
            'placeholder' => 'content.notifications.reminder.title',
            'helper_text' => 'content.notifications.reminder.title',
            'description' => 'content.notifications.reminder.title',
          ),
          'body' => 
          array (
            'label' => 'content.notifications.reminder.body',
            'placeholder' => 'content.notifications.reminder.body',
            'helper_text' => 'content.notifications.reminder.body',
            'description' => 'content.notifications.reminder.body',
          ),
        ),
        'confirmation' => 
        array (
          'title' => 
          array (
            'label' => 'content.notifications.confirmation.title',
            'placeholder' => 'content.notifications.confirmation.title',
            'helper_text' => 'content.notifications.confirmation.title',
            'description' => 'content.notifications.confirmation.title',
          ),
          'body' => 
          array (
            'label' => 'content.notifications.confirmation.body',
            'placeholder' => 'content.notifications.confirmation.body',
            'helper_text' => 'content.notifications.confirmation.body',
            'description' => 'content.notifications.confirmation.body',
          ),
        ),
        'cancellation' => 
        array (
          'title' => 
          array (
            'label' => 'content.notifications.cancellation.title',
            'placeholder' => 'content.notifications.cancellation.title',
            'helper_text' => 'content.notifications.cancellation.title',
            'description' => 'content.notifications.cancellation.title',
          ),
          'body' => 
          array (
            'label' => 'content.notifications.cancellation.body',
            'placeholder' => 'content.notifications.cancellation.body',
            'helper_text' => 'content.notifications.cancellation.body',
            'description' => 'content.notifications.cancellation.body',
          ),
        ),
      ),
      'validation' => 
      array (
        'required' => 
        array (
          'label' => 'content.validation.required',
          'placeholder' => 'content.validation.required',
          'helper_text' => 'content.validation.required',
          'description' => 'content.validation.required',
        ),
        'date' => 
        array (
          'label' => 'content.validation.date',
          'placeholder' => 'content.validation.date',
          'helper_text' => 'content.validation.date',
          'description' => 'content.validation.date',
        ),
        'after' => 
        array (
          'label' => 'content.validation.after',
          'placeholder' => 'content.validation.after',
          'helper_text' => 'content.validation.after',
          'description' => 'content.validation.after',
        ),
        'before' => 
        array (
          'label' => 'content.validation.before',
          'placeholder' => 'content.validation.before',
          'helper_text' => 'content.validation.before',
          'description' => 'content.validation.before',
        ),
        'time_conflict' => 
        array (
          'label' => 'content.validation.time_conflict',
          'placeholder' => 'content.validation.time_conflict',
          'helper_text' => 'content.validation.time_conflict',
          'description' => 'content.validation.time_conflict',
        ),
        'past_appointment' => 
        array (
          'label' => 'content.validation.past_appointment',
          'placeholder' => 'content.validation.past_appointment',
          'helper_text' => 'content.validation.past_appointment',
          'description' => 'content.validation.past_appointment',
        ),
        'doctor_unavailable' => 
        array (
          'label' => 'content.validation.doctor_unavailable',
          'placeholder' => 'content.validation.doctor_unavailable',
          'helper_text' => 'content.validation.doctor_unavailable',
          'description' => 'content.validation.doctor_unavailable',
        ),
      ),
      'empty_state' => 
      array (
        'heading' => 
        array (
          'label' => 'content.empty_state.heading',
          'placeholder' => 'content.empty_state.heading',
          'helper_text' => 'content.empty_state.heading',
          'description' => 'content.empty_state.heading',
        ),
        'description' => 
        array (
          'label' => 'content.empty_state.description',
          'placeholder' => 'content.empty_state.description',
          'helper_text' => 'content.empty_state.description',
          'description' => 'content.empty_state.description',
        ),
        'action' => 
        array (
          'label' => 'content.empty_state.action',
          'placeholder' => 'content.empty_state.action',
          'helper_text' => 'content.empty_state.action',
          'description' => 'content.empty_state.action',
        ),
      ),
      'resources' => 
      array (
        'doctor' => 
        array (
          'navigation' => 
          array (
            'group' => 
            array (
              'description' => 'content.resources.doctor.navigation.group',
            ),
          ),
        ),
      ),
      'YEAR_10_99' => 
      array (
        'description' => 
        array (
          'description' => 'content.YEAR_10_99.description',
        ),
      ),
    ),
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
  ),
  'actions' => 
  array (
    'lang' => 
    array (
      'label' => 'lang',
    ),
    'delete' => 
    array (
      'label' => 'delete',
    ),
    'activeLocale' => 
    array (
      'label' => 'activeLocale',
    ),
  ),
);
>>>>>>> 7f8122e (.)
