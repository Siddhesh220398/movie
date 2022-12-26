<?php

function setImage($file,$folder){
    $filename = $folder .'-'. rand() . '.' . $file->getClientOriginalExtension();
    $file->move(public_path($folder), $filename);
    return  $folder.'/'.$filename;
}
