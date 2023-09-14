<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newcontroller extends Controller
{
    // public function Error(){
    //     return view("404");
    // }

    public function about(){
        return view("about-us");
    }

    // public function blogLeft(){
    //     return view("blog-left-sidebar");
    // }

    public function cart(){
        return view("cart");
    }

    public function chackOut(){
        return view("checkout");
    }

    public function compare(){
        return view("compare");
    }

    public function contact(){
        return view("contact");
    }


    //

    public function faq(){
        return view("faq");
    }

    public function homePg(){
        return view("index");
    }

    public function loginRegister(){
        return view("login-register");
    }

    public function productDetail(){
        return view("product-details");
    }

    public function shopLeft(){
        return view("shop-left-sidebar");
    }

    public function shoppingCart(){
        return view("shopping-cart");
    }

    // public function singleAffiliate(){
    //     return view("single-product-affiliate");
    // }

    // public function singleCarousal(){
    //     return view("single-product-carousel");
    // }

    // public function singleGalleryLeft(){
    //     return view("single-product-gallery-left");
    // }

    // public function singleGalleryRight(){
    //     return view("single-product-gallery-right");
    // }

    // public function singleProductGroup(){
    //     return view("single-product-group");
    // }

    // public function singleProductNormal(){
    //     return view("single-product-normal");
    // }

    // public function singleProductSale(){
    //     return view("single-product-sale");
    // }

    // public function singleProductTabLeft(){
    //     return view("single-product-tab-style-left");
    // }

    // public function singleProductTabRight(){
    //     return view("single-product-tab-style-right");
    // }

    // public function singleProductTabTop(){
    //     return view("single-product-tab-style-top");
    // }
    public function singleProduct(){
        return view("single-product");
    }
    public function wishlist(){
        return view("wishlist");
    }

}

