<footer id="footer" class="block-footer">
    <div class="container">
        <div class="row">
            <div class="footer-head d-flex justify-content-between align-items-center">
                <div class="footer-logo d-flex justify-content-between align-items-center">
                    <a href="" class="me-2"><img src="{{asset('fe/image/logo.png')}}" alt=""></a>
                    <h3 class="title-logo">HỆ THỐNG ĐÀO TẠO TIẾNG ĐỨC TRỰC TUYẾN</h3>
                </div>
            </div>
            <div class="footer-end">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-7 col-lg-4">
                        <div class="title-end text-uppercase text-white fs-15">
                            Liên hệ
                        </div>
                        <div class="footer-info">
                            <ul class="ps-0 mb-0">
                                <li>
                                    <a href="mailto:hoctiengduccungdecamy@gmail.com" class="title-info fs-15">
                                        <i class="fa-solid fa-envelope me-2 hover"></i>
                                        hoctiengduccungdecamy@gmail.com
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="title-info fs-15">
                                        <i class="fa-solid fa-phone-volume me-2 hover"></i>
                                        0963.041.210 - 0934.143.128
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="title-info fs-15">
                                        <i class="fa-solid fa-map-marker-alt me-2 hover"></i>
                                        Số 2, Ngõ 18, Nguyễn Cơ Thạch, Cầu Diễn, Hà Nội
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-5 col-lg-3">
                        <div class="title-end text-uppercase text-white fs-15">
                            Danh mục
                        </div>
                        <div class="d-flex justify-content-between">
                            <ul class="ps-0 mb-0 d-flex flex-wrap flex-row w-100">
                                <li class="w-50"><a class="title-category" href="">Gói học</a></li>
                                <li class="w-50"><a class="title-category" href="">Ngữ pháp</a></li>
                                <li class="w-50"><a class="title-category" href="">Giải trí</a></li>
                                <li class="w-50"><a class="title-category" href="">Luyện thi</a></li>
                                <li class="w-50"><a class="title-category" href="">Tin tức</a></li>
                                <li class="w-50"><a class="title-category" href="">Từ vừng</a></li>
                                <li class="w-50"><a class="title-category" href="">Tài liệu</a></li>
                                <li class="w-50"><a class="title-category" href="">Từ điển</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-7 col-lg-2">
                        <div class="title-end text-uppercase text-white fs-15">
                            Thanh toán
                        </div>
                        <div class="d-flex flex-wrap">
                            <div class="one-card pe-1 pb-1"><img src="{{asset('fe/image/visa.png')}}" alt=""></div>
                            <div class="one-card ps-1 pb-1"><img src="{{asset('fe/image/mastercard.png')}}" alt=""></div>
                            <div class="one-card pe-1 pt-1"><img src="{{asset('fe/image/money.png')}}" alt=""></div>
                            <div class="one-card ps-1 pt-1"><img src="{{asset('fe/image/banking.png')}}" alt=""></div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-5 col-lg-3">
                        <div class="fanpage-fb">
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fgermanywithlove&amp;tabs=events&amp;width=250&amp;height=200&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=202302467359847" width="250px" height="200px" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media" style="border: none; overflow: hidden;"></iframe>
                        </div>
                        <div class="copy-right mt-2">
                            <div class="fs-12 fw-bolder text-secondary">Copyright by Decamy - All Rights Reserved</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="group-contact">
    <a href="" class="contact-message">
        <i class="text-white fa-brands fa-facebook-messenger"></i>
    </a>
    <a href="" class="contact-message">
        <i class="text-white fa-solid fa-phone-flip"></i>
    </a>
</div>
<button type="button" id="back-to-top">
    <i class="fa-solid fa-angle-up fs-18 fw-bold" style="line-height: 37px;"></i>
</button>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        // When the user clicks on the button, scroll to the top of the document
        $('#back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 100); // You can adjust the animation speed if needed
            return false;
        });
            var header = $('.bg-header-child');
            var menuHeader = $(".bg-header-child .menu-header");

            $(window).scroll(function () {
                var scrollPosition = $(this).scrollTop();

                // Thay đổi màu sắc khi cuộn
                if (scrollPosition > 0) {
                    header.addClass('bg-scroll').removeClass('bg-header');
                    menuHeader.css('padding-top','10px');
                } else {
                    menuHeader.css('padding-top','20px');
                    header.removeClass('bg-scroll').addClass('bg-header');
                }
            });
    })
</script>