<?php

function getUniqueVisitorCount(): int
{
    $dataDirectory = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data';
    $dataFile = $dataDirectory . DIRECTORY_SEPARATOR . 'visitor-count.json';

    if (!is_dir($dataDirectory)) {
        mkdir($dataDirectory, 0755, true);
    }

    $handle = fopen($dataFile, 'c+');
    if ($handle === false || !flock($handle, LOCK_EX)) {
        if (is_resource($handle)) {
            fclose($handle);
        }
        return 0;
    }

    $contents = stream_get_contents($handle);
    $data = json_decode($contents ?: '', true);
    if (!is_array($data)) {
        $data = ['count' => 0, 'visitors' => []];
    }

    $visitorHash = hash('sha256', ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . 'sjcm-visitor-counter');
    $visitors = isset($data['visitors']) && is_array($data['visitors']) ? $data['visitors'] : [];

    if (!in_array($visitorHash, $visitors, true)) {
        $visitors[] = $visitorHash;
    }

    $data = [
        'count' => count($visitors),
        'visitors' => $visitors,
    ];

    rewind($handle);
    ftruncate($handle, 0);
    fwrite($handle, json_encode($data, JSON_PRETTY_PRINT));
    fflush($handle);
    flock($handle, LOCK_UN);
    fclose($handle);

    return $data['count'];
}
