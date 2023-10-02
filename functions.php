<?php
    include "connect.php";
    
    function getProducts(){
        global $conn;
        $sql = "select * from `products` order by rand()";
                    $result = mysqli_query($conn,$sql);

                    while($row= mysqli_fetch_assoc($result)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        
                        echo "<div class='pro'>
                        <a href='product_details.php?product_id=$product_id'><img src='img/products/$product_image' id='$product_id'></a>
                        <div class='des'>
                            <h5>$product_title</h5>
                            <div class='star'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                            </div>
                            <h4>Rs.$product_price</h4>
                        </div>
                        <a href='products.php?add_to_cart=$product_id'><i class='fa-solid fa-cart-shopping'></i></a>
                    </div>";
                    }
    }

    function getFourProducts(){
        global $conn;
        $sql = "select * from `products` order by rand() LIMIT 0,4";
                    $result = mysqli_query($conn,$sql);

                    while($row= mysqli_fetch_assoc($result)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        
                        echo "<div class='pro'>
                        <a href='product_details.php?product_id=$product_id'><img src='img/products/$product_image' id='$product_id'></a>
                        <div class='des'>
                            <h5>$product_title</h5>
                            <div class='star'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                            </div>
                            <h4>Rs.$product_price</h4>
                        </div>
                        <a href='products.php?add_to_cart=$product_id'><i class='fa-solid fa-cart-shopping'></i></a>
                    </div>";
                    }
    }

    function getNewProducts(){
        global $conn;

        $sql = "select * from `new_products` order by rand()";
                    $result = mysqli_query($conn,$sql);

                    while($row= mysqli_fetch_assoc($result)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        
                        echo "<div class='pro'>
                        <a href='product_details.php?product_id=$product_id'><img src='img/products/$product_image' id='$product_id'></a>
                        <div class='des'>
                            <h5>$product_title</h5>
                            <div class='star'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                            </div>
                            <h4>Rs.$product_price</h4>
                        </div>
                        <a href='products.php?add_to_cart=$product_id'><i class='fa-solid fa-cart-shopping'></i></a>
                    </div>";
                    }
    }


    // search products 

    function searchProduct(){
        global $conn;

        if(isset($_GET['search_data_product'])){
        $search_data_value = $_GET['search_data'];

        $sql = "Select * from `products` where product_keyword like '%$search_data_value%'";
                    $result = mysqli_query($conn,$sql);
                    $num_rows = mysqli_num_rows($result);

                    if($num_rows == 0){
                        echo "<h3 style='color:red; text-align:center;'>Product not available in this section</h3>";
                    }

                    while($row= mysqli_fetch_assoc($result)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        
                        echo "<div class='pro'>
                        <a href='product_details.php?product_id=$product_id'><img src='img/products/$product_image' id='$product_id'></a>
                        <div class='des'>
                            <h5>$product_title</h5>
                            <div class='star'>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                                <i class='fa-solid fa-star'></i>
                            </div>
                            <h4>Rs.$product_price</h4>
                        </div>
                        <a href='products.php?add_to_cart=$product_id'><i class='fa-solid fa-cart-shopping'></i></a>
                    </div>";
                    }
    }
}

function searchNewProduct(){
    global $conn;

    if(isset($_GET['search_data_product'])){
    $search_data_value = $_GET['search_data'];

    $sql = "Select * from `new_products` where product_keyword like '%$search_data_value%'";
                $result = mysqli_query($conn,$sql);
                $num_rows = mysqli_num_rows($result);

                if($num_rows == 0){
                    echo "<h3 style='color:red; text-align:center;'>Product not available in this section</h3>";
                }

                while($row= mysqli_fetch_assoc($result)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_image=$row['product_image'];
                    $product_price=$row['product_price'];
                    
                    echo "<div class='pro'>
                    <a href='product_details.php?product_id=$product_id'><img src='img/products/$product_image' id='$product_id'></a>
                    <div class='des'>
                        <h5>$product_title</h5>
                        <div class='star'>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                            <i class='fa-solid fa-star'></i>
                        </div>
                        <h4>Rs.$product_price</h4>
                    </div>
                    <a href='products.php?add_to_cart=$product_id'><i class='fa-solid fa-cart-shopping'></i></a>
                </div>";
                }
}
}

function productDetails(){
    global $conn;

    if(isset($_GET['product_id'])){

        $product_id = $_GET['product_id'];
        $sql = "select * from `products` where product_id=$product_id";
                    $result = mysqli_query($conn,$sql);

                    while($row= mysqli_fetch_assoc($result)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        $product_description=$row['product_description'];
                        
                        echo "<div class='image'>
                        <img src='img/products/$product_image' width='100%' id='mainImg' />
                      </div>
                
                      <div class='details'>
                        <h6 id='productName'>$product_title</h6>
                        <h2 id='productPrice'>Rs.$product_price</h2>
                        <input type='number' value='1' />
                        <a href='products.php?add_to_cart=$product_id'><button>Add To Cart</button></a>
                        <h4>Product Description</h4>
                        <span id='productDescription'
                          >$product_description</span
                        >
                      </div>";
                    }
}
}

function newproductDetails(){
    global $conn;

    if(isset($_GET['product_id'])){

        $product_id = $_GET['product_id'];
        $sql = "select * from `new_products` where product_id=$product_id";
                    $result = mysqli_query($conn,$sql);

                    while($row= mysqli_fetch_assoc($result)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_image=$row['product_image'];
                        $product_price=$row['product_price'];
                        $product_description=$row['product_description'];
                        
                        echo "<div class='image'>
                        <img src='img/products/$product_image' width='100%' id='mainImg' />
                      </div>
                
                      <div class='details'>
                        <h6 id='productName'>$product_title</h6>
                        <h2 id='productPrice'>Rs.$product_price</h2>
                        <input type='number' value='1' />
                        <a href='products.php?add_to_cart=$product_id'><button>Add To Cart</button></a>
                        <h4>Product Description</h4>
                        <span id='productDescription'
                          >$product_description</span
                        >
                      </div>";
                    }
}
}

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
// $ip = getIPAddress();  
// echo 'User Real IP Address - '.$ip;  


function cart(){
    if(isset($_GET['add_to_cart'])){
        global $conn;
        $get_ip = getIPAddress();
        $get_product_id=$_GET['add_to_cart'];
        $sql = "SELECt * from `cart_details` where ip_address='$get_ip' and
        product_id=$get_product_id";
        $result = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($result);

        if($num_rows > 0){
            echo "<script>alert('This item is already present inside cart')</script>";
            echo "<script>window.open('products.php','_self')</script>";
         }else{
            $insert_query= "insert into `cart_details` (product_id,ip_address,quantity) values ($get_product_id,'$get_ip',0)";
            $result = mysqli_query($conn,$insert_query);
            echo "<script>alert('Item is added to cart')</script>";
            echo "<script>window.open('products.php','_self')</script>";
         }
    }
}
?>