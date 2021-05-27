


<head>
	<title>Dreams FLY</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
<link rel="stylesheet" href="style/style.css">	
</head>

<div class="pos">
<h3 style = "text-align : center; color: blue; font-size: 20px; font-weight: bold; margin-top: 20px">“The journey of a thousand miles begins with a single step.”</h3>
<div style = 'background-color: blue' class="login-box">
  <h2>SEARCH FOR  FLIGHTS</h2>
 
  <form action="vol" method="post">
    <div class="user-box">
      <input type="text" name="depart" required="">
      <label>depart</label>
    </div>
    <div class="user-box">
      <input type="text" name="destination" required="">
      <label>destination</label>
    </div>
	<div class="user-box">
      <input type="date" name="datedepart" >
      <label>date de depart</label>
    </div>
<div>
    <div id="redate" style="display: none"   class="user-box">
      <input type="date" name="dateretour" >
      <label>date de retour</label>
    </div>
   </div> 
    		<div class="sho">
					 Aller-simple <input type='radio' name='trip' onclick="javascript:show();" value='1' id="simple" checked/> Aller-retour <input type='radio' name='trip' value='2' onclick="javascript:show();" id="alretour"/>
				      	</div>
	
     <button name="Search" class="btn btn-outline-light">Search for  Flights</button>
	 	
  
  </form>
  
		</div>		
				
</div>
<script>
    function show() {
    if (document.getElementById('simple').checked) {
        document.getElementById('redate').style.display = 'none';
        }
    else if(document.getElementById('alretour').checked) {
        document.getElementById('redate').style.display = 'block';
       
   }
     
    } 
    </script>