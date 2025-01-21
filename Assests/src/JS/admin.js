var formPopup = document.getElementById('formEnseigantPopup');
var formSupprimerPopup = document.getElementById('formSupprimmerPopup');

var ajouterBtnUtilisateur = document.getElementById('ajouterUtilisateur');
var supprimerBtnUtilisateur = document.getElementById('supprimmerUtilisateur');

var ajouterBtnForm = document.getElementById('ajouterBtnForm');
var annulerBtnForm = document.getElementById('annulerBtnForm');

var supprimerBtnForm = document.getElementById('supprimerBtnForm');




ajouterBtnUtilisateur.addEventListener("click", function(){
    formPopup.style = 'display: flex;';
    
});


supprimerBtnUtilisateur.addEventListener("click", function(){
    formSupprimerPopup.style = 'display: flex;';
    
});


annulerBtnForm.addEventListener("click", function(){
    document.getElementById("nom").value = " ";
    document.getElementById('prenom').value = ' ';
    document.getElementById('email').value = ' ';
    document.getElementById('phone').value = ' ';
    document.getElementById('role').value = ' ';
    formPopup.style = 'display: none;';
});