<?php
/**
 * Created by PhpStorm.
 * User: saurav
 * Date: 2/22/18
 * Time: 2:19 PM
 */

if (!function_exists('sendHttpResponse')) {
    function sendHttpResponse($data,$message, $status) {
        Session::flash('message', $message);
        Session::flash('status', $status);
        Session::flash('data', $data);

        $response['data']       =   $data;
        $response['message']    =   $message;
        $response['status']     =   $status;
        return $response;
    }
}