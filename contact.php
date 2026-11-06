<?php
declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /contact/', true, 303);
    exit;
}

$to = 'REPLACE-WITH-JMC-EMAIL';
if ($to === 'REPLACE-WITH-JMC-EMAIL' || !filter_var($to, FILTER_VALIDATE_EMAIL)) {
    http_response_code(503);
    echo '<!doctype html><html lang="en-GB"><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Enquiries temporarily unavailable</title><body style="font-family:Arial,sans-serif;max-width:680px;margin:60px auto;padding:0 20px;line-height:1.6"><h1>Enquiries are not configured yet</h1><p>The website owner needs to add the correct JMC business email address to the contact form settings before messages can be delivered.</p><p><a href="/contact/">Return to contact page</a></p></body></html>';
    exit;
}

$name = trim(strip_tags((string)($_POST['name'] ?? '')));
$email = filter_var(trim((string)($_POST['email'] ?? '')), FILTER_SANITIZE_EMAIL);
$phone = trim(strip_tags((string)($_POST['phone'] ?? '')));
$type = trim(strip_tags((string)($_POST['type'] ?? 'General enquiry')));
$message = trim(strip_tags((string)($_POST['message'] ?? '')));

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
    header('Location: /contact/?error=1', true, 303);
    exit;
}

$subjectType = preg_replace('/[\r\n]+/', ' ', $type);
$subject = 'New JMC Fylde enquiry: ' . $subjectType;
$body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nEnquiry: {$subjectType}\n\n{$message}\n";
$headers = "Reply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8";

if (!mail($to, $subject, $body, $headers)) {
    http_response_code(500);
    echo '<!doctype html><html lang="en-GB"><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Message could not be sent</title><body style="font-family:Arial,sans-serif;max-width:680px;margin:60px auto;padding:0 20px;line-height:1.6"><h1>Sorry, your message could not be sent</h1><p>Please try again later or contact the website owner.</p><p><a href="/contact/">Return to contact page</a></p></body></html>';
    exit;
}

header('Location: /contact/?sent=1', true, 303);
exit;
