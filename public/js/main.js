window.onload = function() {
    const info = document.getElementsByClassName('infoButton');        
    let visible = false;

    var myFunction = function() {
        const uitleg = document.getElementsByClassName('uitleg');
        for (var i=0;i<uitleg.length;i+=1){
            if (visible == false) {
                uitleg[i].style.display = "block";
            }else{
                uitleg[i].style.display = "none";
            }
        }
        if (visible == true) {
            visible = false;    
        }
        else{
            visible = true;
        }
    };

    Array.from(info).forEach(function(info) {
        info.addEventListener('click', myFunction);
    });
}