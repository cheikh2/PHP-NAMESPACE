let myform = document.getElementById("myform1");

myform.addEventListener("submit", function(e) {
  /**** Control du numéro agence ****/
  let myAgence = document.getElementById("numAgence");
  let agenceRegex = /^[a-zA-Z0-9-]+$/;

    if (myAgence.value.trim() == "") {
        e.preventDefault();
        alert("Numero agence obligatoire");
        } 
        else if (agenceRegex.test(myAgence.value) == false) {
        alert("Numero agence invalid");
        e.preventDefault();
        } 
        else 
        {
            let myCompte = document.getElementById("numCompte");
            let compteRegex = /^[a-zA-Z0-9-]+$/;

            if (myCompte.value.trim() == "") {
            e.preventDefault();
            alert("Numero compte obligatoire");
            } 
            else if (compteRegex.test(myCompte.value) == false) {
            alert("Numero compte invalid");
            e.preventDefault();
            } 
            else 
            {
                let myMontant = document.getElementById("montant");
                let montantRegex = /^[0-9]+$/;
                if (myMontant.value.trim() == "") {
                e.preventDefault();
                alert("Montant obligatoire");
                } 
                else if (montantRegex.test(myMontant.value) == false) {
                alert("Montant invalid");
                e.preventDefault();
                }
            }
        }
    }
);

/**** Fonction pour griser des champs  ****/

function compteStatus() {

  let typeC = document.getElementById("typeCompte");
    if (typeC.selectedIndex == 0) {
    document.getElementById("agio").style.visibility = "hidden";
    document.getElementById("frai").style.visibility = "visible";
    }
    if (typeC.selectedIndex == 2) {
    document.getElementById("agio").style.visibility = "hidden";
    document.getElementById("frai").style.visibility = "visible";
    document.getElementById("duree").style.visibility = "visible";
    }

    if (typeC.selectedIndex == 1) {
    document.getElementById("agio").style.visibility = "hidden";
    document.getElementById("frai").style.visibility = "visible";
    //document.getElementById("duree").style.visibility = "hidden";
    // document.getElementById("idmo").style.marginTop = "-70px";
    // document.getElementById("agio").style.top = "70px";
    // document.getElementById("frai").style.top = "100px";
  }
}
