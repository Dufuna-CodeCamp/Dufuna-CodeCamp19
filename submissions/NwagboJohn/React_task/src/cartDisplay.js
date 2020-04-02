import React from 'react';


let Cartdisplay=(props)=>{
return(
      <div className="con">
          <div>
              <img src={props.imageUrl} width='100px'height="100px"alt={props.name}/>
              <button className="btn btn-danger m-5" onClick={props.clicked}>
                  <span className="badge badge-success">
                      {props.name}
                      <br />
                      {props.price}
                  </span>
              </button>

          </div>
      </div>
    )
  }
export default Cartdisplay;
