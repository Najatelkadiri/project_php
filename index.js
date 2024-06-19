

class validation_formulaire{
    constructor(cin,nom,prenom,adress,email,tele){
        this.cin = cin
        this.nom = nom
        this.prenom = prenom
        this.adress = adress
        this.email = email
        this.tele = tele
      
    }
}


let formulaires = []
document.getElementById("btn-envoyer").addEventListener("click",()=>{
    let cin=document.getElementById('cin').value,
    nom=document.getElementById('nom').value,
    prenom=document.getElementById('prenom').value,
    adress=document.getElementById('adress').value,
    email=document.getElementById('email').value,
    tele=document.getElementById('tele').value
   


let formulaire = new validation_formulaire(cin,nom,prenom,adress,email,tele)
    formulaires.push(formulaire)

    console.log(formulaires)
        //cin
        if(cin == ""){
        

            document.getElementById("cin").classList.add("error")
            document.querySelector(".login1").innerHTML = "entrer votre cin"
        document.querySelector(".login1").classList.remove("login1")
        }
        else if(cin.length < 3 || cin.length > 25){

            document.querySelector(".login1").innerHTML = "votre CIN doit être compris entre 3 et 25"
            document.querySelector(".login1").classList.remove("login1");
        } 
        else{
            document.getElementById("cin").classList.remove("error") 
            document.getElementById("s1").classList.add("login1");
        
        }
        
        //nom
        if(nom == ""){
        

            document.getElementById("nom").classList.add("error")
            document.querySelector(".login2").innerHTML = "entrer votre nom"
        document.querySelector(".login2").classList.remove("login2")
        }
        else{
            document.getElementById("nom").classList.remove("error") 
            document.getElementById("s2").classList.add("login2");
        
        }
        
        //prenom
        if(prenom == ""){
        

            document.getElementById("prenom").classList.add("error")
            document.querySelector(".login3").innerHTML = "entrer votre prenom"
        document.querySelector(".login3").classList.remove("login3")
        }
        else{
            document.getElementById("prenom").classList.remove("error") 
            document.getElementById("s3").classList.add("login3");
        
        }

       

        //adress
        if(adress == ""){
        

            document.getElementById("adress").classList.add("error")
            document.querySelector(".login5").innerHTML = "entrer votre adress"
        document.querySelector(".login5").classList.remove("login5")
        }
        else{
            document.getElementById("adress").classList.remove("error") 
            document.getElementById("s5").classList.add("login5");
        
        }
              
        if( tele == ""){

            document.getElementById("tele").classList.add("error")
            document.querySelector(".login6").innerHTML = "entrer votre email"
        document.querySelector(".login6").classList.remove("login6")
        }
    
        else{
            document.getElementById("tele").classList.remove("error") 
            document.getElementById("s6").classList.add("login6");
        
        }
        // email
        
            
        if( email == ""){
        

            document.getElementById("email").classList.add("error")
            document.querySelector(".login7").innerHTML = "entrer votre email"
        document.querySelector(".login7").classList.remove("login7")
        }
    
        else{
            document.getElementById("email").classList.remove("error") 
            document.getElementById("s7").classList.add("login7");
        
        }
      


        vider()
        

})

function vider(){
    let cin=document.getElementById('cin').value="",
    nom=document.getElementById('nom').value="",
    prenom=document.getElementById('prenom').value="",
    adress=document.getElementById('adress').value="",
    email=document.getElementById('email').value="",
 
    tele=document.getElementById('tele').value=""
}



