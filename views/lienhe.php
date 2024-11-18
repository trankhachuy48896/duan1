<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Liên Hệ - Cửa Hàng Sách</title>
    <style>
        /* Cấu trúc chung */
/* Cấu trúc chung */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #ffffff; /* Màu nền trắng */
    color: #000000; /* Màu chữ đen cho tất cả các văn bản */
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

/* Header */
header {
    background-color: #f8f8f8; /* Nền header màu sáng */
    padding: 30px;
    text-align: center;
    border-bottom: 2px solid #ddd;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ cho header */
}

header h1 {
    font-size: 2.5em;
    color: #000000; /* Màu chữ đen cho tiêu đề */
    margin: 0;
}

header p {
    font-size: 1.1em;
    color: #000000; /* Màu chữ đen cho đoạn văn trong header */
}

/* Thông tin liên hệ */
#contact-info {
    background-color: #f9f9f9; /* Nền sáng cho phần thông tin */
    padding: 30px;
    border-left: 5px solid #4CAF50; /* Viền trái màu xanh lá */
    margin: 20px;
    border-radius: 8px; /* Bo góc nhẹ */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05); /* Đổ bóng nhẹ */
}

#contact-info h2 {
    color: #000000; /* Màu chữ đen cho tiêu đề */
    margin-bottom: 20px;
    font-size: 1.8em;
}

#contact-info p {
    font-size: 1.2em;
    color: #000000; /* Màu chữ đen cho đoạn văn */
}

/* Form liên hệ */
#contact-form {
    background-color: #fafafa; /* Nền sáng cho form */
    padding: 30px;
    margin: 20px;
    border-left: 5px solid #2196F3; /* Viền trái màu xanh dương */
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05); /* Đổ bóng nhẹ */
}

#contact-form h2 {
    color: #000000; /* Màu chữ đen cho tiêu đề */
    margin-bottom: 20px;
    font-size: 1.8em;
}

/* Các trường nhập liệu */
#contact-form label {
    font-size: 1.1em;
    margin-bottom: 8px;
    font-weight: bold;
    color: #000000; /* Màu chữ đen cho nhãn */
}

#contact-form input, #contact-form textarea {
    padding: 12px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box;
    font-size: 1.1em;
    transition: border-color 0.3s ease; /* Hiệu ứng chuyển màu khi focus */
}

#contact-form input:focus, #contact-form textarea:focus {
    border-color: #4CAF50; /* Màu xanh lá khi focus */
    outline: none;
}

/* Nút gửi */
#contact-form button {
    background-color: #4CAF50; /* Màu xanh lá */
    color: white;
    border: none;
    padding: 14px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 1.2em;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

#contact-form button:hover {
    background-color: #45a049; /* Màu xanh lá đậm khi hover */
    transform: translateY(-2px); /* Hiệu ứng nổi lên khi hover */
}

#contact-form button:active {
    transform: translateY(1px); /* Hiệu ứng nhấn khi click */
}

/* Mạng xã hội */
#social-media {
    background-color: #f9f9f9; /* Nền sáng cho phần mạng xã hội */
    padding: 30px;
    margin: 20px;
    border-left: 5px solid #FF5722; /* Viền trái màu cam */
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05); /* Đổ bóng nhẹ */
}

#social-media h2 {
    color: #000000; /* Màu chữ đen cho tiêu đề */
    font-size: 1.8em;
    margin-bottom: 20px;
}

#social-media ul {
    list-style-type: none;
    padding: 0;
}

#social-media li {
    margin: 15px 0;
}

#social-media a {
    color: #000000; /* Màu chữ đen cho các liên kết */
    font-size: 1.3em;
    text-decoration: none;
    transition: color 0.3s ease;
}

#social-media a:hover {
    color: #FF5722; /* Màu cam khi hover */
}

/* Footer */
footer {
    background-color: #f8f8f8;
    padding: 20px;
    text-align: center;
    border-top: 2px solid #ddd;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ cho footer */
}

footer p {
    font-size: 0.9em;
    color: #000000; /* Màu chữ đen cho footer */
}


    </style>
</head>
<body>
    <header>
        <h1>Liên Hệ Với Chúng Tôi</h1>
        <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn. Vui lòng điền thông tin dưới đây hoặc liên hệ qua các phương thức khác.</p>
    </header>
    
    <section id="contact-info">
        <h2>Thông Tin Liên Hệ</h2>
        <p><strong>Địa Chỉ:</strong> 11 Trịnh Văn Bô, 700000</p>
        <p><strong>Hotline:</strong> 19001900</p>
        <p><strong>Email:</strong> <a href="mailto:info@example.com">@gmail.edu.vn</a></p>
    </section>

    <section id="contact-form">
        <h2>Form Liên Hệ</h2>
        <form action="submit_contact.php" method="post">
            <label for="name">Tên:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Số Điện Thoại:</label>
            <input type="text" id="phone" name="phone">

            <label for="message">Lời Nhắn:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Gửi</button>
        </form>
    </section>

    <section id="social-media">
        <h2>Kết Nối Với Chúng Tôi</h2>
        <p>Hãy theo dõi chúng tôi trên các mạng xã hội để nhận thông tin mới nhất về sách và các chương trình khuyến mãi:</p>
        <ul>
            <li><a href="https://facebook.com" target="_blank">Facebook</a></li>
            <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
            <li><a href="https://twitter.com" target="_blank">Twitter</a></li>
            <li><a href="https://zalo.me" target="_blank">Zalo</a></li>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 Thế giới sách - Bạn và to</p>
    </footer>
</body>
</html>
