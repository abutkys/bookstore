<?php

namespace App\Http\Controllers;
use App\Main;
use App\Http\Requests\BookStoreCreate;
use Illuminate\Http\Request;

class MainController extends Controller
{
      public function __construct()
      {
            $this->middleware('auth')->except((['index', 'show']));

      }

    public function index (){
          $mains = Main::all();
          return view('maincollection.index',compact('mains'));
   }

   public function show (Main $main){
         return view('maincollection.show', compact('main'));
  }


   public function create (){
         return view('maincollection.create');
  }
   public function store (BookStoreCreate $request){

         $this->validate(request(), [
               'title'=>'required|max:40',
               'description'=>'required|max:500',
               'price'=>'required|int:10',
               // only for these formats jpeg, png, bmp, gif, or svg
               'image'=>'required|max:200'
         ]);

        Main::create([
             'title'=> request('title'),
             'price'=> request('price'),
             'image'=> request('image'),
             'description'=> request('description'),
             'user_id' => auth()->id()
      ]);
      session()->flash('message', 'Book has been added successfully !!!');
      return redirect('/mains/index');
  }
  public function edit(Main $main)
    {
      return view ('maincollection.edit', compact('main'));
    }
  //
    public function update(BookStoreCreate $request, Main $main)
  {
     $main->update([
      'title' => $request->input('title'),
      'description' => $request->input('description'),
      'image' => $request->input('image'),
      'price' => $request->input('price')
      ]);

      return redirect()->route('mains.index')->with('message', 'Book edited and added to database successfully !!!');
      }

      public function destroy(Main $main)
  {
          $main->delete();
         return redirect()->route('mains.index')->with('message','Book has been deleted');
  }



}
