<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
</head>
<body>
    <div id="chat">
        <div id="messages"></div>
        <input type="text" id="message-input">
        <button onclick="sendMessage()">Send</button>
    </div>

    <script>
        const userId = "<?php echo $this->session->userdata('id_tutor'); ?>"; // Obtener el ID del tutor de la sesión
        let conn = new WebSocket('ws://localhost:8081?user_id=' + userId);

        conn.onopen = function(e) {
            console.log("Connection established!");
        };

        conn.onmessage = function(e) {
            const data = JSON.parse(e.data);
            const messagesDiv = document.getElementById('messages');
            const messageDiv = document.createElement('div');
            messageDiv.textContent = `User ${data.from_user_id}: ${data.message}`;
            messagesDiv.appendChild(messageDiv);
        };

        function sendMessage() {
            const messageInput = document.getElementById('message-input');
            const message = messageInput.value;
            messageInput.value = '';

            const toUserId = 2; // Este debería ser el ID del tutor al que se envía el mensaje
            const payload = JSON.stringify({ to_user_id: toUserId, message: message });

            conn.send(payload);

            // Enviar mensaje al controlador de CodeIgniter
            fetch('http://localhost/puppie/PuppiePlanet/index.php/chat/send_message', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: 'id_conversacion=1&id_tutor_envia=' + userId + '&contenido=' + encodeURIComponent(message) // Ajusta estos valores según sea necesario
            }).then(response => response.json())
              .then(data => {
                  console.log('Message sent:', data);
              }).catch(error => {
                  console.error('Error sending message:', error);
              });
        }
    </script>
</body>
</html>
