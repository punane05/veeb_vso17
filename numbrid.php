<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 14.12.2017
 * Time: 13:25
 */
for($arv = 1; $arv <= 10; $arv++){
    if($arv % 2 == 0){
        $varv = 'blue';
    } else {
        $varv = 'red';
    }
    echo '<font color="'.$varv.'">'.$arv.'</font><br />';
}