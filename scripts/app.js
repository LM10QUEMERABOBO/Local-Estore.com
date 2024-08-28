// const searchin=document.querySelectorAll("searchInput");
// let cartCount = 0;


const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");
const products = [
  {
    id: 1,
    title: "Air Force",
    price: 1999.00,
    colors: [
      {
        code: "black",
        img: "./img/air.png",
      },
      {
        code: "darkblue",
        img: "./img/air2.png",
      },
    ],
  },
  {
    id: 2,
    title: "Air Jordan",
    price: 1149.00,
    colors: [
      {
        code: "lightgray",
        img: "./img/jordan.png",
      },
      {
        code: "green",
        img: "./img/jordan2.png",
      },
    ],
  },
  {
    id: 3,
    title: "Blazer",
    price: 2100.00,
    colors: [
      {
        code: "lightgray",
        img: "./img/blazer.png",
      },
      {
        code: "green",
        img: "./img/blazer2.png",
      },
    ],
  },
  {
    id: 4,
    title: "Crater",
    price: 2999.00,
    colors: [
      {
        code: "black",
        img: "./img/crater.png",
      },
      {
        code: "lightgray",
        img: "./img/crater2.png",
    
      },
    ],
  },
  {
    id: 5,
    title: "Hippie",
    price: 3999.00,
    colors: [
      {
        code: "gray",
        img: "./img/hippie.png",
      },
      {
        code: "black",
        img: "./img/hippie2.png",
      },
    ],
  },
];

let choosenProduct = products[0];

const currentProductImg = document.querySelector(".productImg");
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const currentProductColors = document.querySelectorAll(".color");
const currentProductSizes = document.querySelectorAll(".size");

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    //change the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //change the choosen product
    choosenProduct = products[index];

    //change texts of currentProduct
    currentProductTitle.textContent = choosenProduct.title;
    currentProductPrice.textContent = "₹ " + choosenProduct.price;
    currentProductImg.src = choosenProduct.colors[0].img;

    //assing new colors
    currentProductColors.forEach((color, index) => {
      color.style.backgroundColor = choosenProduct.colors[index].code;
    });
  });
});


currentProductColors.forEach((color, index) => {
  color.addEventListener("click", () => {
    currentProductImg.src = choosenProduct.colors[index].img;
  }); 
});

currentProductSizes.forEach((size, index) => {
  size.addEventListener("click", () => {
    currentProductSizes.forEach((size) => {
      size.style.backgroundColor = "white";
      size.style.color = "black";
    });
    size.style.backgroundColor = "black";
    size.style.color = "white";
  });
});

const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const Close = document.querySelector(".close");
const payButton=document.querySelector(".payButton");
const cartButton=document.querySelector(".cart-icon");
const cart=document.querySelector(".cart");
const order=document.getElementById("order");
const close1=document.getElementById("close");

cartButton.addEventListener("click",() =>{
    if(cartCount==0){
      alert("cart is empty,Please add the products!");
    }
    else{
      cart.style.display="flex";
      cartDetails();
    }
});

function cartDetails(){

}
Close.addEventListener("click", () => {
  payment.style.display = "none";
});

order.addEventListener("click", () => {
  payment.style.display = "flex";
  cart.style.display = "none";
});

close1.addEventListener("click", () => {
  cart.style.display = "none";
});



// productButton.addEventListener("click", () => {
//   // payment.style.display = "flex";
//   cartCount++;
//   updateCartCounter(cartCount);
//   alert("Item Added To Cart Sucessfully!");
// });


// payButton.addEventListener("click", () => {
//   if (confirm("Are You Sure To Place An Order!")) {
//     alert("Order placed successfully!");
//   } else {
//     alert("Order Cancelled!");
//   }
//   payment.style.display="none";
// });

// function updateCartCounter(count) {
//   document.querySelector('.cart-counter').textContent = count;
//}