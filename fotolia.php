<?php

class fotolia {
    public static $key = "";

    public static function getSearchResults($data = array('words' => "", 'limit' => null, 'cat1_id' => null, 'cat2_id' => null, 'gallery_id' => null, 'color_name' => null, 'country_name' => null)) {
        $words = str_replace(" ", ",", $words);

        $url = "http://".self::$key."@api.fotolia.com/Rest/1/search/getSearchResults?search_parameters[language_id]=11";		
        $url .= $data['words'] ? "&search_parameters[words]=".urlencode($data['words']) : "";
        $url .= $data['limit'] ? "&search_parameters[limit]={$data['limit']}" : "";
        $url .= $data['cat1_id'] ? "&search_parameters[cat1_id]={$data['cat1_id']}" : "";
        $url .= $data['cat2_id'] ? "&search_parameters[cat2_id]={$data['cat2_id']}" : "";
        $url .= $data['gallery_id'] ? "&search_parameters[gallery_id]={$data['gallery_id']}" : "";
        $url .= $data['color_name'] ? "&search_parameters[color_name]={$data['color_name']}" : "";
        $url .= $data['country_name'] ? "&search_parameters[country_name]={$data['country_name']}" : "";
        $url .= $data['offset'] ? "&search_parameters[offset]={$data['offset']}" : "";

        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public static function getCategories1($data = array('id' => null)) {
        $url = "http://".self::$key."@api.fotolia.com/Rest/1/search/getCategories1?language_id=11";
        $url .= $data['id'] ? "&id=".urlencode($data['id']) : "";

        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public static function getCategories2($data = array('id' => null)) {
        $url = "http://".self::$key."@api.fotolia.com/Rest/1/search/getCategories2?language_id=11";
        $url .= $data['id'] ? "&id=".urlencode($data['id']) : "";

        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public static function getColors($data = array()) {	
        $url = "http://".self::$key."@api.fotolia.com/Rest/1/search/getColors?language_id=11";
        $url .= $data['id'] ? "&id=".urlencode($data['id']) : "";

        $ch=curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
