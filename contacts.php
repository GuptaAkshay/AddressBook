<?php include('core/init.php'); ?>
<?php
    $db = new Database();
    
    //query
    $db->query('SELECT * FROM contacts');

    $contacts = $db->resultset();
?>
<div class="row">
		<div class="large-12 columns">
			<table>
				<thead>
					<tr>
						<th width="200"><i class=" size-24"></i> Name</th>
						<th width="130"><i class="fi-telephone size-24"></i> Phone</th>
						<th width="200"><i class="fi-mail size-24"></i> Email</th>
						<th width="250"><i class="fi-home size-24"></i> Address</th>
						<th width="100"><i class="fi-torsos-all size-24"></i> Group</th>
						<th width="200"><i class="fi-wrench size-24"></i> Actions</th>
					</tr>
				</thead>
				<tbody>
                    <?php foreach($contacts as $contact): ?>
					<tr>
						<td>
                            <a><i class=""></i>
                                <?php
                                    echo $contact->first_name.' '.$contact->last_name;
                                ?>
                            </a>                            
                        </td>
						<td>
                            <?php
                                    echo $contact->phone;
                                ?>
                        </td>
						<td>
                              <?php
                                    echo $contact->email;
                                ?>
                        </td>
						<td>
							<ul>
								<li><?php
                                    echo  $contact->address1.', ';
                                    if($contact->address2){
                                        echo $contact->address2;
                                    }
                                ?>                                  
                                </li>
								<li>
                                    <?php
                                    echo $contact->city.', '.$contact->state.'-'.$contact->pincode;
                                ?>                                
                                </li>
							</ul>
						</td>
						<td>
                            <?php
                                    echo $contact->contact_group;
                                ?>
                        </td>
						<td>
							<ul class="button-group radius">
								<li>
                                    <a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>"><i class="fi-pencil size-24"></i> Edit</a>
                                    <div id="editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
                                        <h2 id="modalTitle">Edit Contact</h2>
                                            <form id="editContacts" action="#" method="post">
                                                <div class="row">
                                                    <div class="large-6 columns">
                                                        <label>First Name</label>
                                                        <input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $contact->first_name ?>"/>
                                                    </div>
                                                    <div class="large-6 columns">
                                                        <label>Last Name</label>
                                                        <input name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $contact->last_name ?>"/>
                                                    </div>						
                                                </div>
                                                <div class="row">
                                                    <div class="large-4 columns">
                                                        <label>Email</label>
                                                        <input name="email" type="email" placeholder="Enter Email Address" value="<?php echo $contact->email ?>"/>
                                                    </div>
                                                    <div class="large-4 columns">
                                                        <label>Phone Number</label>
                                                        <input name="phone" type="text" placeholder="Enter Phone Number" value="<?php echo $contact->phone ?>"/>
                                                    </div>
                                                    <div class="large-4 columns">
                                                        <label>Contact Group</label>
                                                        <select name="contact_group" >
                                                            <option value="" <?php if($contact->contact_group==null) { echo selected; } ?> >Select Group</option>
                                                            <option value="Family" <?php if($contact->contact_group=='Family'){echo 'selected';} ?> >Family</option>
                                                            <option value="Friends" <?php if($contact->contact_group=='Friends'){ echo 'selected'; } ?> >Friends</option>
                                                            <option value="Business" <?php if($contact->contact_group=='Business') { echo 'selected'; }?> >Business</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="large-6 columns">
                                                        <label>Address 1</label>
                                                        <input name="address1" type="text" placeholder="Enter Address 1" value="<?php echo $contact->address1 ?>"/>
                                                    </div>
                                                    <div class="large-6 columns">
                                                        <label>Address 2</label>
                                                        <input name="address2" type="text" placeholder="Enter Address 2" value="<?php echo $contact->address2 ?>"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="large-4 columns">
                                                        <label>City<label>
                                                        <input name="city" type="text" placeholder="Enter City" value="<?php echo $contact->city ?>"/>
                                                    </div>						
                                                    <div class="large-4 columns">
                                                        <label>State<label>
                                                        <select name="state" >
                                                            <option value="">Select State</option>                                                        
                                                            <?php foreach($states as $key => $value): ?>
                                                            <?php 
                                                                if($key == $contact->state){
                                                                    $selected='selected';
                                                                }
                                                                else{ $selected=''; }
                                                            
                                                            ?>
                                                                <option value="<?php echo $key; ?>" <?php echo $selected; ?>> <?php echo $value; ?> </option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <div class="large-4 columns">
                                                        <label>PinCode<label>
                                                        <input name="pincode" type="text" placeholder="Enter pincode" value="<?php echo $contact->pincode ?>"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="large-12 columns">
                                                        <label>Notes</label>
                                                        <textarea name="notes" placeholder="Enter Optional Notes" ><?php echo $contact->notes ?></textarea>
                                                    </div>
                                                </div>                                                                
                                                <input type="hidden" name="id" value="<?php echo $contact->id; ?>"/>    
                                                
                                                <button name="do_editContact" type="submit" class="add-btn button right small"><i class="fi-check "></i> Done</button>						
                                            </form>				
                                            <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                                    </div>
                                </li>
								<li>
                                    <form id="deleteContacts" action="#" method="post">
                                        <input type="hidden" name="id" value="<?php echo $contact->id; ?>"/>               
                                        <button type="submit" class="delete-btn button tiny secondary alert"><i class="fi-trash size-24"></i>  Delete</button>
                                    </form>                                                            
                                </li>							
							</ul>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>