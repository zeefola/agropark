<?php

namespace App\Http\Controllers;
use App\contact_history;
use Mail;
use Illuminate\Http\Request;

class homepageController extends Controller
{
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
}
