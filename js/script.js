function checkName() {

    var strName = document.getElementById("name").value;
    empty(strName,"name");

}

function checkNumber() {

    var strNumber = document.getElementById("number").value;

    if(strNumber == "") {
        document.getElementById("number").style.borderBottom="#c91b1bba solid 3px";
    }
    else {
        if(isNaN(strNumber)) {
            document.getElementById("number").style.borderBottom="#c91b1bba solid 3px";

    
        }
        else {
            document.getElementById("number").style.borderBottom="1px solid #4e4949";
    
        }
    }

    
}

function checkEmail() {

    var strEmail = document.getElementById("email").value;
    empty(strEmail,"email");

}

function getResult() {
    var price
    var productName = document.getElementById("product").value;

    if(productName == "Pen"){
        price = 2
    }
    else if(productName == "Pencil"){
        price = 5
    }
    else if(productName == "Register"){
        price = 20
    }
    else {
        price = 3
    }

    var amt = parseInt(document.getElementById("amt").value);

    totalPrice = amt * price;

    confirm("Your amount for" + amt + " " + productName + " is " + totalPrice);

}

function empty(empty, bord) {

    if(empty == "") {
        document.getElementById(bord).style.borderBottom="#c91b1bba solid 3px";
    }
    else {
        document.getElementById(bord).style.borderBottom="1px solid #4e4949";
    }

}
