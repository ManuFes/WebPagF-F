// Función para mostrar la notificación
function showNotification(message) {
    const notification = document.createElement('div');
    notification.className = 'notification-popup';
    notification.innerHTML = `<span class="icon">😊</span> ${message}`;

    document.body.appendChild(notification);

    // Mostrar la notificación
    setTimeout(() => {
        notification.classList.add('show');
    }, 100);

    // Ocultar y eliminar la notificación después de 3 segundos
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => notification.remove(), 500); // Esperar a que la animación termine
    }, 3000);
}

// Verificar si hay un mensaje en la variable global `loginMessage`
if (typeof loginMessage !== 'undefined' && loginMessage) {
    showNotification(loginMessage);
}
