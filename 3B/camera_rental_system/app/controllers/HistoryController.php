<?php
class HistoryController extends Controller {
    public function list() {
        $historyModel = $this->model('HistoryModel');
        $histories = $historyModel->getAllHistory();
        $this->view('history/list', ['histories' => $histories]);
    }
}
