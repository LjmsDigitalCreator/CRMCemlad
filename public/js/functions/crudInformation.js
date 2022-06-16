let modal = document.getElementById('modal');
let idDelete = document.getElementById('idDelete');
let divModal = document.getElementById('divModal');
let modalButtonPositive = document.getElementById('modalButtonPositive');
let modalButtonNegative = document.getElementById('modalButtonNegative');
let modalTitle = document.getElementById('modalTitle');
let modalText = document.getElementById('modalText');

divModal.style.display = 'none';
modal.style.display = 'none';

modalButtonPositive.addEventListener('click', ()=>{
    Delete(idDelete.value);
});

modalButtonNegative.addEventListener('click', ()=>{
    modal.style.display = 'none';
    divModal.style.display = 'none';
    divModal.classList.remove = 'modalDiv';
});

/* Modals */

function ModalSuccessful(){

    divModal.className = 'modalDiv';

    divModal.style.display = 'grid';
    modal.style.display = 'grid';

    modalButtonPositive.style.display = 'none';
    modalButtonNegative.style.display = 'none';

    modalTitle.innerHTML = 'E&#769;xito en la accio&#769;n';
    modalTitle.setAttribute('class', 'text-center text-positive');
    modalText.innerHTML = '';
    
    setTimeout(()=>{
        divModal.style.display = 'none';
        modal.style.display = 'none';
        divModal.classList.remove = 'modalDiv';
    }, 2000);

}

function ModalFailed(){

    divModal.className = 'modalDiv';
    divModal.style.display = 'grid';
    modal.style.display = 'grid';

    modalButtonPositive.style.display = 'none';
    modalButtonNegative.style.display = 'none';
    
    modalTitle.innerHTML = 'Fallo&#769; la accio&#769;n';
    modalTitle.setAttribute('class', 'text-center text-negative');
    modalText.innerHTML = '';
    
    setTimeout(()=>{
        divModal.style.display = 'none';
        modal.style.display = 'none';
        divModal.classList.remove = 'modalDiv';
    }, 2000);

}

function ModalDelete(id){

    divModal.className = 'modalDiv';

    divModal.style.display = 'grid';
    modal.style.display = 'grid';

    modalButtonPositive.style.display = 'block';
    modalButtonNegative.style.display = 'block';

    modalTitle.setAttribute('class', 'text-center text-white');
    modalTitle.innerHTML = '¿Esta&#769; seguro de eliminar?';
    modalText.innerHTML = '¿Esta accio&#769;n no podra&#769; revertirse?';
    modalButtonPositive.innerHTML = 'Aceptar';
    modalButtonNegative.innerHTML = 'Cancelar';

    idDelete.value = id;

}

/* Modals */

function Delete(id){
    
    let rol = $('#rol').val();

    $.ajax({
        type: "POST",
        url: "../../app/controller/deleteInfo.php",
        data: {
            id: id,
            rol: rol,
        },
        async: true,
        success: function (data) {
            modal.style.display = 'none';
            divModal.style.display = 'none';
            divModal.classList.remove = 'modalDiv';
            ModalSuccessful();
            BringInformation();
        },
        error: function (error) {
            modalText.innerHTML = `Error: ${error}`;
            ModalFailed();
        }
    });
}

