<<<<<<< HEAD
<!-- admin/header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/style_admin.css">
    <script src="https://kit.fontawesome.com/bb7fdf5ca5.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <section class="user-info">
                <img src="../img/tieuthuyet.webp" alt="User Photo" class="user-photo">
                <h3 class="user-name">Admin Name</h3>
            </section>
            <nav class="menu">
                <ul>
                    <li><i class="fa-solid fa-list"></i><a href="index.php">Danh mục</a></li>
                    <li><i class="fa-solid fa-book"></i><a href="index.php?ctl=list_sach">Sách</a></li>
                    <li><i class="fa-solid fa-circle-user"></i><a href="index.php?ctl=list_tk">Tài khoản</a></li>
                    <li><i class="fa-solid fa-comment"></i><a href="index.php?ctl=list_bl">Bình luận</a></li>
                    <li><i class="fa-solid fa-cart-shopping"></i><a href="index.php?ctl=list_dh">Đơn hàng</a></li>
                    <li><i class="fa-solid fa-at"></i><a href="index.php?ctl=list_tg">Tác giả</a></li>
                    <li><i class="fa-solid fa-bookmark"></i><a href="index.php?ctl=list_nxb">Nhà xuất bản</a></li>
                    <li><i class="fa-solid fa-chart-simple"></i><a href="#">Thống kê</a></li>
                    <li><i class="fa-solid fa-right-from-bracket"></i><a href="#">Đăng xuất</a></li>

                </ul>
            </nav>
=======
<!-- admin/header.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/style_admin.css">
    <script src="https://kit.fontawesome.com/bb7fdf5ca5.js" crossorigin="anonymous"></script>
    <!-- Biểu đồ thống kê -->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <section class="user-info">
                <img src="../img/fahasa-logo.webp" alt="User Photo" class="user-photo">
            </section>
            <nav class="menu">
                <ul>
                    <li><i class="fa-solid fa-list"></i><a href="index.php">Danh mục</a></li>
                    <li><i class="fa-solid fa-book"></i><a href="index.php?ctl=list_sach">Sách</a></li>
                    <li><i class="fa-solid fa-circle-user"></i><a href="index.php?ctl=list_tk">Tài khoản</a></li>
                    <li><i class="fa-solid fa-comment"></i><a href="index.php?ctl=list_bl">Bình luận</a></li>
                    <li><i class="fa-solid fa-cart-shopping"></i><a href="index.php?ctl=list_dh">Đơn hàng</a></li>
                    <li><i class="fa-solid fa-at"></i><a href="index.php?ctl=list_tg">Tác giả</a></li>
                    <li><i class="fa-solid fa-bookmark"></i><a href="index.php?ctl=list_nxb">Nhà xuất bản</a></li>
                    <li><i class="fa-solid fa-chart-simple"></i><a href="index.php?ctl=list_thongke">Thống kê</a></li>
                    <li><i class="fa-solid fa-right-from-bracket"></i><a href="index.php?ctl=logout">Đăng xuất</a></li>

                </ul>
            </nav>
>>>>>>> c9ef840852e8e6430ab6aa3b06b7d95b2f6d1ca4
        </aside>