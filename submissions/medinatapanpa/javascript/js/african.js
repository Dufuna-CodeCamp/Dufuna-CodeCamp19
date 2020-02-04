let african = [
    {
        name:'Basil/scentleaf',
        image:'images/herbal2.jpg',
        price:'49.99/gram'
    },
    {
        name:'Better leaf',
        image:'images/herbal2.jpg',
        price:'49.99/gram'
    },
    {
        name:'Bush buck/Utazi',
        image:'images/herbal2.jpg',
        price:'49.99/gram'
    },   
];
function load(){
    for (x=0; x<african.length; x++){
    let herbs = `
    <div class="procat">
    <div class="card">
        <img src="${african[x].image}">
        <h3>${african[x].name} </h3>
        <p class="price"> ${african[x].price} </p>
        <p>There are variety of Nigerian herbs of many benefit to us bodies...</p>
        <p><button>Add to Cart</button></p>
    </div>
</div>
    `;   
document.write(herbs);
   }
}
load();
