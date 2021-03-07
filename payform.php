<!DOCTYPE html>
<html>
<style>


body {
  background: green;
  font-family: Arial;
}

input[type=text], select {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  display: block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 70%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 16px;
  margin: 15px 0;
  border: none;
  border-radius: 5px;
  cursor: pointer;
 
}

input[type=submit]:hover {
  background-color: #45a049;
}

div.container {
  border-radius: 30px;
  background-color: yellow;
  padding:  20px;
  margin-left:  580px;
  width: 25%;

 
  
}
</style>
<body>
  <h2 style="color: black" align="center">Order Details & Billing Form</h2>


<div class="container">
  <form action="payform-db.php" method="POST">
    <label for="fname">Customer Name</label>
    <input type="text" id="fname" name="firstname" placeholder=" Type Your name.." required="cname">

    <label for="country">Item Name</label>
    <select id="items" name="item" required="item">
      <option value="chicken Noodles">chicken Noodles</option>
      <option value="pepper chicken">pepper chicken</option>
      <option value="Rusberry malai">Rusberry malai</option>
      <option value="North Indian meal">North Indian meal</option>
      <option value="chicken khagana">chicken khagana</option>
      <option value="Egg Roll">Egg Roll</option>
      <option value="Chicken leg">Chicken leg pcs</option>
      <option value="staberry fruits">staberry fruits</option>
    </select>

     <label for="quantity">Quantity</label>
    <input type="text" id="lname" name="qty" placeholder="eg.1,2,3,4+" required="quantity">
     <label for="address">Address</label>
    <input type="text" id="Address" name="address" placeholder="Your Addresss lane." required="address">


     <label for="state">City</label>
    <input type="text" id="city" name="city" placeholder="Your city name" required="city">
     <label for="state">State</label>
    <input type="text" id="state" name="state" placeholder="Your state name.." required="state">
     <label for="zip">Zip</label>
    <input type="text" id="zip" name="zip" placeholder="Your zip code" required="zip">

    
   
  
    <input type="submit" name="sub" value="Submit">
  </form>
</div>

</body>
</html>


