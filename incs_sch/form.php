
                  <div class="row">
                    <div class="col-md-12 form-group">
                       
					  <label for="name">Full Name</label>
                      <input type="text" id="name" name="first_name" class="form-control py-2" value="<?php if(isset($_POST['first_name'])){ echo $_POST['first_name'];} ?>" required>
                    <?php
						if (array_key_exists('first_name', $reg_errors)) {
						echo '<small class="message" style="color:red;">'.$reg_errors['first_name'].'</small>';
						}?>
				   </div>
                    <div class="col-md-12 form-group">
                     
					 <label for="email">Email Address</label>
                      <input type="text" id="email" name="email" class="form-control py-2" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];} ?>" required>
						 <?php
						if (array_key_exists('email', $reg_errors)) {
						echo '<small class="message" style="color:red;">'.$reg_errors['email'].'</small>';
						}?>
						 <?php
						if (array_key_exists('username', $reg_errors)) {
						echo '<small class="message" style="color:red;">'.$reg_errors['username'].'</small>';
						}?>
				   </div>
					  <div class="col-md-12 form-group">
                      
					  <label for="pass">Password</label>
                      <input type="password" id="pass" name="pass1" class="form-control py-2" value="" required>
                     <?php
						if (array_key_exists('pass1', $reg_errors)) {
						echo '<small class="message" style="color:red;">'.$reg_errors['pass1'].'</small>';
						}
						?>
						<?php
						if (array_key_exists('pass2', $reg_errors)) {
						echo '<small class="message" style="color:red;">'.$reg_errors['pass2'].'</small>';
						}
						?>
					</div>
					 <div class="col-md-12 form-group">
                      <label for="pass2">Confirm Password</label>
                      <input type="password" id="pass2" name="pass2" class="form-control py-2" value="" required>
                    </div>
					
                   <div class="col-md-6 form-group">
                      
					  <label for="number">Phone Number</label>
                      <input type="text" id="number" name="phone" class="form-control py-2" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone'];} ?>" required>
                    <?php
						if (array_key_exists('phone', $reg_errors)) {
						echo '<small class="message" style="color:red;">'.$reg_errors['phone'].'</small>';
						}?>
				   </div>
				  <?php 
				  $array= array('Abia', 'Adamawa', 'Akwa Ibom', 'Bauchi', 'Bayelsa', 'Benue', 'Borno', 'Cross River', 'Delta', 'Ebonyi', 'Edo', 'Ekiti', 'Enugu', 'Gombe', 'Imo', 'Jigawa', 
				  'Kaduna', 'Kano', 'Katsina', 'Kebbi', 'Kogi', 'Kwara', 'Lagos', 'Nasarawa', 'Niger', 'Ogun', 'Ondo', 'Osun', 'Oyo', 'Plateau', 'Rivers', 'Sokoto', 'Taraba', 'Yobe',
				  'Zamfara', 'FCT');
				  ?>
						<div class="form-group col-md-6"> 
							
							<label for="name">State/Region</label> 
							
							
							
							<select class="form-control" name="city"> 
								<option>Choose State</option> 
								<?php 
								
								if(isset ($_POST['city'])){
								foreach( $array as $each_state){
									$productssel = ($each_state==$_POST['city'])?"Selected='selected'":"";
									echo '<option '.$productssel.'>'.$each_state.'</option>';
									
								}
								}else{
									foreach ($array as $each_state){
									echo '<option>'.$each_state.'</option>';
									}
									}
								?>
								
								
								
							

							</select> 
							<?php
								if (array_key_exists('city', $reg_errors)) {
								echo '<small class="message" style="color:red;">'.$reg_errors['city'].'</small>';
								}
							?>
                        </div> 
                   					
					<!--<div class="col-md-6 form-group">
                      <label for="email">Region/State</label>
                      <input type="email" id="email" class="form-control py-2">
                    </div>-->
				   <div class="form-group col-md-6"> 
				   <div>
				   
						<label for="number">Gender</label><br>
						<label class="checkbox-inline">
							<input type="radio" name="gender" id="" value="Male" class="form-control py-2" <?php if(!isset($_POST['gender'])){echo 'checked="checked"';}else if(isset($_POST['gender']) AND $_POST['gender'] == 'Male'){echo 'checked="checked"';} ?>>Male
						</label>
				 
						<label class="checkbox-inline">
							<input type="radio" name="gender" id="" value="Female" class="form-control py-2" <?php if(isset($_POST['gender']) AND $_POST['gender'] == 'Female'){echo 'checked="checked"';} ?>>Female
						</label>
					</div>
					</div>
					<!--<div class="col-md-4 form-group">
                     
                      <input type="radio" name="gender" id="email" value="male"class="form-control py-2">Male
                    <input type="radio" name="gender" id="email" value="female"class="form-control py-2">Female

				   </div>-->
					
                  </div>
                  <!--<div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" class="form-control py-2" cols="30" rows="8"></textarea>
                    </div>
                  </div>-->
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" name="submitting_form" value="Continue" class="btn btn-primary">
                    </div>
                  </div>
            