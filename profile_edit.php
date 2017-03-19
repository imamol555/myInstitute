<?php  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="profile_edit_style.css">
	
	<script type="text/javascript">
		    	
		    	
		    	function edit_display_prof()
		    		{document.getElementById('stud-form').style.display='none';
		    		document.getElementById('prof-form').style.display='block';
		    		}


		    	function edit_display_stud(){
		    		document.getElementById('prof-form').style.display='none';
		    		document.getElementById('stud-form').style.display='block';
		    	}
		    	



		    </script>
		  
</head>
<body>
	<div id="profile-form">
		<form onsubmit="validate_form()" action="profile_check.php" method="post" name="profile_edit_form">
			
			<label>Full Name</label><br>
			<input type="text" name="ff_name" placeholder="First Name" value="" required="">
			<input type="text" name="fm_name" placeholder="Middle Name" value="" required="">
			<input type="text" name="fl_name" placeholder="Last Name" value="" required="">
			<br>
			<label>DOB</label><br>
			<select name="dob-date" id="dob-date">
		      <option value="">Date</option>
		      
		      <option value="01">01</option>
		      <option value="02">02</option>
		      <option value="03">03</option>
		      <option value="04">04</option>
		      <option value="05">05</option>
		      <option value="06">06</option>
		      <option value="07">07</option>
		      <option value="08">08</option>
		      <option value="09">09</option>
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

    		<select name="dob-month" id="dob-month">
		      <option value="">Month</option>
		      
		      <option value="01">January</option>
		      <option value="02">February</option>
		      <option value="03">March</option>
		      <option value="04">April</option>
		      <option value="05">May</option>
		      <option value="06">June</option>
		      <option value="07">July</option>
		      <option value="08">August</option>
		      <option value="09">September</option>
		      <option value="10">October</option>
		      <option value="11">November</option>
		      <option value="12">December</option>
		    </select>

		    <select name="dob-year" id="dob-year" >
		      <option value="">Year</option>
		      
		      <option value="2005">2005</option>
		      <option value="2004">2004</option>
		      <option value="2003">2003</option>
		      <option value="2002">2002</option>
		      <option value="2001">2001</option>
		      <option value="2000">2000</option>
		      <option value="1999">1999</option>
		      <option value="1998">1998</option>
		      <option value="1997">1997</option>
		      <option value="1996">1996</option>
		      <option value="1995">1995</option>
		      <option value="1994">1994</option>
		      <option value="1993">1993</option>
		      <option value="1992">1992</option>
		      <option value="1991">1991</option>
		      <option value="1990">1990</option>
		      <option value="1989">1989</option>
		      <option value="1988">1988</option>
		      <option value="1987">1987</option>
		      <option value="1986">1986</option>
		      <option value="1985">1985</option>
		      <option value="1984">1984</option>
		      <option value="1983">1983</option>
		      <option value="1982">1982</option>
		      <option value="1981">1981</option>
		      <option value="1980">1980</option>
		      <option value="1979">1979</option>
		      <option value="1978">1978</option>
		      <option value="1977">1977</option>
		      <option value="1976">1976</option>
		      <option value="1975">1975</option>
		      <option value="1974">1974</option>
		      <option value="1973">1973</option>
		      <option value="1972">1972</option>
		      <option value="1971">1971</option>
		      <option value="1970">1970</option>
		      <option value="1969">1969</option>
		      <option value="1968">1968</option>
		      <option value="1967">1967</option>
		      <option value="1966">1966</option>
		      <option value="1965">1965</option>
		      <option value="1964">1964</option>
		      <option value="1963">1963</option>
		      <option value="1962">1962</option>
		      <option value="1961">1961</option>
		      <option value="1960">1960</option>
		      <option value="1959">1959</option>
		      <option value="1958">1958</option>
		      <option value="1957">1957</option>
		      <option value="1956">1956</option>
		      <option value="1955">1955</option>
		      <option value="1954">1954</option>
		      <option value="1953">1953</option>
		      <option value="1952">1952</option>
		      <option value="1951">1951</option>
		      <option value="1950">1950</option>
		     </select>
		  

		     <br>
			<label for="sex">Sex</label>
		    <input type="radio" name="sex" value="male"   required=""> Male
		    <input type="radio" name="sex" value="female"  required=""> Female
		    <br>
		    <label for="phone">Phone No.</label>
		    <input type="text"  pattern="[0-9]{10}" name="phone">

		    <label for="email">E-mail </label>
		    <input type="text" name="email">
		    <br>
		    <label for="address">Address</label>
		    <br>
		    <input type="text" name="street1" placeholder="Street Address line 1">
		    <br>
		    <input type="text" name="street2" placeholder="Street Address line 2">
		    <br>
		    <input type="text" name="city" placeholder="City">
		    <input type="text" name="state" placeholder="State">
		    <br>
		    <input type="text" name="pin" placeholder="Pin Code">
		    <input type="text" name="country" placeholder="India" readonly="India">
		    <br>
		    <label for="usertype">User Profile</label>
		    <select name="usertype" >

		    	<option value="student" onclick="edit_display_stud();  ">Student</option>
		    	<option value="professor" onclick="edit_display_prof(); ">Professor</option>

		    </select>

		    <div id="stud-form" style="position: relative; display: block;">
		    	<label for="s_branch">Select Branch</label>
		    	<select name="s_branch">
		    		<option value="IT">IT</option>
		    		<option value="COMP">COMP</option>
		    		<option value="ENTC">ENTC</option>
		    		
		    		

		    	</select>
		    	<br>
		    	<label for="s_year">Select Year</label>
		    	<select name="s_year">
		    		<option value="FE">FE</option>
		    		<option value="SE">SE</option>
		    		<option value="TE">TE</option>
		    		<option value="BE">BE</option>
		    		

		    	</select>
		    	<br>
		    	
		    	
		    	
		    	<input type="text" name="s_roll" placeholder="Roll No."  >
		    	<br>

		    	
		    </div>
		    <div id="prof-form" style="position: relative; display: none;">
		    	<input type="text" name="p_branch"  placeholder="Branch" value="" >
		    	<br><br>
		    	FE:<input type="checkbox" name="p_year[]" value="FE">
		    		<select name="fe_sub">
		    			<option value="sub1">sub1</option>
		    			<option value="sub2">sub2</option>
		    			<option value="sub3">sub3</option>
		    			<option value="sub4">sub4</option>
		    			<option value="sub5">sub5</option>
		    			
		    		</select>
		    		<br>
		    	SE:<input type="checkbox" name="p_year[]" value="SE">
		    		<select name="se_sub">
		    			<option value="sub1">sub1</option>
		    			<option value="sub2">sub2</option>
		    			<option value="sub3">sub3</option>
		    			<option value="sub4">sub4</option>
		    			<option value="sub5">sub5</option>
		    			
		    		</select>
		    		<br>
		    	TE:<input type="checkbox" name="p_year[]" value="TE">
		    		<select name="te_sub">
		    			<option value="sub1">sub1</option>
		    			<option value="sub2">sub2</option>
		    			<option value="sub3">sub3</option>
		    			<option value="sub4">sub4</option>
		    			<option value="sub5">sub5 </option>
		    			
		    		</select><br>
		    	BE:<input type="checkbox" name="p_year[]" value="BE">
		    	<select name="be_sub">
		    			<option value="sub1">sub1</option>
		    			<option value="sub2">sub2</option>
		    			<option value="sub3">sub3</option>
		    			<option value="sub4">sub4</option>
		    			<option value="sub5">sub5</option>
		    			
		    		</select>
		    	

		    	
		    </div>
		    <br>		    <input type="submit"  value="Submit">



		    
		</form>
	</div>
</body>
</html>
