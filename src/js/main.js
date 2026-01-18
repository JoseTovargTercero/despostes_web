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


document.getElementById('contactForm').addEventListener('submit', function (e) {
    const ts = document.querySelector('input[name="ts"]').value;
    const now = Math.floor(Date.now() / 1000);

    // Menos de 5 segundos = bot
    if ((now - ts) < 5) {
        e.preventDefault();
        document.getElementById('formFeedback').innerHTML =
            '<div class="text-danger">Actividad sospechosa detectada.</div>';
    }
});
