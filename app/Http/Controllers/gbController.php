<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book as bookmodel;
use App\Models\publisher as pubmodel;
use App\Models\category as catmodel;
use App\Models\booksdetail as bookdetmodel;
use Illuminate\Support\Facades\DB;

class gbController extends Controller{
    
    public function index(){
        $bookdata = bookmodel::all();
        $catdata = catmodel::all();
        // dd($bookdata);
        return view('home', ['bookdata'=>$bookdata, 'catdata'=>$catdata]);
    }
    public function detail($id){
        $bookdata = bookmodel::find($id);
        $pubdata = pubmodel::find($bookdata->publisher_id);
        $catdata = catmodel::all();
        
        // dd($bookdata);
        return view('detail', ['bookdata'=>$bookdata, 'pubdata' => $pubdata, 'catdata'=>$catdata]);
    }
    public function category($id){
        $catdata = catmodel::all();
        $catselectdata = catmodel::find($id);
        
        $showData = DB::table('books')
        ->select('books.*')
        ->join('booksdetails', 'books.id', '=', 'booksdetails.book_id')
        ->where('booksdetails.category_id', $id)
        ->get();
        
        return view('category', ['catdata'=>$catdata, 'showdata'=>$showData, 'catselect'=>$catselectdata]);
        
    }
    public function pubdecs($id){
        $catdata = catmodel::all();
        $pubselectdata = pubmodel::find($id);
        
        $showData = DB::table('books')
        ->select('books.*')
        ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->where('books.publisher_id', $id)
        ->get();
        
        return view('publisherdetail', ['catdata'=>$catdata, 'showdata'=>$showData, 'pubselect'=>$pubselectdata]);
        
    }
    public function publist(){
        $pubdata = pubmodel::all();
        $catdata = catmodel::all();
        // dd($bookdata);
        return view('publisher',['pubdata'=>$pubdata, 'catdata'=>$catdata]);
        
    }
    public function contact(){
        $catdata = catmodel::all();
        return view('contactus', ['catdata'=>$catdata]);
    }
}
