<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
</head>
<body>
    <div id="chat">
        origen:<?= $this->session->userdata('id_tutor'); ?><br>
        destino:<?=$toUserId?><br>
        <div id="messages">
        <?php 
        
        foreach ($mensajes as $mensaje){
            echo json_encode([
                'from_user_id' => $mensaje->id_tutor_envia,
                'message' => $mensaje->contenido                
            ]).'<br>';            
        }
        ?>

        </div>
        <input type="text" id="message-input">
        <button onclick="sendMessage()">Send</button>
    </div>

    <script>
        const userId = <?= $this->session->userdata('id_tutor'); ?>; // Obtener el ID del usuario de la sesión
        let conn = new WebSocket('ws://localhost:8081?user_id=' + userId);

        conn.onopen = function(e) {
            console.log("Connection established!");
        };

        conn.onmessage = function(e) {
            const messagesDiv = document.getElementById('messages');
            const messageDiv = document.createElement('div');
            messageDiv.textContent = e.data;
            messagesDiv.appendChild(messageDiv);
        };

        function sendMessage() {
            const messageInput = document.getElementById('message-input');
            const message = messageInput.value;
            messageInput.value = '';

            const toUserId = <?=$toUserId?>; // Este debería ser el ID del tutor al que se envía el mensaje
            const payload = JSON.stringify({ to_user_id: toUserId, message: message });

            const messagesDiv = document.getElementById('messages');
            const messageDiv = document.createElement('div');
            messageDiv.textContent = `from_user_id: `+userId+`: ${message}`;
            messagesDiv.appendChild(messageDiv);

            conn.send(payload);

            // Enviar mensaje al controlador de CodeIgniter
            fetch('<?= base_url() ?>/chat/send_message', {
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
