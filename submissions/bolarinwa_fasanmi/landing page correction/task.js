
var products = [
    {
        name: "car",
        image:"image/car.jpg",
        price: "N600,000"
    },
    {
        name: "phone",
        image:"image/phone.jpg",
        price: "N60,000"
    },
    {
        name: "shoe",
        image:"image/shoe3.jpg",
        price: "N30,000"
    },
    {
        name: "Black shoe",
        image:"image/loafer3.jpg",
        price: "N35,000"
    },
    {
        name: "loafers",
        image:"image/loafers.jpg",
        price: "N33,000"
    },
    {
        name: "loafers",
        image:"image/loafers1.jpg",
        price: "N30,000"
    },
];
function loadproducts(){
    for (var i=0; i<products.length; i++){
        let product= `     
         <div class = "product_box">
          <div class= "product_img">
            <img src= "${products[i].image}"/>
         </div>
                <div class="product_name">
                ${products[i].name}
                </div>
                <div class="product_price">
                ${products[i].price}
                </div>
        </div>
`;
document.body.innerHTML += product;
     
    } 
}


