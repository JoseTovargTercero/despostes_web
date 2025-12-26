document.getElementById('contactForm').addEventListener('submit', function(e){
    e.preventDefault(); // evitar recarga

    const feedback = document.getElementById('formFeedback');
    feedback.textContent = "Enviando...";

    const formData = new FormData(this);

    fetch('/desposte/back/contact.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        if(data.success){
            feedback.className = "text-success mt-3 text-center";
            feedback.textContent = data.message;
            document.getElementById('contactForm').reset();
            grecaptcha.reset(); // reset reCAPTCHA
        } else {
            feedback.className = "text-danger mt-3 text-center";
            feedback.textContent = data.message;
        }
    })
    .catch(err => {
        feedback.className = "text-danger mt-3 text-center";
        feedback.textContent = "Error de conexión. Intenta nuevamente."  + err;
    });
});


grecaptcha.ready(function () {
    grecaptcha.execute('6LeiGDcsAAAAAPDPRsOLJ5tsDy3W2KeegCuVXhTu', { action: 'contact' }).then(function (token) {
        document.getElementById('recaptcha_token').value = token;
    });
});