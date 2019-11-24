let imgDiv = document.getElementsByClassName("product");
let prodTitle = document.getElementsByClassName("title");
let prodPrice = document.getElementsByClassName("price");
var productArray = [
     ["icon/img19.jpg", "Round Neck Polo", "$400"], 
     ["icon/img21.jpg", "V-neck Polo","$300"],
     ["icon/img20.jpg", "turtle neck Polo", "$200"],
     ["icon/img22.jpg", "Socac Polo", "$1200"],
     ["icon/img23.jpg", "Dura Polo", "$6000"],
     ["icon/img24.jpg", "Thor Polo", "$7200"],
     ["icon/img18.jpg", "pear Polo", "$700"],
     ["icon/img9.jpeg", "White Polo", "$800"],
     ["icon/img8.jpeg", "chinko Polo", "$460"],
];
function displayMenProduct(){
    for (i = 0; i < productArray.length; i++){
        prodTitle[i].innerHTML = productArray[i][1];
        prodPrice[i].innerHTML = productArray[i][2];
        imgDiv[i].setAttribute("src", productArray[i][0]);
    }
}