<?php require 'templates/header.php'; ?>

<h2>Chat with Admin</h2>

<div id="chat-box">
    <?php foreach ($data['messages'] as $message): ?>
        <p><strong><?= $message['sender_id'] === $_SESSION['user_id'] ? 'You' : 'Admin' ?>:</strong> <?= $message['message'] ?></p>
    <?php endforeach; ?>
</div>

<form action="<?= BASEURL ?>/Chat/sendMessage/<?= $data['cameraId'] ?>" method="POST">
    <input type="text" name="message" placeholder="Type your message..." required>
    <button type="submit">Send</button>
</form>

<?php require 'templates/footer.php'; ?>
