<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
<meta content="noindex, nofollow" name="robots">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{{ asset('assets/js/multiask.js') }}"></script>
<link href="{{ asset('assets/css/multiask.css') }}" rel="stylesheet">
<script src="multi_step_form.js"></script>
</head>
<body>
<div class="content text-center">
<!-- Multistep Form -->
<div class="main">
<form action="" class="regform" method="get">
<!-- Progress Bar -->
<ul id="progressbar">
<li class="active">Create Account</li>
<li>Educational Profiles</li>
<li>Personal Details</li>
</ul>
<!-- Fieldsets -->
<fieldset id="first">
<h2 class="title">Create your account</h2>
<p class="subtitle">Step 1</p>
<input class="text_field" name="email" placeholder="Email" type="text">
<input class="text_field" name="pass" placeholder="Password" type="password">
<input class="text_field" name="cpass" placeholder="Confirm Password" type="password">
<input class="next_btn" name="next" type="button" value="Next">
</fieldset>
<fieldset>
<h2 class="title">Educational Profiles</h2>
<p class="subtitle">Step 2</p>
<select class="options">
<option>--Select Education--</option>
<option>Post Graduate</option>
<option>Graduate</option>
<option>HSC</option>
<option>SSC</option>
</select>
<input class="text_field" name="marks" placeholder="Marks Obtained" type="text">
<input class="text_field" name="pyear" placeholder="Passing Year" type="text">
<input class="text_field" name="univ" placeholder="University" type="text">
<input class="pre_btn" name="previous" type="button" value="Previous">
<input class="next_btn" name="next" type="button" value="Next">
</fieldset>
<fieldset>
<h2 class="title">Personal Details</h2>
<p class="subtitle">Step 3</p>
<input class="text_field" name="fname" placeholder="First Name" type="text">
<input class="text_field" name="lname" placeholder="Last Name" type="text">
<input class="text_field" name="cont" placeholder="Contact" type="text">
<label>Gender</label>
<input class="rad" name="gender" type="radio">Male
<input class="rad" name="gender" type="radio">Female
<textarea name="address" placeholder="Address"></textarea>
<input class="pre_btn" type="button" value="Previous">
<input class="submit_btn" type="submit" value="Submit">
</fieldset>
</form>
</div>
</div>
</body>

</html>