// Choose A Photo (MODAL ADD)
// let input = document.getElementById("inputTag");
//         let imageName = document.getElementById("imageName")

//         input.addEventListener("change", ()=>{
//             let inputImage = document.querySelector("input[type=file]").files[0];

//             imageName.innerText = "لقد اخترت" + " " +inputImage.name;
//         })
// // Choose A Photo (MODAL EDIT)
// let input2 = document.getElementById("inputTag2");
// let imageName2 = document.getElementById("imageName2")

// input2.addEventListener("change", () => {
//     let inputImage2 = document.querySelector("input[type=file]").files;
//     let i = document.getElementById('inputTag2').files[0];

//     console.log(i)

//     imageName2.innerText = "لقد اخترت" + " " + i.name;
// })
// var x = document.getElementsByClassName('carousel-item')

// **********************************************************************
// Deleting Product
// var one_card = document.getElementById("card_of_cards");
// function remove()
// {
//     one_card.remove()
// }
// **********************************************************************
// Loading
var myVar;


function loading() {
    myVar = setTimeout(showPage, 500);
    document.getElementById("loader").style.display = "block";
    document.getElementById("myBody").style.display = "none"; 
}

function showPage() {
    document.getElementById("myBody").style.display = "block";
    document.getElementById("loader").style.display = "none";
}
// ***********************************************************************
var hide = document.getElementById("cards_hide");
var form = document.getElementById("vendor_data_edit");
var btn_edit_data = document.getElementById("edit_data");
btn_edit_data.onclick=function ()
{
    form.style.display="block";
    hide.style.display="none";
}

var show = document.getElementById("liveToastBtn");
show.onclick = function () {
    form.style.display = "none";
    hide.style.display = "block";
}
// ************************************************************************
// Change Shop Profile Pic
// var loadFile = function (event) {
//     var image = document.getElementById("output");
//     image.src = URL.createObjectURL(event.target.files[0]);
// };
// ************************************************************************

// *************************************************************************
// Card Description
function cart ()
{
    window.open('./payment/pay.html', '_blank');
}


// var loadFile = function(event) {
//     var image = document.getElementById("output");
//     image.src = URL.createObjectURL(event.target.files[0]);
//   };















