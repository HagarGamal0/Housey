let products = {
    data: [
        {
            name: "حنفية",
            price: '5',
            actual_price: "25",
            discount: "خصم 30%"

        },
        {
            name: "حنفية",
            price: '7',
            actual_price: "25",
            discount: "خصم 30%"

        },
        {
            name: "حنفية",
            price: '307',
            actual_price: "25",
            discount: "خصم 30%"

        },
        {
            name: "حنفية",
            price: '107',
            actual_price: "25",
            discount: "خصم 30%"

        },
        {
            name: "حنفية",
            price: '35',
            actual_price: "25",
            discount: "خصم 30%"

        },
        {
            name: "حنفية",
            price: '37',
            actual_price: "25",
            discount: "خصم 30%"

        },
    ],
}

function filterProducts(value) {
    let buttons = document.querySelectorAll(".button__value")
    buttons.forEach((button) => {
        if (value == button.innerText) {
            button.classList.add("active")
        }
        else {
            button.classList.remove("active")

        }
    });

    let elements = document.querySelectorAll(".card")
    elements.forEach((element) => {
        if (value == "الكل") {
            element.classList.remove("hide")
        }
        else if (value == "الاعلى سعراً") {

            display();

            products.sort(function (a, b) { return a.price - b.price });
            display();

            function display() {
                document.getElementsByClassName("card").innerText =
                products[0].type + " " + cars[0].year
                products[1].type + " " + cars[1].year
                products[2].type + " " + cars[2].year;
            }
        }
        else {
            if (element.classList.contains(value)) {
                element.classList.remove("hide")
            }
            else {
                element.classList.add("hide")
            }
        }
    })

}


window.onload = () => {
    filterProducts("الكل")
}

// **************************************************************************
function cart() {
    window.open('../../../payment/pay.html', '_blank');
}


