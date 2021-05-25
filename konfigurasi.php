<?php

// Membaca Seluruh Data Pada Json
function AmbilData(){
    // mengambil data pada Json 
    return json_decode(file_get_contents(__DIR__.'/data.json'),true);


}

// Membaca data sesuai Id
function AmbilDataById($id){

    $alldata = AmbilData();
    //memanggil semua data bedasarkan id
    foreach ($alldata as $data) {
        if ($data['id']==$id) {
            return $data;
        }
    }
    return null;

}

// Fungsi Create
function BuatData($data){

    $alldata = AmbilData();
    $data['id'] = rand(1000000, 2000000);
    $alldata[] = $data;
    file_put_contents(__DIR__.'/data.json',json_encode($alldata,JSON_PRETTY_PRINT));

    return $data;

}

// fungsi Update
function updateData($datanya,$id){
    $alldata = AmbilData();
    //memanggil semua data bedasarkan id
    foreach ($alldata as $i => $data) {
        if ($data['id']==$id) {
            $alldata[$i] = array_merge($data, $datanya);
        }
    }
    file_put_contents(__DIR__.'/data.json',json_encode($alldata,JSON_PRETTY_PRINT));


}

// fungsi Delete
function HapusData($id){
    $alldata = AmbilData();

    foreach ($alldata as $i => $data) {
        if ($data['id'] == $id) {
            array_splice($alldata, $i, 1);
        }
    }

    file_put_contents(__DIR__.'/data.json',json_encode($alldata,JSON_PRETTY_PRINT));

}

?>