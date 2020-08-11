<?php

namespace App\Http\Controllers;
use App\contact_history;
use App\graduate_trainee;
use Mail;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function welcome(){
      return view('welcome');
    } 
   
    public function contactUs(){
      return view('contact-us');
    }

    public function contactusConfirm(){
        /* validate the input */
         $this->validate( request() , array(
          'fullname' => 'required',
          'email' => 'required|email',
          'phone' => 'required',
          'interest' => 'required',
          'message' => 'required',
          'g-recaptcha-response' => 'required|captcha'
         ));

        //  return request()->all();

        /* submit data to the database */
        $db_data = new contact_history();
        $db_data->fullname = request()->firstname;
        $db_data->email = request()->email;
        $db_data->phone = request()->phone;
        $db_data->interest = request()->interest;
        $db_data->message = request()->message;
        $db_data->save();
 
        /* save inputs to data */
        $data = array(
         'fullname' => request()->fullname,
         'email' => request()->email,
         'phone' => request()->phone,
         'interest' => request()->interest,
         'description' => request()->message,
         'admin_email' => 'admin@agropark.ng',
         'created_at' => $db_data->created_at,
        );

        /* send notification email to the admin */
        Mail::send('emails.contact_notification' , $data, function($m) use($data){
        $m->to($data['admin_email'])->subject('Contact Us Notification');
        });
        /* return back */
        session()->flash('success_report' , 'Contact form submitted successfully');
        return back();

    }

    public function aboutUs(){
      return view('about');
    }

    public function ourTeam(){

      $datas = \App\Repositories\Team::getTeam();
      return view('team')->with('datas' , $datas);
    }

    public function partners(){
      return view('partners');
    }

    public function gallery(){
      return view('gallery');
    }

    public function bulletin(){
      return view('bulletin');
    }

    public function brochure(){
      return view('brochure');
    }

    public function faq(){
      return view('faq');
    }

    public function graduateTrainee(){
      return view('graduate-trainee');
    }

    public function graduateTraineeConfirm(){
     // Validate the input
      $this->validate( request() , array(
         'title' => 'required',
         'surname' => 'required',
         'other_names' => 'required',
         'gender' => 'required',
         'age' => 'required',
         'course' => 'required',
         'qualification' => 'required',
         'email' => 'required|email',
         'phone' => 'required',
         'state' => 'required',
         'interest' => 'required',
         'g-recaptcha-response' => 'required|captcha'

      ));

      // return request()->all();

     // Save input into the database

     $db_data = new graduate_trainee();
     $db_data->title = request()->title;
     $db_data->surname = request()->surname;
     $db_data->other_names = request()->other_names;
     $db_data->gender = request()->gender;
     $db_data->age = request()->age;
     $db_data->course = request()->course;
     $db_data->qualification = request()->qualification;
     $db_data->email = request()->email;
     $db_data->phone = request()->phone;
     $db_data->state = request()->state;
     $db_data->interest = request()->interest;
     $db_data->save();

     // Store input into data




     // Send message to the admin

     session()->flash('success_report' , 'Form submitted successfully');
     return back();

    }

    public function poultrySubscription(){
      return view('poultry-subscription');
    }

    public function fisherySubscription(){
      return view('fishery-subscription');
    }

    public function farmlandSubscription(){
      return view('farmland-subscription');
    }

    public function cashcropSubscription(){
      return view('cashcrop-subscription');
    }

    public function assetManagement(){
      return view('asset-management');
    }

    public function agribusinessAcademy(){
      return view('academy');
    }



}
