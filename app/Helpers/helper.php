<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('hasAccess')){
    function hasAccess($permission){
        $user = Auth::user();

        if(!$user){
            return false;
        }

        // $permission can be string or array
        if(is_string($permission)){
            return $user->can($permission);
        }

        if(is_array($permission)){
            foreach($permission as $perm){
                if($user->can($perm)){
                    return true;
                }
            }
        }
        return false;
    }
}
