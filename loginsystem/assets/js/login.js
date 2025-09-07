const password = document.getElementById('password')
const background = document.getElementById('background')

password.addEventListener('input', (e) => {
  const input = e.target.value
  const length = input.length
  const blurValue = 20 - length * 2
  background.style.filter = `blur(${blurValue}px)`
})



// هنا الربط
var pass = document.getElementById("password");
var email = document.getElementById("email");


pass.onkeydown=function ()
{
 
            // هنا بعمل بتاكد ان عدد الاحرف فالباسورد اكتر من 8 احرف

    if(pass.value.length<10)
    {
        pass.style.border="5px red solid";
        
    }
    else{
        pass.style.border="5px green solid";
    }
}
// هنا بعمل بتاكد ان عدد الاحرف فاليميل اكتر من 4 احرف
// هنا بتاكد ان ال @ موجوده
email.onkeydown = function()
{
if (email.value.length < 5 || email.value.indexOf('@') == -1) {
    email.style.border = "5px red solid";

}
else {
    email.style.border = "5px green solid";
}
}

//     //  هنا لو كلو تمام بحفظ الاميل  والباسورد
// function save()
// {
//         localStorage.setItem('email',eemail.value);
//         localStorage.setItem('pass',ppass.value);
//         alert("data is saved");
//         location.assign('login.html');
//         alert('done');
// }
