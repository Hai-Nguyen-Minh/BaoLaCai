<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Categories;
use App\Models\Users;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Articles::paginate(12);
        return view('home')->with('post', $post); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = Categories::all();
        return view('post',['cate'=> $cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->session()->get('username');
        $id_user = Users::where('username', $user)->get('id_user');
        $title = $request->input('title');
        $ima_path = $request->input('img_pth');
        $id_category = $request->input('category');
        $smallcontent = $request->input('subject');
        $fullcontent = $request->input('content');
        if(empty($title) ||
            empty($ima_path) ||
            $id_category == 'Category'||
            empty($smallcontent) ||
            empty($fullcontent))
        {
            return redirect('/post/create')->with('error', 'Yeu cau nhap day du thong tin!!!');
        }
        else
        {
            $titles = Articles::where('title', $title)->count();
            if($titles == 0)
            {
                $article=new Articles;
                $article->id_user = substr($id_user,12,1);
                $article->title = $title;
                $article->img_path = $ima_path;
                $article->id_category = $id_category;
                $article->smallcontent = $smallcontent;
                $article->fullcontent = $fullcontent;
                $article->save();
                return redirect('/');
            }
            else
                return redirect('/post/create')->with('exist', 'Bai viet khong hop le');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function searchCategory($id)
    {
        $articles = Articles::where('id_category', $id);
        $count = $articles->count();
        $article = $articles->paginate(12);
        return view('category',['article'=> $article, 'count'=>$count]);        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::where('id_news', $id)->get();
        return view('edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Articles::where('id_news', $id);
        $article->delete();
        return response()->json(['success'=> 'Da xoa thanh cong']);
    }
    public function showNews($id)
    {
        $news = Articles::where('id_news', $id)->get();
        return view('article',['news'=> $news]);
    }
    public function search(Request $request)
    {
        $articleSearch = $request->input('search');
        $articles = Articles::where('title', 'LIKE', '%'.$articleSearch.'%');
        $article = $articles->paginate(12);
        $count = $articles->count();
        return view('search', ['article'=>$article, 'count'=>$count]);
    }
}
