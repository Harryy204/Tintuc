@extends('layout.frontend')

@section('content')
    <!--================News Area =================-->
    <section class="news_area section-padding">
        <div class="container">
            <div class="row">
                <!-- News List -->
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="news_left_sidebar">
                        @foreach($news_list as $news)
                        <article class="news_item mb-4">
                            <div class="news_item_img position-relative">
                                <a href="{{route('details', $news->id)}}">
                                    <img class="img-fluid rounded-0" width="100%" src="{{$news->image}}" alt="">
                                </a>
                            </div>

                            <div class="news_details mt-3">
                                <a class="d-inline-block" href="{{route('details', $news->id)}}">
                                    <h2 class="text-capitalize">{{$news->title}}</h2>
                                </a>
                                <p class="mt-2">{{$news->description}}</p>
                                <ul class="news-info-link mt-3 list-inline">
                                    <li class="list-inline-item">
                                        @foreach($categories as $category)
                                            @if($category->id == $news->category_id)
                                                <a href="{{route('category', $category->id)}}"><i class="fa fa-tag"></i> {{$category->name}}</a>
                                            @endif
                                        @endforeach
                                    </li>
                                    <li class="list-inline-item"><a href="javascript:void(0)"><i class="fa fa-comments"></i> {{$list_count_comment[$news->id]}} Comments</a></li>
                                </ul>
                            </div>
                        </article>
                        @endforeach
                        <div class="pagination-wrapper">
                            {{$news_list->appends($_GET)->links('frontend.paginations.news')}}
                        </div>
                    </div>
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4">
                    @include('frontend.elements.news_right_sidebar')
                </div>
            </div>
        </div>
    </section>
    <!--================News Area =================-->
@stop
