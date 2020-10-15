<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('items')->paginate(3);
        return view('item.item',['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this ->validate($request, [
            'pvms' => 'required',
            'name' => 'required'
        ]);

        // create a post

        $item = new Item;
        $item-> pvms = $request->input('pvms');
        $item-> name = $request->input('name');
        $item-> aesculap_ref = $request->input('aesculap_ref');
        $item-> aesculap_cat_page = $request->input('aesculap_cat_page');
        $item-> remark = $request->input('remark');
        $item-> added_by = $request->input('added_by');
        // $item-> user_id = auth()->user()->id;
        // $item-> user_name = auth()->user()->name;
        $item->save();

        return redirect('/items')->with ('Item Addedd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item =  Item::find($id);
        return view('item.show')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item =  Item::find($id);
        return view('item.edit')->with('item',$item);
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
        $this ->validate($request, [
            'pvms' => 'required',
            'name' => 'required'
        ]);

        // create a post

        
        $item = Item::find($id);
        $item-> pvms = $request->input('pvms');
        $item-> name = $request->input('name');
        $item-> aesculap_ref = $request->input('aesculap_ref');
        $item-> aesculap_cat_page = $request->input('aesculap_cat_page');
        $item-> remark = $request->input('remark');
        $item-> added_by = $request->input('added_by');
        $item->save();

        return redirect('/items')->with ('Item Addedd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item -> delete();

        return redirect('/items')->with ('Item Deleted');
    }

    public function search()
    {
        $search_text = $_GET['search'];
        $item = Item::where('name', 'like', '%'.$search_text.'%')
        ->orwhere('pvms', 'like', '%'.$search_text.'%')->get();

        return view('item.search', compact('item'));
    }
}
