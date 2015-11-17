<?php include('core/init.php'); ?>
<form method="get" action="edit_contact.php">
<!--<input  type="text" name="h"/>
<input type="submit" name="sub" />-->
</form>
<?php
	/*if(isset($_GET['sub'])){
		$h = md5($_GET['h']);
		echo $h;		
	}*/

    $db = new Database();
    
    //query
    $db->query('UPDATE contacts SET 
        first_name      = :first_name,
        last_name       = :last_name,
        email           = :email,
        phone           = :phone,
        address1        = :address1,
        address2        = :address2,
        city            = :city,
        state           = :state,
        pincode         = :pincode,
        contact_group   = :contact_group,
        notes           = :notes
        WHERE id        = :id
    ');

    //bind values
    $db->bind(':first_name',$_POST['first_name']);
    $db->bind(':last_name',$_POST['last_name']);
    $db->bind(':email',$_POST['email']);
    $db->bind(':phone',$_POST['phone']);
    $db->bind(':address1',$_POST['address1']);
    $db->bind(':address2',$_POST['address2']);
    $db->bind(':city',$_POST['city']);
    $db->bind(':state',$_POST['state']);
    $db->bind(':pincode',$_POST['pincode']);
    $db->bind(':contact_group',$_POST['contact_group']);
    $db->bind(':notes',$_POST['notes']);
    $db->bind(':id',$_POST['id']);
        
    //
    if($db->execute()){
        echo 'contacts updated';
    }
    else{
        echo 'contacts not updated';
    }
   
?>

				
			