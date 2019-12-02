let productImage = document.getElementsByClassName("images");
let prodTitle = document.getElementsByClassName("product-title");
let prodPrice = document.getElementsByClassName("product-price");
let display = document.getElementById("product-box");
display.addEventListener("click", displayProduct);



let productArray = [
     {image: "../images/HP250.jpg",
      title: "HP Laptop",
      price: "N130000"
    },

     {image: "../images/eutetic-freezer.jpg",
     title: "Freezer",
     price: "N195000"
    },

     {image: "../images/huaweiMateBookXPro.jpg",
      title: "Huwaei Laptop",
      price: "N200000"
    },

     {image: "../images/java-prog.png",
      title: "Java Book",
      price: "N12000"
    },

     {image: "../images/microsoftSurface.jpg",
      title: "Microsoft Surface",
      price: "N320000"
    },

     {image: "../images/introprog.jpg",
      title: "Introduction to Programming",
      price: "N10000"
    },

     {image: "../images/Macbook.jpg",
      title: "Macbook pro",
      price: "N490000"
    },

     {image: "../images/AppleDesktop.png",
      title: "Apple Desktop",
      price: "N350000"
    },

];

function displayProduct(){
    for (i = 0; i < productArray.length; i++){
    productImage[i].setAttribute("src", productArray[i].image);
    prodTitle[i].innerHTML = productArray[i].title;
    prodPrice[i].innerHTML = productArray[i].price;
    }
}
