let btnTest = document.getElementById('btnTest');

btnTest.addEventListener('click', ()=>{

    let idUser = document.getElementById('idUser');
    let values = [];

    for(let i = 0; i < 20; i++){
        let radio = document.getElementsByName(`group${i}`);

        for(let j = 0; j < 5; j++){
            if(radio[j].checked){
                let label = document.getElementById(`answer${j}question${i}`)
                values.push(label.textContent);
            }
        }
    }

    if(values.length >= 20){
        $.ajax({
            type: "POST",
            url: "../../app/controller/saveTest.php",
            data: {
                idUser: idUser.value,
                values: values,
            },
            async: true,
            success: function (data) {
                if(data){
                    alert('Formulario enviado');
                    location.reload();
                }else{
                    alert('¡Ups! algo ocurrió');
                }
    
            },
            error: function (error) {
                modalText.innerHTML = `Error: ${error}`;
                ModalFailed();
            }
        });
    }else{
        alert('Faltan datos del formulario por llenar');
    }

});