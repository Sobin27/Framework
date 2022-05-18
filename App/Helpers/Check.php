<?php

namespace App\Helpers;

class Check
{

    public static function CheckNome($nome)
    {
        if(!preg_match('/^([áÁàÀéÉèÈíÍóÓòÒúÚùÙçÇaA-zZ]+)+((\s[áÁàÀéÉèÈíÍóÓòÒúÚùÙçÇaA-zZ]+)+)?$/',$nome)):
            return true;
        else:
            return false;
        endif;
    }

    public static function CheckEmail($email)
    {
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)):
            return true;
        else:
            return false;
        endif;
    }
}