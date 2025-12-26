<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

$secret = '6LeiGDcsAAAAAJxFXRcXK5aJISXDnwPkownYvaJz';
$token  = $_POST['recaptcha_token'] ?? '';

$response = file_get_contents(
    "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$token"
);

$result = json_decode($response, true);

// Validación reCAPTCHA v3 (UMBRAL AJUSTADO)
if (!$result['success'] || ($result['score'] ?? 0) < 0.3) {
    echo json_encode([
        'success' => false,
        'message' => 'No se pudo validar la solicitud. Intenta nuevamente.'
    ]);
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

// Protección extra: tiempo mínimo (anti-bot)
if (!isset($_POST['ts']) || time() - intval($_POST['ts']) < 3) {
    echo json_encode(['success' => false, 'message' => 'Envío demasiado rápido']);
    exit;
}

$to = 'contacto@tudominio.com';
$subject = 'Nuevo mensaje desde Despostes App';
$body = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";
$headers = "Reply-To: $email";

mail($to, $subject, $body, $headers);

echo json_encode(['success' => true, 'message' => 'Mensaje enviado correctamente']);
