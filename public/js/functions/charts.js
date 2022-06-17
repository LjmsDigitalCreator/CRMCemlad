let myChart0 = document.getElementById('myChart0');
let myChart1 = document.getElementById('myChart1');
let myChart2 = document.getElementById('myChart2');
let myChart3 = document.getElementById('myChart3');
let myChart4 = document.getElementById('myChart4');
let myChart5 = document.getElementById('myChart5');
let myChart6 = document.getElementById('myChart6');
let myChart7 = document.getElementById('myChart7');
let myChart8 = document.getElementById('myChart8');
let myChart9 = document.getElementById('myChart9');
let myChart10 = document.getElementById('myChart10');
let myChart11 = document.getElementById('myChart11');
let myChart12 = document.getElementById('myChart12');
let myChart13 = document.getElementById('myChart13');
let myChart14 = document.getElementById('myChart14');
let myChart15 = document.getElementById('myChart15');
let myChart16 = document.getElementById('myChart16');
let myChart17 = document.getElementById('myChart17');
let myChart18 = document.getElementById('myChart18');
let myChart19 = document.getElementById('myChart19');

let chartInformation = '';

let questions = [
    "¿Con que materia se sentía más cómodo en su educación secundaria?",
    "¿Es una persona dispuesta a cooperar con los demás y participar en actividades sociales?",
    "¿Gusta de las actividades que requieren esfuerzo físico?",
    "¿Mejora su conocimiento y calidad de estudio cuando lo hace solo?",
    "¿Gusta de compartir su conocimiento con sus compañeros o conocidos?",
    "¿Qué tan rápido se adapta a los cambios?",
    "¿Qué tan seguido suele reflexionar sobre la realidad nacional de su país?",
    "¿Qué tan eficiente se considera al momento de organizar sus actividades?",
    "Es una persona que acepte sugerencias con facilidad",
    "¿Es capaz de retroalimentarse de las situaciones que se presentan en su vida?",
    "¿Son de su agrado los trabajo donde necesita libertad creativa para desempeñarlos?",
    "¿Qué tan cómodo se siente siguiendo instrucciones?",
    "¿Es capaz de controlar sus emociones en situaciones de mucho estrés?",
    "¿Se siente ofendido cuando en un debate refutan su punto de vista?",
    "Es capaz de aumentar su productividad siguiendo estrategias proactivas que lo ayuden a mejorar",
    "Cuida mucho de la estética de sus presentaciones y material de estudio",
    "Es capaz de adaptarse a un ritmo de trabajo donde sea de vital importancia trabajar en equipo",
    "Dedica tiempo a la lectura",
    "Si en algún punto debato con alguien, lo que suele suceder es",
    "¿Se considera una persona ambiciosa?"
];

$.ajax({
    type: "POST",
    url: "../../app/controller/chartInfo.php",
    data: {},
    async: false,
    success: function (data) {
        chartInformation = $.parseJSON(data);
    },
    error: function (error) {}
});

let options1 = [];
let options2 = [];
let options3 = [];
let options4 = [];
let options5 = [];
let options6 = [];
let options7 = [];
let options8 = [];
let options9 = [];
let options10 = [];
let options11 = [];
let options12 = [];
let options13 = [];
let options14 = [];
let options15 = [];
let options16 = [];
let options17 = [];
let options18 = [];
let options19 = [];
let options20 = [];

let values1 = [];
let values2 = [];
let values3 = [];
let values4 = [];
let values5 = [];
let values6 = [];
let values7 = [];
let values8 = [];
let values9 = [];
let values10 = [];
let values11 = [];
let values12 = [];
let values13 = [];
let values14 = [];
let values15 = [];
let values16 = [];
let values17 = [];
let values18 = [];
let values19 = [];
let values20 = [];

let options = ['1','2','3','4','5'];
let values = ['1','2','3','4','5'];

for(let i = 0; i < chartInformation.length; i++){
    switch(+chartInformation[i]['ID_QUESTION']){
        case 1:
            options1.push(chartInformation[i]['ANSWER']);
            values1.push(+chartInformation[i]['VALUE']);
        break;
        case 2:
            options2.push(chartInformation[i]['ANSWER']);
            values2.push(+chartInformation[i]['VALUE']);
        break;
        case 3:
            options3.push(chartInformation[i]['ANSWER']);
            values3.push(+chartInformation[i]['VALUE']);
        break;
        case 4:
            options4.push(chartInformation[i]['ANSWER']);
            values4.push(+chartInformation[i]['VALUE']);
        break;
        case 5:
            options5.push(chartInformation[i]['ANSWER']);
            values5.push(+chartInformation[i]['VALUE']);
        break;
        case 6:
            options6.push(chartInformation[i]['ANSWER']);
            values6.push(+chartInformation[i]['VALUE']);
        break;
        case 7:
            options7.push(chartInformation[i]['ANSWER']);
            values7.push(+chartInformation[i]['VALUE']);
        break;
        case 8:
            options8.push(chartInformation[i]['ANSWER']);
            values8.push(+chartInformation[i]['VALUE']);
        break;
        case 9:
            options9.push(chartInformation[i]['ANSWER']);
            values9.push(+chartInformation[i]['VALUE']);
        break;
        case 10:
            options10.push(chartInformation[i]['ANSWER']);
            values10.push(+chartInformation[i]['VALUE']);
        break;
        case 11:
            options11.push(chartInformation[i]['ANSWER']);
            values11.push(+chartInformation[i]['VALUE']);
        break;
        case 12:
            options12.push(chartInformation[i]['ANSWER']);
            values12.push(+chartInformation[i]['VALUE']);
        break;
        case 13:
            options13.push(chartInformation[i]['ANSWER']);
            values13.push(+chartInformation[i]['VALUE']);
        break;
        case 14:
            options14.push(chartInformation[i]['ANSWER']);
            values14.push(+chartInformation[i]['VALUE']);
        break;
        case 15:
            options15.push(chartInformation[i]['ANSWER']);
            values15.push(+chartInformation[i]['VALUE']);
        break;
        case 16:
            options16.push(chartInformation[i]['ANSWER']);
            values16.push(+chartInformation[i]['VALUE']);
        break;
        case 17:
            options17.push(chartInformation[i]['ANSWER']);
            values17.push(+chartInformation[i]['VALUE']);
        break;
        case 18:
            options18.push(chartInformation[i]['ANSWER']);
            values18.push(+chartInformation[i]['VALUE']);
        break;
        case 19:
            options19.push(chartInformation[i]['ANSWER']);
            values19.push(+chartInformation[i]['VALUE']);
        break;
        case 20:
            options20.push(chartInformation[i]['ANSWER']);
            values20.push(+chartInformation[i]['VALUE']);
        break;
    }
}

var charts = new Chart(myChart0, {
    type: "bar",
    data:{
        labels: options1,
        datasets:[
            {
                label: questions[0],
                backgroundColor: 'rgb(0,0,0)',
                data: values1
            }
        ]
    }
});

var charts = new Chart(myChart1, {
    type: "bar",
    data:{
        labels: options2,
        datasets:[
            {
                label: questions[1],
                backgroundColor: 'rgb(0,0,0)',
                data: values2
            }
        ]
    }
});

var charts = new Chart(myChart2, {
    type: "bar",
    data:{
        labels: options3,
        datasets:[
            {
                label: questions[2],
                backgroundColor: 'rgb(0,0,0)',
                data: values3
            }
        ]
    }
});

var charts = new Chart(myChart3, {
    type: "bar",
    data:{
        labels: options4,
        datasets:[
            {
                label: questions[3],
                backgroundColor: 'rgb(0,0,0)',
                data: values4
            }
        ]
    }
});

var charts = new Chart(myChart4, {
    type: "bar",
    data:{
        labels: options5,
        datasets:[
            {
                label: questions[4],
                backgroundColor: 'rgb(0,0,0)',
                data: values5
            }
        ]
    }
});

var charts = new Chart(myChart5, {
    type: "bar",
    data:{
        labels: options6,
        datasets:[
            {
                label: questions[5],
                backgroundColor: 'rgb(0,0,0)',
                data: values6
            }
        ]
    }
});

var charts = new Chart(myChart6, {
    type: "bar",
    data:{
        labels: options7,
        datasets:[
            {
                label: questions[6],
                backgroundColor: 'rgb(0,0,0)',
                data: values7
            }
        ]
    }
});

var charts = new Chart(myChart7, {
    type: "bar",
    data:{
        labels: options8,
        datasets:[
            {
                label: questions[7],
                backgroundColor: 'rgb(0,0,0)',
                data: values8
            }
        ]
    }
});

var charts = new Chart(myChart8, {
    type: "bar",
    data:{
        labels: options9,
        datasets:[
            {
                label: questions[8],
                backgroundColor: 'rgb(0,0,0)',
                data: values9
            }
        ]
    }
});

var charts = new Chart(myChart9, {
    type: "bar",
    data:{
        labels: options10,
        datasets:[
            {
                label: questions[9],
                backgroundColor: 'rgb(0,0,0)',
                data: values10
            }
        ]
    }
});

var charts = new Chart(myChart10, {
    type: "bar",
    data:{
        labels: options11,
        datasets:[
            {
                label: questions[10],
                backgroundColor: 'rgb(0,0,0)',
                data: values11
            }
        ]
    }
});

var charts = new Chart(myChart11, {
    type: "bar",
    data:{
        labels: options12,
        datasets:[
            {
                label: questions[11],
                backgroundColor: 'rgb(0,0,0)',
                data: values12
            }
        ]
    }
});

var charts = new Chart(myChart12, {
    type: "bar",
    data:{
        labels: options13,
        datasets:[
            {
                label: questions[12],
                backgroundColor: 'rgb(0,0,0)',
                data: values13
            }
        ]
    }
});

var charts = new Chart(myChart13, {
    type: "bar",
    data:{
        labels: options14,
        datasets:[
            {
                label: questions[13],
                backgroundColor: 'rgb(0,0,0)',
                data: values14
            }
        ]
    }
});

var charts = new Chart(myChart14, {
    type: "bar",
    data:{
        labels: options15,
        datasets:[
            {
                label: questions[14],
                backgroundColor: 'rgb(0,0,0)',
                data: values15
            }
        ]
    }
});

var charts = new Chart(myChart15, {
    type: "bar",
    data:{
        labels: options16,
        datasets:[
            {
                label: questions[15],
                backgroundColor: 'rgb(0,0,0)',
                data: values16
            }
        ]
    }
});

var charts = new Chart(myChart16, {
    type: "bar",
    data:{
        labels: options17,
        datasets:[
            {
                label: questions[16],
                backgroundColor: 'rgb(0,0,0)',
                data: values17
            }
        ]
    }
});

var charts = new Chart(myChart17, {
    type: "bar",
    data:{
        labels: options18,
        datasets:[
            {
                label: questions[17],
                backgroundColor: 'rgb(0,0,0)',
                data: values18
            }
        ]
    }
});

var charts = new Chart(myChart18, {
    type: "bar",
    data:{
        labels: options19,
        datasets:[
            {
                label: questions[18],
                backgroundColor: 'rgb(0,0,0)',
                data: values19
            }
        ]
    }
});

var charts = new Chart(myChart19, {
    type: "bar",
    data:{
        labels: options20,
        datasets:[
            {
                label: questions[19],
                backgroundColor: 'rgb(0,0,0)',
                data: values20
            }
        ]
    }
});