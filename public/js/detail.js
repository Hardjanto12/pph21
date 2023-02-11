$(document).ready(function(){
    $(".viewdetails").click(function(){
        $("#tblkry").load("/kry/" + $(this).data("id"), function(responseTxt, statusTxt, jqXHR){
            // if(statusTxt == "success"){
            //     alert("New content loaded successfully!");
            // }
            // if(statusTxt == "error"){
            //     alert("Error: " + jqXHR.status + " " + jqXHR.statusText);
            // }
        });
    });
});
