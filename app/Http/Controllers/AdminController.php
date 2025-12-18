<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminProfile()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);
        return view('admin.admin_profile',compact('profile'));
    }

    public function profileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::Find($id);

        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->address = $request->address;

        $oldPhotoPath = $data->photo;
         if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload/user_images/'),$filename);
            $data->photo = $filename;
            if($oldPhotoPath && $oldPhotoPath !== $filename) {
                $this->deleteOldImage($oldPhotoPath);
            }
        }
        $data->save();

        $notification = array(
            'message' => 'Профиль успешно обновлён.',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    private function deleteOldImage(string $oldPhotoPath): void
    {
        $fullPath = public_path('upload/user_images/'.$oldPhotoPath);
        if(file_exists($fullPath)) {
            unlink($fullPath);
        }
    }
}
