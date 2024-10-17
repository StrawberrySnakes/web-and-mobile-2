<!DOCTYPE html>
<html lang="en">
<head>
	<title>AJAX/JSON</title>
	<script>
  
		// We create the HTTP Object
		var http = new XMLHttpRequest();

		function getUsers(){

			if(http){
				// handle read state change
				http.onreadystatechange = handleHttpResponse;
				// Open
				http.open("GET", "getUsers.php", true);
				// send
				http.send(null);
				window.setTimeout(getUsers, 2000);
				// if you'rs using a parameter
				// window.setTimeout(function() {getUsers("red")});
			}
		}

		function handleHttpResponse(){
			// console.log("handle http response")
			if(http.readyState == 4) {
				console.log("getUsers loaded");
				
				jsonObj = JSON.parse(http.responseText);

				// console.log(jsonObj);
				dealData(jsonObj);
			}
		}

		function dealData(jsonObj) {
			text = "";
			for(var i = 0; i<jsonObj.length;i++) {
				console.log(jsonObj[i]);
				text += jsonObj[i].first + ' ' + jsonObj[i].last + '<br/>';
			}
			document.getElementById("list").innerHTML = text;
			

		}

	</script>
</head>
<body onload="getUsers()">
	<h3>The List</h3>
	<div id="list"></div>
	<hr/>
	<h3>Add to the list</h3>
	First name: <input type="text" id="first" />
	Last name: <input type="text" id="last" />
	<input type="submit" value="Add Name to List"> </button>
</body>
</html>