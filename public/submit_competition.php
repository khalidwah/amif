<?php
$name = $_POST['name'] ?? '';
$surname = $_POST['surname'] ?? '';
$project = $_POST['project'] ?? '';
$idea = $_POST['idea'] ?? '';
$phone = $_POST['phone'] ?? '';

if (!$name || !$surname || !$project || !$idea || !$phone) {
    http_response_code(400);
    echo 'يرجى ملء جميع الحقول.';
    exit;
}

$line = sprintf("%s,%s,%s,%s,%s\n", $name, $surname, $project, $idea, $phone);
file_put_contents(__DIR__ . '/competition.csv', $line, FILE_APPEND | LOCK_EX);

echo 'تم إرسال المشاركة بنجاح! ✅';
