<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function form_format()
    {
        return view('form_format');
    }
    public function list_format()
    {
        $data = [
            'data' => DB::select('select * from formats')
        ];
        return view('list_format', $data);
    }

    public function create_format_post(Request $request)
    {
        // print_r($request->input());

        $arr = [$request->input('title'),  $request->input('custom_query'), date('Y-m-d h:i:s')];
        // DB::insert('formats', $arr);

        DB::insert('insert into formats (title, custom_query, created_at) values (?, ?, ?)', $arr);

        $data = [
            'data' => DB::select('select * from formats')
        ];
        return view('list_format', $data);
    }

    public function view_result(Request $request)
    {
        $query = $request->input('query');

        $data = [
            'query' => $query,
            'data' => DB::select($query)
        ];
        return view('list_format', $data);
    }
}
