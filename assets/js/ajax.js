$("#newevent").submit(function(e) {

    var url = "/includes/insert.php";
    
    $.ajax({
           type: "POST",
           url: url,
           data: $("#newevent").serialize(),
           success: function(data)
           {
               if(data == "200") {
                   $(".alertarea").load("/assets/elements/success.html");
                   $('#newevent')[0].reset();
               } else if (data == "400") {
                   $(".alertarea").load("/assets/elements/failure.html");
               }
               else {
                   $(".alertarea").load("/assets/elements/warning.html");
               }
           }
         });
        
    e.preventDefault();
});

