<fieldset style="margin-right: 250px; margin-left: 210px;padding-left:80px; margin-left: 250px;">
            <legend><h4>Update Form:</h4></legend>
			<div class="cleaner h30"></div>
            <div id="contact_form">
				<?php
				include("connection.php");
				if(isset($_POST['update'])){
					$sql =  "insert into resident (FirstName,LastName,Sex)
					select FirstName,LastName,Sex from resident where IdNo='$IdNo'";
					$result = mysql_query($sql);
					mysql_query("DELETE FROM resident WHERE IdNo = '$IdNo'");
					echo"<pre>     </pre>";			
				}
				elseif(isset($_POST['search'])){
					echo"";
				}
					?>
					<form method="post" name="contact" action="">
						<h6>Enter IdNo: </h6><input type="text" class="validate-subject required input_field" name="id_number"/> 
						<div class="cleaner h20"></div>                
						<input type="submit" style=" border-top-right-radius: 25px;border-top-left-radius: 25px;border-bottom-right-radius: 25px;border-bottom-left-radius: 25px;"value="Search" name="search" class="submit_btn float_l" /> 
						<input type="reset" style="margin-right:220px;border-top-right-radius: 25px;border-top-left-radius: 25px;border-bottom-right-radius: 25px;border-bottom-left-radius: 25px;"value="Cancel" name="cancel" class="submit_btn float_r" /> 
						<input type="submit" style="float: right;margin-right: 100px;margin-top: -33px;border-top-right-radius: 25px;border-top-left-radius: 25px;border-bottom-right-radius: 25px;border-bottom-left-radius: 25px;" value="Update" name="update" class="submit_btn float_l"/>	
					</form>
            </div>  
                
            <div class="cleaner"></div>
            </fieldset>