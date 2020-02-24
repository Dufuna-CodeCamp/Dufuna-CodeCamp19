let imgDiv = document.getElementsByClassName("product--image");
let prodTitle = document.getElementsByClassName("product--title");
let prodPrice = document.getElementsByClassName("product--price");
let jsProductList = document.getElementById("js-product-list");
let htmlProductList = document.getElementsByClassName("box1");
let productGrid = document.getElementsByClassName("product-grid");
let displayClickMen = false;
let displayClickWomen = false;
document
  .getElementById("men-category")
  .addEventListener("click", displayMenPolo);
document
  .getElementById("women-category")
  .addEventListener("click", displayWomenDress);
var productArrayMen = [
  {
    image: "../Html/product-images/img19.jpg",
    title: "Round Neck Polo",
    price: "$400"
  },
  {
    image: "../html/product-images/img21.jpg",
    title: "V-neck Polo",
    price: "$300"
  },
  {
    image: "../html/product-images/img20.jpg",
    title: "turtle neck Polo",
    price: "$200"
  },
  {
    image: "../html/product-images/img22.jpg",
    title: "Socac Polo",
    price: "$1200"
  },
  {
    image: "../html/product-images/img23.jpg",
    title: "Dura Polo",
    price: "$6000"
  },
  {
    image: "../html/product-images/img24.jpg",
    title: "Thor Polo",
    price: "$7200"
  },
  {
    image: "../html/product-images/img18.jpg",
    title: "pear Polo",
    price: "$700"
  },
  {
    image: "../html/product-images/img9.jpeg",
    title: "White Polo",
    price: "$800"
  },
  {
    image: "../html/product-images/img8.jpeg",
    title: "chinko Polo",
    price: "$460"
  }
];
var productArrayWomen = [
  {
    image: "../html/product-images/img27.jpg",
    title: "stearl dress ",
    price: "$320"
  },
  {
    image: "../html/product-images/img26.jpg",
    title: "truu Dress",
    price: "$1300"
  },
  {
    image: "../html/product-images/img25.jpeg",
    title: "blouse & skirt",
    price: "$2200"
  },
  {
    image: "../html/product-images/img28.jpg",
    title: " flower dress",
    price: "$6200"
  },
  { image: "../html/product-images/img29.jpg", 
  title: "Dura ", 
  price: "$4000" 
  },
  {
    image: "../html/product-images/img30.jpg",
    title: " blue flower dress",
    price: "$5200"
  },
  {
    image: "../html/product-images/img31.jpg",
    title: "pearl dress ",
    price: "$900"
  },
  {
    image: "../html/product-images/img32.jpg",
    title: "bluestar ",
    price: "$300"
  },
  {
    image: "../html/product-images/img33.jpg",
    title: "Pinkstar",
    price: "$860"
  }
];
function displayMenPolo() {
  displayClickMen = !displayClickMen;
  if (displayClickMen == true) {
    productGrid.innerHTML = "";
    let product = "";
    for (let i = 0; i < productArrayMen.length; i++) {
      let product = `
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                      <img class="product--image" src="${productArrayMen[i].image}" width="400px"
                      height="300px"></img>
                    </a>
                    <span class="product-trend-label">NEW</span>
                    <ul class="social">
                        <li>
                            <a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                        <li>
                            <a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a>
                        </li>
                        <li>
                            <a href="" data-tip="compare"><i class="fa fa-random"></i></a>
                        </li>
                        <li>
                            <a href="" data-tip="Quick View"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="product--title"><a href="">${productArrayMen[i].title}</a></h3>
                    <div class="product--price">${productArrayMen[i].price}</div>
                </div>
            </div>
        </div>`;
      jsProductList.innerHTML += product;
    }
  } else {
    jsProductList = document.getElementById("men-category").disabled;
  }
}
function displayWomenDress() {
  displayClickWomen = !displayClickWomen;
  productGrid.innerHTML = "";
  let product = "";
  if (displayClickWomen == true) {
    for (let i = 0; i < productArrayWomen.length; i++) {
      let product = `
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                      <img class="product--image" src="${productArrayWomen[i].image}" width="400px"
                      height="300px"></img>
                    </a>
                    <span class="product-trend-label">NEW</span>
                    <ul class="social">
                        <li>
                            <a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                        <li>
                            <a href="" data-tip="Wishlist"><i class="fa fa-heart"></i></a>
                        </li>
                        <li>
                            <a href="" data-tip="compare"><i class="fa fa-random"></i></a>
                        </li>
                        <li>
                            <a href="" data-tip="Quick View"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="product-content">
                    <h3 class="product--title"><a href="">${productArrayWomen[i].title}</a></h3>
                    <div class="product--price">${productArrayWomen[i].price}</div>
                </div>
            </div>
        </div>`;
      jsProductList.innerHTML += product;
    }
  } else {
    jsProductList = document.getElementById("women-category").disabled;
  }
}
