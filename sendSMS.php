<?php
include_once './common/inc/config.php';
include_once './common/inc/database.php';
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

        $mobile = $_POST['mobile'];
        $api_key = FAST2SMS_API_KEY;
//        echo $mobile;die;
        $isSMSSent = false;
        if (isset($mobile) && isset($api_key)) {
            
            $page_id = $_SERVER['HTTP_REFERER'];
            $ip_address = get_client_ip();
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            
            // ========================================================
            // curl to send OTP via POST method using API...
            // ========================================================
            
            
            
            $otp = rand(1111,9999);
            
            

            
            /***
             * 
             uncomment this to send SMS 
            */
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=".$api_key."&variables_values=".$otp."&route=otp&numbers=".urlencode($mobile),
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_SSL_VERIFYHOST => 0,
              CURLOPT_SSL_VERIFYPEER => 0,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
              CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              $err = "cURL Error #:" . $err;
//            } else {
//              echo $response;
            }
            
            /**
            **/
            
//            $response = '{"return":true,"request_id":"up0i26z4hndv8ms","message":["SMS sent successfully."]}';
            
            if(empty($err)){$err = 'NULL';}
            
            ###############################################
            // save the OTP to verify in database...
            


//            //INSERT INTO `pre_fast2sms_api_log` (`id`, `mobile`, `sent_otp`, `shop_id`, `ip_address`, `user_agent`, `api_response`, `error`, `created_at`) VALUES (NULL, '9999887788', '0987', '0', '0921029', 'ahello', '{\"return\":true,\"request_id\":\"up0i26z4hndv8ms\",\"message\":[\"SMS sent successfully.\"]}', NULL, current_timestamp());
//            $query = 'INSERT INTO `fast2sms_api_log` '. " "
//                    . "(`id`, `mobile`, `sent_otp`, `page_id`, `ip_address`, `user_agent`, `api_response`, `error`, `created_at`) "
//                    . "VALUES (NULL, '$mobile', '$otp', '$page_id', '$ip_address', '$user_agent', '$response', $err, now()) " ;
////            echo $query;die;
//            if (Db::getInstance()->execute($query) == false) {
//                return false;
//            }
            
            
            ################################################
            
            
            
            $obj_response = json_decode($response);
            //print_r($obj_response);
            $otp_return = $obj_response->return;
            $otp_request_id = $obj_response->request_id;
            $otp_message = $obj_response->message;
            
            if($otp_return == true && !empty($otp_request_id)){
                $isSMSSent = true;
                $api_message = $otp_message[0];
            }else{
                $api_message = $otp_message[0];
                if(!empty($err)){
                    $api_message .= $err;
                }
            }
            
            return json_encode(array('success'=>$isSMSSent,'message'=>$api_message));
            
            
            // ========================================================
            // curl to send OTP via POST method using API ends here...
            // ========================================================
            
        }
        
        
        function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
