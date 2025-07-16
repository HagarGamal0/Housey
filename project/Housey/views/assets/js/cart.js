// function to calculate subtotal
var calculateSub = function (ele) { 
    var unitPrice = parseFloat($(ele).find('.unit input').val());
    var numUnit = parseFloat($(ele).find('.num input').val());
  
    var subT = unitPrice * numUnit;

    $(ele).children('.subT').html(subT);
  
    return subT;
  }
  //function for sum
  var sum = function (acc, x) { return acc + x; };
  
  //function for total price
  var updateTotalPrice = function () { 
    var subTotal = [];
  
    $('tbody tr').each(function (i, ele) {
      var subT = calculateSub(ele); 
      subTotal.push(subT);
    });
  
    var overallTotalValue = subTotal.reduce(sum);
    $('#totalValue').html(overallTotalValue);
  }
  
  $(document).ready(function () {
    updateTotalPrice();
  
    $(document).on('click', '.btn.remove', function (event) {
      $(this).closest('tr').remove();
      updateTotalPrice();
    });
  
    var timeout;
    $(document).on('input', 'tr input', function () {
      clearTimeout(timeout);
      timeout = setTimeout(function () {
        updateTotalPrice();
      }, 1000);
    });
  
    $('#addItem').on('submit', function (event) {
      event.preventDefault();
      var name = $(this).children('[name=name]').val();
      var unit = $(this).children('[name=unit]').val();
      var num = $(this).children('[name=num]').val();
      
      $('tbody').append('<tr>' +
        '<td class="name">' + name + '</td>' +
        '<td class="unit"><input type="number" value="' + unit + '" /></td>' +
        '<td class="num"><input type="number" value="' + num + '" /></td>' +
        '<td class="subT"></td>' +
        '<td><button class="btn btn-sm remove"><svg width="22px" height="22px" viewBox="0 0 22 22" version="1.1" xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="trash-34-px" transform="translate(-6.000000, -6.000000)" fill-rule="nonzero"><polygon id="Path" transform="translate(17.000000, 17.000000) rotate(-180.000000) translate(-17.000000, -17.000000) " points="3.55271368e-15 -3.55271368e-15 34 -3.55271368e-15 34 34 3.55271368e-15 34"></polygon><path d="M7.125,10.914 L7.948,10.914 L9.868,26.966 C9.904,27.35 10.234,27.625 10.618,27.625 L23.382,27.625 C23.766,27.625 24.077,27.35 24.132,26.966 L26.052,10.914 L26.875,10.914 C27.295,10.914 27.625,10.584 27.625,10.164 C27.625,9.743 27.295,9.414 26.875,9.414 L21.133,9.414 L21.133,7.124 C21.133,6.704 20.803,6.374 20.383,6.374 L13.617,6.374 C13.197,6.374 12.867,6.704 12.867,7.124 L12.867,9.412 L7.124,9.412 C6.704,9.412 6.375,9.742 6.375,10.162 C6.375,10.584 6.722,10.913 7.125,10.913 L7.125,10.914 Z M14.367,7.876 L19.633,7.876 L19.633,9.413 L14.367,9.413 L14.367,7.876 L14.367,7.876 Z M24.534,10.914 L22.724,26.142 L11.276,26.142 L9.466,10.914 L24.534,10.914 Z M14.513,13.367 C14.093,13.367 13.763,13.697 13.763,14.117 L13.763,23.104 C13.763,23.525 14.093,23.854 14.513,23.854 C14.933,23.854 15.263,23.525 15.263,23.104 L15.263,14.117 C15.263,13.697 14.933,13.367 14.513,13.367 Z M19.487,13.367 C19.067,13.367 18.737,13.697 18.737,14.117 L18.737,23.104 C18.737,23.525 19.085,23.854 19.487,23.854 C19.907,23.854 20.237,23.525 20.237,23.104 L20.237,14.117 C20.237,13.697 19.907,13.367 19.487,13.367 Z" id="prefix__a" fill="#000000"></path></g></g></svg> </button></td>'
         +
      '</tr>');
  
      updateTotalPrice();
      $(this).children('[name=name]').val('');
      $(this).children('[name=unit]').val('');
      $(this).children('[name=num]').val('');
    });
  });
  // ***********************************************************
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
// ************************************************************

