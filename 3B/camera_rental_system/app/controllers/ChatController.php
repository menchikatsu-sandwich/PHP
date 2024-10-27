<?php
class ChatController extends Controller {
    public function openChat($cameraId) {
        $this->view('chat', ['cameraId' => $cameraId]);
    }
}
