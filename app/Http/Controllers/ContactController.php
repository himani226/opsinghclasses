<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
  
class ContactController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function contact()
    {
        return view('contact');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
         // Send mail to admin
        Mail::to('info@opsinghclasses.com')->send(new ContactMail($data));
        

        contact::create($data);

       
  
        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. We will contact you shortly.']);
    }
}