<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class FrontendController extends Controller
{
    public function setpasswordcustomer(Request $request,$type,$id){
		$userId = \App\Helpers::decrypt($id);
		if($type == 'customer'){
			$pageexp = User::find($userId);
		} else{
			$pageexp = Admin::find($userId);
		}
		 if( $pageexp['set_pass_status'] == '1'){
			$pageExpaire = '1';
			 return view('auth.set-password-customer',compact('pageExpaire'));
		} else if (Carbon::now() > $pageexp->created_at->addMinutes(15) ) {
			$pageExpaire = '12';
			 return view('auth.set-password-customer',compact('pageExpaire'));
		}
         return view('auth.set-password-customer',compact('userId','type'));
    }

	public function setpaswordcus(Request $request){
		$data = $request->all();

			$password = Hash::make($request->password);
			$getData = array(
				'password' => $password,
				'set_pass_status' => 1,
			);
			if($data['type'] == 'customer'){

			User::where('id', $data['userId'])->update($getData);
			return redirect('login')->with('message','New Password Updated Successfully!!');
			}else{
			Admin::where('id', $data['userId'])->update($getData);
			return redirect('admin/login')->with('message','New Password Updated Successfully!!');
			}
    }

    public function resetpasswordcustomer(Request $request,$id){
		$userId = \App\Helpers::decrypt($id);
         return view('auth.reset-password-admin',compact('userId'));
    }

	public function resetpaswordcus(Request $request){
		$data = $request->all();

			$password = Hash::make($request->password);
			$getData = array(
				'password' => $password,

			);
			Admin::where('id', $data['userId'])->update($getData);

			return redirect('admin/login')->with('message','New Password Updated Successfully!!');
		/*} else {
			return redirect()->back()
					->with('success','Sorry, You can one-time set a password. You have already set your password!!');
		}*/
    }

    public function pageImgUpload(Request $request)
    {

       if ($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;

        $request->file('upload')->move(public_path('media'), $fileName);

        $url = asset('media/' . $fileName);
        return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);


    }
    }

    public function sendEmailToContact(Request $request){
    	$data = $request->all();
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'to' => "manj@mailinator.com",
            'subject' => "Request for contact",
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'message' => $data['message'],
       ];

      \Mail::to('manj@mailinator.com')->send(new \App\Mail\SendReqToContact($details));
      return 1;
    }
}
