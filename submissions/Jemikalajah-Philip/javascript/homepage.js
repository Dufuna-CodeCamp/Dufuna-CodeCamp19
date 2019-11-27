let imgDiv = document.getElementsByClassName("product--image");
let prodTitle = document.getElementsByClassName("product--title");
let prodPrice = document.getElementsByClassName("product--price");
document.getElementById("prod").addEventListener("click", displayMenProduct);
var productArray = [
     {image: "../html/product-images/img19.jpg", title: "Round Neck Polo", price: "$400"}, 
     {image: "../html/product-images/img21.jpg",  title: "V-neck Polo", price: "$300"},
     {image: "../html/product-images/img20.jpg", title: "turtle neck Polo", price: "$200"},
     {image: "../html/product-images/img22.jpg", title: "Socac Polo", price: "$1200"},
     {image: "../html/product-images/img23.jpg", title: "Dura Polo", price: "$6000"},
     {image: "../html/product-images/img24.jpg", title: "Thor Polo", price: "$7200"},
     {image: "../html/product-images/img18.jpg", title: "pear Polo", price: "$700"},
     {image: "../html/product-images/img9.jpeg", title: "White Polo", price: "$800"},
     {image: "../html/product-images/img8.jpeg", title: "chinko Polo", price: "$460"}
];
function displayMenProduct(){
    for (i = 0; i < productArray.length; i++){
    imgDiv[i].setAttribute("src", productArray[i].image);
    prodTitle[i].innerHTML = productArray[i].title;
    prodPrice[i].innerHTML = productArray[i].price; 
    }    
}