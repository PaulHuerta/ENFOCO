var buttonMenu = document.getElementById("buttonMenu");
var buttonLanguage = document.getElementById("buttonLanguage");

var menu = document.getElementById("menu");
var menuLang = document.getElementById("menuLang");


buttonMenu.addEventListener("click", function () {
  menu.classList.toggle("hidden");
});
buttonLanguage.addEventListener("click", function () {
  menuLang.classList.toggle("hidden");
});

Swal.fire({
  title: "Terminos y Condiciones.",
  icon:"info",
  html: "Para navegar en el sitio debes aceptar los <a href=\"terms.php\">términos y condiciones</a>",
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Aceptar',
  cancelButtonText: 'Cancelar',
}).then((result) => {
    if (result.isConfirmed) {
      var hidden = document.getElementById("block")
      hidden.classList.remove("hidden")
    }
  })
