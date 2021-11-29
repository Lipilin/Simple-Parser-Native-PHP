<php
function parser($href){
	$referer = "https://yandex.ru/";
	$curl = curl_init();
	$agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)';
	curl_setopt($curl, CURLOPT_URL, $href);
	curl_setopt($curl, CURLOPT_REFERER, $referer);
	curl_setopt($curl, CURLOPT_HEADER, 0);
	curl_setopt($curl, CURLOPT_USERAGENT, $agent);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	$result=curl_exec($curl);
	curl_close($curl);
	return $result;
	};
	$data = parser('https://www.nasdaq50.com/stories/');
	echo $data;
?>
<!DOCTYPE html>
	<html lang="em">
	<html>
	<head>
		<meta charset="utf-8">
		<title>Easiest Parser</title>
	</head>
	<body>Use it for free</body>
	</html>
	<script type="text/javascript">
window.addEventListener('DOMContentLoaded', ()=>{
		const body = document.querySelector("body");
		var result = [];
		function main(element){
		element.childNodes.forEach(node=>{
			const object = {
				header:node.nodeName,
				content:node.textContent
			};
			if (node.nodeName.match(/^H/)){ //H, DIV and so on
				result.push(object);
			}else{
				main(node);
			}
		})			
	};

		main(body);
		console.log(result);
	});
</script
