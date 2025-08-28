<?php

//Mailing Config
return [
    'smtp_host' => 'smtp.gmail.com',
    'smtp_auth' => true,
    'smtp_username' => 'rawingtech@gmail.com',
    'smtp_password' => 'rlhw ruml pacc izbo', // NOT your Gmail password
    'smtp_secure' => 'ssl', // or 'ssl'
    'smtp_port' => 465, // TLS = 587, SSL = 465
    'from_email' => 'rawingtech@gmail.com',
    'from_name'  => 'Rawingtech',
    // Multiple "to" emails
    'to_emails'  => [
        'rawingtech@gmail.com',
        'ridhwanazharr@gmail.com'
    ]
];