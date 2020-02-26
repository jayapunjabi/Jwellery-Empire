<?php
	if(!empty($_REQUEST['msg']))
	{
		echo "<script>alert('Email and Password not match')</script>";
	}
	/*mysql_connect("localhost","root","") OR die("could not connect with server!!");
	mysql_select_db("jwellery") OR die("could not connect with database!!");*/
	
	
?>
		<div class="modal fade" id="three" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background:#ead29d">
						<h3>Login Form</h3>
					</div>
					 <!-- Modal Body -->
				<div class="modal-body">
                
                <form class="form-horizontal" action="userlogin.php" role="form">
                  <div class="form-group">
                    <label  class="col-sm-2 control-label"
                     for="inputEmail3">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" 
                        name="i1" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="inputPassword3" >Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control"
                            name="i2" placeholder="Password"/>
                    </div>
                  </div>
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="b1" class="btn btn-success">Log Me In</button>
					  <button class="btn btn-danger" name="b2" data-dismiss="modal">Close</button>
					  <p>Register First<a href="#" data-toggle="modal" data-target="#four" data-dismiss="modal"> Sign Up</a>
                    </div>
                  </div>
                </form>
            </div>

					
		</div>
			</div>
		</div>
		<!--sign up form-->
		<div class="modal fade" id="four" data-backdrop="static" data-keyboard="false">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header" style="background:#ead29d">
						<h3>Sign Up</h3>
					</div>
					 <!-- Modal Body -->
				<div class="modal-body">
                
                <form class="form-horizontal" role="form" action="usersignup.php">
					<div class="form-group">
						<label  class="col-sm-2 control-label"
						for="nm">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" 
							name="n1" placeholder="Enter Your Name"/>
						</div>
					</div>
					<div class="form-group">
						<label  class="col-sm-2 control-label"
						for="em">Email Id</label>
					<div class="col-sm-10">
                        <input type="email" class="form-control" 
                        name="e1" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label"
                          for="p" >Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control"
                            name="p1" placeholder="Password"/>
                    </div>
                  </div>
				  
				  
                  <div class="form-group">
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-success" name="b1" value="signup">Sign up now</button>
					  <button class="btn btn-danger" data-dismiss="modal">Close</button>
						<p>Already have an account?<a href="#" data-toggle="modal" data-target="#three" data-dismiss="modal">Login now</a>
					  
                    </div>
                  </div>
                </form>
            </div>

					
		</div>
			</div>
		</div>

	<footer style="padding-top:20px;">
			<div style="background:#E6E6FA;height:200px">
				<div class="row">
					<div class="col-md-4" style="padding-left:50px">
						<font style="font-family:Cooper Black;font-size:30px;color:black;">Go Page</font>
						<ul style="font-family:Arial;font-size:20px;font-weight:bold;color:black;">
								<li><a  href="index.php" style="color:black;">Home</a></li>
								<li><a href="about.php"style="color:black;">About</a></li>
								<li><a href="#" data-toggle="modal" data-target="#three" style="color:black;">Login</a></li>
								<li><a href="#" data-toggle="modal" data-target="#four" style="color:black;">Sign Up</a></li>
						</ul>
					</div>
					<div class="col-md-4">
						<font style="font-family:Cooper Black;font-size:30px;color:black;">Get Social</font>
						<div>
							<ul class="icon1 social-network social-circle">
				  
                        <li><a href="#" class="icoRss" title="Rss"><i  class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i  class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i   class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i  class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i  class="fa fa-instagram"></i></a></li>
                    </ul>
						</div>
					</div>
					<div class="col-md-4" style="width:400px;height:150px">
						<font style="font-family:Cooper Black;font-size:30px;color:black;">Location</font>
						<div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.856209303889!2d75.84233021463683!3d26.93977258311596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db1248afc04e9%3A0x3b6ed20c0a8dca17!2sJewelry+Empire!5e0!3m2!1sen!2sin!4v1526116461358" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>			
					</div>
				</div>
		</div>
		<p style="text-align:center; background-color:black; color:white;">&copy; 2019 Our Resume. All rights reserved | Designed by Jaya Punjabi</p>
	</footer>
		</body>
</html>