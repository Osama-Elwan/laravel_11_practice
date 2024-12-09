<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
// use Str;//add this to use str dont forget that
use Illuminate\Support\Str;//implement str
use Illuminate\Support\Facades\File as HandleFile; //
class FileUploadController extends Controller
{
    function index()
    {

        //delete file from db
        // $file = File::find(18);
        // HandleFile::delete(public_path($file->file_path));//this line to get file path form db and delete it from public/uploads
        // HandleFile::delete(storage_path('app/file.ext));//storage path if u use storage folder and link it with public folder dont forget that (all path) //dont remove comment for it
        // $file->delete();//delete from db


        //show files
        $files =File::all();
        return view('file-upload',['files'=>$files]);
    }
    function store(Request $request)
    {
        // dd($request->all());//return file name and some info about it
        //local
        // $file = Storage::disk('local')->put('/',$request->file('file'));//save file in local
        // $file = $request->file('file')->store('/','local');
        // $file = $request->file('file')->store('/images','local'); //create folder and store image on it


        // public
        // $file = Storage::disk('public')->put('/',$request->file('file'));//save file in pulbic
        // $file = $request->file('file')->store('/','public');
        // $file = $request->file('file')->store('/images','public'); //create folder and store image on it


        // dd($file);
        // dd($request->file('file'));
        //save on db
        // $file = $request->file('file')->store('/','public'); //create folder and store image on it
        // $fileStore = new File();
        // $fileStore->file_path = $file;
        // $fileStore->save();


        //way two to save fies in case we cant use php artisan storage:link (server dont allow it) create another disk
        // $file = $request->file('file')->store('/','dir_public'); //create folder and store image on own disk
        // $fileStore = new File();
        // $fileStore->file_path = $file;
        // $fileStore->file_path = '/uploads/'.$file;//this way work with blade at file-upload at line:31
        // $fileStore->save();


        //file validaton
        $request->validate([
            'file' => ['required','image','mimes:png,jpg','max:4000'],//max using kilobyte
        ]);

        //customize name
        $file = $request->file('file');
        // dd($file);
        $customName ='Laravel_'. Str::uuid(); //its not error
        // dd($customName);
        $ext = $file->getClientOriginalExtension();
        // dd($ext);
        $fileName = $customName . '.' . $ext;
        $path = $file->storeAs('/',$fileName,'dir_public');
        $fileStore = new File();
        $fileStore->file_path = '/uploads/'.$path;
        $fileStore->save();
        dd('stored');
    }

    function download()
    {
        return Storage::disk('local')->download('FoZO5SFVY9lCfPw5pCGg7G5XoKdwVUBKA1ZntTWa.jpg');
        // $imageFiles = Storage::disk('local')->files('images');//to access local
        // $imageFiles = Storage::disk('local')->files();//to access local
        // dd($imageFiles);
        // foreach ($imageFiles as $imageFile) {
        //     $imageContent = Storage::disk('local')->get($imageFile);
        //     echo $imageFile . "\n";
        // }
    }
}
