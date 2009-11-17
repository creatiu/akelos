<?php
/**  */

$locale=array (
  'description' => 'Spanish',
  'charset' => 'UTF-8',
  'date_time_format' => 'd/m/Y H:i:s',
  'db_date_time_format' => 'Y-m-d H:i:s',
  'date_format' => 'd/m/Y',
  'long_date_format' => 'd/m/Y',
  'time_format' => 'H:i',
  'long_time_format' => 'H:i:s',
  'first_day_of_week' => 1,
  'weekday_abbreviation' => 1,
  'currency' => 
  array (
    'precision' => 2,
    'unit' => '€',
    'unit_position' => 'right',
    'separator' => ',',
    'delimiter' => '.',
  ),
);

$dictionary=array (
  'Akelos Framework' => 'Akelos Framework',
  'Object <b>%object_name</b> information:<hr> <b>object Vars:</b><br>%var_desc <hr> <b>object Methods:</b><br><ul><li>%methods</li></ul>' => 'Información del objeto <b>%object_name</b>:<hr> <b>Variables del Objeto:</b><br>%var_desc <hr> <b>Métodos del Objeto:</b><br><ul><li>%methods</li></ul>',
  'Controller <i>%controller_name</i> does not exist' => 'El controlador <i>%controller_name</i> no existe',
  'Action <i>%action</i> does not exist for controller <i>%controller_name</i>' => 'La acción <i>%action</i> no está definida en el controlador <i>%controller_name</i>',
  'View file <i>%file</i> does not exist.' => 'El fichero de la vista <i>%file</i> no existe.',
  '%controller requires a missing model %model_class, exiting.' => 'El controlador %controller necesita el modelo %model_class, saliendo.',
  'Could not find the file /app/<i>%controller_file_name</i> for the controller %controller_class_name' => 'No se ha encontrado el fichero /app/<i>%controller_file_name</i> correspondiente al controlador %controller_class_name',
  'Invalid class name in AkPatterns::singleton()' => 'AkPatterns::singleton() ha recibido un nombre de clase inválido',
  'Connection to the database failed' => 'La conexión a la base de datos a fallado',
  'The Akelos Framework could not automatically configure your model name. This might be caused because your model file is not located on %path. Please call $this->setModelName("YourModelName"); in your model constructor in order to make this work.' => 'El Akelos Framework no ha podido configurar automáticamente el nombre del modelo. Esto puede deberse a que el modelo no se ha podido hayar en %path. Si lo desea puede utilizar $this->setModelName("MiModelo"); en el constructor para asignar un nombre manualmente.',
  'Unable to fetch current model name' => 'No se ha podido averiguar el nombre del modelo actual',
  'Unable to set "%table_name" table for the model "%model".  There is no "%table_name" available into current database layout. Set AK_ACTIVE_CONTROLLER_VALIDATE_TABLE_NAMES constant to false in order to avoid table name validation' => 'No se ha podido relacionar la tabla "%table_name" con el modelo "%model". No se ha encontrado ninguna tabla llamada "%table_name" entre las tablas de la base de datos. Defina la constante AK_ACTIVE_CONTROLLER_VALIDATE_TABLE_NAMES como falsa en config/config.php para desactivar la auto-averiguación de los nombres de tablas',
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
  'Tag %tag requires %attributes to be defined' => 'La etiqueta %tag require que %attributes debe estar definido',
  'Tag <%tag> is not allowed within tag <%previous<>' => 'Tag <%tag> is not allowed within tag <%previous<>',
  'Tag %tag is not allowed within tag %previous' => 'Tag %tag is not allowed within tag %previous',
  'Missing required attribute %attribute on &lt;%tag&gt;' => 'Missing required attribute %attribute on &lt;%tag&gt;',
  'Repeating id %id' => 'Repeating id %id',
  'duplicate attribute' => 'duplicate attribute',
  'XHTML is not well-formed.' => 'XHTML is not well-formed.',
  'Illegal tag: <code>%tag</code>' => 'Illegal tag: <code>%tag</code>',
  'first page' => 'primera página',
  'previous page' => 'página anterior',
  'next page' => 'página siguiente',
  'last page' => 'última página',
  'page' => 'página',
  'show all' => 'mostrar todas',
  'previous' => 'anterior',
  'next' => 'siguiente',
  'Showing page %page of %number_of_pages' => 'Mostrando página %page de %number_of_pages',
  'first' => 'primera',
  'last' => 'última',
  'You can\'t use ${ within templates' => 'No es posible utilizar ${ en las vistas/plantillas',
  'You must set the settings for current locale first by calling Ak::locale(null, $locale, $settings)' => 'Tiene que establecer la configuración de la local llamando Ak::locale(null, $locale, $settings) antes de nada',
  'Akelos' => 'Akelos',
  'Could not load %converter_class_name converter class' => 'No se ha podido cargar la clase del conversor %converter_class_name',
  'Could not locate %from to %to converter on %file_name' => 'No se ha encontrado el conversor de %from a %to en %file_name',
  'Xdoc2Text is a windows only application. Please use wvWare instead' => 'Xdoc2Text is a windows only application. Please use wvWare instead',
  'Could not find xdoc2txt.exe on %path. Please download it from http://www31.ocn.ne.jp/~h_ishida/xdoc2txt.html' => 'Could not find xdoc2txt.exe on %path. Please download it from http://www31.ocn.ne.jp/~h_ishida/xdoc2txt.html',
  'Loading...' => 'Cargando...',
  'Sorry but you can\'t view configuration files.' => 'Lo sentimos pero no puede ver los ficheros de configuración.',
  'Opsss! File highlighting is only available on development mode.' => '¡Uysss!. La vista del código sólo está habilitada en modo de desarrollo',
  '%file_name is not available for showing its source code' => 'El fichero %file_name no está disponible para mostrar su código fuente',
  'Your current PHP settings do not have support for %database_type databases.' => 'Su configuración actual de PHP no tiene habilitado el soporte para conexiones con bases de datos %database_type databases.',
  'Could not connect to the FTP server' => 'No se ha podido conectar con el servidor FTP',
  'Could not change to the FTP base directory %directory' => 'Error de FTP. No se ha podido cambiar al directorio base %directory al iniciar sesión en el servidor.',
  'Could not change to the FTP directory %directory' => 'Error de FTP. No se ha podido cambiar al directorio %directory',
  'Ooops! Could not fetch details for the table %table_name.' => '¡Uysss!. No hemos encontrado los detalles de la tabla %table_name.',
  'Upgrading' => 'Actualizando',
  'Could not find the file /app/controllers/<i>%controller_file_name</i> for the controller %controller_class_name' => 'No se ha encontrado el fichero /app/controllers/<i>%controller_file_name</i> del controlador %controller_class_name',
  'No controller was specified.' => 'No se ha especificado ningún controlador.',
  'Please add force=true to the argument list in order to overwrite existing files.' => 'Añada --force a la lista de argumentos para sobreescribir los archivos existentes.',
  'Could not find a helper to handle the method "%method" you called in your view' => 'No se ha encontrado el "helper" "%method" que ha sido invocado desde la vista',
  'Could not locate usage file for this generator' => 'No se ha encontrado un fichero de ayuda para este generator',
  'You must supply a valid generator as the first command.

   Available generator are:' => 'Debes proporcionar un nombre de generador válido.

   Los generadores disponibles son:',
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
  'LZhahl5s' => 'LZhahl5s',
  'R6N3p7pS' => 'R6N3p7pS',
  's1qvXgU7' => 's1qvXgU7',
  '6awdN0Cg' => '6awdN0Cg',
  'Wq3d08Ej' => 'Wq3d08Ej',
  'v5dQkqgw' => 'v5dQkqgw',
  'sCXFp5tk' => 'sCXFp5tk',
  'kOuc81OP' => 'kOuc81OP',
  '52S3TGUH' => '52S3TGUH',
  'fqxF5ddi' => 'fqxF5ddi',
  'sbQtBp7K' => 'sbQtBp7K',
  'MFLqvv4X' => 'MFLqvv4X',
  'YrOucIVR' => 'YrOucIVR',
  'MRGT6sFX' => 'MRGT6sFX',
  'OuTYIXHq' => 'OuTYIXHq',
  '8UAYkuuP' => '8UAYkuuP',
  'xpaN0C7n' => 'xpaN0C7n',
  'ho6VmtDo' => 'ho6VmtDo',
  'qjcHwDik' => 'qjcHwDik',
  'fMJHNSdh' => 'fMJHNSdh',
  'BMUw0rnA' => 'BMUw0rnA',
  '8r8uRDl1' => '8r8uRDl1',
  'VvkAFPem' => 'VvkAFPem',
  'uPeYlqEN' => 'uPeYlqEN',
  'ESLN6qlt' => 'ESLN6qlt',
  'XU2ddWwn' => 'XU2ddWwn',
  '6reROfkf' => '6reROfkf',
  'Ykse5UO4' => 'Ykse5UO4',
  'UnR8HlRu' => 'UnR8HlRu',
  'sW8o4mVs' => 'sW8o4mVs',
  'mc2lMmo8' => 'mc2lMmo8',
  'nPSuAsTb' => 'nPSuAsTb',
  '1thOSbma' => '1thOSbma',
  'iDW4HU0n' => 'iDW4HU0n',
  'EO4109kH' => 'EO4109kH',
  'Jh45krAC' => 'Jh45krAC',
  'JU6n00LE' => 'JU6n00LE',
  'LJckbgen' => 'LJckbgen',
  'BEmWGExx' => 'BEmWGExx',
  'E9HYd72Y' => 'E9HYd72Y',
  'Lx256r4Z' => 'Lx256r4Z',
  'WHgaK21I' => 'WHgaK21I',
  'lmGESAHZ' => 'lmGESAHZ',
);
