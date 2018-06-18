<?php


namespace Undkonsorten\JsConsent\Cookie;


class CookieUtility
{

    public function setCookie()
    {
        setcookie('jsconsent',1,0,'/');

    }
}