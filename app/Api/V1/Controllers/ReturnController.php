<?php

namespace App\Api\V1\Controllers;

use JWTAuth;
use App\Book;
use App\Store;
use App\User;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReturnController extends Controller
{
    use Helpers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $storeId = $request->get('storeId');
        $store = Store::find($storeId);

        if(!$store){
            return $this->response->error('could_not_return_book', 500);
        }
        if($store->available !=0 || $store->borrower != $currentUser->id) {
            return $this->response->error('book_not_borrowed_by_you', 500);
        }

        // Borrow this book
        $store->borrower = 0;
        $store->available = true;

        if($store->save()) {
            return $this->response->noContent();
        }else{
            return $this->response->error('cannot_return_book_fail', 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
