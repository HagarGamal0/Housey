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
var x = document.getElementById("batton");
x.onclick = function ()
{
    alert("asdklsajdksald");
}
                    