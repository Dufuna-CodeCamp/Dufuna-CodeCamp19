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
console.log(imageDiv);
let productName = document.getElementsByClassName('product-name');
console.log(productName);
let productPrice = document.getElementsByClassName('product-price');
console.log(productPrice);
let button  = document.getElementById("btn");
console.log(button);
button.addEventListener('click', displayProduct);

function displayProduct() {
   for(let i = 0; i < products.length; i++) {
       imageDiv[i].src = products[i].imageUrl;
       productName[i].innerHTML = products[i].name;
       productPrice[i].innerHTML = products[i].price;
   }
} 