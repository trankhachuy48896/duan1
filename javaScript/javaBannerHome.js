const images = [
    "./img/banner1.webp",
    "./img/banner6.jpg",
    "./img/banner7.png",
    "./img/banner8.jpg",
    "./img/banner9.png"
  ];

  // Biến để theo dõi slide hiện tại
  let currentIndex = 0;

  // Lấy phần tử img trong HTML
  const slideshow = document.getElementById("slideshow");

  // Hàm hiển thị hình ảnh
  function showImage(index) {
    if (index >= images.length) {
      currentIndex = 0; // Quay lại hình đầu tiên nếu vượt quá
    } else if (index < 0) {
      currentIndex = images.length - 1; // Quay lại hình cuối cùng nếu lùi quá
    } else {
      currentIndex = index;
    }
    slideshow.src = images[currentIndex]; // Gán URL hình ảnh vào thẻ img
  }

  // Gán sự kiện cho nút Previous và Next
  document.getElementById("prev").addEventListener("click", () => {
    showImage(currentIndex - 1);
  });

  document.getElementById("next").addEventListener("click", () => {
    showImage(currentIndex + 1);
  });

  // Tự động chuyển ảnh mỗi 5 giây
  setInterval(() => {
    showImage(currentIndex + 1);
  }, 2000);

  // Hiển thị ảnh đầu tiên khi tải trang
  showImage(currentIndex);