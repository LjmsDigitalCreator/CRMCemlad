let btnFilter = document.getElementById('btnFilter');

btnFilter.addEventListener('click', ()=>{
    FilterInformation();
});

function FilterInformation(){

    let rol = $('#rol').val();
    let nameLastName = $('#nameLastName').val();
    let email = $('#email').val();
    let phone = $('#phone').val();
    let career = $('#career').val();

    $.ajax({
        type: "POST",
        url: "../../app/controller/filterInformation.php",
        data: {
            nameLastName: nameLastName,
            email: email,
            phone: phone,
            career: career,
            rol: rol,
        },
        async: true,
        success: function (data) {
            let info = $.parseJSON(data);

            $('#information-card').html('');

            let divs = '';

            for(let i = 0; i < info.length; i++){

                let title = '';

                if(rol == 'contract'){
                    title = 'Contrato';
                }else if(rol == 'project'){
                    title = 'Projecto';
                }

                if(rol == 'contract' || rol == 'project'){
                    divs += `
                        <div class='grid-client text-white'>
                            <div class="div-two-options items-columns">
                                <button class="button-option text-white">
                                    <a class="text-center text-white" href="${info[i]['DIR']}" download="Descargar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                                            <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                                            <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                                        </svg>
                                    </a>
                                </button>
                                <button class="button-option text-white" onclick="ModalDelete('${info[i]['ID_USER']}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </div>
                            <h3 class="items-columns text-center padding">Datos</h3>
                            <p class="one-column padding-rl"><strong>${title}:</strong> ${info[i]['NAME']}</p>
                        </div>
                    `;
                }else{
                    divs += `
                        <div class='grid-client text-white'>
                            <div class="div-options items-columns">
                                <button class="button-option text-white" onclick="ModalClient('divModalClient${i}', ${i});">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </button>
                                <button class="button-option text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                </button>
                                <button class="button-option text-white">
                                    <a class="text-center text-white" href="https://wa.me/+593${info[i]['PHONE']}?text=Cemlad le saluda.">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                        </svg>
                                    </a>
                                </button>
                                <button class="button-option text-white" onclick="ModalDelete('${info[i]['ID_USER']}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </div>
                            <h3 class="items-columns text-center padding">Datos</h3>
                            <p class="one-column padding-rl"><strong>Nombre:</strong> ${info[i]['NAME']} ${info[i]['LAST_NAME']}</p>
                            <p class="one-column padding-rl"><strong>Email:</strong> ${info[i]['EMAIL']}</p>
                            <p class="one-column padding-rl"><strong>Tel??fono:</strong> ${info[i]['PHONE']}</p>
                        </div>
    
                        <div class="" id="divModalClient${i}" style="display: none;">
                            <div id="modalClient${i}" class="modalClient justify-center align-center padding">
                                <h2 class="text-center text-white">Datos del cliente</h2>
                                <input id="infoClientIdUser" type="hidden" value="${info[i]['ID_USER']}">
    
                                <div class="grid text-white unit">
                                    <label for="infoClientCareer">Carrera</label>
                                    <input class="text-white noShadows" id="infoClientCareer" type="text" value="${info[i]['ID_CAREER']}" disabled>
                                </div>
    
                                <div class="grid text-white unit">
                                    <label for="infoClientName">Nombre</label>
                                    <input class="text-white noShadows" id="infoClientName" type="text" value="${info[i]['NAME']}" disabled>
                                </div>
    
                                <div class="grid text-white unit">
                                    <label for="infoClientSecondName">Segundo nombre</label>
                                    <input class="text-white noShadows" id="infoClientSecondName" type="text" value="${info[i]['SECOND_NAME']}" disabled>
                                </div>
    
                                <div class="grid text-white unit">
                                    <label for="infoClientLastName">Apellido</label>
                                    <input class="text-white noShadows" id="infoClientLastName" type="text" value="${info[i]['LAST_NAME']}" disabled>
                                </div>
    
                                <div class="grid text-white unit">
                                    <label for="infoClientSecondLastName">Segundo apellido</label>
                                    <input class="text-white noShadows" id="infoClientSecondLastName" type="text" value="${info[i]['SECOND_LAST_NAME']}" disabled>
                                </div>
    
                                <div class="grid text-white unit">
                                    <label for="infoClientEmail">Email</label>
                                    <input class="text-white noShadows" id="infoClientEmail" type="text" value="${info[i]['EMAIL']}" disabled>
                                </div>
    
                                <div class="grid text-white unit">
                                    <label for="infoClientPhone">Tele&#769;fono</label>
                                    <input class="text-white noShadows" id="infoClientPhone" type="text" value="${info[i]['PHONE']}" disabled>
                                </div>
    
                                <div class="grid text-white unit">
                                    <label for="infoClientAlterPhone">Segundo Tele&#769;fono</label>
                                    <input class="text-white noShadows" id="infoClientAlterPhone" type="text" value="${info[i]['ALTER_PHONE']}" disabled>
                                </div>
    
                                <div class="grid text-white unit">
                                    <label for="infoClientRol">Rol</label>
                                    <input class="text-white noShadows" id="infoClientRol" type="text" value="${rol}" disabled>
                                </div>
    
                                <div class="grid items-columns justify-center unit">
                                    <button id="btnCloseModal" onclick="CloseModalClient('divModalClient${i}', ${i})" class="btnNegative justify-center">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    `;
                }
                
            }
            
            $('#information-card').html(divs);
        }
    });

}