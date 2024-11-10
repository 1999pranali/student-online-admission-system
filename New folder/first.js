
$(document).ready(function(){
    $('#course').on('change',function(){
        var courseID = $(this).val();
        if(courseID){
        $.ajax({
                type:'POST',
                url:'group1.php',
                data:'c_id='+ courseID,
                success:function(html){
                    $('#subject').html(html);
                    //$('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#subject').html('<option value="">Select Course first</option>');
            //$('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
});
