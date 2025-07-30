/* Funciones para Menu Hamburguesa */

function toggleMenu() {
  const menu = document.getElementById('mainMenu');
  menu.classList.toggle('open');
  console.log("prueba");
}

// Activa la clase .mh-current según la URL
document.addEventListener("DOMContentLoaded", function() {
  // Función para limpiar y comparar rutas
  function normalizePath(path) {
    // Quita dominio, parámetros, hash y última slash
    return path.replace(/^https?:\/\/[^\/]+/,'').replace(/[\?#].*$/, '').replace(/\/$/, '') || '/';
  }

  var currentPath = normalizePath(window.location.pathname);

  // Selecciona todos los menús (desktop y mobile)
  document.querySelectorAll('.mh-nav-desktop ul li, .mh-nav-mobile ul li').forEach(function(li){
    var a = li.querySelector('a');
    if(!a) return;
    var linkPath = normalizePath(a.getAttribute('href'));
    // Si coincide la ruta actual con la del menú, activa
    if(currentPath === linkPath) {
      li.classList.add('mh-current');
    } else {
      li.classList.remove('mh-current');
    }
  });
});




