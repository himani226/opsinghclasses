<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\query;
use App\Mail\QueryMail;
use Illuminate\Support\Facades\Mail;
  
class QueryController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function query()
    {
        return view('query');
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
            'phone' => 'required|digits:10|numeric',
            'year' => 'required|digits:4|numeric',
            'qualification' => 'required',
            'courses' => 'required',
            'message' => 'required'
        ]);
         // Send mail to admin
        Mail::to('info@opsinghclasses.com')->send(new QueryMail($data));
        

        //query::create($data);

       
        return redirect()->back()
                         ->with(['success' => 'Thank you for your Query. We will contact you shortly.']);
    }
}