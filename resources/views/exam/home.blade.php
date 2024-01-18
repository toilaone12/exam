@extends('page')
@section('content')
<section class="words">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="list-tab-exam">
                    <ul class="d-flex align-items-center ps-0 mb-0">
                        <li>
                            <a href="" class="item-tab router-link-exact-active router-link-active active-tab-exam">Tất cả</a>
                        </li>
                        <li><a href="">Đọc hiểu</a></li>
                        <li><a href="">Nghe hiểu</a></li>
                        <li><a href="">Từ vựng - Ngữ pháp</a></li>
                    </ul>
                </div>
                <div class="filter-exam">
                    <h3 class="text-dark fs-24 fw-bold mb-0">Tất cả</h3>
                    <div class="search-keyword d-flex align-items-center">
                        <div class="item-sub-search d-flex align-items-center">
                            <input type="text" name="" placeholder="Tìm kiếm..." id="" class="input-search outline-none">
                            <span class="icon-search">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </span>
                        </div>
                    </div>
                    <div class="list-level-exam">
                        <div class="d-flex align-items-center">
                            <span class="title-level-exam fs-15 text-dark">
                                Trình độ: 
                            </span>
                            <ul class="d-flex align-items-center flex-wrap ps-0 mb-0">
                                <li class="one-level-exam"><a href="" class="active-all">Tất cả</a></li>
                                <li class="one-level-exam"><a href="" class="active-all">A1</a></li>
                                <li class="one-level-exam"><a href="">A2</a></li>
                                <li class="one-level-exam"><a href="">B1</a></li>
                                <li class="one-level-exam"><a href="">B2</a></li>
                                <li class="one-level-exam"><a href="">C</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-4 mt-md-5">
                <div class="row">
                    @for($i = 1; $i <= 10; $i++)
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="main-exam-item">
                            <div class="d-flex align-items-center">
                                <a href="" class="d-inline-block me-2 mb-2">
                                    <span class="category-title">
                                        Đọc hiểu
                                    </span>
                                </a>
                                <a href="" class="d-inline-block me-2 mb-2">
                                    <span class="level-title">
                                        B1
                                    </span>
                                </a>
                            </div>
                            <h3 class="title-exam">
                                <a href="">
                                    Test 40 - Lesen - Teil 5
                                </a>
                            </h3>
                            <div class="time-exam fs-14 text-secondary">
                                <i class="fa-regular fa-clock"></i>
                                <span class="ms-2">10 phút</span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="img-customer-join rounded-circle border border-0 text-white bg-secondary fs-14">NTH</div>
                                    <div class="img-customer-join rounded-circle border border-0 text-white bg-success fs-14">CCC</div>
                                    <div class="img-customer-join rounded-circle border border-0 text-white bg-info fs-14">ABC</div>
                                    <span class="number-more">+3</span>
                                </div>
                                <div class="btn-free-exam bg-success fs-14 text-white">Miễn phí</div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
@endsection