<?php
         $MERCHANT_ID   = 4778;                 // ID магазина
         $SECRET_WORD   = 'DqWLiwdmES6_2LVcyaybtLCUMcsVCGUI';   // Секретный ключ
         $PAYMENT_ID    = time();             // ID заказа (мы используем time(), чтобы был всегда уникальный ID)

         $sign = md5($MERCHANT_ID.':'.$ORDER_AMOUNT.':'.$SECRET_WORD.':'.$PAYMENT_ID);  //Генерация ключа

$result = file_get_contents('https://enot.io/pay?m='.$MERCHANT_ID.'&oa='.$_POST['oa'].'&o='.$PAYMENT_ID.'&s='.$sign.'&c='.$_POST['c'].'');
?>