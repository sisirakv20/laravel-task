<?php

namespace App\Http\Controllers;


use App\Models\User;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

     public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $users = User::with(['designation', 'department'])
            ->where('name', 'like', '%' . $searchTerm . '%')
            ->orWhereHas('designation', function($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%');
            })
            ->orWhereHas('department', function($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%');
            })
            ->get();

        return response()->json($users);
    }   

}
