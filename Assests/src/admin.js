var formPopup = document.getElementById('formPopup');
var ajouterBtnUtilisateur = document.getElementById('ajouterUtilisateur');
var ajouterBtnForm = document.getElementById('ajouterBtnForm');
var annulerBtnForm = document.getElementById('annulerBtnForm');

ajouterBtnUtilisateur.addEventListener("click", function(){
    formPopup.style = 'display: flex;';
});


ajouterBtnForm.addEventListener("click", function(){
    formPopup.style = 'display: none;';
});

annulerBtnForm.addEventListener("click", function(){
    formPopup.style = 'display: none;';
});