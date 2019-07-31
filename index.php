<?php 
   $api="GET_YOUR_GOOLE_API";
   if(@$_GET["lang"]){
      $lang=$_GET["lang"];
   }
   else{
      $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
   }
   $link=file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&chart=mostPopular&maxResults=15&regionCode=".$lang."&key=".$api."");
   $json=json_decode($link,true);
   for ($i=0; $i < 5; $i++) {     
      $json["items"][$i]["snippet"]["thumbnails"]["maxres"]["url"]; //Video Thumb URL
      $json["items"][$i]["snippet"]["title"] //Video Tittle
      echo "https://youtu.be/".$json["items"][$i]["id"]; //Video URL
      $json["items"][$i]["snippet"]["description"] //Get Video Description
}