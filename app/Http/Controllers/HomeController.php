<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Agents;
use App\Models\Contact;
use App\Models\Partners;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function agentPage()
    {
        $agents = Agents::latest()->paginate(10);
        return view('admin.agents.agent', compact('agents'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function agentDetail($id)
    {
        $agents = Agents::where('id',$id)->first();
        return view('admin.agents.agentDetail', compact('agents'));
    }
    public function partnerPage()
    {
        $partners = Partners::latest()->paginate(10);
        return view('admin.clients.clients', compact('partners'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function partnerDetail($id)
    {
        $partners = Partners::where('id',$id)->first();
        return view('admin.clients.partnerDetail', compact('partners'));
    }
    public function partnerStore(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'description' => 'required',
        ]);

        $partner = new Partners();
        $partner->names = $request->input('names');
        $partner->description = $request->input('description');

        if ($image = $request->file('image')) {
            $destinationPath = 'image/partners/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $partner->image = $profileImage;
        }

        $partner->save();

        return redirect()->back();
    }
    //
    public function sendEmail(Request $request)
    {
        // Validate the form data
        $request->validate([
            'names' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'messages' => 'required',
        ]);

        $details = [
            'names' => $request->names,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'messages' => $request->messages,
        ];

        Mail::to('kabosierik@gmail.com')->send(new ContactMail($details));

        return back()->with('success', 'Your message has been sent!');
    }
}
