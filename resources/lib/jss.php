<script>  

        $(document).ready(() => {
                    // var fname=document.myform.fname.value;  
                    // if (lname==null || lname==""){  
                    //     alert("lastname can't be blank");  
                    //     return false;  
                    // }    
        
                        //{
                          //  alert("All field are required");
                           // return false;
                        //}
                    
                    
        
                    
                    $('#myform').submit(function(){
         
                    var $lnameVal = $("#lname").val();
                    var $fnameVal = $("#fname").val();
                    var $mnameVal = $("#mname").val();
                    var $bp = $("#bp").val();
                    var $cn = $("#cn").val();
                    var $em = $("#em").val();
                    var $ad= $("#ad").val();
                    
                
        
                        
                        if($lnameVal == null || $lnameVal == "")
                        {
                            alert("Lastname is required");
                            return false;
                        }
                     
                        else if($fnameVal == null || $fnameVal == "")
                        {
                            alert("Firstname is required");
                            return false;
                          
                        }
                        else if($mnameVal == null || $mnameVal == "")
                        {
                            alert("middlename  is required");
                            return false;
                          
                        }
                        else if($bp == null || $bp == "")
                        {
                            alert("birthplace  is required");
                            return false;
                          
                        }
                        else if($cn == null || $cn == "")
                        {
                            alert("contact  is required");
                            return false;
                          
                        }
                        else if($em == null || $em == "")
                        {
                            alert("email  is required");
                            return false;
                          
                        }
                        else if($ad == null || $ad == "")
                        {
                            alert("address is required");
                            return false;
                        }
                       
                        else{
                            return true;
                        }
        
        
                    })
        
            })
        
            
            </script>  