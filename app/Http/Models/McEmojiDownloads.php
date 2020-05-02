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
        $result = array();
        $versions = scandir($this->publicPrefix);
        foreach ($versions as $key => $version)
        {
            if (!in_array($version,array('.','..')) && is_dir($this->publicPrefix . '/' . $version))
            {
                $entry = ['version' => $version];
                $entry['resource_pack'] = $this->get_file_in($version . '/resource-pack');
                $entry['drawer'] = [];
                $entry['drawer']['windows'] = $this->get_file_in($version . '/drawer/windows');
                $entry['drawer']['macOS'] = $this->get_file_in($version . '/drawer/macOS');
                $entry['drawer']['linux'] = $this->get_file_in($version . '/drawer/linux');
                $result[] = $entry;
            }
        }
        usort($result, function ($a, $b) {
            return strcasecmp($b.version, $a.version); 
        });
        return $result;
    }

    public function get_file_in(string $path): string {
        $fullPath = $this->publicPrefix . '/' . $path;
        if (!file_exists($fullPath)) {
            throw new Exception('Not found: ' . $path);
        }
        $files = scandir($fullPath);
        foreach ($files as $key => $file)
        {
            $filePath = $fullPath . '/' . $file;
            if (!in_array($file,array('.','..')) && is_file($filePath))
            {
                return $this->urlPrefix . '/' . $path . '/' . $file;
            }
        }
        throw new Exception($path . ' does not contain any files!');
    }
}