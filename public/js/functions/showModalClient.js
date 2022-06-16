function ModalClient(idModal, iterator){

    let divModalClient = document.getElementById(idModal);
    let modalClient = document.getElementById(`modalClient${iterator}`);

    DisabledEnabledInputs('disabled', iterator);

    divModalClient.className = 'modalDivClient';

    divModalClient.style.display = 'grid';
    modalClient.style.display = 'grid';
}

function ModalClientEdit(idModal, iterator){

    let divModalClient = document.getElementById(idModal);
    let modalClient = document.getElementById(`modalClient${iterator}`);

    DisabledEnabledInputs('enable', iterator);

    divModalClient.className = 'modalDivClient';

    divModalClient.style.display = 'grid';
    modalClient.style.display = 'grid';
}

function CloseModalClient(idModal, iterator){
    
    let divModalClient = document.getElementById(idModal);
    let modalClient = document.getElementById(`modalClient${iterator}`);

    divModalClient.classList.remove = 'modalDivClient';
        
    divModalClient.style.display = 'none';
    modalClient.style.display = 'none';
}

function DisabledEnabledInputs(option, iterator){

    let infoClientCareer = document.getElementById(`infoClientCareer${iterator}`);
    let infoClientCareerInput = document.getElementById(`infoClientCareerInput${iterator}`);
    let infoClientName = document.getElementById(`infoClientName${iterator}`);
    let infoClientSecondName = document.getElementById(`infoClientSecondName${iterator}`);
    let infoClientLastName = document.getElementById(`infoClientLastName${iterator}`);
    let infoClientSecondLastName = document.getElementById(`infoClientSecondLastName${iterator}`);
    let infoClientEmail = document.getElementById(`infoClientEmail${iterator}`);
    let infoClientPhone = document.getElementById(`infoClientPhone${iterator}`);
    let infoClientAlterPhone = document.getElementById(`infoClientAlterPhone${iterator}`);
    let infoClientRol = document.getElementById(`infoClientRol${iterator}`);

    if(option == 'enable'){
        infoClientCareer.removeAttribute('disabled');
        infoClientCareer.style.display = 'block';

        infoClientCareerInput.removeAttribute('disabled');
        infoClientCareerInput.style.display = 'none';

        infoClientName.removeAttribute('disabled');
        infoClientSecondName.removeAttribute('disabled');
        infoClientLastName.removeAttribute('disabled');
        infoClientSecondLastName.removeAttribute('disabled');
        infoClientEmail.removeAttribute('disabled');
        infoClientPhone.removeAttribute('disabled');
        infoClientAlterPhone.removeAttribute('disabled');

        infoClientCareer.className = 'text-standar noShadows';
        infoClientCareerInput.className = 'text-standar noShadows';

        infoClientName.className = 'text-standar noShadows';
        infoClientSecondName.className = 'text-standar noShadows';
        infoClientLastName.className = 'text-standar noShadows';
        infoClientSecondLastName.className = 'text-standar noShadows';
        infoClientEmail.className = 'text-standar noShadows';
        infoClientPhone.className = 'text-standar noShadows';
        infoClientAlterPhone.className = 'text-standar noShadows';
    }else{
        infoClientCareer.setAttribute('disabled', true);
        infoClientCareer.style.display = 'none';

        infoClientCareerInput.setAttribute('disabled', true);
        infoClientCareerInput.style.display = 'block';

        infoClientName.setAttribute('disabled', true);
        infoClientSecondName.setAttribute('disabled', true);
        infoClientLastName.setAttribute('disabled', true);
        infoClientSecondLastName.setAttribute('disabled', true);
        infoClientEmail.setAttribute('disabled', true);
        infoClientPhone.setAttribute('disabled', true);
        infoClientAlterPhone.setAttribute('disabled', true);

        infoClientCareer.className = 'text-white noShadows';
        infoClientCareerInput.className = 'text-white noShadows';
        infoClientName.className = 'text-white noShadows';
        infoClientSecondName.className = 'text-white noShadows';
        infoClientLastName.className = 'text-white noShadows';
        infoClientSecondLastName.className = 'text-white noShadows';
        infoClientEmail.className = 'text-white noShadows';
        infoClientPhone.className = 'text-white noShadows';
        infoClientAlterPhone.className = 'text-white noShadows';
    }

}