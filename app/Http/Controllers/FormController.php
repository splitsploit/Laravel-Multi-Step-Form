<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Form;
  
class FormController extends Controller
{

    public function index()
    {
        $forms = Form::all();
  
        return view('forms.index',compact('forms'));
    }
  
 
    public function createStepOne(Request $request)
    {
        $form = $request->session()->get('form');
  
        return view('forms.create-step-one',compact('form'));
    }
  
 
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'nomor_whatsapp' => 'required|numeric',
            'alamat_lengkap' => 'required',
            'tempat_tgl_lahir' => 'required',
            'pekerjaan' => 'required',
        ]);
  
        if(empty($request->session()->get('form'))){
            $form = new Form();
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        }else{
            $form = $request->session()->get('form');
            $form->fill($validatedData);
            $request->session()->put('form', $form);
        }
  
        return redirect()->route('forms.create.step.two');
    }
  
 
    public function createStepTwo(Request $request)
    {
        $form = $request->session()->get('form');
  
        return view('forms.create-step-two',compact('form'));
    }
  
 
    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'nama_usaha' => 'required',
            'bukti_po' => 'required',
            'invoice' => 'required',
        ]);
  
        $form = $request->session()->get('from');
        $form->fill($validatedData);
        $request->session()->put('form', $form);
  
        return redirect()->route('forms.create.step.three');
    }
  

    public function createStepThree(Request $request)
    {
        $form = $request->session()->get('form');
  
        return view('forms.create-step-three',compact('form'));
    }
 
    public function postCreateStepThree(Request $request)
    {
        $form = $request->session()->get('form');
        $form->save();
  
        $request->session()->forget('form');
  
        return redirect()->route('forms.index');
    }
}