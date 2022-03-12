<html>
	<head>
		<title>Covid19 Information</title>
		<style>
			.desCls{
				background:green;
			}
		</style>
	</head>
	<body>
	
		<h1>Covid19 Information - World Wide</h1>
		<button onclick="fetchCovidData()">Load Covid Data</button>
		<div id="data"></div>
		
		<script>
			function fetchCovidData(){
				/*var obj;
				if(window.XMLHttpRequest)
				{
					obj = new XMLHttpRequest();
				}
				else
				{
					obj = ActiveXObject("Microsoft.XMLHTTP")
				}*/
				
				
				var obj = new XMLHttpRequest();
				
				obj.open("GET","https://api.covid19api.com/summary",true);
				obj.send();
				
				obj.onreadystatechange = function(){
					if(obj.readyState == 4 && obj.status == 200)
					{
						var jdata = JSON.parse(obj.responseText)
						var allC = jdata.Countries;
						
						var txt = "";
						
						txt += "<table border='1' class='customers'>";
							txt += "<tr><th>S.No</th><th>Country</th><th>TotalConfirmed</th><th>Total Deaths</th></tr>";
						
						let desCls = '';
						
						for(var i = 0; i < allC.length; i++)
						{
							if(allC[i].TotalConfirmed <= 10000)
							{
								desCls = "desCls";
							}
							else
							{
								desCls = "";
							}
							txt += "<tr class='"+desCls+"'>";
								txt += "<td>"+(i+1)+"</td>";
								txt += "<td>"+allC[i].Country+"</td>";
								txt += "<td>"+allC[i].TotalConfirmed+"</td>";
								txt += "<td>"+allC[i].TotalDeaths+"</td>";
							txt += "</tr>";
						}
						txt += "</table>";
						
						document.getElementById("data").innerHTML = txt;
						
					}
				}
				
				
				
				
			}
		</script>
	</body>
</html>