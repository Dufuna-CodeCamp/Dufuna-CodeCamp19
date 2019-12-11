
const imageDiv = document.getElementsByClassName('image');
const productName = document.getElementsByClassName('product-name');
const productPrice = document.getElementsByClassName('price');

document.getElementById('prod').addEventListener('click', displayProduct);

const productArr = [
    {
        name:"Nike-React-270(summer)" ,
        imageUrl: "./img/image 1.webp",
        price:"$125"
    },
    {
        name:"Kyrie 6(BHM)" ,
        imageUrl: "./img/image 2.webp",
        price:"$400"
    },
    {
        name:"Nike-urban" ,
        imageUrl: "./img/image 3.webp",
        price:"$135"
    }
];


function displayProduct() {
   for( let i = 0; i < productArr.length; i++) {
       imageDiv[i].src =  productArr[i].imageUrl;
       productName[i].innerHTML = productArr[i].name;
       productPrice[i].innerHTML = productArr[i].price;
   }
}


