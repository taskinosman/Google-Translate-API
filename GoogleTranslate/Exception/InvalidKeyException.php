<?php
namespace GoogleTranslate\Exception;

/**
 * Google Translate Exception Invalid Access Key
 * @link https://github.com/viniciusgava/Google-Translate-API
 * @license http://www.gnu.org/copyleft/gpl.html
 * @version 1.0
 * @author Vinicius Gava (gava.vinicius@gmail.com)
 */
class InvalidKeyException extends Exception {

    function __construct() {
        parent::__construct('Invalid Access Key',0);
    }

}