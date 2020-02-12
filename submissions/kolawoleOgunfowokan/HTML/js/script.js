
  let productArray = 
  [
      { 
        image: "./images/HP250.jpg",
        title: "HP Laptop",
        price: "N130000"
      },
  
      { 
         image: "./images/eutetic-freezer.jpg",
         title: "Freezer",
         price: "N195000"
       },
  
       {
         image: "./images/huaweiMateBookXPro.jpg",
         title: "Huwaei Laptop",
         price: "N200000"
       },
  
       {
         image: "./images/java-prog.png",
         title: "Java Book",
         price: "N12000"
       },
  
       {
         image: "./images/microsoftSurface.jpg",
         title: "Microsoft Surface",
         price: "N320000"
       },
  
       {
         image: "./images/introprog.jpg",
         title: "Introduction to Programming",
         price: "N10000"
       },
  
       {
         image: "./images/Macbook.jpg",
         title: "Macbook pro",
         price: "N490000"
       },
  
       {
         image: "./images/AppleDesktop.png",
         title: "Apple Desktop",
         price: "N350000"
       },
  ];
  
  let button = document.getElementById("btn");
  let products = document.getElementById("product-box");
    
  button.addEventListener("click", function() {
    displayProducts();
  });
  
  function displayProducts() 
  {
        productArray.forEach(element =>
            {
                let productArray = `
                    <div class="product-box" id="product-box">
                        <div class="product-content">
                            <div class="product-image">
                              <img src="${element.image}"  class="images">
                            </div>
                            <div>
                                <h3 class="product-title">
                                    ${element.title}
                                </h3>
                            </div> 
                            <div class="product-price">
                                  ${element.price}
                            </div>
                      </div>
                    </div>`;
              products.innerHTML += productArray;
          });
              
             button.disabled = true;
  }
  
  