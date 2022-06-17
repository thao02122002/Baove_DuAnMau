<footer class="pt-24 bg-green-600">
        <hr >
        <div class="py-4 px-16  grid grid-cols-10">
               
               <div class=" col-span-2">
                    <h1 class="text-white"><strong> ĐỊA CHỈ</strong></h1>
                   <p class="text-white hover:text-red-400"> Trụ sở chính: Số 9,xã Tiền Tiến, TP Hải Dương,Tỉnh Hải Dương</p>
                   <p class="text-white hover:text-red-400">* Điện thoại: 0392697014</p>
                   <p class="text-white hover:text-red-400">* Email:thaovtpph16945@fpt.edu.vn</p>
                   <p class="text-white hover:text-red-400">* Zalo: Phương Thảo</p>
                   <p class="text-white hover:text-red-400">* Website:https://gcshop.vn/</p>
                   <p class="text-white hover:text-red-400">* Văn phòng tại Tiền Tiến, Hải Dương. Thôn Du Tái,Tp Hải Dương, Hải Dương</p>
               </div>
               <div class=" col-span-2">
                    <h1 class="text-white"><strong> GIỚI THIỆU</strong></h1>
                    <a class="text-white hover:text-red-400" href="">Về FruitsShop</a><br>
                    <a class="text-white hover:text-red-400" href="">Tuyển Dụng</a><br>
                    <a class="text-white hover:text-red-400" href="">Chính Sách Bảo Mật</a><br>
                    <a class="text-white hover:text-red-400" href="">Hợp Tác Và Liên Kết</a><br>

               </div>
               <div class=" col-span-2">
                    <h1 class="text-white"><strong> MUA HÀNG</strong></h1>
                    <a class="text-white hover:text-red-400" href="">Trái Cây Tươi</a><br>
                    <a class="text-white hover:text-red-400" href="">Trái Cây Nhập Khẩu</a><br>
                    <a class="text-white hover:text-red-400" href="">Qùa Tặng Trái Cây</a><br>
                    <a class="text-white hover:text-red-400" href="">Dịch Vụ Qùa Tặng Doanh Nghiệp</a><br>
               </div>
               <div class=" col-span-2">
               <h1 class="text-white"><strong> HỖ TRỢ KHÁCH HÀNG</strong></h1>
                    <a class="text-white hover:text-red-400" href="">Tư Vấn Khách Hàng</a><br>
                    <a class="text-white hover:text-red-400" href="">Đặt Hàng Theo Yêu Cầu</a><br>
                    <a class="text-white hover:text-red-400" href="">Giao Hàng Nhanh Nhất</a><br>
                    <a class="text-white hover:text-red-400" href="">Theo Dõi Đơn Hàng</a><br>
               </div>
               <div class="col-span-2">
               <h1 class="text-white"><strong> KẾT NỐI VỚI CHÚNG TÔI</strong></h1>
               
               
               
               <h1 class="text-white"><strong> ĐĂNG KÍ NHẬN ƯU ĐÃI VỚI FRUITSSHOP</strong></h1>
               <input class="border border-gray-400 bg-white text-gray-400 rounded-lg p-2" type="text" value="Nhập địa chỉ Email...">
              
               </div>
        </div>
        </footer>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <script>
    var anh;
        var img_anh = ['./img//banner2.jpg','./img//banner3a.jpg'];
        var soluong = 2;
        var index = 0
        var img_slide = document.querySelector("#img_slide");
        var slide_interval;
        slide_interval = setInterval(function(){
        index ++;
        if(index >= soluong){
            index = 0
        }
        img_slide.setAttribute("src",img_anh[index])
        },2000)
    
</script>
</body>
</html>