<?php
    function randAlphaNum($length){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomAlpha = '';
        for ($i = 0; $i < $length; $i++) {
            $randomAlpha .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomAlpha;
    }
?>
