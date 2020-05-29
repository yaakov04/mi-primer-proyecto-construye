let proyecto = [];
proyecto[0] = document.getElementById('proyecto0');
proyecto[1] = document.getElementById('proyecto1');
proyecto[2] = document.getElementById('proyecto2');
//Esta forma de seleccionar los elementos parece ser util, los elementos se agregan en un array
let tituloProyecto = document.querySelectorAll('.proyecto-txt p');



let modalTitulo = document.getElementById('modal-titulo');
let modalTitulo2 = document.getElementById('modal-titulo2');
let modalText = document.querySelector('#modal-text');
let modalText2 = document.querySelector('#modal-text2');




//modalTitulo.innerHTML = tituloProyecto[0].innerHTML;

function titulodelModal(x, y, z) {
    event.preventDefault();

    imgModal.src = x.href;

    modalTitulo.innerHTML = y;
    modalTitulo2.innerHTML = y;

    modalText.innerHTML = z
    modalText2.innerHTML = z
    modalContainer.style.display = 'flex';
    
    console.log(x);
    console.log(imgModal);
}




//arreglo del bug del touch pagina de proyectos



touchProyecto[0].onclick = function() {
    titulodelModal(x = proyecto[0], y = tituloProyecto[0].innerHTML, z = "UNO Sed porta, elit eget vulputate pellentesque, odio leo faucibus quam, ac posuere velit lacus sit amet dolor. Vivamus et semper ex, quis facilisis massa. Duis vehicula eleifend dui, non aliquam lacus aliquet sollicitudin. Duis orci lorem, lobortis a ex id, egestas malesuada massa. Maecenas consequat fermentum mi, mattis hendrerit eros.");
}
touchProyecto[1].onclick = function() {
    titulodelModal(x = proyecto[1], y = tituloProyecto[1].innerHTML, z = "DOS ProinSed porta, elit eget vulputate pellentesque, odio leo faucibus quam, ac posuere velit lacus sit amet dolor. Vivamus et semper ex, quis facilisis massa. Duis vehicula eleifend dui, non aliquam lacus aliquet sollicitudin. Duis orci lorem, lobortis a ex id, egestas malesuada massa. Maecenas consequat fermentum mi, mattis hendrerit eros.");
}
touchProyecto[2].onclick = function() {
        titulodelModal(x = proyecto[2], y = tituloProyecto[2].innerHTML, z = "TRES VitaeSed porta, elit eget vulputate pellentesque, odio leo faucibus quam, ac posuere velit lacus sit amet dolor. Vivamus et semper ex, quis facilisis massa. Duis vehicula eleifend dui, non aliquam lacus aliquet sollicitudin. Duis orci lorem, lobortis a ex id, egestas malesuada massa. Maecenas consequat fermentum mi, mattis hendrerit eros.");
    }