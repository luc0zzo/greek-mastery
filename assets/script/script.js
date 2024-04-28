
/*navbar on*/
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}
/*navbar off*/
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
var imgs = document.getElementsByClassName("main");

function mode() {
    var img2 = "../img/private/img2.png";
    var img1 = "../img/private/img1.png";
    let mode = document.getElementById("mode");
    
    if (mode.innerHTML === "darkmode") {
        document.body.style.backgroundColor = "black";
        document.body.style.color = "whitesmoke";
        mode.innerHTML = "lightmode";
    } else { /* per darkmode */
        document.body.style.backgroundColor = "whitesmoke";
        document.body.style.color = "black";
        mode.innerHTML = "darkmode";
    }
}

/*acquisto*/ 
function acquisto(){
    if (log) {
        // Se log è true, reindirizza l'utente a una pagina specifica
        window.location.href = '../pages/pagamento.html';
    } else {
        // Se log non è true, reindirizza l'utente all'area di registrazione
        window.location.href = '../pages/profilo.html';
    }
}

function utenteRegistrato(){
    if(log){
        window.location.href = '../pages/profilo.html';
    }
    else {
        window.location.href = '../pages/registrazione.html';
    }
}