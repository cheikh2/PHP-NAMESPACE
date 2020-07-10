function clientStatus(){
    let status = document.getElementById("clienType").checked;

        if (status == "salarie") {
            document.getElementById("prenom").disabled = 'disabled';
        }}
/*            
            document.getElementById("raisonSocial").disabled = '';
            document.getElementById("adressEmpl").disabled = '';
        }
        else{
            document.getElementById("raisonSocial").disabled = 'disabled';
            document.getElementById("adressEmpl").disabled = 'disabled';  
            }
        }

        function clienType(){
            let cliType = document.getElementById("employeradio").checked;
        
                if (cliType == "salarie") {
                    document.getElementById("prenomEmpl").disabled = 'disabled';
                    document.getElementById("raisonS").disabled = 'disabled';
                    document.getElementById("adressEmpl").disabled = 'disabled';
                    document.getElementById("cniEmployeur").disabled = 'disabled';  
                    }
                }*/


let myform = document.getElementById("myform");

myform.addEventListener("submit", function(e) {

        /**** Control du numéro agence ****/
    let myPrenom = document.getElementById("prenom");
    let prenomRegex = /^[a-zA-Z0-9-]+$/;

    if (myPrenom.value.trim() == "") {
        e.preventDefault();
        alert("Prenom obligatoire");
    } 
    else if (prenomRegex.test(myPrenom.value) == false) {
        alert("Champ prenom invalid");
        e.preventDefault();
    }
        else{
            /**** Control du numéro agence ****/
            let myNom = document.getElementById("nom");
            let nomRegex = /^[a-zA-Z0-9-]+$/;
    
            if (myNom.value.trim() == "") {
            e.preventDefault();
            alert("nom obligatoire");
            } 
            else if (nomRegex.test(myNom.value) == false) {
            alert("Champ nom invalid");
            e.preventDefault();
            }
                else{
                /**** Control de l'adresse ****/
                let myTelephone = document.getElementById("telephone");
                let telephoneRegex = /^(77|78|70|76)[0-9]{7}$/;

                if (myTelephone.value.trim() == "") {
                alert("Telephone obligatoire");
                e.preventDefault();
                } 
                else if (telephoneRegex.test(myTelephone.value) == false) {
                alert("Telephone invalid");
                e.preventDefault();
                }
                    else{
                    /**** Control de profession ****/
                    let myProfession = document.getElementById("profession");
                    let professionRegex = /^[a-zA-Z0-9_]+$/;

                    if (myProfession.value.trim() == "") {
                    alert("Profession obligatoire");
                    e.preventDefault();
                    } 
                    else if (professionRegex.test(myProfession.value) == false) {
                    alert("Profession invalide");
                    e.preventDefault();
                    }
                        else{
                        /**** Control du cni ****/
                        let myCni = document.getElementById("cni");
                        let cniRegex = /^[0-9]{13}$/;

                        if (myCni.value.trim() == "") {
                        alert("CNI obligatoire");
                        e.preventDefault();
                        } 
                        else if (cniRegex.test(myCni.value) == false) {
                        alert("Le CNI doit avoir 13 chiffres");
                        e.preventDefault();
                        }
                            else{
                            /**** Control du salaire ****/
                            let mySalaire = document.getElementById("salaire");

                            if (mySalaire.value.trim() == "") {
                            alert("salaire obligatoire");
                            e.preventDefault();
                            } 
                            else if ((mySalaire.value >= 25000 && mySalaire.value <= 2000000) == false) {
                            alert("Le salaire doit être compris entre 25000 et 2000000");
                            e.preventDefault();
                            }
                                else{
                                /**** Control de l'adresse ****/
                                let myAdress = document.getElementById("adress");
                                let adressRegex = /^[a-zA-Z0-9_]+$/;

                                if (myAdress.value.trim() == "") {
                                alert("Adresse obligatoire");
                                e.preventDefault();
                                } 
                                else if (adressRegex.test(myAdress.value) == false) {
                                alert("Adresse invalide");
                                e.preventDefault();
                                }
                                    else{
                                    /**** Control du mail ****/
                                    let myEmail = document.getElementById("email");
                                    let emailRegex = /^.+@.+\.[a-zA-Z]{2,}$/;

                                    if (myEmail.value.trim() == "") {
                                    alert("Email obligatoire");
                                    e.preventDefault();
                                    } 
                                    else if (emailRegex.test(myEmail.value) == false) {
                                    alert("Email invalide");
                                    e.preventDefault();
                                    }
                                }
                            }
                        }
                    }
                }
             }
        }
    }
);