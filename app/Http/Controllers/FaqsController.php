<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FaqModel;
use Session;

class FaqsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
    	return view('admin.faqs.create');

    }

    public function storeFaqs(Request $request){
    	//return $request->all();

    	$qusName = $request->input('qus_name');
    	$qusAns = $request->input('qus_ans');
    	$sortList = $request->input('sort_list');
    	$positin = $request->input('position');

    	$faqs =new FaqModel();
    	$faqs->qus_name = $qusName;
    	$faqs->qus_ans = $qusAns;
    	$faqs->sort_list = $sortList;
    	$faqs->position = $positin;
    	$fqaStore = $faqs->save();

    	Session::flash('message','Faqs Posted Successfully');
    	 return redirect()->back();

    }

    public function showFaqs(){
    	 $allfaqs =FaqModel::all();
    	return view('admin.faqs.show', compact('allfaqs'));


    }

    public function editFaqs($id){

    	 $faqs=FaqModel::where('id', $id)->first();
    	 return view('admin.faqs.editfaqs', compact('faqs'));


    }

    public function updateFaqs(Request $request){

    	//return $request->all();

    	$faqId = $request->input('id');
			if(!empty($faqId)) {

			$faqData = FaqModel::findOrFail($faqId);

	        $faqData->qus_name= $request->input('qus_name');
	        $faqData->qus_ans= $request->input('qus_ans');

	        $faqData->update();

	         Session::flash('message', 'Faqs updated successfully');

	         return redirect()->back();
			}
    }

    public function deleteBlog($id){
		$faqs = FaqModel::find($id)->delete();

		    Session::flash('message', 'Data deleted successfully');
	         return redirect()->back();
	}




}
