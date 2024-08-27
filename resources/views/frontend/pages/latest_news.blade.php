@extends('layout.frontend')
@section('content')
    <main class="trending-area">
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                <div class="trending-main" style="margin-bottom: 23px;">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                {{-- <strong>Tin tức</strong> --}}
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                {{-- <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <li class="news-item">Đây là nhũng tin hot nhất trong tuần</li>
                                        <li class="news-item">Là những tin được chọn lọc kỹ lưỡng hữu ích cho người đọc</li>
                                        <li class="news-item">Đa dạng hóa chủ đề...</li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            @foreach($news as $new)
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img" style="max-width: 200px; min-width: 180px;">
                                        <img src="{{$new->image}}" width="100%" alt="">
                                    </div>
                                    <div class="trand-right-cap">
                                        <span class="color1">{{$new->tag}}</span>
                                        <h4 class="mb-0"><a href="{{route('details', $new->id)}}">{{$new->title}}</a></h4>
                                        <p style="font-size: .85rem;" class="mb-0">{{$new->description}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-4">
                            @include('frontend.elements.menu_left_flow_socail')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{$news->appends($_GET)->links('frontend.paginations.category')}}
        
    </main>
@stop