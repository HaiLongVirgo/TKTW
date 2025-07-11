<?php
class HomeController {
    private $view;
    public function set_view($v) {
        $this->view = $v;
    }
    public function view() {
        include "views/{$this->view}.php";
    }
}
