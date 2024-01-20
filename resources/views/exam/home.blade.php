@extends('page')
@section('content')
@include('home.navbar')
<section class="words">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="list-tab-exam">
                    <ul class="d-flex align-items-center ps-0 mb-0">
                        <li>
                            <a href="" class="item-tab router-link-exact-active router-link-active active-tab-exam">Tất cả</a>
                        </li>
                        @foreach($lessons as $as => $lesson)
                        <li><a href="">{{$lesson->name}}</a></li>
                        @endforeach
                        <!-- <li><a href="">Nghe hiểu</a></li>
                        <li><a href="">Từ vựng - Ngữ pháp</a></li> -->
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
                                @foreach($levels as $key => $level)
                                <li class="one-level-exam"><a href="">{{$level->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-4 mt-md-5">
                <div class="row">
                    @foreach($exams as $exam)
                    <div class="col-12 col-sm-6 col-lg-4 mb-4">
                        <div class="main-exam-item">
                            <div class="d-flex align-items-center">
                                @foreach($lessons as $lesson)
                                @if($exam->id_lesson == $lesson->id)
                                <a href="" class="d-inline-block me-2 mb-2">
                                    <span class="category-title">
                                        {{$lesson->name}}
                                    </span>
                                </a>
                                @endif
                                @endforeach
                                @foreach($levels as $level)
                                @if($exam->id_level == $level->id)
                                <a href="" class="d-inline-block me-2 mb-2">
                                    <span class="level-title">
                                        {{$level->name}}
                                    </span>
                                </a>
                                @endif
                                @endforeach
                            </div>
                            <h3 class="title-exam">
                                <a href="{{route('page.exam',['id'=>$exam->id])}}">
                                    {{$exam->name}}
                                </a>
                            </h3>
                            <div class="time-exam fs-14 text-secondary">
                                <i class="fa-regular fa-clock"></i>
                                <span class="ms-2">{{$exam->duration}} phút</span>
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
                    @endforeach
                </div>
                {!!$exams->links('pagination.home')!!}
            </div>
        </div>
    </div>
</section>
@include('home.footer')
@endsection