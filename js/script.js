$(document).ready(function (){
   //show loader image
    $('#loader-img').show();
    //show contacts page
    showContacts();
    
    //add Contacts
    $(document).on('submit', '#addContacts', function (){
       //show loader Image
        
        $('#loader-img').show();
        
        //post data from form
        $.post("add_contact.php", $(this).serialize()).done(function (data){
            console.log(data);
            $('#addModal').foundation('reveal', 'close');
            showContacts();
        });
        return false;
    });
    
    //edit contact
    $(document).on('submit', '#editContacts', function (){
       //show loader Image
        
        $('#loader-img').show();
        
        //post data from form
        $.post("edit_contact.php", $(this).serialize()).done(function (data){
            console.log(data);
            $('.editModal').foundation('reveal', 'close');
            showContacts();
        });
        
        return false;
    });
    
    //delete contacts
    $(document).on('submit', '#deleteContacts', function (){
       //show loader Image
        
        $('#loader-img').show();
        
        //post data from form
        $.post("delete_contact.php", $(this).serialize()).done(function (data){
            console.log(data);            
            showContacts();
        });
        
        return false;
    });
});

function showContacts(){
    console.log('Showing Contacts .....'); 
    setTimeout("$('#pageContent').load('contacts.php',function (){ $('loader-img').hide(); })",2000);
}



