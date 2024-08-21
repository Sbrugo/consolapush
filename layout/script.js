let buttons = document.querySelectorAll('.menu-btn');

buttons.forEach(button => {
    button.addEventListener('click', ()=>{
        cerrarOtrosSubmenus();

        let submenu = button.nextElementSibling;

        if (submenu && submenu.classList.contains('submenu')) {
            submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
        }

    })    
});

function cerrarOtrosSubmenus() {
    let submenus = document.querySelectorAll('.submenu');
    submenus.forEach(submenu => {
        submenu.style.display = 'none';
    });
}

document.addEventListener('click', (e) => {
    if (!e.target.matches('.menu-btn')) {
        cerrarOtrosSubmenus();
    }
});