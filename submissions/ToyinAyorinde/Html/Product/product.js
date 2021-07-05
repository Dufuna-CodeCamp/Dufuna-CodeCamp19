let products = [
    {
        name:"Two Diamond and Turquoise Circle Pendant" ,
        imageUrl: "../images/Product1.jpg",
        price:"$2,000"
    },
    {
        name:"Two Diamond and Mother-of-pearl Circle Pendant" ,
        imageUrl: "../images/Product2.jpg",
        price:"$2350"
    },
    {
        name:"Two Diamond and Turquoise Circle Pendant" ,
        imageUrl: "../images/Product3.jpg",
        price:"$2,550"
    }
]

let imageDiv = document.getElementsByClassName('prdt-img');
let productName = document.getElementsByClassName('product-name');
let productPrice = document.getElementsByClassName('product-price');
let button  = document.getElementById("btn");
button.addEventListener('click', displayProducts);

function displayProducts() {
   for(let i = 0; i < products.length; i++) {
       imageDiv[i].src = products[i].imageUrl;
       productName[i].innerHTML = products[i].name;
       productPrice[i].innerHTML = products[i].price;
   }
} 