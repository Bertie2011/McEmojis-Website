<?php

namespace App\Http\Controllers;

use App\Http\Models\McEmojiDownloads;

class IndexController extends Controller {
    private $downloads;

    public function __construct(McEmojiDownloads $downloads) {
        $this->downloads = $downloads;
    }

    public function show() {
        return view("index", ['versions' => $this->downloads->get_versions()]);
    }
}