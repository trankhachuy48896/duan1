<?php
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Trang web bán sách trực tuyến">
    <meta name="author" content="Tên cửa hàng sách">
    <title>Web Bán Sách - Giới Thiệu</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Thêm phần CSS tại đây */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: FBFBFB;
        }

        header {
            background-color: FBFBFB;
            color: white;
            text-align: center;
            padding: 20px;
            position: relative;
            background-image: url('banner.jpg'); /* Thêm ảnh nền cho header */
            background-size: cover;
            background-position: center;
            height: 250px; /* Điều chỉnh chiều cao của header */
        }

        header h1 {
            margin: 0;
            font-size: 36px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .intro {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background-color: FBFBFB;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .intro h2 {
            color: #333;
        }

        .intro p {
            line-height: 1.6;
            color: #555;
        }

        .intro img {
            max-width: 100%;
            height: auto;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: FBFBFB;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .cta-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #f4a261;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }

        .cta-button:hover {
            background-color: #e76f51;
        }
    </style>
</head>
<body>

    <header>
        <h1>Web Bán Sách - Tìm Sách Yêu Thích Của Bạn</h1>
    </header>

    <div class="intro">
        <h2>Chào Mừng Đến Với Web Bán Sách</h2>
        <p>Web bán sách là một nền tảng thương mại điện tử chuyên cung cấp các loại sách phục vụ đa dạng nhu cầu của độc giả, từ những cuốn sách giáo khoa, sách nghiên cứu chuyên sâu, đến sách văn học, tiểu thuyết, sách phát triển bản thân, sách thiếu nhi và rất nhiều thể loại khác. Những trang web này giúp người dùng dễ dàng tìm kiếm và sở hữu những cuốn sách yêu thích mà không cần phải rời khỏi nhà, mở rộng cơ hội đọc sách cho mọi người ở mọi nơi, từ thành thị đến nông thôn.

Cấu trúc của các trang web bán sách thường được thiết kế sao cho dễ dàng sử dụng, với các tính năng phân loại sách theo thể loại, tác giả, nhà xuất bản, hoặc giá cả, giúp người mua có thể dễ dàng tìm thấy cuốn sách phù hợp với nhu cầu của mình. Ngoài ra, các công cụ tìm kiếm thông minh còn giúp khách hàng lọc sách theo độ tuổi, ngôn ngữ, hoặc thậm chí đánh giá của những người đã đọc, tạo ra một trải nghiệm mua sắm tiện lợi và nhanh chóng. Đặc biệt, các website bán sách ngày nay còn cung cấp thêm các bài viết giới thiệu, đánh giá sách, giúp độc giả có thể đưa ra quyết định mua sắm thông minh.

Một trong những yếu tố quan trọng khiến các website bán sách trở thành lựa chọn của nhiều người là khả năng giao dịch trực tuyến tiện lợi. Người dùng có thể dễ dàng thanh toán qua các cổng thanh toán an toàn, bao gồm thẻ tín dụng, chuyển khoản ngân hàng, ví điện tử, hoặc thanh toán khi nhận hàng. Chế độ giao hàng tận nơi với thời gian nhanh chóng và chi phí hợp lý giúp việc mua sách trở nên vô cùng tiện lợi, đặc biệt là với những người sống ở vùng sâu, vùng xa, nơi việc tìm mua sách có thể gặp nhiều khó khăn.

Không dừng lại ở việc bán sách giấy, nhiều website bán sách còn cung cấp các dịch vụ bổ sung như sách điện tử (eBook), sách nói, giúp người đọc dễ dàng tiếp cận với kho sách khổng lồ mà không cần phải sở hữu bản in. Các ứng dụng đọc sách điện tử của các website này cũng giúp người dùng có thể đọc sách mọi lúc, mọi nơi trên các thiết bị di động hoặc máy tính bảng, mang lại sự linh hoạt tối đa. Các sách điện tử này cũng thường được tích hợp với tính năng đánh dấu trang, ghi chú, tìm kiếm từ khóa, tạo điều kiện cho việc đọc trở nên hiệu quả hơn.

Bên cạnh đó, nhiều website bán sách còn cung cấp các dịch vụ chăm sóc khách hàng đặc biệt như tư vấn sách, giúp người dùng có thể tìm thấy cuốn sách phù hợp với sở thích và nhu cầu cá nhân. Hệ thống khuyến mãi, giảm giá, quà tặng, và các chương trình ưu đãi theo mùa cũng là yếu tố khiến nhiều người quay lại mua sắm tại các trang web này. Một số website còn tổ chức các buổi giao lưu trực tuyến, hội thảo sách, hoặc các sự kiện đặc biệt như ra mắt sách mới, ký tặng sách, tạo cơ hội cho độc giả gặp gỡ các tác giả yêu thích và mở rộng mối quan hệ trong cộng đồng yêu sách.

Mỗi trang web bán sách đều có một lượng khách hàng trung thành riêng, nhờ vào việc duy trì một kho sách phong phú, dịch vụ khách hàng tận tình và các chiến lược tiếp thị hiệu quả. Các website bán sách không chỉ là nơi cung cấp sách mà còn là những cộng đồng nơi những người yêu sách có thể chia sẻ ý tưởng, thảo luận và khám phá những tác phẩm mới. Nhờ vậy, các website này ngày càng đóng vai trò quan trọng trong việc lan tỏa văn hóa đọc, thúc đẩy sự phát triển của cộng đồng trí thức và tạo ra những giá trị lâu dài cho xã hội.</p>
        

        <p>Cấu trúc của các trang web bán sách thường được thiết kế sao cho dễ dàng sử dụng, với các tính năng phân loại sách theo thể loại, tác giả, nhà xuất bản, hoặc giá cả, giúp người mua có thể dễ dàng tìm thấy cuốn sách phù hợp với nhu cầu của mình...</p>
        
        <a href="index.php" class="cta-button">Khám Phá Sách Ngay</a>
    </div>

    <footer>
        <p>&copy; 2024 Web Bán Sách. Tất cả quyền được bảo lưu.</p>
    </footer>

    
