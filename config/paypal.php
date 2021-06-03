<?php 
return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','AU6zB3bLsrYh0lKHF1NTf53XxOZHpFxISUTaZaLaHRXUshYEdkavpUj1jk_1y6mrD7MGG2Z7XY_cji7G'),
    'secret' => env('PAYPAL_SECRET','EA37ugblh_paUPdXQqnpi7ees7tpve6pW8lzxZDyWrclnbQ2c3pP_-iqfP-fo9Fa61pVKcVoBL1qQ_Ek'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];