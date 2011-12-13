<?php
namespace GoogleTranslate\Exception;

/**
 * Google Translate Exception Not found 404, probable problem in connect internet
 * @link https://github.com/viniciusgava/Google-Translate-API
 * @license http://www.gnu.org/copyleft/gpl.html
 * @version 1.0
 * @author Vinicius Gava (gava.vinicius@gmail.com)
 */
class NotFoundException extends Exception {
    
    function __construct() {
        parent::__construct('Not Found Request', 404);
    }
}