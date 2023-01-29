

        <div class="contactForm">
        <div class="card">
            <form action="#">
                
                <label for="name">Enter Your Name : </label>
                <input type="text" id="name" onblur="checkName()">
                <label for="number">Enter Your Number : </label>
                <input type="text" id="number" maxlength="10" onblur="checkNumber()">
                <label for="email">Enter Your Email</label>
                <input type="email" id="email" onblur="checkEmail()">
                <label for="list">Choose a Product : </label>
                <select name="list" id="product">
                    <option>Coffee</option>
                    <option>Pen</option>
                    <option>Register</option>
                    <option>Eraser</option>
                </select>
                <label for="list">Choose the Amount : </label>
                <input type="text" id="amt">
                <input type="button" class="submit" value="submit" onclick="getResult()">
            </form>
        </div>
      
    </div>
    