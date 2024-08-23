// Un arreglo con los nombres de las carpetas, que responden a TPs
const directories = ['1', '2', '3', '4']; 

// Función para generar el menú
function generateMenu(dirs) {
    const ul = document.getElementById('menu');

    dirs.forEach(dir => {
        li= `<li class="nav-item"><a class="nav-link" href="../${dir}">Trabajo Práctico ${dir}</a></li>`;
        $('#menu').append(li);
    });

}

// Llamar a la función para generar el menú
generateMenu(directories);