<?php

require __DIR__ . '/vendor/autoload.php';

use Nette\Mail\SmtpMailer;
use Nette\Mail\Message;

$config = [
    'host' => getenv('SMTP_HOST'),
    'username' => getenv('SMTP_USERNAME'),
    'password' => getenv('SMTP_PASSWORD'),
    'secure' => getenv('SMTP_SECURE'),
    'port' => getenv('SMTP_PORT'),
];

$message = [
    'from' => getenv('MESSAGE_FROM'),
    'to' => getenv('MESSAGE_TO')
];

$mail = new Message();
$mail->setFrom($message['from'])
    ->addTo($message['to'])
    ->setSubject('Testing nette')
    ->setBody("Testing nette body");

$mailer = new SmtpMailer($config);
$mailer->send($mail);

var_dump($config, $message);
