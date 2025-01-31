<?php

namespace App\Http\Controllers;

use App\Mail\UserContact;
use App\Models\Blogs;
use App\Models\Categories;
use App\Models\Comment;
use App\Models\CommentNew;
use App\Models\Contacts;
use App\Models\News;
use App\Models\Youtube;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use App\Models\CommentBlog;

class FrontendController extends Controller
{
    public function index(){
        $category_news = [];
        $trending_now = News::where('type_new', 1)->orderByDesc('created_at')->limit(9)->get();
        $categories = Categories::all();
        foreach ($categories as $category){
            $category_news[$category->id] = News::where('category_id', $category->id)->orderByDesc('created_at')->limit(6)->get();
        }
        $blog = Blogs::where('is_read', 1)->orderByDesc('created_at')->limit(9)->get();
        $newDate = date_create();
        $news = News::where('type_new', 0)->orderByDesc('created_at')->limit(6)->get();
        $weekly_top_news = [];
        foreach ($news as $key => $item) {
            $dateBd = date_create($item->created_at);
            $dateBd_day = date_format($dateBd, 'd');
            if($newDate > $dateBd_day) {
                array_push($weekly_top_news, $item);
            }
            if ($key == 8) {
                break;
            }
        }
        $youtube = Youtube::orderByDesc('created_at')->limit(8)->get();
        $news_of_interest = News::where('type_new', 3)->orderByDesc('created_at')->limit(6)->get();
        return view('frontend.pages.index', compact('trending_now', 'categories', 'category_news', 'blog', 'weekly_top_news', 'news_of_interest', 'youtube'));
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function news_search(Request $request) {
        $key_word = $request->input('key_word');
    
        $query = News::query();
    
        if($key_word){
            $query->where('title', 'like', '%'.$key_word.'%');
        }
    
        $news_list = $query->orderByDesc('created_at')->paginate(5);
        $categories = Categories::all();
    
        $countCategoryNews = [];
        foreach ($categories as $category) {
            $count = News::where('category_id', $category->id)->count();
            if ($count > 0) {
                $countCategoryNews[$category->id] = ['count' => $count, 'name' => $category->name, 'id' => $category->id];
            }
        }
        
        $list_count_comment = [];
        foreach ($news_list as $news) {
            $count_comment = CommentNew::where('new_id', $news->id)->count();
            $list_count_comment[$news->id] = $count_comment;
        }
    
        $list_tag = News::select('tag', DB::raw('COUNT(*) as tag_count'))->groupBy('tag')->get();
        $trending_now = News::where('type_new', 1)->orderByDesc('created_at')->limit(6)->get();
        
        return view('frontend.pages.news', compact('news_list', 'categories', 'countCategoryNews', 'trending_now', 'list_tag', 'key_word', 'list_count_comment'));
    }
    

    public function category($id){
        $categories = Categories::where('id', $id)->get();
        $news = News::where('category_id', $id)->orderByDesc('created_at')->limit(6)->get();
        $blog = Blogs::where('category_id', $id)->orderByDesc('created_at')->limit(6)->get();
        $datas = $news->merge($blog);
        $datas = $datas->sortByDesc('created_at');

        //phân trang
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 6;
        $currentPageItems = $datas->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $datas = new LengthAwarePaginator($currentPageItems, $datas->count(), $perPage);
        $datas->setPath(request()->url());

        return view('frontend.pages.category', compact('categories', 'datas'));
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function contact_send(Request $request){
        $recipient = $request->email;
        $message = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'subject' => $request->subject,
        ];
        Contacts::create($request->all());
        Mail::to($recipient)->send(new UserContact($message));
        return view('frontend.pages.contact')->with('success_contact', 'send_contact_success');
    }

    public function details($id){
        $news = News::where('id', $id)->get();
        foreach ($news as $new){
            $related_new = News::where('category_id', $new->category_id)->where('id', '!=', $new->id)->orderByDesc('created_at')->limit(3)->get();
        }

        $comments = CommentNew::where('new_id', $id)
            ->leftJoin('users', 'comment_news.user_id', '=', 'users.id')
            ->select('comment_news.*', 'users.name', 'users.avatar')
            ->get();
        $comments_reply = CommentNew::where('new_id', $id)
            ->where('comment_id', '!=', 0)
            ->leftJoin('users', 'comment_news.user_id', '=', 'users.id')
            ->select('comment_news.*', 'users.name', 'users.avatar')
            ->get();
        return view('frontend.pages.details', compact('news', 'related_new', 'comments', 'comments_reply'));
    }

    public function details_message(Request $request) {
        CommentNew::create($request->all());
        return redirect()->back();
    }

    public function detailsmessageLoadForm(Request $request)
    {
        CommentNew::create($request->all());
        $comments = CommentNew::where('new_id', $request->new_id)
            ->leftJoin('users', 'comment_news.user_id', '=', 'users.id')
            ->select('comment_news.*', 'users.name', 'users.avatar')
            ->get();
        $comments_reply = CommentNew::where('new_id', $request->new_id)
            ->where('comment_id', '!=', 0)
            ->leftJoin('users', 'comment_news.user_id', '=', 'users.id')
            ->select('comment_news.*', 'users.name', 'users.avatar')
            ->get();
        return view('frontend.pages.ajax_load.load_comment', compact('comments', 'comments_reply'));
    }

    public function elements(){
        return view('frontend.pages.elements');
    }

    public function latest_news(){
        $news = News::where('type_new', 1)->orderByDesc('created_at')->limit(6)->paginate(6);
        return view('frontend.pages.latest_news', compact('news'));
    }
}
