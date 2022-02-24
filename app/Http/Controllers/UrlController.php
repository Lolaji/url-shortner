<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    public function create(Request $request) 
    {
        $response = ['success'=> false, 'url'=> '', 'message'=>''];

        $validate = Validator::make($request->all(), [
            'url'=> 'string|required'
        ]);

        if (!$validate->fails()) {
            $cred = $request->only('url');
            $cred['slug'] = Str::random(7);
            if ($create = Url::create($cred)){
                $response['success'] = true;
                $response['url'] = url("/{$create->slug}");
                $response['message'] = "Short URL successfully created.";
            } else {
                $response['success'] = false;
                $response['message'] = 'Unable to create url shortner';
            }
        } else {
            $response['success'] = false;
            $response['message'] = $validate->errors()->first('url');
        }

        return $response;
    }

    public function redirect(Request $request, Url $url)
    {
        // dd($url);
        return Redirect::to($url->url);
    }
}
