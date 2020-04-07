let $MyProductsButton = document.getElementById("show-js");

$MyProductsButton.addEventListener("click", MyProducts);
let products = [
  {
    name: "Applelaptop",
    image: "images/applecomp1.jpg",
    price: "NGN345,000",
  },
  {
    name: "Dell",
    image: "images/dell.jpeg",
    price: "NGN123,000",
  },
  {
    name: "Samsung",
    image: "images/computer3.jpg",
    price: "NGN56,000",
  },
  {
    name: "Techno",
    image: "images/phone3.jpg",
    price: "NGN 23,000",
  },
  {
    name: "IPhone",
    image: "images/phone2.jpg",
    price: "NGN 133,500",
  },
  {
    name: "Infinix",
    image: "images/phone1.jpg",
    price: "NGN 87,000",
  },
];

function MyProducts() {
  let $product = document.getElementById("products-js");
  let productsContent = "";

  products.forEach(function (product) {
    let productsContent = `<div class="product-img">
                                <img src="${product.image}" class="product-img" alt=""/>
                                <div class="product-content">
                                    <span class="product-title">${product.name}</span>
                                    </div>
                                    <div class="product-content">
                                    <span class="product-price">${product.price}</span>
                                </div>
                            </div>`;

    $product.innerHTML += productsContent;
  });
}
