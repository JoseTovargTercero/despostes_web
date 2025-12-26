<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

$secret = '6LeiGDcsAAAAAPDPRsOLJ5tsDy3W2KeegCuVXhTu';
$token  = $_POST['recaptcha_token'] ?? '';

$response = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$token"
);

$result = json_decode($response, true);

// Validaciones de seguridad
if (!$result['success'] || $result['score'] < 0.5 || $result['action'] !== 'contact') {
    echo json_encode(['success' => false, 'message' => 'Actividad sospechosa detectada']);
    exit;
}

// Sanitización
$name    = trim(strip_tags($_POST['name'] ?? ''));
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$message = trim(strip_tags($_POST['message'] ?? ''));

if (!$name || !$email || !$message) {
    echo json_encode(['success' => false, 'message' => 'Datos inválidos']);
    exit;
}

// Envío
$to = 'contacto@iseller-tiendas.com';
$subject = 'Nuevo mensaje desde Despostes App';
$body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";
$headers = "Reply-To: $email";

mail($to, $subject, $body, $headers);

echo json_encode(['success' => true, 'message' => 'Mensaje enviado correctamente']);
