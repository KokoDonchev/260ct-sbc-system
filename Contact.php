<html>

<!--This hyperlink allows the user to go back to the dashboard-->
<font size='6'><a href="dashboard">Back to dashboard</a></font><br><br><br>

<!--A title and short explanation are displayed-->
<b><font size='10'>Contact Us</font></b><br><br><br>
<font size='3'>Please enter your name, email address and enquiry below:</font><br><br>

<!--The form is created which when submitted goes to the send_complete.php page-->
<form name="contactus" method="post" action="send_complete">
<table width="450px">

<!--The variable first name is created and vallidation is added to ensure the user fills in this information-->
<tr><td valign="top">
<label for="firstname">First Name</label></td>
<td valign="top">
<input  type="text" name="firstname" size="40" required></td></tr><tr>

<!--The variable last name is created and vallidation is added to ensure the user fills in this information-->
<td valign="top"">
<label for="lastname">Last Name</label></td>
<td valign="top">
<input  type="text" name="lastname" size="40" required></td></tr><tr>

<!--The variable email is created and vallidation is added to ensure the user fills in this information-->
<td valign="top">
<label for="email">Email Address</label></td>
<td valign="top">
<input  type="text" name="email" size="40" required></td></tr><tr>

<!--The variable enquiry is created and vallidation is added to ensure the user fills in this information-->
<td valign="top">
<label for="enquiry">Enquiry</label></td>
<td valign="top">
<textarea  name="enquiry" cols="42" rows="8" required></textarea></td></tr><tr>

<!--The submit button is then created for when the user has completed the form-->
<td colspan="2" style="text-align:center">
<input type="submit" value="Submit"></td></tr>
</table>
</form>
</html>