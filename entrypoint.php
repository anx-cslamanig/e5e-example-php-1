<?php
// payload: {"a": 5, "b": 4}

function myfunction($event, $context) {
    $a = $event->data->a;
    $b = $event->data->b;
    echo 'Print line 1'.PHP_EOL;
    echo 'Print line 2'.PHP_EOL;
    echo 'Print line 3'.PHP_EOL;
    return [
        'status' => 202,
        'response_headers' => [
            'x-custom-response-header-1' => 'This is a custom response header 1',
            'x-custom-response-header-2' => 'This is a custom response header 2',
            'x-custom-response-header-3' => 'This is a custom response header 3',
        ],
        'data' => [
            'sum' => $a + $b,
            'version' => phpversion(),
            'event' => $event,
            'context' => $context,
            'environment' => $_ENV,
        ],
    ];
}
