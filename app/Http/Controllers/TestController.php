<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DemoModel ;

class TestController extends Controller
{
    //
    public function form(){
        return view('Testform');
    }
    public function addform(Request $request){
    $request->validate([
            'email' => 'required',
            'password' => 'required',
            'image' => 'required',   
        ]);
        $addvar = new DemoModel ();
        $addvar ->email = $request ->get('email');
        $addvar ->password = $request ->get('password');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $photo = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('test-imagess'), $photo);
        }
            $addvar->image = $photo;

   
        
        $addvar->save();
        return redirect('listform');

        
    

    }
    public function listform(){
    $lists = DemoModel::all();
    return view('list',compact('lists'));

}
public function edits($id){
    $editdata=DemoModel::where('id',$id)->first(); 
    return view('edit',compact('editdata'));
  }
    
    public function editdata(Request $request, $id)
    {
        $request->validate([
           'email' => 'required',
           'password' => 'required',
           

        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $photo = rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('test-imagess'), $photo);
        }
        DemoModel::where('id',$id)->update([
  
        'email' => $request->get('email'),
        'password'=> $request->get('password'),
       
         'image'=> $photo,
        ]);
        return redirect('listform')->withSuccess('updated successfully');
}
public function deleted($id){
    $deletee=DemoModel::where('id',$id)->first();
    $deletee->delete();
    return redirect('listform')->withSuccess('deleted successfully');
  }
}

