<?php
/**  */

$locale=array (
  'description' => 'English',
  'charset' => 'UTF-8',
  'date_time_format' => 'Y-m-d H:i:s',
  'db_date_time_format' => 'Y-m-d H:i:s',
  'date_format' => 'Y-m-d',
  'long_date_format' => 'Y-m-d',
  'time_format' => 'H:i',
  'long_time_format' => 'H:i:s',
  'first_day_of_week' => 0,
  'weekday_abbreviation' => 1,
  'currency' => 
  array (
    'precision' => 2,
    'unit' => '$',
    'unit_position' => 'left',
    'separator' => '.',
    'delimiter' => ',',
  ),
);

$dictionary=array (
  'Akelos Framework' => 'Akelos Framework',
  'Hello, %name, today is %weekday' => 'Hello, %name, today is %weekday',
  'Object <b>%object_name</b> information:<hr> <b>object Vars:</b><br>%var_desc <hr> <b>object Methods:</b><br><ul><li>%methods</li></ul>' => 'Object <b>%object_name</b> information:<hr> <b>object Vars:</b><br>%var_desc <hr> <b>object Methods:</b><br><ul><li>%methods</li></ul>',
  'Controller <i>%controller_name</i> does not exist' => 'Controller <i>%controller_name</i> does not exist',
  'Could not find the file /app/<i>%controller_file_name</i> for the controller %controller_class_name' => 'Could not find the file /app/<i>%controller_file_name</i> for the controller %controller_class_name',
  'Action <i>%action</i> does not exist for controller <i>%controller_name</i>' => 'Action <i>%action</i> does not exist for controller <i>%controller_name</i>',
  'View file <i>%file</i> does not exist.' => 'View file <i>%file</i> does not exist.',
  '%controller requires a missing model %model_class, exiting.' => '%controller requires a missing model %model_class, exiting.',
  'Code Wizard' => 'Code Wizard',
  'Invalid class name in AkPatterns::singleton()' => 'Invalid class name in AkPatterns::singleton()',
  'Connection to the database failed' => 'Connection to the database failed',
  'The Akelos Framework could not automatically configure your model name. This might be caused because your model file is not located on %path. Please call $this->setModelName("YourModelName"); in your model constructor in order to make this work.' => 'The Akelos Framework could not automatically configure your model name. This might be caused because your model file is not located on %path. Please call $this->setModelName("YourModelName"); in your model constructor in order to make this work.',
  'Unable to fetch current model name' => 'Unable to fetch current model name',
  'Unable to set "%table_name" table for the model "%model".  There is no "%table_name" available into current database layout. Set AK_ACTIVE_CONTROLLER_VALIDATE_TABLE_NAMES constant to false in order to avoid table name validation' => 'Unable to set "%table_name" table for the model "%model".  There is no "%table_name" available into current database layout. Set AK_ACTIVE_CONTROLLER_VALIDATE_TABLE_NAMES constant to false in order to avoid table name validation',
  'You are calling recursively AkActiveRecord::setAttribute by placing parent::setAttribute() or  parent::set() on your model "%method" method. In order to avoid this, set the 3rd paramenter of parent::setAttribute to FALSE. If this was the behaviour you expected, please define the constant AK_ACTIVE_RECORD_PROTECT_SET_RECURSION and set it to false' => 'You are calling recursivelly AkActiveRecord::setAttribute by placing parent::setAttribute() or  parent::set() on your model "%method" method. In order to avoid this, set the 3rd paramenter of parent::setAttribute to FALSE. If this was the behaviour you expected, please define the constant AK_ACTIVE_RECORD_PROTECT_SET_RECURSION and set it to false',
  'You are calling recursively AkActiveRecord::getAttribute by placing parent::getAttribute() or  parent::get() on your model "%method" method. In order to avoid this, set the 3rd paramenter of parent::getAttribute to FALSE. If this was the behaviour you expected, please define the constant AK_ACTIVE_RECORD_PROTECT_GET_RECURSION and set it to false' => 'You are calling recursivelly AkActiveRecord::getAttribute by placing parent::getAttribute() or  parent::get() on your model "%method" method. In order to avoid this, set the 3rd paramenter of parent::getAttribute to FALSE. If this was the behaviour you expected, please define the constant AK_ACTIVE_RECORD_PROTECT_GET_RECURSION and set it to false',
  'Error' => 'Error',
  'There was an error while setting the composed field "%field_name", the following mapping column/s "%columns" do not exist' => 'There was an error while setting the composed field "%field_name", the following mapping column/s "%columns" do not exist',
  'Unable to set "%table_name" table for the model "%model".  There is no "%table_name" available into current database layout. Set AK_ACTIVE_RECORD_VALIDATE_TABLE_NAMES constant to false in order to avoid table name validation' => 'Unable to set "%table_name" table for the model "%model".  There is no "%table_name" available into current database layout. Set AK_ACTIVE_RECORD_VALIDATE_TABLE_NAMES constant to false in order to avoid table name validation',
  'The mysqli extension is designed to work with the version 4.1.3 or above of MySQL. Please use mysql: database driver instead' => 'The mysqli extension is designed to work with the version 4.1.3 or above of MySQL. Please use mysql: database driver instead',
  'The mysqli extension is designed to work with the version 4.1.3 or above of MySQL. Please use mysql: database driver instead of mysqli' => 'The mysqli extension is designed to work with the version 4.1.3 or above of MySQL. Please use mysql: database driver instead of mysqli',
  'Could not set %column_name as the inheritance column as this column is not available on the database.' => 'Could not set %column_name as the inheritance column as this column is not available on the database.',
  'Could not set %column_name as the inheritance column as this column type is %column_type instead of "string".' => 'Could not set %column_name as the inheritance column as this column type is %column_type instead of "string".',
  'Could not set %column_name as the inheritance column as this column type is "%column_type" instead of "string".' => 'Could not set %column_name as the inheritance column as this column type is "%column_type" instead of "string".',
  'Could not set "%column_name" as the inheritance column as this column is not available on the database.' => 'Could not set "%column_name" as the inheritance column as this column is not available on the database.',
  'The Akelos Framework could not automatically configure your model name. This might be caused because your model file is not located on %path. Please call $this->setParentModelName("YourParentModelName"); in your model constructor in order to make this work.' => 'The Akelos Framework could not automatically configure your model name. This might be caused because your model file is not located on %path. Please call $this->setParentModelName("YourParentModelName"); in your model constructor in order to make this work.',
  'Unable to fetch parent model name' => 'Unable to fetch parent model name',
  'Too many range options specified.  Choose only one.' => 'Too many range options specified.  Choose only one.',
  '%option must be a nonnegative Integer' => '%option must be a nonnegative Integer',
  'Range unspecified.  Specify the "within", "maximum", "minimum, or "is" option.' => 'Range unspecified.  Specify the "within", "maximum", "minimum, or "is" option.',
  'Attempted to update a stale object' => 'Attempted to update a stale object',
  'Could not find the column %column into the table %table. This column is needed in order to make the %model act as a list.' => 'Could not find the column %column into the table %table. This column is needed in order to make the %model act as a list.',
  'Could not find the column "%column" into the table "%table". This column is needed in order to make "%model" act as a list.' => 'Could not find the column "%column" into the table "%table". This column is needed in order to make "%model" act as a list.',
  'You are trying to set an object that is not an active record or that is already acting as a list, or nested set. Please provide a valid Active Record Object or call disableActsLike() in your active record in order to solve this conflict.' => 'You are trying to set an object that is not an active record or that is already acting as a list, or nested set. Please provide a valid Active Record Object or call disableActsLike() in your active record in order to solve this conflict.',
  'You are trying to set an object that is not an active record.' => 'You are trying to set an object that is not an active record.',
  'The following columns are required in the table "%table" for the model "%model" to act as a Nested Set: "%columns".' => 'The following columns are required in the table "%table" for the model "%model" to act as a Nested Set: "%columns".',
  'Moving nodes isn\'t currently supported' => 'Moving nodes isn\'t currently supported',
  'Could not add hasOne association. Foreign key %fk does not exit on table %table.' => 'Could not add hasOne association. Foreign key %fk does not exit on table %table.',
  'Association type mismatch %association_class expected, got %record_class' => 'Association type mismatch %association_class expected, got %record_class',
  'Could not write to temporary directory for generating compressed file using Ak::compress(). Please provide write access to %dirname' => 'Could not write to temporary directory for generating compressed file using Ak::compress(). Please provide write access to %dirname',
  'Invalid ISO date. You must supply date in one of the following formats: "year-month-day hour:min:sec", "year-month-day", "hour:min:sec"' => 'Invalid ISO date. You must supply date in one of the following formats: "year-month-day hour:min:sec", "year-month-day", "hour:min:sec"',
  'Adding sub-tree isn\'t currently supported' => 'Adding sub-tree isn\'t currently supported',
  'Argument list did not match expected set. Requested arguments are:' => 'Argument list did not match expected set. Requested arguments are:',
  'Filters need to be a method name, or class implementing a static filter method' => 'Filters need to be a method name, or class implementing a static filter method',
  'Filter object must respond to both before and after' => 'Filter object must respond to both before and after',
  'Missing %template_type %full_template_path' => 'Missing %template_type %full_template_path',
  'Can only render or redirect once per action' => 'Can only render or redirect once per action',
  'variables' => 'variables',
  'You can\'t use the following %type within templates:' => 'You can\'t use the following %type within templates:',
  'functions' => 'functions',
  'classes' => 'classes',
  'Template %template_file compilation error' => 'Template %template_file compilation error',
  'Showing template source from %file:' => 'Showing template source from %file:',
  'Showing compiled template source:' => 'Showing compiled template source:',
  'Template %template_file security error' => 'Template %template_file security error',
  'Edit %file_name in order to change this page.' => 'Edit %file_name in order to change this page.',
  'No tpl.php, js.php or delegate template found for %template_path' => 'No tpl.php, js.php or delegate template found for %template_path',
  'You can\'t instantiate classes within templates' => 'You can\'t instantiate classes within templates',
  'Render and/or redirect were called multiple times in this action. Please note that you may only call render OR redirect, and only once per action. Also note that neither redirect nor render terminate execution of the action, so if you want to exit an action after redirecting, you need to do something like "redirectTo(...); return;". Finally, note that to cause a before filter to halt execution of the rest of the filter chain, the filter must return false, explicitly, so "render(...); return; false".' => 'Render and/or redirect were called multiple times in this action. Please note that you may only call render OR redirect, and only once per action. Also note that neither redirect nor render terminate execution of the action, so if you want to exit an action after redirecting, you need to do something like "redirectTo(...); return;". Finally, note that to cause a before filter to halt execution of the rest of the filter chain, the filter must return false, explicitly, so "render(...); return; false".',
  '%option must be a Range (array(min, max))' => '%option must be a Range (array(min, max))',
  'No tpl.php, js or delegate template found for %template_path' => 'No tpl.php, js or delegate template found for %template_path',
  'No tpl.php, js.tpl or delegate template found for %template_path' => 'No tpl.php, js.tpl or delegate template found for %template_path',
  'Default Router has not been set' => 'Default Router has not been set',
  'The following files have been created:' => 'The following files have been created:',
  'Could not find %generator_name generator' => 'Could not find %generator_name generator',
  'There where collisions when attempting to generate the %type.' => 'There where collisions when attempting to generate the %type.',
  '%file_name file already exists' => '%file_name file already exists',
  'Find me in %path' => 'Find me in %path',
  'Tag <code>%previous</code> may not contain raw character data' => 'Tag <code>%previous</code> may not contain raw character data',
  'Ooops! There are some errors on current XHTML page' => 'Ooops! There are some errors on current XHTML page',
  'Showing rendered XHTML' => 'Showing rendered XHTML',
  'Tag <code>%tag</code> must occur inside another tag' => 'Tag <code>%tag</code> must occur inside another tag',
  '%previous tag is not a content tag. close it like this \'<%previous />\'' => '%previous tag is not a content tag. close it like this \'<%previous />\'',
  'Tag <code>%tag</code> is not allowed within tag <code>%previous</code>' => 'Tag <code>%tag</code> is not allowed within tag <code>%previous</code>',
  'XHTML is not well-formed' => 'XHTML is not well-formed',
  'In order to disable XHTML validation, set the <b>AK_ENABLE_STRICT_XHTML_VALIDATION</b> constant to false on your config/development.php file' => 'In order to disable XHTML validation, set the <b>AK_ENABLE_STRICT_XHTML_VALIDATION</b> constant to false on your config/development.php file',
  'Tag &lt;code&gt;%tag&lt;/code&gt; must occur inside another tag' => 'Tag &lt;code&gt;%tag&lt;/code&gt; must occur inside another tag',
  'Tag &lt;code&gt;%tag&lt;/code&gt; is not allowed within tag &lt;code&gt;%previous&lt;/code&gt;' => 'Tag &lt;code&gt;%tag&lt;/code&gt; is not allowed within tag &lt;code&gt;%previous&lt;/code&gt;',
  '%previous tag is not a content tag. close it like this \'&lt;%previous /&gt;\'' => '%previous tag is not a content tag. close it like this \'&lt;%previous /&gt;\'',
  'Invalid value on &lt;%tag %attribute="%value"' => 'Invalid value on &lt;%tag %attribute="%value"',
  'Attribute %attribute can\'t be used inside &lt;%tag> tags' => 'Attribute %attribute can\'t be used inside &lt;%tag> tags',
  'Invalid value on &lt;%tag %attribute="%value"... Valid values must match the pattern %pattern' => 'Invalid value on &lt;%tag %attribute="%value"... Valid values must match the pattern %pattern',
  'Invalid value on &lt;%tag %attribute="%value"... Valid values must match the pattern "%pattern"' => 'Invalid value on &lt;%tag %attribute="%value"... Valid values must match the pattern "%pattern"',
  'Showing XHTML code' => 'Showing XHTML code',
  'You have repeated the id %id %count times on your xhtml code. Duplicated Ids found on %tags' => 'You have repeated the id %id %count times on your xhtml code. Duplicated Ids found on %tags',
  'Tag %tag requires %attributes to be defined' => 'Tag %tag requires %attributes to be defined',
  'Tag <%tag> is not allowed within tag <%previous<>' => 'Tag <%tag> is not allowed within tag <%previous<>',
  'Tag %tag is not allowed within tag %previous' => 'Tag %tag is not allowed within tag %previous',
  'Missing required attribute %attribute on &lt;%tag&gt;' => 'Missing required attribute %attribute on &lt;%tag&gt;',
  'Repeating id %id' => 'Repeating id %id',
  'duplicate attribute' => 'duplicate attribute',
  'XHTML is not well-formed.' => 'XHTML is not well-formed.',
  'Illegal tag: <code>%tag</code>' => 'Illegal tag: <code>%tag</code>',
  'first page' => 'first page',
  'previous page' => 'previous page',
  'next page' => 'next page',
  'last page' => 'last page',
  'page' => 'page',
  'show all' => 'show all',
  'previous' => 'previous',
  'next' => 'next',
  'Showing page %page of %number_of_pages' => 'Showing page %page of %number_of_pages',
  'first' => 'first',
  'last' => 'last',
  'You can\'t use ${ within templates' => 'You can\'t use ${ within templates',
  'You must set the settings for current locale first by calling Ak::locale(null, $locale, $settings)' => 'You must set the settings for current locale first by calling Ak::locale(null, $locale, $settings)',
  'Akelos' => 'Akelos',
  'Could not load %converter_class_name converter class' => 'Could not load %converter_class_name converter class',
  'Could not locate %from to %to converter on %file_name' => 'Could not locate %from to %to converter on %file_name',
  'Xdoc2Text is a windows only application. Please use wvWare instead' => 'Xdoc2Text is a windows only application. Please use wvWare instead',
  'Could not find xdoc2txt.exe on %path. Please download it from http://www31.ocn.ne.jp/~h_ishida/xdoc2txt.html' => 'Could not find xdoc2txt.exe on %path. Please download it from http://www31.ocn.ne.jp/~h_ishida/xdoc2txt.html',
  'Loading...' => 'Loading...',
  '%arg option required' => '%arg option required',
  'Cannot read file %path' => 'Cannot read file %path',
  'Table %table_name already exists on the database' => 'Table %table_name already exists on the database',
  'You must supply a valid UNIX timestamp. You can get the timestamp by calling Ak::getTimestamp("2006-09-27 20:45:57")' => 'You must supply a valid UNIX timestamp. You can get the timestamp by calling Ak::getTimestamp("2006-09-27 20:45:57")',
  'Sorry but you can\'t view configuration files.' => 'Sorry but you can\'t view configuration files.',
  'Opsss! File highlighting is only available on development mode.' => 'Opsss! File highlighting is only available on development mode.',
  '%file_name is not available for showing its source code' => '%file_name is not available for showing its source code',
  'Your current PHP settings do not have support for %database_type databases.' => 'Your current PHP settings do not have support for %database_type databases.',
  'Could not connect to the ftp server' => 'Could not connect to the FTP server',
  'Could not change to the FTP base directory %directory' => 'Could not change to the FTP base directory %directory',
  'Could not change to the FTP directory %directory' => 'Could not change to the FTP directory %directory',
  'Ooops! Could not fetch details for the table %table_name.' => 'Ooops! Could not fetch details for the table %table_name.',
  'Upgrading' => 'Upgrading',
  'Could not find the file /app/controllers/<i>%controller_file_name</i> for the controller %controller_class_name' => 'Could not find the file /app/controllers/<i>%controller_file_name</i> for the controller %controller_class_name',
  'No controller was specified.' => 'No controller was specified.',
  'Please add force=true to the argument list in order to overwrite existing files.' => 'Please add force=true to the argument list in order to overwrite existing files.',
  'Could not find a helper to handle the method "%method" you called in your view' => 'Could not find a helper to handle the method "%method" you called in your view',
  'Could not locate usage file for this generator' => 'Could not locate usage file for this generator',
  'You must supply a valid generator as the first command.

   Available generator are:' => 'You must supply a valid generator as the first command.

   Available generator are:',
  'Connection to the database failed. %dsn' => 'Connection to the database failed. %dsn',
  'Could not find the database configuration file in %dbconfig.' => 'Could not find the database configuration file in %dbconfig.',
  '[%installer_name] Downgrading to version %version' => '[%installer_name] Downgrading to version %version',
  '[%installer_name] Upgrading to version %version' => '[%installer_name] Upgrading to version %version',
  'iYaoUADT' => 'iYaoUADT',
  'LuTa8PgP' => 'LuTa8PgP',
  '1QOkGNPA' => '1QOkGNPA',
  'ksDiJkm7' => 'ksDiJkm7',
  'OZafxJkk' => 'OZafxJkk',
  'w3H1UXoB' => 'w3H1UXoB',
  '1iUI3pwX' => '1iUI3pwX',
  'W8LbSukj' => 'W8LbSukj',
  'SPqPG69N' => 'SPqPG69N',
  'IHgdKVAG' => 'IHgdKVAG',
  'UPs6k5WZ' => 'UPs6k5WZ',
  'K2eZZsWY' => 'K2eZZsWY',
  '61oOKU8b' => '61oOKU8b',
  'uOE7Phqg' => 'uOE7Phqg',
  'cvSWlGPX' => 'cvSWlGPX',
  'GqtqN3xk' => 'GqtqN3xk',
  'UvwNc4PH' => 'UvwNc4PH',
  'X2a6xT5A' => 'X2a6xT5A',
  'auMt09ob' => 'auMt09ob',
  'EgZ3Gl1O' => 'EgZ3Gl1O',
  'Biem2BtI' => 'Biem2BtI',
  'x7PiI1sm' => 'x7PiI1sm',
  'Kn9fQiPm' => 'Kn9fQiPm',
  'NR7c76U4' => 'NR7c76U4',
  '2ZhCFA70' => '2ZhCFA70',
  'iRQRVLtH' => 'iRQRVLtH',
  'g4HO2DbU' => 'g4HO2DbU',
  'IvImcZYX' => 'IvImcZYX',
  'KfKJlbuD' => 'KfKJlbuD',
  '4JojdsCS' => '4JojdsCS',
  'jWG571vZ' => 'jWG571vZ',
  'KHUW5Jfe' => 'KHUW5Jfe',
  '9T62Udv3' => '9T62Udv3',
  'bvkG1tuo' => 'bvkG1tuo',
  'RkBZnlBa' => 'RkBZnlBa',
  'rXrKbi9E' => 'rXrKbi9E',
  'p88XRG0O' => 'p88XRG0O',
  '099jYFR0' => '099jYFR0',
  'CGXS4gn5' => 'CGXS4gn5',
  '6BBWvE9P' => '6BBWvE9P',
  'hZGHpeFW' => 'hZGHpeFW',
);
