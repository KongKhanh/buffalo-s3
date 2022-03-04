$("#trainingSystem").on('click', function(){
 
    $.ajax({
        method:"POST",
       url: 'pathToPhpFile.php',
       dataType: 'json',
       success: function(data){
            //data returned from php
       }
    });
});