<?php namespace App\Http\Controllers;

use App\Content;
use App\Country;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Role;
use App\Title;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller {

	public function home(){
//        if($_SERVER["HTTP_HOST"] == .....){
//
//        }
        $contents = Content::all();

        foreach ($contents as $content) {
            if($content->menus->id === 1 && $content->active === 1){
                $c = $content->content;
            }
        }

        return view('pages/home')->with([
            'content' => $c
        ]);
    }

    public function editorialBoard(){

        $user = User::find(3);

        return view('pages/editorialBoard')->with([
            'title_name' => $user->titles->name,
            'role_name' => $user->roles->name,
            'name' => $user->name,
            'surname' => $user->surname,
            'university' => $user->user_university,
            'country' => $user->user_country
        ]);
    }

    public function guideline(){

        $contents = Content::all();

        foreach ($contents as $content) {
            if($content->menus->id === 4 && $content->active === 1){
                $c = $content->content;
            }
        }

        return view('pages/guidelines')->with([
            'content' => $c
        ]);

    }

    public function contactUs(){

        $contents = Content::all();

        foreach ($contents as $content) {
            if($content->menus->id === 9 && $content->active === 1){
                $c = $content->content;
            }
        }

        return view('pages/contactus')->with([
            'content' => $c
        ]);


    }

    public function ethics(){

        $contents = Content::all();

        foreach ($contents as $content) {
            if($content->menus->id === 5 && $content->active === 1){
                $c = $content->content;
            }
        }

        return view('pages/ethics')->with([
            'content' => $c
        ]);

    }

    public function aboutUs(){

        $contents = Content::all();

        foreach ($contents as $content) {
            if($content->menus->id === 8 && $content->active === 1){
                $c = $content->content;
            }
        }

        return view('pages/aboutus')->with([
            'content' => $c
        ]);

    }

    public function publications(){



        return view('pages/publications');
    }

    public function announcements(){
        return view('pages/announcements');
    }

    public function authors(){

        $users = User::all();

        return view('pages/authors')->with([
            'users' => $users,
        ]);
    }

    public function joinUs(){

        $titles = Title::all();
        $countries = Country::all();

        return view('pages/joinus')->with([
            'titles' => $titles,
            'countries' => $countries
        ]);
    }

    public function login(){
        return view('auth/login');
    }
}
