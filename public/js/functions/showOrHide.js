let rol = document.getElementById('rol');

let welcome = document.getElementById('welcome');
let student = document.getElementById('student');
let prospect = document.getElementById('prospect');
let contract = document.getElementById('contract');

let filter = document.getElementById('filter');
let informationList = document.getElementById('information-list');
let form = document.getElementById('form');
let formProject = document.getElementById('form-project');

let list = document.getElementById('list');
let create = document.getElementById('create');
let update = document.getElementById('update');
let filterOption = document.getElementById('filterOption');

let formTitle = document.getElementById('form-title');
let formTitleProject = document.getElementById('form-title-project');
let btnForm = document.getElementById('btn-form');
let btnFormProject = document.getElementById('btn-form-project');

filter.style.display = 'none';
form.style.display = 'none';
formProject.style.display = 'none';

list.addEventListener('click', ()=>{
    filter.style.display = 'none';
    form.style.display = 'none';
    formProject.style.display = 'none';
    informationList.style.display = 'block';
});

if(create != null){
    create.addEventListener('click', ()=>{
        filter.style.display = 'none';
    
        if(rol.value == 'project' || rol.value == 'contract'){
            formProject.style.display = 'block';
            form.style.display = 'none';
            formTitle.style.display = 'none';
            formTitleProject.innerHTML = 'Registrar';
            btnFormProject.innerHTML = 'Registrar';
        }else{
            form.style.display = 'block';
            formProject.style.display = 'none';
            formTitleProject.style.display = 'none';
            formTitle.innerHTML = 'Registrar';
            btnForm.innerHTML = 'Registrar';
        }
        
        informationList.style.display = 'none';
    });
}

if(update != null){
    update.addEventListener('click', ()=>{
        filter.style.display = 'none';
    
        if(rol.value == 'project' || rol.value == 'contract'){
            formProject.style.display = 'block';
            form.style.display = 'none';
            formTitle.style.display = 'none';
            formTitleProject.innerHTML = 'Actualizar';
            btnFormProject.innerHTML = 'Actualizar';
        }else{
            form.style.display = 'block';
            formProject.style.display = 'none';
            formTitleProject.style.display = 'none';
            formTitle.innerHTML = 'Actualizar';
            btnForm.innerHTML = 'Actualizar';
        }
    
        informationList.style.display = 'none';
    });
}


filterOption.addEventListener('click', ()=>{
    filter.style.display = 'block';
    form.style.display = 'none';
    formProject.style.display = 'none';
    informationList.style.display = 'block';
});