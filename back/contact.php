<?php
header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $secret = 'TU_SECRET_KEY_AQUI';
    $recaptcha = $_POST['g-recaptcha-response'] ?? '';

    // Validar reCAPTCHA
    $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$recaptcha}");
    $captcha_success = json_decode($verify);

    if(!$captcha_success->success){
        echo json_encode(['success' => false, 'message' => 'Validación de seguridad fallida.']);
        exit;
    }

    // Sanitización y validación
    $name = htmlspecialchars(strip_tags($_POST['name'] ?? ''));
    $email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(strip_tags($_POST['message'] ?? ''));

    if(!$name || !$email || !$message){
        echo json_encode(['success' => false, 'message' => 'Por favor completa todos los campos correctamente.']);
        exit;
    }

    $to = "contacto@iseller-tiendas.com"; // tu correo
    $subject = "Nuevo mensaje desde Despostes App";
    $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";
    $headers = "From: $email\r\nReply-To: $email";

    if(mail($to, $subject, $body, $headers)){
        echo json_encode(['success' => true, 'message' => 'Mensaje enviado correctamente. ¡Gracias por contactarnos!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error al enviar el mensaje. Intenta nuevamente más tarde.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
}
?>
