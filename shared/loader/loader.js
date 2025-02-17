var form = document.getElementById('container-login');
document.addEventListener('DOMContentLoaded', function() {  
    showLoader();
}); 

$(window).on('load', function() {   
    setTimeout(removeLoader, 1200);
}) 

function showLoader(){  
    $('#loader').fadeIn(500);
}

function removeLoader(){ 
        $("#loader").fadeOut(500, function(){   
        $("#loader").remove();  
        $(form).fadeIn(100);  
        form.style.display = 'block';  
        $("#loader-container").remove(); 
    });
}