//creando el contenedor del modal
let modalContainer = document.createElement('div');

//selecionando los proyectos
let proyectos = document.getElementById('proyectos-container');

//seleccionando la galeria
let galeria = document.getElementById('galeria-container');

//inicializando el array de los elementos de la galeria
let lista = [];
let totalImgGaleria = document.querySelectorAll('#galeria-container div').length;


if (document.getElementById('proyectos-container')) {
    proyectos.addEventListener('click', clickProyectos);
}

if (document.getElementById('galeria-container')) {
    galeria.addEventListener('click', clickGaleria);
    listaGaleria();
}



//inserta los elementos en el array
function listaGaleria(){
    let x = 0;
///corregir codigo: retirar if
    while (x < totalImgGaleria) {
        lista.push(document.querySelectorAll('#galeria-container div')[x].firstChild.src);
       
        x++;
        
    }//endwhile
}//endfunction



//crea toda la estructura html del modal
function htmlModalProyectos(){
    //agregando id
    modalContainer.id = 'modal-container';
    //agrgando clases
    modalContainer.classList.add('modal-container');
    //introducir html del modal
    modalContainer.innerHTML=`
        <i id="close" class="close far fa-times-circle"></i>
        <h2 id="titulo-proyecto-modal"></h2>
        <div class="modal-content">
            <div class="modal-img">
                <img id="img-modal" src="" alt="">
            </div><!--modal-img-->
            <div class="modal-txt">
                <p id="descripcion-proyecto-modal"></p>
            </div><!--modal-txt-->
        </div><!--modal-content-->
    `;
}
function htmlModalGaleria(){
    //agregando id
    modalContainer.id = 'modal-container';
    //agrgando clases
    modalContainer.classList.add('modal-container');
    //introducir html del modal
    modalContainer.innerHTML=`
        <i id="close" class="close far fa-times-circle"></i>
        
        <div class="modal-content">
            <i id="ant" class="fas fa-angle-left"></i>
            <div id="img-galeria-container" class="modal-img">
                <img  id="img-modal" src="" alt="">
            </div><!--modal-img-->
            <i id="sig" class="fas fa-angle-right"></i>
        </div><!--modal-content-->
    `;
}





//abre el modal
function abrirModalProyectos(){
    htmlModalProyectos();
    //introduce el modal en el dom
    document.body.appendChild(modalContainer);
    //hace visible el modal
    modalContainer.style.display='block';
    document.body.style.overflow = 'hidden';

    
}

function abrirModalGaleria(){
    htmlModalGaleria();
    //introduce el modal en el dom
    document.body.appendChild(modalContainer);
    //hace visible el modal
    modalContainer.style.display='flex';
    document.querySelector('.modal-content').style.display='flex';
    document.querySelector('.modal-content').style.alignItems ='center';
    document.body.style.overflow = 'hidden';

    //listener
    document.getElementById('sig').onclick = function(){
        cambiarImgModal('siguiente');
    }    
    document.getElementById('ant').onclick = function(){
        cambiarImgModal('anterior');
    }    
}


//listener
function clickProyectos(e){
    e.preventDefault();
    
    let img = e.target.parentElement.href
    
    abrirModalProyectos();
    //seleccionando la imagen del modal
    let imagenModal = document.getElementById('img-modal');
    //introducir la imagen en el modal
    imagenModal.src = img;
    //seleccionando la descripcion
    let descripcion = e.target.parentElement.parentElement.lastElementChild.innerHTML;
    //introducir la descripcion en el modal
    document.querySelector('#descripcion-proyecto-modal').innerHTML = descripcion;
    //seleccionando el titulo
    let titulo = e.target.parentElement.parentElement.childNodes[3].firstElementChild.innerHTML;
        //introducir el titulo en el modal
    document.querySelector('#titulo-proyecto-modal').innerHTML = titulo;

    let close = document.querySelector('#close');
    //detectando el click para cerrar el modal
    close.addEventListener('click', cerrarModal);

}

function clickGaleria(e){
    e.preventDefault();
    
    let img = e.target.src
    //console.log(e.target.parentElement.parentElement.children[1].innerHTML);
    //console.log(img)
    
    abrirModalGaleria();
    //seleccionando la imagen del modal
    let imagenModal = document.getElementById('img-modal');
    //introducir la imagen en el modal
    imagenModal.src = img;
   

    let close = document.querySelector('#close');
    //detectando el click para cerrar el modal
    close.addEventListener('click', cerrarModal);

}


//funcion para cerrar el modal
function cerrarModal() {
    //Seleccionando el modal
    let modal = document.getElementById('modal-container');
    document.body.style.overflow = 'auto';
    modal.style.display = 'none';
}


//modal siguiente - anterior
function cambiarImgModal(tipo){
    let i = 0;
    let imgact = 0;
    let imagenModal = document.getElementById('img-modal');

    //detecta la imagen actual del modal
    while (i < lista.length) {
        if (lista[i]=== imagenModal.src) {
            imgact = i;
            
        }
        i++;
    }

    //comprobacion siguiente o anterior
    if (tipo === 'siguiente') {
        let x = imgact;
        siguiente(x, lista);
        //console.log(lista[imgact]);
    }
    if (tipo === 'anterior') {
        let x = imgact;
        anterior(x, lista);
    }
}

function siguiente(x, lista) {
    x++;
    
    if (x < lista.length) {
        document.getElementById('img-modal').src = lista[x];
        
    }else{
        x = 0;
        document.getElementById('img-modal').src = lista[x];
        
    }
}

function anterior(x, lista) {
    x--;
    
    if (x >= 0) {
        document.getElementById('img-modal').src = lista[x];
        
    }else{
        x = lista.length - 1;
        document.getElementById('img-modal').src = lista[x];
        
    }
}

/*
function prueba(){
    let i = 0;
    let imgact = 0;
    let imagenModal = document.getElementById('img-modal');
    //console.log(lista.length);
    while (i < lista.length) {
        //console.log(lista[i]);
        if (lista[i]=== imagenModal.src) {
            console.log(lista[i]);
            console.log(i);
            imgact = i;
        }
        i++;
    }
    sig();
            function sig(){//ejemplo de func sig
                imagenModal.src = lista[imgact+1];
                console.log(imagenModal.src)
            }
}
*/