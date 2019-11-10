<div class="ss">
@php
					if (isset($_POST['domain'])){
						$id = $_POST['domain'];
						function http_request($url){
 // persiapkan curl
 $ch = curl_init(); 

 // set url 
 curl_setopt($ch, CURLOPT_URL, $url);
 
 // set user agent    
 curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

 // return the transfer as a string 
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

 // $output contains the output string 
 $output = curl_exec($ch); 

 // tutup curl 
 curl_close($ch);      

 // mengembalikan hasil curl
 return $output;
};

$profile = json_decode(http_request("https://madchecker.com/domain/api/".$_GET['domain']), TRUE);
if($profile["data"]["available"]=='true'){
echo '<h3 align="center"><font color="green">'.ucfirst($profile['domain']).' Available</font></h3>';
}else{
	echo '<h3 align="center"><font color="red">'.ucfirst($profile['domain']).' is Not Available</font></h3>';

};
					};
					@endphp

					</div>