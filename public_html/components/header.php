<?php ?>
<script src = "js/homepage.js"></script>
<ul id = "heading_ul">
    <li id = "header_li"><a class = "active1" href = "index.php">Home</a></li>
    <li id = "header_li"><a class = "active2" href = "aboutUs.php">About Us</a></li>
    <li id = "header_li"><a class = "active3" href = "myAccount.php">My Account</a></li>
    <li id = "header_li"><a class = "active4" href = "feedBack.php">Rate Us</a></li>
    <li id = "header_li"><a class = "active5" href = "Contact.php">Contact Us</a></li>
    <li class = "lg"><a href = "components/logout.php">Log out</a></li>
    <li class = "profile"><a href = "myAccount.php"><label><?php echo $_SESSION['username']?></label></a></li>
</ul>


<div class = "header1">
    <img src = "images/ico4.png" width = "200" height = "200" alt = "icon">

    <label class = "topic">GIFT BAY</label>
    <table style = "float : right; padding : 4% 0px 0px 1%;">
        <tr><td><a href = "myCart.html" style = "text-decoration: none; color: white;">My cart</a> &nbsp;&nbsp;&nbsp;</td></tr>
        <tr><td><label id = "no_items"></label>&nbsp;<label id = "item">Empty</label></td></tr>
    </table>
    <i class="fa fa-shopping-cart" style="font-size:75px; color:white; float: right; margin-top: 3%;"></i>
</div>
<div class="navbar">
    <div class = "dropDown">
        <button class = "dropDownbtn">All Categories</button>
        <div class = "dropDown-content">
            <a href = "baskets.html">Gift Baskets</a>
            <a href = "forher.html">Gift For Her</a>
            <a href = "forhim.html">Gift For Him</a>
            <a href = "books.html">Books</a>
            <a href = "chocolates.html">Chocolates</a>
            <a href = "Electronics.html">Electronics</a>
            <a href = "Perfumes.html">Perfume</a>
            <a href = "vouchers.html">Gift Vouchers</a>
            <a href = "teddys.html">Teddy bears</a>
            <a href = "clothes.html">Clothes</a>
            <a href = "jewelry.html">Jewelry</a>
            <a href = "specialdays.html">Fathers Day Gifts</a>
            <a href = "cakes.html">Cakes</a>
        </div>
    </div>
    <div class = "right position">
        <input class="search" tyoe = "text" placeholder="Search..">
    </div>
</div>