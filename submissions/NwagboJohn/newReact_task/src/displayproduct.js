import React from 'react';
const DisplayProduct=(props)=>{

  return(

    <div className="displayItem">
        <div className="card">
              <div className="img">
                      <img src={props.imageUrl} alt ={props.name}className="prodImg"width="120"height="250"/>
              </div>
        <div className="prodMeta">
              <div className="prodName">{props.name}</div>
              <div className="prodPrice">{props.price}</div>
        </div>
              <button onClick={props.clicks} className="btn-success">Add to cart</button>
        </div>
    </div>
  )
}
export default DisplayProduct;
