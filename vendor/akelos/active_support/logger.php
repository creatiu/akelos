<?php

// WARNING. This is experimental. We might replace this by Logger4PHP

defined('AK_LOG_DIR') || define('AK_LOG_DIR', AK_BASE_DIR.DS.'log');

// Default mail logger settings
defined('AK_LOGER_DEFAULT_MAIL_DESTINATION') || define('AK_LOGER_DEFAULT_MAIL_DESTINATION', false);
defined('AK_LOGER_DEFAULT_MAIL_SENDER')      || define('AK_LOGER_DEFAULT_MAIL_SENDER', AK_HOST);
defined('AK_LOGER_DEFAULT_MAIL_SUBJECT')     || define('AK_LOGER_DEFAULT_MAIL_SUBJECT', 'Log message');

// Default file logger settings
defined('AK_LOGER_DEFAULT_LOG_FILE')         || define('AK_LOGER_DEFAULT_LOG_FILE', AK_LOG_DIR.DS.AK_ENVIRONMENT.'.log');

// Loggin events for log types
defined('AK_LOGGER_DEBUG')        || define('AK_LOGGER_DEBUG',      AK_MODE_FILE    | AK_MODE_DISPLAY);
defined('AK_LOGGER_INFO')         || define('AK_LOGGER_INFO',       AK_MODE_DISPLAY);
defined('AK_LOGGER_MESSAGE')      || define('AK_LOGGER_MESSAGE',    AK_MODE_FILE);
defined('AK_LOGGER_NOTICE')       || define('AK_LOGGER_NOTICE',     AK_MODE_DISPLAY | AK_MODE_FILE | AK_MODE_DIE);
defined('AK_LOGGER_WARNING')      || define('AK_LOGGER_WARNING',    AK_MODE_DISPLAY | AK_MODE_FILE | AK_MODE_DIE);
defined('AK_LOGGER_ERROR')        || define('AK_LOGGER_ERROR',      AK_MODE_DISPLAY | AK_MODE_FILE | AK_MODE_DIE);
defined('AK_LOGGER_CRITICAL')     || define('AK_LOGGER_CRITICAL',   AK_MODE_FILE    | AK_MODE_DIE);
// Error loggin settings
defined('AK_LOG_'.E_USER_ERROR)   || define('AK_LOG_'.E_USER_ERROR, AK_MODE_FILE | AK_MODE_DIE);
defined('AK_LOG_'.E_USER_WARNING) || define('AK_LOG_'.E_USER_WARNING, AK_MODE_DISPLAY | AK_MODE_FILE | AK_MODE_DIE);
defined('AK_LOG_'.E_USER_NOTICE)  || define('AK_LOG_'.E_USER_NOTICE, AK_MODE_DISPLAY | AK_MODE_FILE | AK_MODE_DIE);
defined('AK_LOG_'.E_WARNING)      || define('AK_LOG_'.E_WARNING, AK_MODE_FILE);
defined('AK_LOG_'.E_NOTICE)       || define('AK_LOG_'.E_NOTICE, AK_MODE_FILE);
defined('AK_LOG_ENABLE_COLORING') || define('AK_LOG_ENABLE_COLORING', true);

class AkLogger
{
    public $_log_params                = array();
    public $print_display_message      = true;
    public $extended_details           = false;
    public $default_mail_destination   = AK_LOGER_DEFAULT_MAIL_DESTINATION;
    public $default_mail_sender        = AK_LOGER_DEFAULT_MAIL_SENDER;
    public $default_mail_subject       = AK_LOGER_DEFAULT_MAIL_SUBJECT;
    public $error_file                 = AK_LOGER_DEFAULT_LOG_FILE;
    public $log_type;

    public function __construct($mode = AK_LOGGER_MESSAGE) {
        $this->default_log_settings = $mode;
    }

    public function log($type, $message, $vars = array(), $event_code = null) {
        $type = strtoupper($type);
        $event_code = empty ($event_code) ? (defined('AK_LOGGER_'.$type) ? 'AK_LOGGER_'.$type : AK_LOGGER_INFO) : $event_code;
        $this->_log($type, $message, $vars, $event_code);
    }

    public function debug($message, $vars = array(), $event_code = null) {
        $this->log(__FUNCTION__, $message, $vars, $event_code);
    }

    public function info($message, $vars = array(), $event_code = null) {
        $this->log(__FUNCTION__, $message, $vars, $event_code);
    }

    public function message($message, $vars = array(), $event_code = null) {
        $this->log(__FUNCTION__, $message, $vars, $event_code);
    }

    public function notice($message, $vars = array(), $event_code = null) {
        $this->log(__FUNCTION__, $message, $vars, $event_code);
    }

    public function warning($message, $vars = array(), $event_code = null) {
        $this->log(__FUNCTION__, $message, $vars, $event_code);
    }

    public function error($message, $vars = array(), $event_code = null) {
        $this->log(__FUNCTION__, $message, $vars, $event_code);
    }

    public function critical($message, $vars = array(), $event_code = null) {
        $this->log(__FUNCTION__, $message, $vars, $event_code);
    }

    public function _log($error_mode, $error_message, $vars=array(), $event_code = null) {
        $this->setLogParams($vars);
        $this->mode = defined('AK_LOG_'.$error_mode) ? constant('AK_LOG_'.$error_mode) : $this->default_log_settings;
        $type = $this->log_type;
        $this->mode & AK_MODE_DISPLAY ? $this->_displayLog($type, $error_mode, $error_message) : null;
        $this->mode & AK_MODE_FILE ? $this->_appendLogToFile($type, $error_mode, $error_message) : null;
        $this->mode & AK_MODE_DATABASE ? $this->_saveLogInDatabase($type, $error_mode, $error_message) : null;
        $this->mode & AK_MODE_MAIL ? $this->_mailLog($type, $error_mode, $error_message) : null;
        $this->mode & AK_MODE_DIE ? exit : null;
    }

    public function _displayLog($type, $error_mode, $error_message) {
        $message = $this->_getLogFormatedAsHtml($type, $error_mode, $error_message);
        if($this->print_display_message){
            Ak::trace($message);
        }
        return $message;
    }
    public function _mailLog($type, $error_mode, $error_message) {
        if(!empty($this->default_mail_destination)){
            $message = $this->_getLogFormatedAsString($type, $error_mode, $error_message);
            $message = strip_tags(str_replace('<li>',' - ',$message));
            Ak::mail($this->default_mail_sender, $this->default_mail_destination, $this->default_mail_subject, $message);
        }
    }
    public function _appendLogToFile($type, $error_mode, $error_message) {
        $filename = $this->error_file;
        if(!is_writable($filename)){
            return;
        }

        $message = $this->_getLogFormatedAsString($type, $error_mode, $error_message);
        if(!$fp = fopen($filename, 'a')) {
            die($this->internalError($this->t('Cannot open file (%file)', array('%file'=>$filename)),__FILE__,__LINE__));
        }
        flock($fp, LOCK_EX);
        if (fwrite($fp, $message) === FALSE) {
            flock ($fp, LOCK_UN);
            die($this->internalError($this->t('Error writing file: %filename Description:',array('%filename'=>$filename)).$error_message,__FILE__,__LINE__));
        }
        flock ($fp, LOCK_UN);
        fclose($fp);
    }

    public function _saveLogInDatabase($type, $error_mode, $error_message) {
        $db = Ak::db();
        $message = $this->_getLogFormatedAsRawText($type, $error_mode, $error_message);
        $sql = 'INSERT INTO log (user_id, type, message, severity, location, hostname, created) '.
        " VALUES (0, ".$db->quote_string($type).", ".$db->quote_string($message).', '.($this->mode & AK_MODE_DIE ? 100 : 0).', '.
        $db->quote_string(AK_CURRENT_URL).', '.$db->quote_string($_SERVER['REMOTE_ADDR']).', '.$db->quote_string(Ak::getTimestamp()).');';
        if ($db->execute($sql) === false) {
            die($this->internalError($this->t('Error inserting: ').$db->ErrorMsg(),__FILE__,__LINE__));
        }
    }

    public function _getLogFormatedAsHtml($type, $error_mode, $error_message) {
        $error_type = $error_mode ? 'error' : 'info';
        $message = "\n<div id='logger_$error_type'>\n<p>".$this->t(ucfirst($error_type)).": [$error_mode] - $error_message</p>\n";
        $params = array_merge($this->_log_params, ($this->extended_details ? array('remote_address'=>$_SERVER['REMOTE_ADDR'], 'browser'=>$_SERVER['HTTP_USER_AGENT']) : array() ));
        $details = '';
        foreach ($params as $k=>$v){
            $details .= "<li><span>".$k.":</span> $v</li>\n";
        }
        return empty($details) ? $message.'</div>' : $message."<ul>\n$details\n</ul>\n</div>";
    }
    public function _walkParams($params) {
        $return = '';
        foreach ($params as $k=>$v){
                if(is_scalar($v)) {
                    $return .= "\n\t\t- ".$k.": $v";
                } else if(is_array($v)){
                    $return.= "\n\t\t\t- $k:".var_export($v,true);
                }
            }
            return $return;
    }
    public function _getLogFormatedAsString($type, $error_mode, $error_message, $serialized = false) {
        $message = date('r')."\t[$error_mode]\t$error_message";
        $params = array_merge($this->_log_params, ($this->extended_details ? array('remote_address'=>$_SERVER['REMOTE_ADDR'], 'browser'=>$_SERVER['HTTP_USER_AGENT']) : array() ));

        if($serialized){
            $message .= (count($params) ? "\t".serialize($params) : '');
        }else{
            $details = '';
            $details.=$this->_walkParams($params);
            $message .= empty($details) ? "\n" : "\n\t".'PARAMS{'.$details."\t\n}\n";
        }
        return $message;
    }

    public function _getLogFormatedAsRawText($type, $error_mode, $error_message) {
        return $this->_getLogFormatedAsString($type, $error_mode, $error_message, $filename, $line_number, true);
    }


    public function setLogParams($log_params) {
        $this->_log_params = $log_params;
    }

    public function getLogParams() {
        return is_array($this->_log_params) ? $this->_log_params : array();
    }


    public function internalError($message, $file, $line) {
        return "<div id='internalError'><p><b>Error:</b> [internal] - $message<br /><b>File:</b> $file at line $line</p></div>";
    }

    public function t($string, $array = null) {
        return Ak::t($string, $array, 'error');
    }

    public function formatText($text, $color = 'normal') {
        if(!AK_LOG_ENABLE_COLORING){
            return $text;
        }

        $colors = array(
        'light_red '      => '[1;31m',
        'light_green'      => '[1;32m',
        'yellow'      => '[1;33m',
        'light_blue'      => '[1;34m',
        'magenta'      => '[1;35m',
        'light_cyan'      => '[1;36m',
        'white'      => '[1;37m',
        'normal'      => '[0m',
        'black'      => '[0;30m',
        'red'      => '[0;31m',
        'green'      => '[0;32m',
        'brown'      => '[0;33m',
        'blue'      => '[0;34m',
        'cyan'      => '[0;36m',
        'bold'      => '[1m',
        'underscore'      => '[4m',
        'reverse'      => '[7m'
        );

        return "\033".(isset($colors[$color]) ? $colors[$color] : '[0m').$text."\033[0m";
    }
}

