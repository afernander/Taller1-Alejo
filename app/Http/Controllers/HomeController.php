<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Client;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function create()
    {
        return view('home.form');
    }

    public function store(Request $request)
    {
        Client::create([
            'name' => $request->name,
            'address' => $request->address,
            'credit_card' => $request->credit_card
        ]);
        return back();
    }

    public function list()
    {
        $items = Client::all();
        return view('home.list', compact('items'));
    }

    public function info($id)
    {
        $items = Client::find($id);
        return view('home.info', compact('items'));
    }

    public function delete($id)
    {
        $items = Client::destroy($id);
        return redirect()->route('home.list');
    }
}
