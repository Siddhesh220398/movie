<?php

function setImage($file,$folder,$type=null){
    if($type == 'edit'){
        
    }
    $filename = $folder .'-'. rand() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path($folder), $filename);
    return  $folder.'/'.$filename;
}
