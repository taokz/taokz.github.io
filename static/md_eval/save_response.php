<?php
header('Content-Type: application/json');

try {
    $data = json_decode(file_get_contents('php://input'), true);
    if (!$data) {
        throw new Exception('No data received');
    }

    // Create responses directory if it doesn't exist
    $dir = 'responses';
    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }

    // Save to a single JSON file for this session
    $sessionId = $data['sessionId'];
    $filename = $dir . '/session_' . $sessionId . '.json';
    
    // Load existing responses for this session
    $existingData = file_exists($filename) 
        ? json_decode(file_get_contents($filename), true) 
        : ['responses' => [], 'timestamp' => $data['timestamp']];
    
    // Update with new response
    $existingData['responses'][$data['key']] = $data['value'];
    
    // Save back to file
    $success = file_put_contents($filename, json_encode($existingData, JSON_PRETTY_PRINT));

    echo json_encode([
        'success' => $success !== false,
        'sessionId' => $sessionId
    ]);

} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'error' => $e->getMessage()
    ]);
}
?> 