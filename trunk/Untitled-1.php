	  <?
		  
		   include ("connect.php");
				$sql="SELECT Count(*) AS Total FROM producto ";
				$result=odbc_exec($cid,$sql)or die(exit("Error en odbc_exec"));

			   while (odbc_fetch_row($result))
				{ 
					$var=odbc_result($result,"Total") + 1;
					echo"<input type= \"hidden\" name=\"edad\" value=\"$var\">";
					
				}
		 
          ?>