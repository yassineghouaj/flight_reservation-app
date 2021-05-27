	
<?php 
	if(isset($_POST['Search'])){
	$data = new VolsController();
	$vols = $data->findVols();

	$depart=  $_POST['depart'];
   $destination=  $_POST['destination'];
   $datedepart=  $_POST['datedepart'];
  $trip=$_POST['trip'];


$data = new VolsController();
		$volrs = $data->findRVols();
	
	}
?>
<div class="scrold">
<form action="reservation" method="post">
	<table class="table " style = "width:80%; margin-left: 150px; background-color: blue; color: white">
					  <thead>
					    <tr>
					      <th>vol ID</th>
                    <th>depart</th>
                    <th>destination </th>
                    <th>prix</th>
                  
                    <th>nbplace</th>
                    <th>datedepart</th>
                    <th>Select</th>
                     <th>nombre de voyageures</th>
					    </tr>
					  </thead>
					  <tbody>
               <?php foreach($vols as $vol):?>
		<tr>
   


<td><?php  echo  $vol['idv'];?></td>
   <td><?php  echo  $vol['depart'];?></td>
   <td><?php  echo $vol['destination'];?></td>
  
   <td><?php  echo $vol['prix'];?></td>
   <td><?php  echo $vol['nbplace'];?></td>
   <td><?php  echo $vol['datedepart'];?></td>
   <td><input type="radio" name="idv" required value="<?php  echo  $vol['idv'];?>"></td>
   <td>		<input type="number" name="np"  required>
</td>
    <td><input type="hidden" name="dater" value="<?php  echo $vol['datedepart'];?>"></td>
        						</tr>;
				
		<?php endforeach;?>
        </tbody>
            </table>

            <?php 

   $trip=$_POST['trip'];
     if ($trip==2 ){



echo "<p><strong>CHOISIR LA DATE DE RETOUR <strong></p>";

echo '<table class="table table-striped table-dark">';
echo '<thead>';
echo '<tr>';
echo '<th>vol ID</th>';

echo '<th>prix</th>';
echo '';
echo '<th>date de retour</th>';
echo '<th>Select</th>';

echo '</tr>';
echo '</thead>';
echo '<tbody>';

foreach($volrs as $volr):

echo '<td>'; echo  $volr['idv'];  echo '</td>';
echo '<td>'; echo  $volr['prix'];  echo '</td>';
echo '<td>'; echo  $volr['datedepart'];  echo '</td>';

echo '<td><input type="radio" name="idvr" value="'; echo  $volr['idv']; echo'"required ></td>';
 
 endforeach;
      
echo '</tbody>';
echo '</table>';
     }
 	
	
?>
    					
<div style="
    display: flex;
    justify-content: center;" > 

<div style = "display-flex; justify-content; align-items: center; color : blue"><br><br>
      <!--<input type="submit" value="Select vol" name="Select" style = "color : blue">-->
      <button type="submit" value="Select vol" name="Select" style = "color : white; width: 150px; height: 50px; background-color: blue; border-radius: 10px;">reserv Now</button>
   </div>
</div>
</form>


</div>
