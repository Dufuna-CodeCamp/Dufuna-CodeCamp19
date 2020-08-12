let $showProductsButton = document.querySelector("#see-more");

$showProductsButton.addEventListener("click", displayProducts);

let products = [
  {
    name: "Green vegetable",
    image_url: "./css/images/sm1.jpg",
    price: "N 5,000",
  },
  {
    name: "Green pepper",
    image_url: "./css/images/sm2.jpeg",
    price: "N 3,000",
  },
  {
    name: "Cattle",
    image_url: "./css/images/sm3.jpg",
    price: "N 103,000",
  },
  {
    name: "Cattle",
    image_url: "./css/images/sm3.jpg",
    price: "N 103,000",
  },
];

let productsDisplayed = false;
function displayProducts() {
  if (productsDisplayed) {
    return;
  }
  let $productList = document.getElementById("more-div");

  let productsContent = "";
  products.forEach(function (product) {
    let productContent = `
        <a href="" class="product-class__item">
            <form action="index.php" method="post">
              <div class="product-class__item--img">
                <img
                  src=${product.image_url}
                  alt="Bunch of Berries"
                  class="product-img"
                />
                <button class="bag-btn" data-id="1">
                  <i class="fa fa-shopping-cart"></i>
                  add to bag
                </button>
              </div>
              <h2 class="product-class--label--name">${product.name}</h2>
              <h4 class="product-class--label--price">${product.price}</h4>
            </form>
        </a>
        `;
    productsContent = productsContent + productContent;
  });

  $productList.innerHTML = productsContent;

  productsDisplayed = true;
}
