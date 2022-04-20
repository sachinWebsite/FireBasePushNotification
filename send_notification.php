<?php
function sendNotification(){
    $url ="https://fcm.googleapis.com/fcm/send";

    $fields=array(
        "to"=>$_REQUEST['token'],
        "notification"=>array(
            "body"=>$_REQUEST['message'],
            "title"=>$_REQUEST['title'],
            "icon"=>$_REQUEST['icon'],
            "click_action"=>"https://google.com"
        )
    );

    $headers=array(
        'Authorization: key=AAAAE46udQQ:APA91bHveh-A1suY1HIzJhQSXEY9HmP4tnPUmI-rVvwDFDi54k5gNtBe7tpboDL7EUnx8f1ssTSo8FB-FHFoMwXl8mLaiWDQmL0mf6yugNQBsfkPznKvlEGHURRl7iZTPtPQJ66YWcaG',
        'Content-Type:application/json'
    );

    $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_POST,true);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,json_encode($fields));
    $result=curl_exec($ch);
    print_r($result);
    curl_close($ch);
}
sendNotification();