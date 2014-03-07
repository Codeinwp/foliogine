function myFunction (color) {
    
    if (typeof(Storage)!=="undefined") {
        sessionStorage.color=color;
        location.reload();            
    }
    else {
        console.log("Sorry, your browser does not support web storage...");
    }

}    

            