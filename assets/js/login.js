// for(var i=5;i<10;i++)
// document.write(i ,"<br>");
// document.write("<hr>");
// ************************************
// var loop=5;
// while(loop<10)
// {
//     document.write(loop,"<br>");
//     loop++;
// }
// document.write("<hr>");
// ************************************
// var loop=5;
// do
// {
//     document.write(loop,"<br>");
//     loop++;
// }while(loop<10)
// document.write("<hr>");
// ************************************
// do
// {
//     var response= prompt("Please Enter Your Name: ");
//  }while(!response);
// ************************************
//prompt("hello world","hi") //default value
// ************************************
// var x = "https://mozilla.org/?x=шеллы"
// document.write( encodeURI(x));
// ************************************
// function add_nnumbers(x=0,y=0) //default value
// {
//     x = parseInt (prompt("enter num1"));
//     y = parseInt (prompt("enter num2"));
//     return x+y;
// }
// //call
// var result = add_nnumbers();
// document.write(result);
// ************************************
//string
// var x = "iti literal";
// var y = new String("iti object");
// var z = String("iti literal simble usage");
// document.write(typeof(x),"<br>");
// document.write(typeof(y),"<br>");
// document.write(typeof(z),"<br>");
// document.write(x.length,"<br>");
// document.write(y.length,"<br>");
// document.write(z.length,"<br>");
// ************************************
//string methods (functions)
// var z = String("iti literal simble usage");
// document.write(z.charAt(0),"<br>");
// document.write(z.charAt(z.length-1,"<br>"));
// ************************************
// ********* LAB DAY 2 ************
// ********* PROBLEM 1 ************
// var start_number=parseFloat(prompt("Enter start number"));
// var end_number=parseFloat(prompt("Enter end number"));
// var sum=0;
// for(var i=start_number; i<end_number;i++)
// {
//     if(i%2==1)
//     {
//         sum+=i;
//     }
// }
// alert(sum);
// ************************************
// ********* PROBLEM 2 ************
// do
// {
//     var name= prompt('Please Enter Name');
//     var year=  parseInt( prompt('Please Enter birth year'));
// }while(isFinite(name) || year>=2010 || isNaN(year));
// var calc= 2023-year;

// alert("name: " + name + "\nbirth year:" + year 
// + "\nage:" + calc );
// ***** ANOTHER SOLUTION OF PROBLEM 2 *****
    // do
    // {
    // var n = prompt("enter name");
    // if(isNaN(n)== true)
    //     {
    //         break;
    //     }
    // }while(isFinite(n)==true);
    // do
    // {
    //     var by= parseInt(prompt("enter year"));
    //     if(isFinite(by)==true && by<2010 )
    //     {
    //         break;
    //     }
    // }while(isFinite(by)!=true || by>=2010);
    // var age=2023-by;
    // alert("Your Age IS: "+ age);

// ************************************
// ********* PROBLEM 2 (A) ************
// var grade=[60,100,10,15,85,70,45,1000];
// var max = 0;
//     for(var i=0; i<grade.length ; i++ )
//     {
//     if(grade[i]> max)
//         {
//             max=grade[i];
//         }
//     }
// alert("Max Value is: "+ max);
// ************************************
// ********* PROBLEM 2 (B) ************
// var grade=[60,100,10,15,85,70,45,30];
// var sum = 0;
//     for(var i=0; i<grade.length ; i++ )
//     {
//         sum+=grade[i];
//     }
//     var avg = (sum/grade.length);
// alert("avg is : "+ avg );
// ************************************
// ********* PROBLEM 2 (C) ************
// var grade=[60,100,10,15,85,70,45,30];
// var count=0;
//     for(var i=0; i<grade.length ; i++ )
//     {
//         if(grade[i]>=60)
//         {
//             count++;
//         }
//     }
// alert("number of students that have grade greater than 60 is : "+ count );
// ************************************
// ********* BONUS ************
// var size = parseInt(prompt("Enter Size"));
// var arr=[];
// for (var i = 0 ; i<size ; i++)
// {
//     arr[i]=parseInt(prompt("Enter number")); 
// }
// var check = parseInt(prompt("Check Number"));
// for(var j=0 ; j<arr.length; j++)
// {
//     if(check==arr[j])
//     {
//         alert("Index Of Number Is: " + j)
//         break;
//     }
//     else if (j==arr.length-1)
//     alert("It Is Not Exits");
// }
// ************************************
// Another Solution Of Bonus
// var n=prompt("Enter Array Num");
        
//         var a=[]
//         for(var i=0;i<n;i++){
//         var input=prompt("Enter A Num");
//         a[i]=input;
//         }
//         var show=prompt("Enter Index  Numm");
//         for(var i=0; i<a.length;i++){
//         if(a.indexOf(show) != -1){
//             console.log("Exist \n" + a.indexOf(show) );
//             break;
//         }else{
//             console.log("doesn't exist")
//             break;
//         }
//     }

// ***********  PROBLEM 1 **********
// function openwindow()
// {
//     window.open("https://www.linkedin.com/feed/" , '_blank');
// }
//------------------------------------------------------------
// *********** PROBLEM 2 ***********
// function randomly()
// {
//     var arr= ["onclick","onblur","onfocus","onmouseover","onmouseleave","onload","Math Function","Round Function","BOM","DOM"];
//     alert(arr[Math.floor( Math.random()*arr.length)]);
// }
//-------------------------------------------------------------
// *********** PROBLEM 3 ***********
// function dates()
// {
//     var d = new Date();
//     alert(d);
// }
//-------------------------------------------------------------
// *********** PROBLEM 4 ***********
// var em = prompt("Please Enter Email");

// if(em.indexOf("@")!=-1) //if not exist(-1)
// {
//     alert("Done");
// }
// else
// alert("INVALID");
//-------------------------------------------------------------
// *********** BONUS ***********
// var object = [{Name: "John", Degree:92},
//             {Name: "Botros", Degree:95},
//             {Name: "Kero", Degree: 100},
//             {Name: "Sameh", Degree:40}];

// for(var i=0; i<object.length; i++)
// {
//     if(object[i].Degree>90 && object[i].Degree<100 )
//     alert(object[i].Name + " " + object[i].Degree);
// }
// object.push({Name: "Boshoo" , Degree: 1000});
// console.log(object.length);
// console.log(object);
// object.pop();
// console.log(object.length);
// console.log(object);
//-------------------------------------------------------------