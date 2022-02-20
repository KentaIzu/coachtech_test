<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    private $formItems = ['name','gender','email','postcode','address','building_name','option'];

	private $validator = [
		'name'=>'required',
        'gender'=>'required',
        'email'=>'required|email',
        'postcode'=>'required',
        'address'=>'required',
        'building_name'=>'nullable',
        'option'=>'required|max:120'
	];

	public function show(){
		return view('index');
	}

	public function post(Request $request){
		$input = $request->only($this->formItems);
		$validator = Validator::make($input, $this->validator);
		if($validator->fails()){
			return redirect('/form')
				->withInput()
				->withErrors($validator);
		}
		$request->session()->put('form_input', $input);
		return redirect('/form/confirm');
	}

    public function confirm(Request $request){
		$input = $request->session()->get('form_input');
		return view('confirm',['input' => $input]);
    }

    public function send(Request $request){
		$input = $request->session()->get('form_input');
		if($request->has('back')){
			return redirect('/form')
				->withInput($input);
		}
        DB::table('contacts')->insert($input);
        return redirect('/form/thanks');
	}

    public function complete(){	
		return view('complete');
	}

    public function search(Request $request)
    {
        $item = Contact::where('name', 'LIKE',"%{$request->input}%")->get();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('manage', $param);
    }
    public function manage()
    {
        $items=Contact::Paginate(4);	
		return view('manage',['items'=>$items]);
	}

	public function delete(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/form/manage');
    }
}
