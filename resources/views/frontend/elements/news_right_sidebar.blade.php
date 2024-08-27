<div class="news_right_sidebar">
    <aside class="single_sidebar_widget search_widget">
        <form action="{{route('fe_news.search')}}" method="get">
            <div class="form-group">
                <div class="input-group mb-3">
                    <input type="text" name="key_word" value="{{(isset($key_word)) ? $key_word : ''}}" class="form-control" placeholder='Tìm kiếm từ khóa'>
                    <div class="input-group-append">
                        {{-- <button class="btns" type="button"><i class="ti-search"></i></button> --}}
                    </div>
                </div>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Tìm kiếm</button>
        </form>
    </aside>

    <aside class="single_sidebar_widget post_category_widget">
        <h4 class="widget_title">Danh mục</h4>
        <ul class="list cat-list">
            @foreach($countCategoryNews as $count)
            <li>
                <a href="{{route('category', $count['id'])}}" class="d-flex justify-content-between align-items-center">
                    <p>{{$count['name']}}</p>
                    <p class="badge bg-secondary text-white">{{ $count['count'] }}</p>
                </a>
            </li>
            @endforeach
        </ul>
    </aside>

    <aside class="single_sidebar_widget popular_post_widget">
        <h3 class="widget_title">Tin nóng</h3>
        @foreach($trending_now as $item)
        <div class="media post_item mb-3">
            <a href="{{route('details', $item->id)}}">
                <img src="{{$item->image}}" width="100%" alt="post">
            </a>
            <div class="media-body" style="width: 60%;">
                <a href="{{route('details', $item->id)}}">
                    <h3 style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;width: 100%;">{{$item->title}}</h3>
                </a>
                <p>{{formatDate($item->created_at, 'F')}} {{formatDate($item->created_at, 'd')}}, {{formatDate($item->created_at, 'Y')}}</p>
            </div>
        </div>
        @endforeach
    </aside>
</div>
