<?php
function uploadImage($directory,$file)
{
    $year = now()->year;
    $month = now()->month;
    $dir = "$directory/$year/$month";
    $rand = rand(1000,9999);
    $name = $rand.'.'.$file->getClientOriginalExtension();
    $file->storeAs($dir,$name);
    return 'storage/'.$dir.'/'.$name;
}

function updateImage($directory,$file,$oldImage){

    $year = now()->year;
    $month = now()->month;
    $dir = "$directory/$year/$month";
    $name = $file->getClientOriginalName();
    if ($oldImage){
        unlink($oldImage);
        $file->storeAs($dir,$name);
    }
    $file->storeAs($dir,$name);
    return 'storage/'.$dir.'/'.$name;

}
?>
