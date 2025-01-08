<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('index');
    }

    public function dashboard(){
       if(Auth::user()->role == 'admin'){
           $TotalUsers = User::where('role', 'user')->count();
           $TotalBooks = Book::All()->count();
           return view('admin.index',compact('TotalUsers','TotalBooks'));
       }
       return view('user.index');
    }

    public function register(Request $request){
        if($request->isMethod('post')){
            $validated = $request->validate([
                'username' => 'min:3|required|unique:users',
                'fname' => 'min:2|required',
                'lname' => 'min:2|required',
                'password' => 'min:4|required',
            ]);
//            $user = new User();
//            $user->username = $request->username;
//            $user->fname = $request->fname;
//            $user->lname = $request->lname;
//            $user->password = Hash::make($request->password);
//            $user->role = 'admin';
//            $user->save();
            User::create($validated);
            return redirect()->route('login')->with('success','User created successfully');
        }
        return view('register');
    }

    public function login(Request $request){
        if($request->isMethod('post')){
            $validated = $request->validate([
                'username' => 'min:3|required',
                'password' => 'min:4|required',
            ]);
            if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
                //this will make a new session for the authenticated user so nobody can hijack his sessions
                $request->session()->regenerate();
                return redirect()->intended('/dashboard');
            }else{

                return back()->with('error','Invalid Username or Password');
            }
        }
        return view('login');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/login');
    }

    public function manageBook(){
        $books = Book::all();
        return view('admin.book', compact('books'));
    }

    public function manageUser(){
        $users = User::where('role', 'user')->get();
        return view('admin.user', compact('users'));
    }

    public function createBook(Request $request){
        if($request->isMethod('post')){
            if($request->hasFile('image')&&$request->file('image')->isValid()){
                $requestValide = $request->validate([
                   'title' => 'min:4|required',
                   'description' => 'min:5|required',
                   'author' => 'min:2|required',
                   'genre' => 'min:4|required',
                ]);
                $book = new Book();
                $book->title = $requestValide['title'];
                $book->description = $requestValide['description'];
                $book->author = $requestValide['author'];
                $book->genre = $requestValide['genre'];
                $book->quantity = $request->quantity;
                $book->release_date = $request->release_date ?? date(now())  ;
                $path = $request->file('image')->store('images', 'public');
                $book->image = $path;
                $book->save();
                return redirect()->route('dashboard');
            }
            return back()->withErrors('error','Something going wrong');
        }
        return view('books.create');
    }
}
