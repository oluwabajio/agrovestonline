<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>


<link href="{{ asset('assets/css/multidesign.css') }}" rel="stylesheet">





<!------ Include the above in your HEAD tag ---------->

 <div style="height:40px;"></div>
    <div class="assessment-container container">
        <!-- MultiStep Form -->
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Personal Details</li>
                <li>Social Profiles</li>
                <li>Account Setup</li>
            </ul>
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Provide Information</h2>
                <h3 class="fs-subtitle">Please enter your question below and click submit</h3>
                <textarea name="question" placeholder="Your Question"></textarea>
                <hr>
                  <div class="form-group">
                   <p style="text-align: left;">Are you Male or Female?</p>
                    <select id="sex" name="sex" class="form-control input-sm">
                      <option value="m">Male</option>
                      <option value="f">Female</option>
                    </select>
                  </div>
                  
                  <div class="form-group">
                   <p style="text-align: left;">Select Your Category</p>
                    <select id="sex" name="sex" class="form-control input-sm">
                      <option value="aq">Aquaculture</option>
                      <option value="po">Poultry</option>
                      <option value="cr">Crops</option>
                      <option value="of">Organic Farming</option>
                      <option value="Gc">General Consultancy</option>
                    </select>
                  </div>

                <!-- <input type="text" name="fname" placeholder="First Name"/>
                <input type="text" name="lname" placeholder="Last Name"/>
                <input type="text" name="phone" placeholder="Phone"/> -->
                <input type="button" name="next" class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Create your account</h2>
                <h3 class="fs-subtitle">Register a New Account or Login</h3>
                <!-- <input type="text" name="twitter" placeholder="Twitter"/>
                <input type="text" name="facebook" placeholder="Facebook"/>
                <input type="text" name="gplus" placeholder="Google Plus"/>
                 -->
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                 @endif

                 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                 @if ($errors->has('password'))
                <span class="invalid-feedback">
                 <strong>{{ $errors->first('password') }}</strong>
                 </span>
                @endif


                   <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <br>
                                <br>
                                <br>
                                <br>
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="button" name="next" i class="next action-button" value="Next"/>
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Select Your Service</h2>
                <h3 class="fs-subtitle">Fill in your credentials</h3>
                <!-- <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="pass" placeholder="Password"/>
                <input type="password" name="cpass" placeholder="Confirm Password"/> -->
                <div class="container-fluid">
            <div class="row">
                 <div class="col-sm-6" style="background-color:lavender;">
                 <img src="http://placehold.it/180x81" class="img-fluid" alt="Responsive image">
                 </div>
                   <div class="col-sm-6" style="background-color:lavenderblush;">
                       <img src="http://placehold.it/180x81" class="img-fluid" alt="Responsive image">
                    </div>
                  </div>
                  <br>
                 <div class="row">
                 <div class="col-sm-6" style="background-color:lavender;">
                 <img src="http://placehold.it/180x81" class="img-fluid" alt="Responsive image">
                 </div>
                   <div class="col-sm-6" style="background-color:lavenderblush;">
                       <img src="http://placehold.it/180x81" class="img-fluid" alt="Responsive image">
                    </div>
                  </div>
                
                
                
                </div>
  
                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <input type="submit" name="submit" class="submit action-button" value="Submit"/>
            </fieldset>
        </form>
        <!-- link to designify.me code snippets -->
        <!-- 
        <div class="dme_link">
            <p><a href="http://designify.me/code-snippets-js/" target="_blank">More Code Snippets</a></p>
        </div>  -->
        <!-- /.link to designify.me code snippets -->
    </div>
</div>
<!-- /.MultiStep Form -->
        </div>
    </div>
    <script src="{{ asset('assets/js/multidesign.js') }}"></script>