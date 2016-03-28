<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Book;
use App\Store;
use App\User;
use GuzzleHttp\Client;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookController extends Controller
{
    use Helpers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentUser = JWTAuth::parseToken()->authenticate();

        return Book::All()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentUser = JWTAuth::parseToken()->authenticate();

        $isbn = $request->get('isbn');

        $api_url = 'https://api.douban.com/v2/book/isbn/'.$isbn;

        try {
            $client = new Client();
            $res  = $client->get($api_url);
            $body =  $res->getBody();
            $data = json_decode($body, true);

        } catch (Exception $e) {
            $e->getMessage();
        }


        // Is this book alreay exists in database
        $book = Book::where('isbn', $isbn)->first();

        // If book dont exists, create a book
        if(!$book) {
            $book = new Book;

            $book->isbn = $isbn;
            $book->title = $data['title'];
            $book->author = implode(' ', $data['author']);
            $book->pubdate = $data['pubdate'];
            $book->publisher = $data['publisher'];
            $book->rating = $data['rating']['average'];
            $book->author_intro = $data['author_intro'];
            $book->image = $data['image'];
            $book->catalog = $data['catalog'];
            $book->summary = $data['summary'];

            $book->save();
        }

        // If a store exist
        $store = Store::where('book_id' ,$book->id)->first();
        if($store) {
            return $this->response->error('you_already_have_this_book', 500);
        }

        $store = new Store();
        $store->owner = $currentUser->id;
        $store->book_id = $book->id;
        $store->borrower = 0;
        $store->available = true;

        if( $store->save() )
            return $this->response->noContent();
        else
            return $this->response->error('could_not_update_book', 500);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currentUser = JWTAuth::parseToken()->authenticate();

        $book = Book::find($id);

        if(!$book)
//            throw new NotFoundHttpException;
        return $this->response->error('could_not_show_book', 500);

        $store = Store::where('book_id', $book->id)->get();
        $store->each(function($record){
            $record->owner_name = User::find($record->owner)->name;
            $borrower = User::find($record->borrower);
            if($borrower)
                $record->borrower_name = $borrower->name;

        });

        $book->store = $store;

        return $book;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Borrow a book
     *
     * $param int $id
     */
//    public function borrow(Request $request)
//    {
//        $currentUser = JWTAuth::parseToken()->authenticate();
//
//        $storeId = $request->get('storeId');
//        $store = Store::find($storeId);
//
//        if(!$store){
//            return $this->response->error('could_not_borrow_book', 500);
//        }
//        if($store->available !=1 || $store->borrower > 0) {
//            return $this->response->error('book_already_borrow_to_other', 500);
//        }
//
//        // Borrow this book
//        $store->borrower = $currentUser->id;
//        $store->available = false;
//
//        if($store->save()) {
//            return $this->response->noContent();
//        }else{
//            return $this->response->error('cannot_borrow_book_fail', 500);
//        }
//
//    }

    /**
     * All the book i borrow
     */
//    public function borrowindex()
//    {
//        return 'hi';exit;
//        $currentUser = JWTAuth::parseToken()->authenticate();
//
//        $store = Store::where('borrower', $currentUser->id)->get();
//
//
//        return $store;
//
//    }


}
