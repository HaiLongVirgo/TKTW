<?php
class PageController {
    private $view;
    public function set_view($v) {
        $this->view = $v;
    }
    public function view() {
        include "views/{$this->view}.php";
    }
}
