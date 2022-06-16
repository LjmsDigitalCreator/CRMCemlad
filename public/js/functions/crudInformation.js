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

function Update(iterator){
    
    let infoClientIdUser = document.getElementById(`infoClientIdUser${iterator}`);
    let infoClientCareer = document.getElementById(`infoClientCareer${iterator}`);
    let infoClientName = document.getElementById(`infoClientName${iterator}`);
    let infoClientSecondName = document.getElementById(`infoClientSecondName${iterator}`);
    let infoClientLastName = document.getElementById(`infoClientLastName${iterator}`);
    let infoClientSecondLastName = document.getElementById(`infoClientSecondLastName${iterator}`);
    let infoClientEmail = document.getElementById(`infoClientEmail${iterator}`);
    let infoClientPhone = document.getElementById(`infoClientPhone${iterator}`);
    let infoClientAlterPhone = document.getElementById(`infoClientAlterPhone${iterator}`);
    let infoClientRol = document.getElementById(`infoClientRol${iterator}`);

    let rol = document.getElementById('rol');

    if(infoClientRol.value == 'Estudiante'){
        rol = 'student';
    }else if(infoClientRol.value == 'Cliente externo' && infoClientCareer.value != 1){
        rol = 'student';
    }else if(infoClientRol.value == 'Cliente externo'){
        rol = 'prospect';
    }

    $.ajax({
        type: "POST",
        url: "../../app/controller/updateInfo.php",
        data: {
            idUser: infoClientIdUser.value,
            idCareer: infoClientCareer.value,
            name: infoClientName.value,
            secondName: infoClientSecondName.value,
            lastName: infoClientLastName.value,
            secondLastName: infoClientSecondLastName.value,
            email: infoClientEmail.value,
            phone: infoClientPhone.value,
            alterPhone: infoClientAlterPhone.value,
            rol: rol,
        },
        async: true,
        success: function (data) {
            console.log(data);
            modal.style.display = 'none';
            divModal.style.display = 'none';
            divModal.classList.remove = 'modalDiv';

            if(data){
                ModalSuccessful();
                BringInformation();
            }else{
                ModalFailed();    
            }

        },
        error: function (error) {
            modalText.innerHTML = `Error: ${error}`;
            ModalFailed();
        }
    });
}

