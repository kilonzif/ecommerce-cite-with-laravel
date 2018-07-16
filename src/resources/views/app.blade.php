<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name=description content="A medium sized e-commerce shopping cart made by David Trushkov. Made using Laravel 5.2" />
        <meta name="keywords" content="shopping, ecommerce, store, electronics, electronics store, david, david trushkov, github, laravel, laravel 5, laravel 5.2" />
        <meta name="author" content="David Trushkov" />
        <link rel="shortcut icon" href="{!! asset('/images/slider/fav-icon.png') !!}" />

        <title>E-commerce Store</title>

<style>
    @import url(https://fonts.googleapis.com/css?family=Montserrat);

html,
body {
    height: 100%;
}

a {
    text-decoration: none;
    color: black;
}

p {
    font-size: 1em;
}

.navbar {
    z-index: 10;
}

.form-control {
    height: 45px;
}

#navbar-right {
@media screen {
    @media (min-width: 100px)
    and (max-width: 768px) {
        padding-bottom: 10%;
    }
    }
}

#nav-bar-id {
    background-color: transparent;
    margin-bottom: 0;
}

.navbar .navbar-toggle .icon-bar {
    background-color: black;
}

#nav-bar-logo {
    color: black;
    font-weight: 500;
}

#nav-bar-Login {
    color: #3190e7;
    font-weight: 600;
}

#nav-bar-Experiences {
    color: black;
}

#nav-bar-Contact {
    color: black;
}

.navbar .navbar-nav > li > a {
    padding-top: 12px;
    padding-bottom: 12px;
}

#dropdwon {
    background-color: white;
    color: black;
}

.navbar .navbar-nav .open .dropdown-menu > li > a {
    color: black;
}

.dropdown-menu {
@media screen {
    @media (min-width: 100px)
    and (max-width: 989px) {
        padding-left: 3%;
        padding-right: 3%;
        margin-top: 15px;
    }
}
padding: 0;
}

#search-li {
    padding-left: 10px;
    padding-right: 20px;
}


/***** typeahead search-box *****************/


.typeahead-container {
    padding-bottom: 50px;
}

.typeahead-list {
    top: 0;
}

#typeahead-container {
    padding-bottom: 25px;
}

#typeahead-query {
@media screen {
    @media (min-width: 100px)
    and (max-width: 1024px) {
        width: 50%;
        padding-top: 10px;
    }
}
width: 80%;
padding-top: 10px;
}

#flyer-query {
    height: 40px;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
}

#Search-Btn {
    height: 40px;
    background-color: #2BBBAD;
    color: white;
    line-height: 31px;
    padding: 5px 22px;
    margin-top: 10px;
    border: 0;
    border-radius: 2px;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
    text-decoration: none;
    text-transform: uppercase;
    margin-left: 10px;
    outline: 0!important;
}


/*******************************************/

.fb-bg {
    background-color: #3B5998;
}
.tw-bg {
    background-color: #55ACEE;
}
.gplus-bg {
    background-color: #DD4B39;
}

.material-icons.md-18 { font-size: 18px; }
.material-icons.md-24 { font-size: 24px; }
.material-icons.md-36 { font-size: 36px; }
.material-icons.md-48 { font-size: 48px; }

.material-icons.arrow { color: black; }
.material-icons.edit { color: #2BBBAD; }
.material-icons.edit-white { color: white; }
.material-icons.delete { color: #CC0000; }
.material-icons.delete-white { color: white; }


.btn-link:hover {
    text-decoration: none;
}

.btn-border-primary {
    background-color: transparent;
    border: 2px solid #4285F4;
    width: 55.5px;
    height: 55.5px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    line-height: 37px;
    position: relative;
    color: white;
    padding: 0;
    padding-top: 10px;
}

.btn-border-primary:hover {
    background-color: transparent;
    border: 2px solid orange;
    width: 55.5px;
    height: 55.5px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    line-height: 37px;
    position: relative;
    color: white;
    padding: 0;
    padding-top: 10px;
}

#arrow-btn:hover {
    color: white;
}

/* Toggle Wrapper Styles */

#wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled {
    padding-left: 250px;
}

#sidebar-wrapper {
    z-index: 1000;
    position: fixed;
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}

#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}

#page-content-wrapper {
    width: 100%;
    position: absolute;
    padding: 15px;
}

#wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: -250px;
}


/************************************************ Sidebar Styles ******************************************************/


.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-nav li {
    text-indent: 20px;
    line-height: 40px;
}

.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}

.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
}

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}

.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}

.sidebar-nav > .sidebar-brand a {
    color: #999999;
}

.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }

    #wrapper.toggled {
        padding-left: 0;
    }

    #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
    }

    #page-content-wrapper {
        padding: 20px;
        position: relative;
    }

    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
    }
}

.sidebar-nav .dropdown-menu {
    position: relative;
    width: 100%;
    padding: 0;
    margin: 0;
    border-radius: 0;
    border: none;
    background-color: #222;
    box-shadow: none;
}


#dropdown-category a {
    font-size: 14px;
    color: white;
    font-weight: 300;
}

#dropdown-category a:hover {
    font-size: 14px;
    background-color:  #333;
}

#dropdown-category:hover {
    background-color: #333;
}


/**************************************************** Footer CSS ******************************************************/


footer.page-footer {
    padding-top: 20px;
    padding-bottom: 30px;
    margin-top: 0;
}
footer.page-footer a {
    line-height: 25px;
}
footer.page-footer a {
    color: #fff;
    font-size: 15px;
}













@media screen and (min-width: 100px) and (max-width: 768px) {
    #carousel1 {
        display: none;
    }
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #tf-home-m {
        background: url("/store/src/public/images/slider/main_2.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        color: #cfcfcf;
    }
}
@media screen and (min-width: 769px) and (max-width: 8000px) {
    #tf-home-m {
        display: none;
    }
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #tf-home-m .overlay {
        background: -moz-linear-gradient(top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.73) 17%, rgba(0, 0, 0, 0.66) 35%, rgba(0, 0, 0, 0.55) 62%, rgba(0, 0, 0, 0.4) 100%);
        /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(0, 0, 0, 0.8)), color-stop(17%, rgba(0, 0, 0, 0.73)), color-stop(35%, rgba(0, 0, 0, 0.66)), color-stop(62%, rgba(0, 0, 0, 0.55)), color-stop(100%, rgba(0, 0, 0, 0.4)));
        /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.73) 17%, rgba(0, 0, 0, 0.66) 35%, rgba(0, 0, 0, 0.55) 62%, rgba(0, 0, 0, 0.4) 100%);
        /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.73) 17%, rgba(0, 0, 0, 0.66) 35%, rgba(0, 0, 0, 0.55) 62%, rgba(0, 0, 0, 0.4) 100%);
        /* Opera 11.10+ */
        background: -ms-linear-gradient(top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.73) 17%, rgba(0, 0, 0, 0.66) 35%, rgba(0, 0, 0, 0.55) 62%, rgba(0, 0, 0, 0.4) 100%);
        /* IE10+ */
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.73) 17%, rgba(0, 0, 0, 0.66) 35%, rgba(0, 0, 0, 0.55) 62%, rgba(0, 0, 0, 0.4) 100%);
        /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cc000000', endColorstr='#66000000', GradientType=0);
        /* IE6-9 */
        height: 480px;
        background-attachment: fixed;
    }
}
@media screen and (min-width: 769px) and (max-width: 8000px) {
    #tf-home-m .overlay {
        display: none;
    }
}
#tf-home-m p.lead {
    color: #e3e3e3;
}
.color {
    color: orange;
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    .content {
        position: relative;
        padding: 20% 0 0;
    }
}
@media screen and (min-width: 769px) and (max-width: 8000px) {
    .content {
        display: none;
    }
}
#tf-home {
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    height: 500px;
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #tf-home {
        display: none;
    }
}
#Index-Main-Container {
    width: 100%;
    margin-left: 0;
    margin-right: 0;
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #Index-Main-Container {
        width: 100%;
        margin-left: 0;
        margin-right: 0;
    }
}
#Index-Shop-Panel-12 {
    padding-right: 0;
    padding-left: 0;
}
#Index-Shop-Panel {
    padding-right: 0;
    padding-left: 0;
}
#Index-Heading {
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    padding: 2%;
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #featured-container {
        display: none;
    }
}
@media screen and (min-width: 769px) and (max-width: 8000px) {
    #featured-container {
        height: 380px;
    }
}
#featured-product-name {
    font-weight: 400;
}
#featured-product-name-container {
    height: 75px;
}
#featured-product-price {
    font-weight: bold;
}
#featured-products-heading {
    font-family: Roboto, sans-serif;
    font-weight: 200;
    padding-bottom: 3%;
}
#featured-products-sub-container {
    padding-bottom: 3%;
    padding-top: 2%;
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #random_brands {
        padding-left: 20px;
        padding-right: 20px;
        color: white;
    }
}
@media screen and (min-width: 769px) and (max-width: 8000px) {
    #random_brands {
        display: inline;
        padding-left: 20px;
        padding-right: 20px;
        color: white;
    }
}
#random_brands a {
    color: white;
}
#brand-caption {
    padding-bottom: 120px;
}
/** FOR MOBILE VERSION **/
@media screen and (min-width: 100px) and (max-width: 768px) {
    #featured-container-m {
        height: 300px;
        border-bottom: 1px solid rgba(34, 36, 38, 0.15);
        box-shadow: 0 1px 1px 0 rgba(34, 36, 38, 0.15);
    }
}
@media screen and (min-width: 769px) and (max-width: 8000px) {
    #featured-container-m {
        display: none;
    }
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #featured-container-m:hover {
        height: 300px;
        border-bottom: 1px solid rgba(34, 36, 38, 0.15);
        box-shadow: 0 1px 1px 0 rgba(34, 36, 38, 0.15);
        background-color: whitesmoke;
    }
}
@media screen and (min-width: 769px) and (max-width: 8000px) {
    #featured-container-m:hover {
        display: none;
    }
}
#image-m {
    border: 0;
}
/**************************************************** Parallax CSS ****************************************************/
.parallax {
    padding-top: 0;
}
section {
    height: 500px;
}
#section1 {
    background-image: url("http://mdbootstrap.com/images/regular/nature/img%20(21).jpg");
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #section2 {
        display: none;
    }
}
@media screen and (min-width: 769px) and (max-width: 8000px) {
    #section2 {
        background-image: url("/store/src/public/images/slider/Brands.jpg");
    }
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #tf-home-parallax {
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        color: #cfcfcf;
    }
}
@media screen and (min-width: 769px) and (max-width: 8000px) {
    #tf-home-parallax {
        display: none;
    }
}
/** Login.blade.php **/
#Login-Register-Container {
    background: #298eea;
    padding: 0;
    margin: 0;
    height: 100%;
}
#Login-Register-Panel {
    margin-top: 15%;
    border: none;
    border-radius: 0;
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #Login-Register-Panel {
        margin-top: 0;
        border: none;
        border-radius: 0;
    }
}
#log-in {
    padding-top: 5%;
    font-weight: 300;
    color: #565656;
    margin: 0 auto 45px;
    font-size: 35px;
    line-height: 38px;
    text-transform: none;
    letter-spacing: 0;
}
#Forgot-Password {
    padding-top: 2%;
    text-decoration: none;
    font-size: 14px;
    color: grey;
    font-weight: 300;
}
#No-Account {
    color: white;
    font-weight: 400;
}
#Sign-up {
    text-decoration: underline;
    font-weight: 700;
    color: white;
}
/********************* Show Products By Category Page ******************************************************************/
#product-sub-container {
    border: 1px solid rgba(34, 36, 38, 0.15);
    box-shadow: 0 1px 2px 0 rgba(34, 36, 38, 0.15);
    margin-bottom: 9px;
    padding: 15px;
}
/********************* Show Products Details Page *********************************************************************/
.gallery_image {
    margin-bottom: .5em;
    padding: 4px;
}
#Product-Image {
    max-width: 100%;
}
#Product_Name {
    padding-top: 25px;
    font-family: Roboto, sans-serif;
    font-size: 26px;
    line-height: 34px;
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #Product_Name {
        padding-top: 25px;
        font-family: Roboto, sans-serif;
        font-size: 18px;
        line-height: 24px;
    }
}
#Product_Brand {
    font-family: Roboto, sans-serif;
    font-size: 18px;
    line-height: 34px;
}
#Product_ISBN {
    font-size: 1em;
    font-weight: 400;
}
#Product_Reduced-Price {
    font-size: 1.25em;
}
#Product_QTY {
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    border: 1px solid #ccc;
}
#Product-Description-Container {
    margin-top: 35px;
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #Product-Description-Container {
        margin-top: 45px;
        padding-top: 30px;
    }
}
#Product_Description {
    font-size: 1.1em;
    font-weight: 400;
}
#Product_Specs {
    font-size: 1.1em;
    font-weight: 400;
}
.tab-content {
    padding-top: 25px;
}
#Similar-Products-Container {
    margin-bottom: .5em;
    margin-top: 35px;
    padding: 4px;
}
@media screen and (min-width: 100px) and (max-width: 768px) {
    #Similar-Product-Sub-Container {
        padding-left: 0;
        padding-right: 0;
    }
}
#Product-similar-Image {
    max-width: 100%;
}
#Similar-Title {
    height: 70px;
    padding-top: 1.5em;
}
@media screen and (min-width: 1000px) and (max-width: 1200px) {
    #Similar-Title {
        height: 80px;
        padding-top: 1.5em;
    }
}
#comments-container {
    background-color: #fafafa;
    margin-top: 20px;
}
/******************************** Show Carts Page *********************************************************************/
#Cart-Products-Container {
    padding: 15px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-bottom: 5px;
    -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
#Cart-Products-Container:hover {
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-bottom: 5px;
    -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 15px;
    opacity: 0.9;
    background-color: whitesmoke;
}
@media screen and (min-width: 100px) and (max-width: 500px) {
    #Carts-Sub-Containers {
        padding-top: 10%;
    }
}
@media screen and (min-width: 501px) and (max-width: 969px) {
    #Carts-Sub-Containers {
        padding-top: 5%;
    }
}
#Product_Reduced-Price-Cart {
    font-size: 1em;
}
#Cart_Totals_Container {
    margin-left: 0;
    margin-right: 0;
    border: 1px solid #ddd;
    padding: 15px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-bottom: 5px;
    -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
/*********************************** Show Checkout Page ***************************************************************/
#Checkout-Shipping-Payment-Container {
    padding: 15px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-bottom: 5px;
    -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}
#Checkout-Shipping-Payment-Container:hover {
    padding: 15px;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    margin-bottom: 5px;
    -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    opacity: 0.9;
    background-color: whitesmoke;
}
/*********************************** Profile Page *********************************************************************/
#accordion-group {
    display: block;
    background-color: whitesmoke;
    padding: 10px;
}

</style>





        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Bootstrap core mdb.css -->
        <link rel="stylesheet" href="{{ asset('css/mdb.css') }}">
        <!-- Include app.less file -->
        <link rel="stylesheet" href="{{ asset('less/app.less') }}">
        <!-- Include app.scss file -->
        <link rel="stylesheet" href="{{ asset('sass/app.scss') }}">
        <!-- Include sweet alert file -->
        <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
        <!-- Include typeahead file -->
        <link rel="stylesheet" href="{{ asset('css/typeahead.css') }}">
        <!-- Include lity ligh-tbox file -->
        <link rel="stylesheet" href="{{ asset('css/lity.css') }}">
        
        <!-- Added the main.css file that combines app.scss and app.css togather -->
        <link rel="stylesheet" href="{{ asset('./css/main.css') }}">
        
        
        <!-- Material Design Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <!-- Font Awesome -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" >

        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-76800406-1', 'auto');
            ga('send', 'pageview');
        </script>

    </head>
<body>

    @include('partials.nav')

    @yield('content')

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/libs/jquery.js') }}"></script>
    <!-- Include main app.js file -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/libs/mdb.js') }}"></script>
    <!-- Include sweet-alert.js file -->
    <script type="text/javascript" src="{{ asset('js/libs/sweetalert.js') }}"></script>
    <!-- Include typeahead.js file -->
    <script type="application/javascript" src="{{ asset('js/libs/typeahead.js') }}"></script>
    <!-- Include lity light-box js file -->
    <script type="application/javascript" src="{{ asset('js/libs/lity.js') }}"></script>
    <!-- Stripe.js file -->
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script>
        (function(w,d,s,g,js,fs){
            g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
            js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
            js.src='https://apis.google.com/js/platform.js';
            fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
        }(window,document,'script'));
    </script>
    <script>
        gapi.analytics.ready(function() {
            /**
             * Authorize the user immediately if the user has already granted access.
             * If no access has been created, render an authorize button inside the
             * element with the ID "embed-api-auth-container".
             */
            gapi.analytics.auth.authorize({
                container: 'embed-api-auth-container',
                clientid: 'YOUR CLIENT ID'
            });
            /**
             * Create a new ViewSelector instance to be rendered inside of an
             * element with the id "view-selector-container".
             */
            var viewSelector = new gapi.analytics.ViewSelector({
                container: 'view-selector-container'
            });
            // Render the view selector to the page.
            viewSelector.execute();
            /**
             * Create a new DataChart instance with the given query parameters
             * and Google chart options. It will be rendered inside an element
             * with the id "chart-container".
             */
            var dataChart = new gapi.analytics.googleCharts.DataChart({
                query: {
                    metrics: 'ga:sessions',
                    dimensions: 'ga:date',
                    'start-date': '30daysAgo',
                    'end-date': 'yesterday'
                },
                chart: {
                    container: 'chart-container',
                    type: 'LINE',
                    options: {
                        width: '100%'
                    }
                }
            });
            /**
             * Render the dataChart on the page whenever a new view is selected.
             */
            viewSelector.on('change', function(ids) {
                dataChart.set({query: {ids: ids}}).execute();
            });
        });
    </script>
    <script>
        // your publish key
        Stripe.setPublishableKey('YOUR STRIPE PUBLISHABLE KEY');
        //
        jQuery(function($) {
            $('#payment-form').submit(function(event) {
                var $form = $(this);
                // Disable the submit button to prevent repeated clicks
                $form.find($('.btn')).prop('disabled', true);
                Stripe.card.createToken($form, stripeResponseHandler);
                // Prevent the form from submitting with the default action
                return false;
            });
        });
        function stripeResponseHandler(status, response) {
            var $form = $('#payment-form');
            if (response.error) {
                // Show the errors on the form
                $form.find('.payment-errors').text(response.error.message);
                $form.find('.payment-errors').removeClass("hidden");
                $form.find($('.btn')).prop('disabled', false);
            } else {
                // response contains id and card, which contains additional card details
                var token = response.id;
                // Insert the token into the form so it gets submitted to the server
                $form.append($('<input type="hidden" name="stripeToken" />').val(token));
                // and submit
                $form.get(0).submit();
            }
        }
    </script>
    <script>
        $('#flyer-query').typeahead({
            minLength: 2,
            source: {
                data: [
                    @foreach($search as $query)
                         "{{ $query->product_name }}",
                    @endforeach
                ]
            }
        });
    </script>
    <script>
        new WOW().init();
    </script>

    @include('partials.flash')

</body>
</html>
