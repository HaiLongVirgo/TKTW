<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),
      'Products-show'  => (new ProductController)->show(),
      'Products-list'  => (new ProductController)->show(),
};