<?php
namespace App\Http\Models;

use Exception;

class McEmojiDownloads {
    private $urlPrefix = '/downloads/mc-emojis';
    private $publicPrefix;

    public function __construct() {
        $this->publicPrefix = __DIR__ . '/../../../public' . $this->urlPrefix;
    }

    public function get_versions() : array {
        return json_decode(file_get_contents(__DIR__.'/../../../local-data/downloads.json'), true, 512, JSON_OBJECT_AS_ARRAY);
    }
}