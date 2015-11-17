<?php include('core/init.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Address Book | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/foundation-icons.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
	<div class="row">
		<div class="large-6 columns">
			<h1><i class="fi-address-book size-72"></i> Address Book</h1>
		</div>
		<div class="large-6 columns">
			<a class="add-btn button right small" data-reveal-id="addModal" ><i class="fi-plus size-24"></i> Add Contact</a>
			<div id="addModal" class="reveal-modal" data-reveal>
				<h2 id="modalTitle">Add Contact</h2>
				<form id="addContacts" action="#" method="post">
					<div class="row">
						<div class="large-6 columns">
							<label>First Name</label>
							<input name="first_name" type="text" placeholder="Enter First Name"/>
						</div>
						<div class="large-6 columns">
							<label>Last Name</label>
							<input name="last_name" type="text" placeholder="Enter Last Name"/>
						</div>						
					</div>
					<div class="row">
						<div class="large-4 columns">
							<label>Email</label>
							<input name="email" type="email" placeholder="Enter Email Address"/>
						</div>
						<div class="large-4 columns">
							<label>Phone Number</label>
							<input name="phone" type="text" placeholder="Enter Phone Number"/>
						</div>
						<div class="large-4 columns">
							<label>Contact Group</label>
							<select name="contact_group" >
								<option value="">Select Group</option>
								<option value="Family">Family</option>
								<option value="Friends">Friends</option>
								<option value="Bussiness">Business</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="large-6 columns">
							<label>Address 1</label>
							<input name="address1" type="text" placeholder="Enter Address 1"/>
						</div>
						<div class="large-6 columns">
							<label>Address 2</label>
							<input name="address2" type="text" placeholder="Enter Address 2"/>
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns">
							<label>City<label>
							<input name="city" type="text" placeholder="Enter City"/>
						</div>						
						<div class="large-4 columns">
							<label>State<label>
							<select name="state" >                                                        
                                <option value="">Select State</option>                                                  
                                    <?php foreach($states as $key => $value): ?>                                                                
                                        <option value="<?php echo $key; ?>"> <?php echo $value; ?> </option>   
                                    <?php endforeach;?>                                                        
                                </select>
						</div>
						<div class="large-4 columns">
							<label>PinCode<label>
							<input name="pincode" type="text" placeholder="Enter pincode"/>
						</div>
					</div>
					<div class="row">
						<div class="large-12 columns">
							<label>Notes</label>
							<textarea name="notes" placeholder="Enter Optional Notes"></textarea>
						</div>
					</div>
                            <button type="reset" class="add-btn button right small secondary"><i class="fi-loop"></i> Reset</button>						
					<button name="do_addContact" type="submit" class="add-btn button right small"><i class="fi-check "></i> Submit</button>						
				</form>				
				<a class="close-reveal-modal" aria-label="Close">&#215;</a>
			</div>
		</div>		
	</div>
	
    <!--loader image-->
    <div id="loader-img">
        <img src="img/728.gif">             
    </div>
    <!--main Content-->
    <div id="pageContent">
    
    </div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
