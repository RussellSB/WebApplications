<?php
/**
 * Created by PhpStorm.
 * User: seanp
 * Date: 22/05/2018
 * Time: 18:55
 * @param $toBeChecked
 * @return bool
 */

function checkForInvalidChars($toBeChecked)
{
    $toBeChecked = "x".$toBeChecked;
    $toBeChecked = strtoupper($toBeChecked);
    if (strpos($toBeChecked, '<?PHP') !== false ||
        strpos($toBeChecked, '?>') !== false ||
        strpos($toBeChecked, '$_') !== false ||
        strpos($toBeChecked, '<SCRIPT>') !== false ||
        strpos($toBeChecked, '</SCRIPT>') !== false ||
        strpos($toBeChecked, "ECHO") !== false ){
        return false;
    } else {
        return true;
    }
}
?>