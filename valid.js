console.log("hello");
const name = document.getElementById('name');
const email = document.getElementById('Email');
const mobile = document.getElementById('mobile');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');
const dob = document.getElementById('dob');
// console.log(dob.value);
let validEmail = false;
let validPhone = false;
let validUser = false;
// let validage = false;
let validPassword =false;
let validCpassword =false;
// $('#failure').hide();
// $('#success').hide();

// age.addEventListener('blur',()=>{
//     let regex=/^([0-9]){1,2}$/;
//     let str=age.value;
//     if(regex.test(str) && age.value>=14){
//         age.classList.remove('is-invalid');
//         validage = true;
//     }
//     else{
//         age.classList.add('is-invalid');
//         validage = false;
        
//     }
// })

name.addEventListener('blur', ()=>{
    let regex = /^([a-zA-Z]){1,30}$/;
    let str = name.value;
    if(regex.test(str)){
        name.classList.remove('is-invalid');
        validUser = true;
    }
    else{
        name.classList.add('is-invalid');
        validUser = false;
        
    }
})

email.addEventListener('blur', ()=>{
    let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    let str = email.value;
    if(regex.test(str)){
        email.classList.remove('is-invalid');
        validEmail = true;
    }
    else{
        email.classList.add('is-invalid');
        validEmail = false;
    }
})

mobile.addEventListener('blur', ()=>{

    let regex = /^([0-9]){10}$/;
    let str = mobile.value;
    if(regex.test(str)){
        mobile.classList.remove('is-invalid');
        validPhone = true;
    }
    else{
        mobile.classList.add('is-invalid');
        validPhone = false;
        
    }
})

password.addEventListener('blur', ()=>{
    let regex=/^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    let str =  password.value;
    if (regex.test(str)) {
        password.classList.remove('is-invalid');
        validPassword = true;
    }
    else{
        password.classList.add('is-invalid');
        validPassword = false;
        
    }
});

cpassword.addEventListener('blur', ()=>{
    let regex=/^[a-zA-Z0-9!@#$%^&*]{6,16}$/;
    let str =  cpassword.value;
    if (regex.test(str)) {
        cpassword.classList.remove('is-invalid');
        validcpassword = true;
    }
    else{
        cpassword.classList.add('is-invalid');
        validcpassword = false;
        
    }
});
cpassword.addEventListener('blur',()=>{

    if(cpassword.value == password.value){
        cpassword.classList.remove('is-invalid');
    }
    else{
        cpassword.classList.add('is-invalid');
        validcpassword = false;
        
    }
});

let signup=document.getElementById('signup');
signup.addEventListener('click',(e)=>{
    let invalid=document.getElementsByClassName('is-invalid');
    console.log(invalid);
    if(invalid.length > 0){
        e.preventDefault();
        console.log("you can not submit");
    }else{
        console.log("you can submit");
    }
});



