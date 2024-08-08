<?php

namespace App\Http\Controllers;

use App\Models\Agents;
use App\Models\Regions;
use PDF;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AgentsController extends Controller
{
    public function createStep1(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.create-step1', compact('agent'));
    }
    public function postCreateStep1(Request $request)
    {

        $validatedData = $request->validate([
            'names' => 'required',
            'nid' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'status' => 'required',
            'education' => 'required',
            'nextKinNames' => 'required',
            'nextKinPhone' => 'required',
        ]);

        if (empty($request->session()->get('agent'))) {
            $agent = new Agents();
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        } else {
            $agent = $request->session()->get('agent');
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        }

        return redirect('/became-an-agent/create-step2');
    }
    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep2(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.create-step2', compact('agent'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep2(Request $request)
    {
        $validatedData = $request->validate([

            'province' => 'required',
            'district' => 'required',
            'sector' => 'required',
            'cell' => 'required',
            'village' => 'required',
            'isibo' => 'required',
        ]);

        if (empty($request->session()->get('agent'))) {
            $agent = new Agents();
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        } else {
            $agent = $request->session()->get('agent');
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        }
        return redirect('/became-an-agent/create-step3');
    }
    /**
     * Show the step 2 Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep3(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.create-step3', compact('agent'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep3(Request $request)
    {
        $validatedData = $request->validate([

            'businessNames' => 'required',
            'tinNumber' => 'required',
            'businessCategory' => 'required',
            'services' => 'required',
            'userImg' => 'required|file|mimes:jpeg,png,pdf',
        ]);

        // Store the file in the storage/app/public directory
        $path = $request->file('userImg')->store('public');


        if (empty($request->session()->get('agent'))) {
            $agent = new Agents();
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        } else {
            $agent = $request->session()->get('agent');
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        }
        return redirect('/became-an-agent/create-step4');
    }
    /**
     * Show the step 2 Form for creating a new agent.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStep4(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.create-step4', compact('agent'));
    }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStep4(Request $request)
    {
        $validatedData = $request->validate([

            'terms' => 'required',
            'acceptance' => 'required',
        ]);

        if (empty($request->session()->get('agent'))) {
            $agent = new Agents();
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        } else {
            $agent = $request->session()->get('agent');
            $agent->fill($validatedData);
            $request->session()->put('agent', $agent);
        }
        return redirect('/became-an-agent/previewPage');
    }
    /**
     * Show the Product Review page
     *
     * @return \Illuminate\Http\Response
     */
    public function createPreview(Request $request)
    {
        $agent = $request->session()->get('agent');
        return view('agents.previewPage', compact('agent'));
    }
    public function accountProfile(Request $request)
    {
        return view('agentsProfile.account_profile');
    }

    public function store(Request $request)
    {
        $request->validate([
            'names' => 'required',
            'nid' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'status' => 'required',
            'education' => 'required',
            'nextKinNames' => 'required',
            'nextKinPhone' => 'required',
            'province' => 'required',
            'district' => 'required',
            'sector' => 'required',
            'cell' => 'required',
            'village' => 'required',
            'isibo' => 'required',
            'businessNames' => 'required',
            'tinNumber' => 'required',
            'businessCategory' => 'required',
            'services' => 'required',
            'userImg' => 'required',
            'id_doc' => 'required',
            'rdb_certificate' => 'required',
            'certificateOfResidence' => 'required',
            'CriminalRecordCertificate' => 'required',
            'terms' => 'required',
            'acceptance' => 'required',
        ]);

        try {

            $agent = new Agents();
            $agent->names = $request->input('names');
            $agent->nid = $request->input('nid');
            $agent->gender = $request->input('gender');
            $agent->phone = $request->input('phone');
            $agent->email = $request->input('email');
            $agent->status = $request->input('status');
            $agent->education = $request->input('education');
            $agent->nextKinNames = $request->input('nextKinNames');
            $agent->nextKinPhone = $request->input('nextKinPhone');
            $agent->province = $request->input('province');
            $agent->district = $request->input('district');
            $agent->sector = $request->input('sector');
            $agent->cell = $request->input('cell');
            $agent->village = $request->input('village');
            $agent->isibo = $request->input('isibo');
            $agent->businessNames = $request->input('businessNames');
            $agent->tinNumber = $request->input('tinNumber');
            $agent->businessCategory = $request->input('businessCategory');
            $selectedServices = $request->input('services', []);
            $agent->services = implode(',', $selectedServices);
            $agent->terms = $request->input('terms');
            $agent->acceptance = $request->input('acceptance');

            if ($userImg = $request->file('userImg')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $userImg->getClientOriginalExtension();
                $userImg->move($destinationPath, $profileImage);
                $agent->userImg = $profileImage;
            }
            if ($id_doc = $request->file('id_doc')) {
                $destinationPath = 'id document/';
                $profileId = date('YmdHis') . "." . $id_doc->getClientOriginalExtension();
                $id_doc->move($destinationPath, $profileId);
                $agent->id_doc = $profileId;
            }
            if ($rdb_certificate = $request->file('rdb_certificate')) {
                $destinationPath = 'rdb_certificate/';
                $profileRdb = date('YmdHis') . "." . $rdb_certificate->getClientOriginalExtension();
                $rdb_certificate->move($destinationPath, $profileRdb);
                $agent->rdb_certificate = $profileRdb;
            }
            if ($certificateOfResidence = $request->file('certificateOfResidence')) {
                $destinationPath = 'certificate_Residence/';
                $profileCr = date('YmdHis') . "." . $certificateOfResidence->getClientOriginalExtension();
                $certificateOfResidence->move($destinationPath, $profileCr);
                $agent->certificateOfResidence = $profileCr;
            }
            if ($CriminalRecordCertificate = $request->file('CriminalRecordCertificate')) {
                $destinationPath = 'certificate_Criminal/';
                $profileCriminal = date('YmdHis') . "." . $CriminalRecordCertificate->getClientOriginalExtension();
                $CriminalRecordCertificate->move($destinationPath, $profileCriminal);
                $agent->CriminalRecordCertificate = $profileCriminal;
            }

            $agent->save();

            // Generate PDF
            $pdf = FacadePdf::loadView('emails.contract', $request->all());

            // Send email
            Mail::send('emails.contract', $request->all(), function ($message) use ($pdf) {
                $message->to('kabosierik@gmail.com')
                    ->subject('Agent Registration Submission')
                    ->attachData($pdf->output(), 'contract.pdf');
            });

            return redirect()->back();

        } catch (\Exception $e) {
            // On error
            return redirect()->back()->with('error', 'Error submitting form. Please try again.');
        }
    }
}
