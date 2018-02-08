<<<<<<< HEAD
<!DOCTYPE>
<html>
<head>
	<title>work_java01_ex02_search_string</title>
	<script type="text/javascript">
		function search(){
			var MS_Box_txt = document.getElementById("MS_BOX").value;
			var search_txt = document.getElementById("search").value;
			var radio = document.querySelector('input[name="sensitive_select"]:checked').value;
				if(radio==1){
					if(MS_Box_txt == ""||search_txt == ""){
						document.getElementById('result').innerHTML = "input not correct!!!!";
					}else{
						var reg_text = new RegExp(search_txt, 'g');
						var count = MS_Box_txt.match(reg_text);
						if(count==null){
							document.getElementById('result').innerHTML = "0";
						}
						else{
							document.getElementById('result').innerHTML = MS_Box_txt.match(reg_text).length;
						}
					}
				}else{
					if(MS_Box_txt == ""||search_txt == ""){
						document.getElementById('result').innerHTML = "input not correct!!!!";
					}else{
						var reg_text = new RegExp(search_txt, 'gi');
						var count = MS_Box_txt.match(reg_text);
						if(count==null){
							document.getElementById('result').innerHTML = "0";
						}
						else{
							document.getElementById('result').innerHTML = MS_Box_txt.match(reg_text).length;
						}
					}
				}
		}
	</script>
</head>
<body>
	<br><br>
	<div align="center">
		<label>Text Input : </label>
		<textarea id = "MS_BOX">Test test test test</textarea><br><br>
		<label>Sensitive Case : </label>
		<input type="radio" name="sensitive_select" id = "yes" value="1">Yes
		<input type="radio" name="sensitive_select" id = "NO" value="2">No<br><br>
		<label>Search : </label>
		<input type="text" name="search" id = "search"><br><br>
		<input type="button" onclick = "search()" value="Search">
		<p>Result for Search : <span id="result"></span></p>
		
	</div>	
</body>
=======
<!DOCTYPE>
<html>
<head>
	<title>work_java01_ex02_search_string</title>
	<script type="text/javascript">
		function search(){
			var MS_Box_txt = document.getElementById("MS_BOX").value;
			var search_txt = document.getElementById("search").value;
			var radio = document.querySelector('input[name="sensitive_select"]:checked').value;
				if(radio==1){
					if(MS_Box_txt == ""||search_txt == ""){
						document.getElementById('result').innerHTML = "input not correct!!!!";
					}else{
						var reg_text = new RegExp(search_txt, 'g');
						var count = MS_Box_txt.match(reg_text);
						if(count==null){
							document.getElementById('result').innerHTML = "0";
						}
						else{
							document.getElementById('result').innerHTML = MS_Box_txt.match(reg_text).length;
						}
					}
				}else{
					if(MS_Box_txt == ""||search_txt == ""){
						document.getElementById('result').innerHTML = "input not correct!!!!";
					}else{
						var reg_text = new RegExp(search_txt, 'gi');
						var count = MS_Box_txt.match(reg_text);
						if(count==null){
							document.getElementById('result').innerHTML = "0";
						}
						else{
							document.getElementById('result').innerHTML = MS_Box_txt.match(reg_text).length;
						}
					}
				}
		}
	</script>
</head>
<body>
	<br><br>
	<div align="center">
		<label>Text Input : </label>
		<textarea id = "MS_BOX">Test test test test</textarea><br><br>
		<label>Sensitive Case : </label>
		<input type="radio" name="sensitive_select" id = "yes" value="1">Yes
		<input type="radio" name="sensitive_select" id = "NO" value="2">No<br><br>
		<label>Search : </label>
		<input type="text" name="search" id = "search"><br><br>
		<input type="button" onclick = "search()" value="Search">
		<p>Result for Search : <span id="result"></span></p>
		
	</div>	
</body>
>>>>>>> 88672a5b268f1e0583a9ba47ca0bd5bf870e9562
</html>