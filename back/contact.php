<?php
header('Content-Type: application/json; charset=utf-8');

// Solo POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Método no permitido'
    ]);
    exit;
}

/* =========================
   1. Honeypot
   ========================= */
if (!empty($_POST['company'])) {
    http_response_code(403);
    echo json_encode([
        'success' => false,
        'message' => 'Acceso denegado'
    ]);
    exit;
}

/* =========================
   2. Tiempo mínimo (humano)
   ========================= */
$ts = intval($_POST['ts'] ?? 0);
if ($ts === 0 || (time() - $ts) < 5) {
    http_response_code(403);
    echo json_encode([
        'success' => false,
        'message' => 'Actividad sospechosa'
    ]);
    exit;
}

/* =========================
   3. Sanitización
   ========================= */
$name    = trim($_POST['name'] ?? '');
$email   = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$message = trim($_POST['message'] ?? '');

if ($name === '' || !$email || $message === '') {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Datos inválidos'
    ]);
    exit;
}

/* =========================
   4. Envío de correo
   ========================= */
$to      = 'contacto@iseller-tiendas.com';
$subject = 'Nuevo mensaje desde Despostes App';
$body    = "Nombre: $name\nEmail: $email\n\nMensaje:\n$message";
$headers = "From: Despostes App <no-reply@iseller-tiendas.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";

if (!mail($to, $subject, $body, $headers)) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Error al enviar el mensaje'
    ]);
    exit;
}

/* =========================
   5. Respuesta OK
   ========================= */
echo json_encode([
    'success' => true,
    'message' => 'Mensaje enviado correctamente'
]);
