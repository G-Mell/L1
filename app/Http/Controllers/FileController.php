<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zhurnal;
use App\Imports\ZhurnalImport;
use Maatwebsite\Excel\Facades\Excel;

class FileController extends Controller
{
    public function store(Request $request)
    {
        $ext = $request->file->getClientOriginalExtension();
        if($ext != "xlsx" and $ext != "xls")
            abort(415);
        $fileName = time() . '.' . $ext;
        $request->file->move(public_path('files'), $fileName);
        // $this->import($request, $fileName);
        Excel::import(new ZhurnalImport, public_path('files/').$fileName);
        return response()->json(['file' => $fileName]);
    }
    public function table()
    {
        return view('table');
    }
//     public function import(Request $request, String $fileName)
//     {


//         $this->validate($request, [
//             'import_file' =>'required|mimes:xls,xlsx'
//         ]);



//         $peoples = Excel::toArray(new ZhurnalImport(), request()->file($fileName));
// //        dd($peoples);

//         foreach ($peoples[0] as $people){
//             Zhurnal::where(
//                 'id', $people[0])->update([
//                 'name' => $people[1],
//                 'surname' => $people[2],
//                 'secondName' => $people[3],
//                 'email' => $people[4],
//             ]);
//         }
//         return redirect()->route('people')->with('success', 'Данные успешно получены!');
//     }
    // public function stinsr=ore(Request $request)
    // {
    //     $date = $request->get('date');
    //     $course = $request->get('course');
    //     $group = $request->get('group');
    //     $name = $request->get('name');
    //     $lectures = $request->get('lectures');
    //     $posts = DB::insert('INSERT INTO excel_files(daterow, courserow, grouprow, namerow, lectures) VALUES (?,?,?,?,?);', [$date, $course, $group, $name, $lectures]);
    //     if($posts){
    //         $red = redirect('posts')->with('success','Data has been added');
    //     } else{
    //         $red = redirect('posts/create')->with('danger','Input data failed, please try again');
    //     }
    //     return $red;
    // }
}
