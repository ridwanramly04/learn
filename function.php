<?php

function login($user, $password)
{
    if ($user == 'ubuntu') {
        # code...
        if ($password == 1234) {
            # code...
            return  true;
        }else{
            return false;
        }
    } else {
        # code...
        return false;
    }
    
}

function postLogin()
{
    if (login('ubuntu', 1234)) {
        # code...
        return "Ur login";
    } else {
        # code...
        return "Opps Something wrong";
    }
    
    
}

echo postLogin();