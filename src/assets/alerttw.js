const alert = document.querySelector('#alerttw');
if(alert){
    let btnClose = document.querySelector('#alerttw .closeButton');
    
    btnClose.addEventListener('click', function(){
        //alert.style.display = 'none';
        alert.animate(
            [
                { transform: "translateX(-50%) translateY(-100%)" },
            ], 
            //timing
            {
             duration: 800,
             fill: "forwards",
            }
        );
    });

    //after 5s remove alert
    setTimeout(function() {
        alert.remove();
    }, 5000);

}