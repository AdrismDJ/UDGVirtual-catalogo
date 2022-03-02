<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie; 

class MovieController extends Controller
{
    public function index() {
    
        $movies = Movie::all(); 
        
        /*
        $movies = Movie::orderBy('title')->get(); 
        $movies = Movie::where('synopsis', 'Tom Cruise in Japan')->get(); */
        // $movies = Movie::latest()->get();         

        return view('movies.index', [
            'movies' => $movies,
            ]);
    }

    public function show($id) {
        $movie = Movie::findOrFail($id); 
        return view('movies.show', ['movie' => $movie]);
        }


    public function create() {
    return view('movies.create');
    }

    public function store(){
    
        $movie = new Movie(); 

        $movie->title = request('title'); 
        $movie->synopsis = request('synopsis'); 
        $movie->year = request('year'); 
        $movie->cover = request('cover');      

        $movie->save();    

        return redirect('/index/')->with('mssg','La película a sido registrada'); 
    }

        public function edit($id){
    
        
        $movie = Movie::findOrFail($id); 
        return view('movies.edit', ['movie' => $movie]);
    }

        public function update(Request $request, $id){

        $movie = Movie::findOrFail($id); 
        //return $movie; 
    
        /*$movie->title = request('title'); 
        $movie->synopsis = request('synopsis'); 
        $movie->year = request('year'); 
        $movie->cover = request('cover');   */

        $movie->title = $request->input('title'); 
        $movie->synopsis = $request->input('synopsis'); 
        $movie->year = $request->input('year'); 
        $movie->cover = $request->input('cover');   

        $movie->save();    

        return redirect('/index/')->with('mssg','La película a sido editada'); 


    }


    public function destroy($id) {
        $movie = Movie::findOrFail($id);
        $movie->delete(); 

        return redirect('/index/'); 
    }

}
