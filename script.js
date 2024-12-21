function button() {
    const buttons = document.querySelector(".filter-buttons .button1")
    buttons.classList.add("active")
}

function button1() {
    const buttons = document.querySelector(".filter-buttons .button2")
    buttons.classList.add("active")
}

function button2() {
    const buttons = document.querySelector(".filter-buttons .button3")
    buttons.classList.add("active")
}

function button3() {
    const buttons = document.querySelector(".filter-buttons .button4")
    buttons.classList.add("active")
}
function button4() {
    const buttons = document.querySelector(".filter-buttons .button5")
    buttons.classList.add("active")
}


function project1() {
    delete_projects()
    document.querySelector('.projects').classList.add('center');
}

function project2() {
    document.querySelector('.projects').classList.add('center');
    document.querySelector('.project3').classList.remove('delete');
    document.querySelector('.project4').classList.add('delete');
    document.querySelector('.project5').classList.add('delete');
    document.querySelector('.project6').classList.add('delete');
    document.querySelector('.project7').classList.add('delete');
    document.querySelector('.project8').classList.add('delete');
}
// project2()

function project3() {
    document.querySelector('.projects').classList.add('center');
    document.querySelector('.project3').classList.add('delete');
    document.querySelector('.project4').classList.remove('delete');
    document.querySelector('.project5').classList.add('delete');
    document.querySelector('.project6').classList.add('delete');
    document.querySelector('.project7').classList.add('delete');
    document.querySelector('.project8').classList.add('delete');
}

function project4() {
    document.querySelector('.projects').classList.add('center');
    document.querySelector('.project3').classList.add('delete');
    document.querySelector('.project4').classList.add('delete');
    document.querySelector('.project5').classList.remove('delete');
    document.querySelector('.project6').classList.add('delete');
    document.querySelector('.project7').classList.add('delete');
    document.querySelector('.project8').classList.add('delete');
}

function project5() {
    document.querySelector('.projects').classList.add('center');
    document.querySelector('.project3').classList.add('delete');
    document.querySelector('.project4').classList.add('delete');
    document.querySelector('.project5').classList.add('delete');
    document.querySelector('.project6').classList.remove('delete');
    document.querySelector('.project7').classList.add('delete');
    document.querySelector('.project8').classList.add('delete');
}

function delete_projects() {
    let projects = document.querySelectorAll(".project")
    for (let i = 0; i < projects.length; i++) {
        console.log(projects[i]);
        projects[i].classList.add('delete')
    }
}


function project_chenje(params, this1) {
    console.log(params);
    delete_projects()
    let button = document.querySelectorAll('.filter-buttons .button')
    console.log(button);

    for (let i = 0; i < button.length; i++) {
        if (params == 0) {
            button[i].classList.remove('delete')
        }

    }
    let projects = document.querySelectorAll(".project" + '.' + params)
    for (let i = 0; i < projects.length; i++) {
        projects[i].classList.remove("delete")
    }
    set_button_activ(this1)
}

function project_chenjeAll(this1) {
    const projects = document.querySelectorAll(".project");
    for (let i = 0; i < projects.length; i++) {
        projects[i].classList.toggle("delete", i >= 6);
    }
    set_button_activ(this1);
    document.querySelector(".load-more").textContent = "LOAD MORE";
}

function set_button_activ(this1) {
    let buttons = document.querySelectorAll('.button')
    for (let i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove('active');
    }

    this1.classList.add('active');
}

let arteg = ["hio","hohoho","roc"]
let artegbig = [
    ["sergey","27","100"],
    ["muhamed","13","8"],
    ["enot","16","80"]
]
let arobject = {
    'name': 'sergey',
    'age': 27,
    'range': 100
}
let arobjectbig = [
    {
        'name': 'sergey',
        'age': 27,
        'range': 100
    },
    {
        'name': 'muhamed',
        'age': 13,
        'range': 8
    },
    {
        'name': 'enot',
        'age': 16,
        'range': 80
    }
]


console.log(artegbig[1][0]+" "+artegbig[1][2]);
console.log(artegbig[0][0]+" "+artegbig[0][2]);
console.log(artegbig[2][0]+" "+artegbig[2][2]);

console.log(arobject["name"], arobject.range);

console.log(arobjectbig[1]['name'], arobjectbig[1].range);
console.log(arobjectbig[0]['name'], arobjectbig[0].range);
console.log(arobjectbig[2]['name'], arobjectbig[2].range);

for (let i = 0; i < arobjectbig.length; i++) {
    console.log(arobjectbig[i].name, arobjectbig[i].range);
    
    
}

function showcards() {
    const allprojects = document.querySelectorAll('.project');
    for (let i = 0; i < allprojects.length; i++) {
        if (i < 6) {
            allprojects[i].classList.remove('delete');
        } else {
            allprojects[i].classList.add('delete');
        }
    }
}
function cards(button) {
    const delet = document.querySelectorAll('.project.delete');
    const showproject = 3;

    if (delet.length > 0) {
        for (let i = 0; i < showproject && i < delet.length; i++) {
            delet[i].classList.remove('delete');
        }
        if (document.querySelectorAll('.project.delete').length === 0) {
            button.textContent = "remove";
        }
    } else {
        const allprojects = document.querySelectorAll('.project');
        for (let i = 0; i < allprojects.length; i++) {
            allprojects[i].classList.toggle('delete', i >= 6);
        }
        button.textContent = "LOAD MORE";
    }
}

showcards();