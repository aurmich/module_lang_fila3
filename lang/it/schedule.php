<?php return array (
  'pages' => 'Pagine',
  'widgets' => 'schedule',
  'navigation' => 
  array (
    'name' => 'schedule',
    'plural' => 'schedule',
    'group' => 
    array (
      'name' => 'schedule',
    ),
    'label' => 'schedule.navigation',
  ),
  'resource' => 
  array (
    'single' => 'Schedule',
    'plural' => 'Schedules',
    'navigation' => 'Settings',
    'history' => 'Show run history',
  ),
  'fields' => 
  array (
    'name' => 'Nome',
    'guard_name' => 'Guard',
    'permissions' => 'Permessi',
    'first_name' => 'Nome',
    'last_name' => 'Cognome',
    'select_all' => 
    array (
      'name' => 'Seleziona Tutti',
      'message' => '',
    ),
    'command' => 'Command',
    'arguments' => 'Arguments',
    'options' => 'Options',
    'options_with_value' => 'Options with Value',
    'expression' => 'Cron Expression',
    'log_filename' => 'Log filename',
    'output' => 'Output',
    'even_in_maintenance_mode' => 'Even in maintenance mode',
    'without_overlapping' => 'Without overlapping',
    'on_one_server' => 'Execute scheduling only on one server',
    'webhook_before' => 'URL Before',
    'webhook_after' => 'URL After',
    'email_output' => 'Email for sending output',
    'sendmail_success' => 'Send email in case of success to execute the command',
    'sendmail_error' => 'Send email in case of failure to execute the command',
    'log_success' => 'Write command output into history table in case of success to execute the command',
    'log_error' => 'Write command output into history table in case of failure to execute the command',
    'status' => 'Status',
    'actions' => 'Actions',
    'data-type' => 'Data type',
    'run_in_background' => 'Run in background',
    'created_at' => 'Created At',
    'updated_at' => 'Updated At',
    'never' => 'Never',
    'environments' => 'Environments',
  ),
  'messages' => 
  array (
    'no-records-found' => 'No records found.',
    'save-success' => 'Data saved successfully.',
    'save-error' => 'Error saving data.',
    'timezone' => 'All schedules will be executed in the timezone: ',
    'select' => 'Select a command',
    'custom' => 'Custom Command',
    'custom-command-here' => 'Custom Command here (e.g. `cat /proc/cpuinfo` or `artisan db:migrate`)',
    'help-cron-expression' => 'If necessary click here and use a tool to facilitate the creation of the cron expression',
    'help-log-filename' => 'If log file is set, the log messages from this cron are written to storage/logs/<log filename>.log',
    'help-type' => 'Multiple :type can be specified separated by commas',
    'attention-type-function' => 'ATTENTION: parameters of the type \'function\' are executed before the execution of the scheduling and its return is passed as parameter. Use with care, it can break your job',
    'delete_cronjob' => 'Delete cronjob',
    'delete_cronjob_confirm' => 'Do you really want to delete the cronjob ":cronjob"?',
  ),
  'status' => 
  array (
    'active' => 'Active',
    'inactive' => 'Inactive',
    'trashed' => 'Trashed',
  ),
  'buttons' => 
  array (
    'inactivate' => 'Inactivate',
    'activate' => 'Activate',
    'history' => 'History',
  ),
  'validation' => 
  array (
    'cron' => 'The field must be filled in the cron expression format.',
    'regex' => 'The :attribute field must only contain letters, numbers, dashes, and underscores. Comma is also allowed.',
  ),
  'actions' => 
  array (
    'import' => 
    array (
      'fields' => 
      array (
        'import_file' => 'Seleziona un file XLS o CSV da caricare',
      ),
    ),
    'export' => 
    array (
      'filename_prefix' => 'Aree al',
      'columns' => 
      array (
        'name' => 'Nome area',
        'parent_name' => 'Nome area livello superiore',
      ),
    ),
  ),
);