
var products =  [
    {
        name: "Accessories",
        image: "image/fashion6.jpg",
        price: "$1100"
    },
    {
        name: "Jumpsuit",
        image: "image/fashion3.jpg",
        price: "$50"
    },
    {
        name: "Shirts",
        image: "image/fashion4.jpg",
        price: "$100"
    },
];

let button = document.getElementById("btn");
let productDisplay = document.getElementById("product-box");
  
button.addEventListener("click", function() {
  loadProducts();
});


function loadProducts() 
{
      products.forEach(element =>
          {
              let products = `
                  <div class="product-box" id="product-box">
                      <div class="product-content">
                          <div class="product-img">
                            <img src="${element.image}"  class="img">
                          </div>
                          <div>
                              <h3 class="product-title">
                                  ${element.name}
                              </h3>
                          </div> 
                          <div class="product-price">
                                ${element.price}
                          </div>
                       </div>
                  </div>`;
            productDisplay.innerHTML += products;
        });
            
           button.disabled = true;
}


