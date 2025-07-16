

var hide = document.getElementById("cards_hide");
var form = document.getElementById("vendor_data_edit");
var btn_edit_data = document.getElementById("edit_data");
btn_edit_data.onclick=function ()
{
    form.style.display="block";
    hide.style.display="none";
    // alert("hi");
}

// Change Shop Profile Pic
// var loadFile = function (event) {
//     var image = document.getElementById("output");
//     image.src = URL.createObjectURL(event.target.files[0]);
// };

// Deleting Product
// var one_card = document.getElementById("card_of_cards");
// function remove()
// {
//     one_card.remove()
// }