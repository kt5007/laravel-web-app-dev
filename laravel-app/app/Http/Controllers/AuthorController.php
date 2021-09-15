<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;
use App\Book;
use App\Bookdetail;

class AuthorController extends Controller
{
    public function index()
    {
        // $authors=Author::all();
        // $author=Author::find(5);
        // $filtered_authors = $authors->filter(function ($author) {
        //     return $author->id > 5;
        // });
        // $author=Author::whereName('著者名4')->get();
        // $author=Author::whereCreatedAt('>','2021-09-08')->get(); 不明
        // $data = ['name'=>'著者A','kana'=>'チョシャA'];
        // Author::create($data);
        // $author = new Author();
        // $author->name = '著者B';
        // $author->kana = 'チョシャB';
        // $author->save();

        // $author = Author::find(1)->update(['name'=>'著者B','kana'=>'チョシャB']);
        // $author = Author::find(1);
        // $author->name='著者D';
        // $author->kana='チョシャD';
        // $author->save();
        // $author = Author::find(1);
        // $author->delete(); 

        //id=1を削除
        // Author::destroy(1);
        // //id=1,3,5を削除
        // Author::destroy([1,3,5]);
        // //以下でも動作します
        // Author::destroy(1,3,5);

        // dd($author[0]->id);



        // try{
        //     // うまくいった時の処理
        //     $author = Author::findOrFail(10);
        // } catch(ModelNotFoundException $e) {
        //     // エラーの時の処理
        //     echo $e->getMessage();
        // }
        //authorsテーブルでidが1または2のレコードを取得
        // $authors = Author::where('id', 1)->orWhere('id', 2)->get();
        // $authors = Author::where('id', '>=', 5)
        //authorsテーブルでidが5以上でid順に取得
        // ->orderBy('id')
        // ->get();
        // $author = Author::find(1);
        // $author_json = $author->toJson();
        // echo $author_json;

        // $author = Author::where('name', '=', '著者A')->first();
        // if (empty($author)) {
        //     $author = Author::create(['name' => '著者A', 'kana' => 'チョシャA']);
        // }

        //firstOrCreateはそのまま作成
        // $author = Author::firstOrCreate(['name'=>'著者A','kana'=>'チョシャ']);
        
        //firstOrNewメソッドはsaveメソッドと合わせて利用
        // $author = Author::firstOrNew(['name'=>'著者A']);
        // $author->save();
        // echo json_encode($author_json,JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);
        // return view('author.index')->with(['authors' => $authors]);

        // Author::destroy(1);
        // $authors = Author::all();
        // 削除済みのレコードも含めて取得
        // $authors = Author::withTrashed()->get();
        // 削除済みのレコードのみ取得
        // $authors = Author::onlyTrashed()->get();

        // $request = ['name'=>'ハンカク著者名','kana'=>'ﾊﾝｶｸﾁｮｼｬ'];
        // $author = Author::create($request);
        // $author = Author::all()->last()->kana;
        // dd($author);
        // return view('author.index')->with(['authors' => $authors]);

        // $sql = Author::where('name','=','著者A')->toSql();
        // echo $sql;

        //SQL保存を有効化する
        DB::enableQueryLog();
        //データの操作実行
        $authors = Author::find([1,3,5]);
        //クエリの取得
        $queries = DB::getQueryLog();
        //SQL保存を無効化
        DB::disableQueryLog();
        //取得したクエリの表示
        dd($queries);
        
        // $book = Book::find(1);
        // $book = Bookdetail::find(1);
        // dd($book);
        // echo $book->book->id;
    }
}
