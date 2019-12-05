
<!DOCTYPE html>
<html>
<head>
	<title>ASSIGNMENT 15</title> 
</head>

<body bgcolor="lightskyblue"> 
	<table border="0" width="1100px" >
		<tr>
			<td colspan="6"><h2>STEP 1</h2></td>
		</tr>
		<tr>
			<td colspan="6">
				<table width="1100px" cellspacing="0">
				 <td colspan="3" bgcolor="white"><b>PERSONAL INFORMATION</b></td>
				 <td colspan="3" font color="black" font size="2px" align="right" bgcolor="white">All feilds are mandatory</td>
				    </tr>
				</table>

		</tr>	
		<tr>
			<td><label> First Name:</label></td>
			<td colspan="2"><input type="text" size="50px"name="Fname"></td>
			<td><label>Last Name:</label></td>
			<td colspan="2"><input type="text" size="50px" name="Sname"></td>
		</tr>	
		<tr>
			<td><label>E-mail:</label></td>
			<td colspan="2"><input type="E-mail" name="Email" size="50"></td>
			<td><label>Tel Number:</label></td>
			<td colspan="2"><input type="text" name="tnumber" size="50"></td>
		</tr>
		<tr>
			<td><label>Mobile Number:</label></td>
			<td colspan="2"><input type="text" name="Mnumber" size="50"></td>
			<td><label>City</label></td>
			<td colspan="2"><input type="text" name="city" size="50"></td>
		</tr>
		<tr>
			<td><label>State:</label></td>
			<td colspan="2"><input type="text" name="state" size="50"></td>	
		    <td><label>Gender</label></td>
		    <td colspan="2"><input type="radio" name="gender" value="male">    
		    <label >Male</label>
		    <input type="radio" name="gender" value="female">
  			<label>Female</label></td>
  		</tr>
  		<tr>		
			<td>Date Of Birth</td>
			<td colspan="2"><select name="day" width="25">
			<option value="day">Day</option>>	
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">6</option>
			<option value="9">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
		</select>
		<select name="month">
			<option value="month">Month</option>
			<option value="jan">january</option>
			<option value="feb">february</option>
			<option value="mar">march</option>
			<option value="apr">april</option>
			<option value="may">may</option>
			<option value="jun">june</option>
			<option value="july">july</option>
			<option value="aug">august</option>
			<option value="sep">september</option>
			<option value="oct">october</option>
			<option value="nov">november</option>
			<option value="dec">december</option>
		</select>
		<select>
			<option value="year">Year</option>
			<option value="90">1990</option>
			<option value="91">1991</option>
			<option value="92">1992</option>
			<option value="93">1993</option>
			<option value="94">1994</option>
			<option value="95">1995</option>
			<option value="96">1996</option>
			<option value="97">1997</option>
			<option value="98">1998</option>
			<option value="99">1999</option>
			<option value="2000">2000</option>
			<option value="01">2001</option>
			<option value="02">2002</option>
			<option value="03">2003</option>
			<option value="04">2004</option>
			<option value="05">2005</option>
			<option value="06">2006</option>
			<option value="07">2007</option>
			<option value="08">2008</option>
			<option value="09">2009</option>
			<option value="10">2010</option>
			<option value="11">2011</option>
			<option value="12">2012</option>
			<option value="13">2013</option>
			<option value="14">2014</option>
			<option value="15">2015</option>
			<option value="16">2016</option>
			<option value="17">2017</option>
			<option value="18">2018</option>
			<option value="19">2019</option>


		</select></td>	
		<td><label>Emergency Contact Number:</label></td>
		<td colspan="2"><input type="text" name="enumber" size="50"></td>
	</tr>
	<tr>
		<td><label>Name:</label></td>
		<td colspan="2"><input type="text" name="ename" size="50"></td>
		<td><label>Relationship:</label></td>
		<td colspan="2"><input type="text" name="relation" size="50"></td>
	</tr>
	<tr>
		<td><label> Mobile Number:</label></td>
		<td colspan="2"><input type="text" name="emnuber" size="50"></td>
	</tr>
	<tr>
		<td colspan="6"><h2>STEP 2</h2></td>
	</tr>	
	<tr>
		<td colspan=6>
			<table width="1100px" cellspacing="0">
				<td colspan="3" bgcolor="white"><b>OTHER DETAILS</b></td>
				<td colspan="3" align="right" bgcolor="white"><font color="black" font size="2">All fields are mandatory</font></td>
			</table>
		</td>	
	</tr>
	<tr>
		<td>
	    <label>Employment Details:</label>
		</td>
		<td><input type="radio" name="edet" value="Public Sector">
		<label>Public Sector</label></td>
		<td><input type="radio" name="edet" value="Student" checked="yes">
		<label>Student</label></td>
		<td>
		<input type="radio" name="edet" value="SelfEmployed">
		<label>SelfEmployed</label></td>
		<td><input type="radio" name="edet" value="Others">
		<label>Others</label>
		</td>
	</tr>	
	<tr>

		<td><label>Annual Family Income</label></td>
		<td><input type="radio" name="income" value="1" checked="yes">
	    <label>50,000</label></td>
    	<td><input type="radio" name="income" value="2">
    	<label>50,000-1,00000</label></td>
    	<td><input type="radio" name="income" value="3">
    	<label>1lakh-5lakh</label></td>
    	<td>
    	<input type="radio" name="income" value="4">
    	<label>5lakh-10lakh</label></td>
    	<td>
    	<input type="radio" name="income" value="5">
    	<label>Above 10Lakh></label></td>
    </tr>
    <tr>
		<td><label>Education:</label></td>    
		<td><input type="radio" name="educ" value="1">
		<label>high school</label></td>
		<td><input type="radio" name="educ" value="2">
		<label>Graduate</label></td>
		<td><input type="radio" name="educ" value="3">
		<label>PostGraduate</label></td>
		<td><input type="radio" name="educ" value="4">
		<label>Professional</label></td>
		<td><input type="radio" name="educ" value="5" checked="yes">
	 	<label>Others</label></td>
	</tr>
	<tr> 	
		<td><label>I Own The Following:</label></td>
		<td><input type="checkbox" name="car" value="c">
		<label>car</label></td>
		<td><input type="checkbox" name="credit card" value="cc">
    	<label>credit card</label></td>
		<td><input type="checkbox" name="mp" value="mp">
		<label>mobile phone</label></td>
		<td><input type="checkbox" name="cm" value="cm">
		<label>club membership</label></td>
		<td><input type="checkbox" name="ip" value=ip"">
		<label>Insurence Policy</label></td>
	</tr>
	<tr>
		<td><label>Cycling Experience:</label></td>
		<td colspan="3"><input type="checkbox" name="reg" checked="yes">
		<label>I am a regular cyclist</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="Checkbox" name="reg" checked="yes">
		<label>I am a part of a cycling club</label>
		</td>
	</tr>
	<tr>	
		<td><label>Name of the cycing club:</label></td>
		<td colspan="2"><input type="text" name="ccname" size="50"></td>
	<tr>
		<td colspan="6">	
		<h2>STEP 3</h2>
		</td>
	</tr>
	<tr>
		<td colspan="6">
			<table width="1100px" cellspacing="0">
				<td colspan="3" bgcolor="white"><b>MEDICAL CONDITION</b></td>
				<td colspan="3" align="right" bgcolor="white"><font color="black" font size="2">All fields are mandatory</font></td>
			</table>
		</td>		
	</tr>	
</table>
</body>
</html>