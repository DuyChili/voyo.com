function showForm(formType) {
    // Ẩn tất cả các form
    document.getElementById('contact-form').style.display = 'none';
    document.getElementById('subscribe-form').style.display = 'none';

    // Hiển thị form dựa trên lựa chọn
    if (formType === 'contact') {
        document.getElementById('contact-form').style.display = 'block';
        // Thêm lớp 'active' cho nút Contact và loại bỏ lớp 'active' khỏi nút Subscribe
        document.getElementById('contact-btn').classList.add('active');
        document.getElementById('subscribe-btn').classList.remove('active');
    } else if (formType === 'subscribe') {
        document.getElementById('subscribe-form').style.display = 'block';
        // Thêm lớp 'active' cho nút Subscribe và loại bỏ lớp 'active' khỏi nút Contact
        document.getElementById('subscribe-btn').classList.add('active');
        document.getElementById('contact-btn').classList.remove('active');
    }
}

document.addEventListener("DOMContentLoaded", function () {
  const imagesSet = [
    [themeData.templateUrl + "/assets/img/c-201.png", themeData.templateUrl + "/assets/img/c-202.png", themeData.templateUrl + "/assets/img/c-203.png"],
    [themeData.templateUrl + "/assets/img/c-204.png", themeData.templateUrl + "/assets/img/c-205.png", themeData.templateUrl + "/assets/img/c-206.png"],
    [themeData.templateUrl + "/assets/img/c-201.png", themeData.templateUrl + "/assets/img/c-204.png", themeData.templateUrl + "/assets/img/c-204.png"],
    [themeData.templateUrl + "/assets/img/c-206.png", themeData.templateUrl + "/assets/img/c-202.png", themeData.templateUrl + "/assets/img/c-201.png"],
  ];

  const imgElements = [
    document.getElementById("img-1"),
    document.getElementById("img-2"),
    document.getElementById("img-3"),
    document.getElementById("img-4"),
  ];


  function getRandomTime() {
    return Math.floor(Math.random() * 5000) + 2000;
  }

  function changeImageRandomly(img, imgIndex) {
    const interval = getRandomTime();
    setTimeout(() => {
      img.classList.add("hidden"); // Ẩn ảnh hiện tại
      setTimeout(() => {
        // Lấy ảnh ngẫu nhiên khác với ảnh hiện tại
        let newIndex;
        do {
          newIndex = Math.floor(Math.random() * imagesSet[imgIndex].length);
        } while (img.src.includes(imagesSet[imgIndex][newIndex]));

        img.src = imagesSet[imgIndex][newIndex];
        img.classList.remove("hidden"); // Hiển thị ảnh mới

        // Gọi đệ quy lần nữa sau khi đổi ảnh xong
        changeImageRandomly(img, imgIndex);
      }, 800); // Thời gian hiệu ứng ẩn ảnh
    }, interval);
  }

  // Khởi chạy cho từng ảnh
  imgElements.forEach((img, i) => {
    if (img) {
      // Gán ảnh ban đầu để tránh src rỗng
      img.src = imagesSet[i][0];
      changeImageRandomly(img, i);
    } else {
      console.error(`Không tìm thấy img với id img-${i + 1}`);
    }
  });
});





