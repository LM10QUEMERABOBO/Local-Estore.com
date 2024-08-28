<?php
require("./connection/connection.php");
?>
<html lang="en">
<!--
 A LOCAL-ESTORE.COM which is full-stack web-appication,
 ,simple and small ecommerce website for the snikers.
 Built using HTML,CSS,JS and PHP. I have not applied 
 the payment gateway on it which you can see throughout 
 this siteseeing.So, thanks for the visit!. 
 Author:Mr. Krish.N.Soni @2024
-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500&family=Nunito&family=Palanquin+Dark:wght@500&family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="website icon" type="png" href="./img/logo.png" style="height:fit-content;width:fit-content">
    <title>Local-Estore.com</title>
</head>

<body>
    <nav id="nav">
        <div class="navTop">
            <div class="navItem">
                <a href="./index.php" style="text-decoration: none;color:white">
                    <h2>Local-Estore.com </h2>
                </a>
            </div>
            <div class="navItem">
                <div class="cart-container">
                    <div class="cart-icon">
                        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" role="img" width="35px" height="40px" fill="none">
                            <path stroke="currentColor" stroke-width="1.5" d="M8.25 8.25V6a2.25 2.25 0 012.25-2.25h3a2.25 2.25 0 110 4.5H3.75v8.25a3.75 3.75 0 003.75 3.75h9a3.75 3.75 0 003.75-3.75V8.25H17.5">
                            </path>
                        </svg>
                        <span class="cart-counter" style="cursor: pointer;">0</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="navBottom">
            <h3 class="menuItem">AIR FORCE</h3>
            <h3 class="menuItem">JORDAN</h3>
            <h3 class="menuItem">BLAZER</h3>
            <h3 class="menuItem">CRATER</h3>
            <h3 class="menuItem">HIPPIE</h3>
            <div class="navItem">
                <span class="limitedOffer" style="margin-left: 660px;">Limited Offer!</span>
            </div>
        </div>
    </nav>

    <div class="slider">
        <div class="sliderWrapper">
            <div class="sliderItem">
                <img src="./img/air.png" alt="" class="sliderImg" id="firsts">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR FORCE</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹ 1999.00</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/jordan.png" alt="" class="sliderImg" id="jordan">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">AIR JORDAN</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹ 1149.00</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/blazer.png" alt="" class="sliderImg" id="thirds">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">BLAZER</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹ 2100.00</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/crater.png" alt="" class="sliderImg" id="crater">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">CRATER</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹ 2999.00</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
            <div class="sliderItem">
                <img src="./img/hippie.png" alt="" class="sliderImg">
                <div class="sliderBg"></div>
                <h1 class="sliderTitle">HIPPIE</br> NEW</br> SEASON</h1>
                <h2 class="sliderPrice">₹ 3999.00</h2>
                <a href="#product">
                    <button class="buyButton">BUY NOW!</button>
                </a>
            </div>
        </div>
    </div>

    <div class="features">
        <div class="feature">
            <img src="./img/shipping.png" alt="" class="featureIcon">
            <span class="featureTitle">FREE SHIPPING</span>
            <span class="featureDesc">Free worldwide shipping on all orders.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/return.png" alt="">
            <span class="featureTitle">30 DAYS RETURN</span>
            <span class="featureDesc">No question return and easy refund in 14 days.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/gift.png" alt="">
            <span class="featureTitle">GIFT CARDS</span>
            <span class="featureDesc">Buy gift cards and use coupon codes easily.</span>
        </div>
        <div class="feature">
            <img class="featureIcon" src="./img/contact.png" alt="">
            <span class="featureTitle">CONTACT US!</span>
            <span class="featureDesc">Keep in touch via email and support system.</span>
        </div>
    </div>

    <div class="cart">
        <h1 class="payTitle">Cart</h1>
        <button class="payButton" id="order">CheckOut!</button>
        <!-- <span class="close">X</span> -->
        <!-- <button class="close" style="border:0" onclick="exitPay()">X</button> -->
    </div>

    <form action="#" method="post">
        <div class="payment">
            <label class="payTitle">Payment Details!</label>
            <hr>
            <h1 class="payTitle">Personal Information!</h1>
            <label>Name and Surname</label>
            <input type="text" placeholder="John Doe" class="payInput" name="name" required>
            <label>Phone Number</label>
            <input type="text" placeholder="+91 0000000000" class="payInput" name="phone" required>
            <label>Address</label>
            <input type="text" placeholder="Elton St 21 22-145" class="payInput" name="address" required>
            <h1 class="payTitle">Card Information (credit/debit cards accepted)</h1>
            <div class="cardIcons">
                <img src="./img/visa.png" width="40" alt="" class="cardIcon">
                <img src="./img/master.png" alt="" width="40" class="cardIcon">
            </div>
            <input type="password" maxlength="12" size="12" class="payInput" placeholder="Card Number" name="card_number" required>
            <div class="cardInfo">
                <input type="text" placeholder="mm" class="payInput sm" name="card_month" required>
                <input type="text" placeholder="yyyy" class="payInput sm" name="card_year" required>
                <input type="password" maxlength="3" size="3" placeholder="cvv" class="payInput sm" name="card_cvv" required>
            </div>
            <input type="submit" class="payButton" name="orders" id="orders" value="CheckOut!">
            <!-- // payButton.addEventListener("click", () => {
                    //     if (confirm("Are You Sure To Place An Order!")) { -->
            <?php
            if (isset($_POST['orders'])) {
                $ciphering = "AES-128-CTR";
                $iv_length = openssl_cipher_iv_length($ciphering);
                $options = 0;
                $encryption_iv = '1234567891011121';
                $encryption_key = "KRISH N. SONI";
                // $encryption = openssl_encrypt($simple_string,$ciphering,$encryption_key,$options,$encryption_iv);

                $name = mysqli_real_escape_string($conn, $_POST['name']);
                $phone = mysqli_real_escape_string($conn, $_POST['phone']);
                $encrypt_phone = openssl_encrypt($phone, $ciphering, $encryption_key, $options, $encryption_iv);

                $address = mysqli_real_escape_string($conn, $_POST['address']);
                $encrypt_address = openssl_encrypt($address, $ciphering, $encryption_key, $options, $encryption_iv);

                $card_number = mysqli_real_escape_string($conn, $_POST['card_number']);
                $encrypt_cardNo = openssl_encrypt($card_number, $ciphering, $encryption_key, $options, $encryption_iv);

                $card_month = mysqli_real_escape_string($conn, $_POST['card_month']);
                $encrypt_cardMon = openssl_encrypt($card_month, $ciphering, $encryption_key, $options, $encryption_iv);

                $card_year = mysqli_real_escape_string($conn, $_POST['card_year']);
                $encrypt_cardY = openssl_encrypt($card_year, $ciphering, $encryption_key, $options, $encryption_iv);

                $card_cvv = mysqli_real_escape_string($conn, $_POST['card_cvv']);
                $encrypt_cardCvv = openssl_encrypt($card_cvv, $ciphering, $encryption_key, $options, $encryption_iv);


                $sql = "INSERT INTO payment_details (fullname, phone, address, card_num,month,year,cvv)
                            VALUES ('$name', '$encrypt_phone', '$encrypt_address', '$encrypt_cardNo', '$encrypt_cardMon', '$encrypt_cardY', '$encrypt_cardCvv')";
                $conn->query($sql);
                if ($sql) {
            ?>
                    <script>
                        alert("Order placed successfully!");
                        cartCount--;
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("Failed to place the order!");
                        // cartCount--;
                    </script>
            <?php
                }
            }
            ?>
            <button class="close" style="border:0" onclick="closePay()">X</button>
        </div>
    </form>

    <div class="product" id="product">

        <img src="./img/air.png" alt="" class="productImg">

        <div class="productDetails">
            <h1 class="productTitle">AIR FORCE</h1>
            <h2 class="productPrice">₹ 1999.00</h2>
            <p class="productDesc"></p>
            <div class="colors">
                <div class="color"></div>
                <div class="color"></div>
            </div>
            <div class="sizes">
                <div class="size" id="42">42</div>
                <div class="size" id="43">43</div>
                <div class="size" id="44">44</div>
            </div>
            <button class="productButton">Add To Cart!</button>
        </div>
    </div>


    <div class="gallery">
        <div class="galleryItem">
            <h1 class="galleryTitle">Be Yourself!</h1>
            <img src="https://images.pexels.com/photos/13159244/pexels-photo-13159244.jpeg"
                alt="" class="galleryImg">
        </div>
        <div class="galleryItem">
            <img src="https://images.pexels.com/photos/2982100/pexels-photo-2982100.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="" class="galleryImg">
            <h1 class="galleryTitle">This is the First Day of Your New Life</h1>
        </div>
        <div class="galleryItem">
            <h1 class="galleryTitle">Just Do it!</h1>
            <img src="https://images.pexels.com/photos/1018911/pexels-photo-1018911.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="" class="galleryImg">
        </div>
    </div>
    <div class="newSeason">
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/34514/spot-runs-start-la.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="" class="nsImg">
        </div>
        <div class="nsItem">
            <h3 class="nsTitleSm">WINTER NEW ARRIVALS</h3>
            <h1 class="nsTitle">New Season</h1>
            <h1 class="nsTitle">New Collection</h1>
            <a href="#nav">
                <button class="nsButton">CHOOSE YOUR STYLE</button>
            </a>
        </div>
        <div class="nsItem">
            <img src="https://images.pexels.com/photos/7856965/pexels-photo-7856965.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500"
                alt="" class="nsImg">
        </div>
    </div>
    <footer>
        <div class="footerLeft">
            <div class="footerMenu">
                <h1 class="fMenuTitle">About Us</h1>
                <ul class="fList">
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Company</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Contact</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Careers</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Affiliates</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Stores</li>
                    </a>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Useful Links</h1>
                <ul class="fList">
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Support</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Refund</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">FAQ</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Feedback</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Stories</li>
                    </a>
                </ul>
            </div>
            <div class="footerMenu">
                <h1 class="fMenuTitle">Products</h1>
                <ul class="fList">
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Air Force</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Air Jordan</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Blazer</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Crater</li>
                    </a>
                    <a href="./index.php#nav" style="text-decoration:none">
                        <li class="fListItem">Hippie</li>
                    </a>
                </ul>
            </div>
        </div>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Subscribe to our newsletter</h1>
                <div class="fMail">
                    <input type="text" placeholder="your@email.com" class="fInput" id="fInput">
                    <button class="fButton" onclick="joinGuy()">Join!</button>
                </div>
            </div>
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                    <img src="./img/facebook.png" alt="" class="fIcon">
                    <img src="./img/twitter.png" alt="" class="fIcon">
                    <img src="./img/instagram.png" alt="" class="fIcon">
                    <img src="./img/whatsapp.png" alt="" class="fIcon">
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">@Krish Soni. All rights reserved. 2024.</span>
            </div>
        </div>
    </footer>
</body>

</html>
<script>
    //app.js 
    const wrapper = document.querySelector(".sliderWrapper");
    const menuItems = document.querySelectorAll(".menuItem");
    const products = [{
            id: 1,
            title: "Air Force",
            price: 1999.00,
            colors: [{
                    code: "white",
                    img: "./img/air.png",
                    imgname: "air.png",
                },
                {
                    code: "darkblue",
                    img: "./img/air2.png",
                    imgname: "air2.png",
                },
            ],
        },
        {
            id: 2,
            title: "Air Jordan",
            price: 1149.00,
            colors: [{
                    code: "lightgray",
                    img: "./img/jordan.png",
                    imgname: "jordan.png",
                },
                {
                    code: "green",
                    img: "./img/jordan2.png",
                    imgname: "jordan2.png",
                },
            ],
        },
        {
            id: 3,
            title: "Blazer",
            price: 2100.00,
            colors: [{
                    code: "lightgray",
                    img: "./img/blazer.png",
                    imgname: "blazer.png",
                },
                {
                    code: "green",
                    img: "./img/blazer2.png",
                    imgname: "blazer2.png",
                },
            ],
        },
        {
            id: 4,
            title: "Crater",
            price: 2999.00,
            colors: [{
                    code: "black",
                    img: "./img/crater.png",
                    imgname: "crater.png",
                },
                {
                    code: "lightgray",
                    img: "./img/crater2.png",
                    imgname: "crater2.png",
                },
            ],
        },
        {
            id: 5,
            title: "Hippie",
            price: 3999.00,
            colors: [{
                    code: "gray",
                    img: "./img/hippie.png",
                    imgname: "hippie.png",
                },
                {
                    code: "black",
                    img: "./img/hippie2.png",
                    imgname: "hippie2.png",
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
    const currentProductCode = document.querySelectorAll(".color");
    let currentProImg = document.querySelector(".productImg");


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
            currentProductCode.src = choosenProduct.colors[0].code;

            //assing new colors
            currentProductColors.forEach((color, index) => {
                color.style.backgroundColor = choosenProduct.colors[index].code;
            });
        });
    });

    currentProductColors.forEach((color, index) => {
        color.addEventListener("click", () => {
            currentProImg.src = choosenProduct.colors[index].img;
            currentProductCode.src = choosenProduct.colors[index].code;
            currentProductImg.src = choosenProduct.colors[index].img;
        });
    });

    let currentSize = 0;
    currentProductSizes.forEach((size, index) => {
        size.addEventListener("click", () => {
            currentProductSizes.forEach((size) => {
                size.style.backgroundColor = "white";
                size.style.color = "black";
            });
            size.style.backgroundColor = "black";
            size.style.color = "white";
            currentSize = size;
        });
    });

    const productButton = document.querySelector(".productButton");
    const payment = document.querySelector(".payment");
    const Close = document.querySelector(".close");
    const payButton = document.querySelector(".payButton");
    const cartButton = document.querySelector(".cart-icon");
    const cart = document.querySelector(".cart");
    const order = document.getElementById("order");
    // const exit = document.querySelector(".close");
    let cartCount = 0;

    productButton.addEventListener("click", () => {
        cartCount++;
        updateCartCounter(cartCount);
        let title, price, color, size, imgname;
        title = choosenProduct.title;
        price = choosenProduct.price;
        code = currentProductCode.src;
        size = currentSize.textContent;
        img = currentProImg.src;
        let product = {
            title: title,
            price: price,
            code: code,
            size: size,
            imgname: img,
        };
        // while(cartCount>0){
        let cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");
        cartItem.innerHTML = `
            <img src="${product.imgname}" alt="${product.title}" style="width:50%;margin-top:1rem;background-color:lightgray">
            <div style="position: absolute;top: 2%;right: -35px;width: 40%;padding: 46px;">
            <h1 style="font-size: 40px;" class="productTitle">${product.title}</h1>
            <h2 style="font-size: 25px;" class="productPrice">MRP:₹${product.price}</h2>
            <p>Color: ${product.code}</p>
            <p>Size: ${product.size}</p>
            </div>
            <button class="close" style="border:0" onclick="exitPay()">X</button>
            `;
        cart.appendChild(cartItem);
        alert("Item Added To Cart Sucessfully!");
        window.top.location = "index.php#nav";
        // cartCount--;
        // }
    });

    function updateCartCounter(count) {
        document.querySelector('.cart-counter').textContent = count;
    }

    cartButton.addEventListener("click", () => {
        if (cartCount == 0) {
            alert("cart is empty,Please add the products!");
            window.top.location = "index.php#product";
        } else {
            cart.style.display = "flex";
        }
    });

    function closePay() {
        payment.style.display = "none";
        window.top.location = "index.php#nav";
    }

    function exitPay() {
        cart.style.display = "none";
        window.top.location = "index.php#nav";
    }
    order.addEventListener("click", () => {
        payment.style.display = "flex";
        cart.style.display = "none";
    });
    function joinGuy(){
        document.getElementById("fInput").innerHTML=null;
        alert("Thanks for subscribing!");
    }
</script>