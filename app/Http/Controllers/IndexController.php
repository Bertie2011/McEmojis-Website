<?php

namespace App\Http\Controllers;

use App\Http\Models\McEmojiDownloads;

class IndexController extends Controller {
    private $cookieKey = 'support-notified'; //Also modify in SupportNotificationsController
    private $downloads;

    public function __construct(McEmojiDownloads $downloads) {
        $this->downloads = $downloads;
    }

    public function show() {
        return view('index', [
            'versions' => $this->downloads->get_versions(),
            'title' => 'MC Emojis',
            'second' => 'Google Noto',
            'second_sub' => 'Source of emoji images',
            'has_supported' => isset($_COOKIE[$this->cookieKey])
            ]);
    }
}