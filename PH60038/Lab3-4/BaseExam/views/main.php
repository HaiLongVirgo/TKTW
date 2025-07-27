<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Home' ?></title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .home h1{
            text-align: center;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-xxl bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="<?= BASE_URL ?>"><b>Home</b></a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1 class="mt-3 mb-3"><?= $title ?? '' ?></h1>

        <div class="row">
            <?php
            if (isset($view)) {
                require_once PATH_VIEW . $view . '.php';
            }
            ?><div class="home">
            <h1>Chào Mừng Bạn đến với Trang Bán Hàng</h1>
            </div>
            <hr>
            <table>
                <thead>
                    <th>Trang Chủ</th>
                    <th><a href="?action=Product-list">Sản Phẩm</a></th>
                    <th>Đăng Kí</th>
                    <th>Đăng Nhập</th>
                    <th>Giới Thiệu</th>
                    <th>Liên Hệ</th>
                </thead>
            </table>
            
        </div>
    </div>

</body>

</html>