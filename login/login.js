const password = document.getElementById('password')
const background = document.getElementById('background')

password.addEventListener('input', (e) => {
  const input = e.target.value
  const length = input.length
  const blurValue = 20 - length * 2
  background.style.filter = `blur(${blurValue}px)`
})



// هنا الربط
var ppass =document.getElementById("ppass");
var eemail=document.getElementById("eemail");


function ssubmit()
{
 
        // هنا بعمل بتاكد ان عدد الاحرف فاليميل اكتر من 4 احرف
        // هنا بتاكد ان ال @ موجوده

if(eemail.value.length<5  && eemail.value.indexOf('@')==-1)
    {
        eemail.style.border="3px red solid";
        
    }
    else{
        eemail.style.border="5px green solid";
    }

            // هنا بعمل بتاكد ان عدد الاحرف فالباسورد اكتر من 8 احرف

    if(ppass.value.length<8)
    {
        ppass.style.border="3px red solid";
        
    }
    else{
        ppass.style.border="5px green solid";
    }
}

//     //  هنا لو كلو تمام بحفظ الاميل  والباسورد
function save()
{
        localStorage.setItem('email',eemail.value);
        localStorage.setItem('pass',ppass.value);
        alert("data is saved");
        location.assign('login.html');
        alert('done');
}
