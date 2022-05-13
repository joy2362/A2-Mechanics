<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Artisan;

class WebSettingController extends Controller
{

    public function index(){
        $admin_url = env("ADMIN_PANEL_URL");
        return view('backend.pages.web-setting.index',['admin_url'=>$admin_url]);
    }
    protected function updateDotEnv($key, $newValue, $delim='')
    {

        $path = base_path('.env');
        // get old value from current env
        $oldValue = env($key);

        // was there any change?
        if ($oldValue === $newValue) {
            return;
        }

        // rewrite file content with changed data
        if (file_exists($path)) {
            // replace current value with new value
            file_put_contents(
                $path, str_replace(
                    $key.'='.$delim.$oldValue.$delim,
                    $key.'='.$delim.$newValue.$delim,
                    file_get_contents($path)
                )
            );
        }
    }

    public function change_admin_url(Request $request){
        $request->validate([
            'name' => 'required|max:191',
        ]);
        $this->updateDotEnv("ADMIN_PANEL_URL" , str_replace(' ', '', $request->name)  );

        $notification = array(
            'messege' => 'Admin panel url name changed!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.websetting.index')->with($notification);
    }

    public function update(Request $request , WebSettings $websetting){
        $request->validate([
            'title' => 'required|max:191',
            'subtitle' => 'required',
            'tags' => 'required',
            'meta_description' => 'required|min:3|max:1000',
        ]);
        $tages =  explode(',', $request->tags);

        $websetting->title = $request->title;
        $websetting->sub_title = $request->subtitle;
        $websetting->meta_description = $request->meta_description;
        $websetting->save();

        $websetting->syncTags($tages);

        $notification = array(
            'messege' => 'Work Updated Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }
}
