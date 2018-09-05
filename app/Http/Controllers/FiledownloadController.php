<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Downloads;
use Session;

class FiledownloadController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
    	return view('admin.downloads.create');
    }

    public function showDownloadFile(){
    	$filedownloads =Downloads::orderBy('id', 'DESC')->get();
    	return view('admin.downloads.show', compact('filedownloads'));
    }

     	// gallery data insert into database
    public function storeDownloadFile(Request $request){
   		//return $request->all();
   		$importTitle=$request->input('title');
        $datepicker=$request->input('date_picker');
		$position=$request->input('position');
		//cheaking import filepdf,xls,doc,docx
		$validator=Validator::make($request->all(), [
            'import_file' => 'required|mimes:pdf,xls,excel,doc,docx,word|max:2048',
        ]);
		if($validator->passes()){
			//impoer file name
			$photoFile = $request->file('import_file');
			$fileExtension = $photoFile->getClientOriginalExtension();
			$filename = str_random(20).".".$fileExtension;
			$destinationPath = 'asset/pdf/';
			$uploaded = $photoFile->move($destinationPath, $filename);

			$importfile = new Downloads;

		    $importfile->title = $importTitle;
            $importfile->date_picker = $datepicker;
    	    $importfile->position = $position;
    	    //import pdf,excel,doc file
    	    $importfile->import_file =$filename; 

			$importData = $importfile->save(); 

    	    Session::flash('message','File posted successfully');
    	    return redirect()->back();

		}else{
			return 'please enter write file';
		}

    }

    public function editDownloadFile($id){
          $import =Downloads::where('id',$id)->first();
         return view('admin.downloads.edit', compact('import'));
    }

    public function updateDownloadFile(Request $request){
        //return $request->all();
        $importId =$request->input('id');
        // $importId =$request->file('import_file');

            if(!empty($importId)) {
            // validetion cheaking
           $validator=Validator::make($request->all(), [
               'title' => 'required'
                // 'import_file' => 'required|mimes:pdf,xls,excel,doc,docx,word|max:2048',
             ]); 

            if($validator->passes()) {

            $importTitle=$request->input('title');
            $datepicker=$request->input('date_picker');
            $position=$request->input('position');
            //import file updating
            $photoFile = $request->file('import_file');
            // update file checking
            if(!empty($photoFile)){
                $fileExtension = $photoFile->getClientOriginalExtension();
                $filename = str_random(20).".".$fileExtension;
                $destinationPath = 'asset/pdf/';
                $uploaded = $photoFile->move($destinationPath, $filename);
                $importData = Downloads::findOrFail($importId);
                //return $importData;
                $importData->import_file =$filename;
                $importData->update();
            }
            
            $importData = Downloads::findOrFail($importId);
            $importData->title = $importTitle;
            $importData->date_picker = $datepicker;
            $importData->position = $position;
            $importData->update();

            Session::flash('message', 'File updated successfully');
            return redirect()->back();

            } else {
            Session::flash('message', 'Please insert pdf/ xls/ excel/ doc / docx/ word|');
            return redirect()->back();

            }

        }

    }

    public function filedelete($id){
        $importdelete = Downloads::find($id)->delete();

        Session::flash('message', 'Data updated successfully');
        return redirect()->back();
    }






}
