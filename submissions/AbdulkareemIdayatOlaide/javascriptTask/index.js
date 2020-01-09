var products =[
    {
        name:"hallDecoration",
        image:"decoration.png",
        price:"NGN150,000"
    },
    {
        name:"weddingDress",
        image:"weddingdress.png",
        price:"NGN100,000"
    },
    {
        name:"lace",
        image:"lace.png",
        price:"NGN30,000"
    },
];
  let button = document.getElementById("btn"); button.disabled =false;
  let productDisplay = document.getElementById("js-product-list");
  button.addEventListener("click",function(){loadProducts();
 });

function loadProducts() 
 {
    products.forEach(element =>
        {
            let products= `
        <div class="product-box" id="js-product-list">
            <div class="product-content">
                <div class="product-image">
                   <img src="${element.image}" class="images">
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
    productDisplay.innerHTML+=products;
    });
    button.disabled=true;
}