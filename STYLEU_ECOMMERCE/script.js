document.addEventListener("DOMContentLoaded",
    function() {

let cartButtons = 
document.querySelectorAll(".btn-cart");

 cartButtons.forEach(function (btn)
{
    btn.addEventListener("mouseover",function(){
        btn.classList.add("hover");
    }
);
    btn.addEventListener("mouseout",function()
    {
     btn.classList.remove("hover");
    }

);



    btn.addEventListener("click", function()
{
     if(btn.classList.contains("added")){
        btn.classList.remove("added");
        btn.innerText = "ADD TO CART";
        alert("Item removed from cart");
     }else {
        btn.classList.add("added");
        btn.innerText = "Added ";
        alert("Item added to cart");
     }
     
     
    });

});
    });

    document.addEventListener("DOMContentLoaded", function () {

    const buyButtons = document.querySelectorAll(".btn-buy");

    buyButtons.forEach(function (btn) {
        btn.addEventListener("click", function () {

            alert("YAY! ITEM IS BOUGHT ");

           

        });
    });

});

