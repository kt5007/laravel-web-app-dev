<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        // return view('author.index')->with(['author'=>$author]);


        // try{
        //     // うまくいった時の処理
        //     $author = Author::findOrFail(10);
        // } catch(ModelNotFoundException $e) {
        //     // エラーの時の処理
        //     echo $e->getMessage();
        // }
        //authors
        $authors = Author::where('id',1)->orWhere('id',2)->get();
    }
}
