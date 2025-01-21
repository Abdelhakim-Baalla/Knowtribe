var formPopup = document.getElementById("formEnseigantPopup");
var formSupprimerPopup = document.getElementById("formSupprimmerPopup");

var ajouterCoursBtn = document.getElementById("ajouterCours");
var supprimmerCoursBtn = document.getElementById("supprimmerCours");

var ajouterBtnForm = document.getElementById("ajouterBtnForm");
var annulerBtnForm = document.getElementById("annulerBtnFormCours");

// var supprimerBtnForm = document.getElementById('supprimerBtnForm');

ajouterCoursBtn.addEventListener("click", function () {
  formPopup.style = 'display: flex;';
});

supprimmerCoursBtn.addEventListener("click", function () {
  formSupprimerPopup.style = "display: flex;";
});

annulerBtnForm.addEventListener("click", function(){
    document.getElementById("nom").value = " ";
    document.getElementById('prenom').value = ' ';
    document.getElementById('email').value = ' ';
    document.getElementById('phone').value = ' ';
    document.getElementById('role').value = ' ';
    formPopup.style = 'display: none;';
});

