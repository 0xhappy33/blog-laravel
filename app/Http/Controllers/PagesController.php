<?php
/**
 * Created by PhpStorm.
 * User: Ha Truong
 * Date: 12/11/2017
 * Time: 8:26 AM
 */
namespace  App\Http\Controllers;

class PagesController extends Controller{

    public function getIndex(){
        # process variable data or param
        # talk to model
        # receive from the model
        # compile or process data from the model if needed
        # pass data to correct view
        return view('pages.welcome');
    }

    public function getAbout(){
        $first = "Truong";
        $last = "Ha";
        $fullName = $first . " " . $last;
        $email = "hatruong@gmail.com";

        $data = [];
        $data['fullname'] = $fullName;
        $data['email'] = $email;

        return view('pages.about')->with('data', $data);
    }

    public function getContact(){
        return view('pages.contact');
    }

    public function postContact(){

    }

}
