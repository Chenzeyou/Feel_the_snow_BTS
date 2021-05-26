
import React from 'react';
import './Pay.css';



function Pay() {
  return (
    <div >
            <form className="Pay">
                <label> Name : <input type="text" name="name" /> </label>
                <label> LastName : <input type="text" name="lastname" /> </label>
                <label> Email : <input type="text" name="email" /> </label>
                <label> number : <input type="text" name="number" /> </label>
                <label> CB : <input type="text" name="CB" /> </label>
                <label> EXPRIRATION_DATE : <input type="text" name="EXPRIRATIONDATE" /> </label>
                <label> CODE : <input type="text" name="CODE" /> </label>

                <input type="submit" value="proceed to payment" />
            </form>
    </div>
  );
}

export default Pay;
