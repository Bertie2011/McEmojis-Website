<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class SupportNotificationsController extends Controller {
    private $cookieKey = 'support-notified'; //Also modify in IndexController
    private $counterFile = __DIR__.'/../../../../local-data/support-notifications.txt';

    function add() {
        if (isset($_COOKIE[$this->cookieKey])) {
            return response('You have already showed your support before!', 403);
        } else {

            $n = intval(file($this->counterFile, FILE_IGNORE_NEW_LINES)[0]);
            $n++;
            $file = fopen($this->counterFile, 'w');
            fwrite($file, strval($n));
            fclose($file);
            return response('', 200)->cookie('support-notified', 'true', PHP_INT_MAX, '/', '', FALSE, TRUE);
        }
    }
}