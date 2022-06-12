let welcome = document.getElementById('welcome');
let student = document.getElementById('student');
let prospect = document.getElementById('prospect');
let contract = document.getElementById('contract');

let filter = document.getElementById('filter');
let informationList = document.getElementById('information-list');
let form = document.getElementById('form');

let list = document.getElementById('list');
let create = document.getElementById('create');
let update = document.getElementById('update');
let filterOption = document.getElementById('filterOption');

let formTitle = document.getElementById('form-title');
let btnForm = document.getElementById('btn-form');

filter.style.display = 'none';
form.style.display = 'none';


list.addEventListener('click', ()=>{
    filter.style.display = 'none';
    form.style.display = 'none';
    informationList.style.display = 'block';
});

create.addEventListener('click', ()=>{
    filter.style.display = 'none';
    form.style.display = 'block';
    formTitle.innerHTML = 'Registrar';
    btnForm.innerHTML = 'Registrar';
    informationList.style.display = 'none';
});

update.addEventListener('click', ()=>{
    filter.style.display = 'none';
    form.style.display = 'block';
    formTitle.innerHTML = 'Actualizar';
    btnForm.innerHTML = 'Actualizar';
    informationList.style.display = 'none';
});

filterOption.addEventListener('click', ()=>{
    filter.style.display = 'block';
    form.style.display = 'none';
    informationList.style.display = 'block';
});