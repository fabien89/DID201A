<form action='checkout.php' method='get'>
<input type='hidden' name='op' value='submitSpecial'>
<table align='center'>
	<tr>
		<td>Body:</td>
		<td><input type='text' name='body' size='40' length='100' value='<?php echo $_POST['body']; ?>'></td>
	</tr>
	<tr>
		<td>Start Date:</td>
		<td> <input type='text' name='startDate' size='10' value='<?php echo $_POST['startDate']; ?>'> </td>
	</tr>
	<tr>
		<td>End Date:</td>
		<td><input type='text' name='endDate' size='10' value='<?php echo $_POST['endDate']; ?>'></td>
	</tr>
	<tr>
		<td align='center' colspan='3'><input type='submit' name='submitSpecial' value='Submit'></td>
	</tr>
</table>
</form>