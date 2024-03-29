<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- <link rel="icon" href="img/fav-icon.png" type="image/x-icon" /> -->
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Suno - Shop</title>

        <!-- Icon css link -->
        <?php include('include/css.php') ?>
    </head>
    <body>
        
        <!--================Main Header Area =================-->
		<header class="main_header_area">
            <!-- header-top start -->
			<?php include('include/header-top.php') ?>
			<!-- header-top End -->
            <!-- navbar start -->
            <?php include('include/navbar7.php') ?>
            <!-- navbar end -->
		</header>
        <!--================End Main Header Area =================-->
        
        <!--================End Main Header Area =================-->
        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Shop</h3>
        			<ul>
        				<li><a href="index.html">Home</a></li>
        				<li><a href="shop.html">Shop</a></li>
        			</ul>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Product Area =================-->
        <section class="product_area p_100">
        	<div class="container">
        		<div class="row product_inner_row">
        			<div class="col-lg-9">
        				<div class="row m0 product_task_bar"> 
							<div class="product_task_inner"> 
								<div class="float-left">
									<a class="active" href="#"><i class="fa fa-th-large" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
									<span>Showing 1 - 10 of 55 results</span>
								</div>
								<div class="float-right">
									<h4>Sort by :</h4>
									<select class="short">
										<option data-display="Default">Default</option>
										<option value="1">Default</option>
										<option value="2">Default</option>
										<option value="4">Default</option>
									</select>
								</div>
							</div>
        				</div>
        				<div class="row product_item_inner">
                            <?php foreach ($data as $row): ?>
                                <div class="col-lg-4 col-md-4 col-6">
                                <div class="cake_feature_item">
                                    <div class="cake_img">
                                        <img src="<?php echo base_url('image/'.$row->anh_san_pham) ?>" width="270px" alt="">
                                    </div>
                                    <div class="cake_text">
                                        <h4><?php echo $row->gia_moi; ?></h4>
                                        <a href="product_detail?id=<?php echo $row->id_san_pham; ?>&pl=<?php echo $row->id_loai_san_pham; ?>"><h3><?php echo $row->ten_san_pham; ?></h3></a>
                                        <a class="pest_btn" href="insert/<?php echo $row->id_san_pham; ?>">Thêm giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
        				</div>
        				<div class="product_pagination">
        					<div class="left_btn">
        						<a href="#"><i class="lnr lnr-arrow-left"></i> New posts</a>
        					</div>
        					<div class="middle_list">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">...</a></li>
									<li class="page-item"><a class="page-link" href="#">12</a></li>
									</ul>
								</nav>
        					</div>
        					<div class="right_btn"><a href="#">Older posts <i class="lnr lnr-arrow-right"></i></a></div>
        				</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="product_left_sidebar">
        					<aside class="left_sidebar search_widget">
        						<div class="input-group">
                                    <form action="search" method="POST">
    									<input type="text" name="search_key"  class="form-control" placeholder="Nhập từ khóa">
    									<div class="input-group-append">
    										<button class="btn" type="button"><i class="icon icon-Search"></i></button>
    									</div>
                                    </form>
								</div>
        					</aside>
        					<aside class="left_sidebar p_catgories_widget">
        						<div class="p_w_title">
        							<h3>Product Categories</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Cupcake (17)</a></li>
        							<li><a href="#">Chocolate (15)</a></li>
        							<li><a href="#">Celebration (14)</a></li>
        							<li><a href="#">Wedding Cake (8)</a></li>
        							<li><a href="#">Desserts (11)</a></li>
        						</ul>
        					</aside>
        					<aside class="left_sidebar p_price_widget">
        						<div class="p_w_title">
        							<h3>Filter By Price</h3>
        						</div>
        						<div class="filter_price">
									<div id="slider-range"></div>
       								<label for="amount">Price range:</label>
									<input type="text" id="amount" readonly />
       								<a href="#">Filter</a>
        						</div>
        					</aside>
        					<aside class="left_sidebar p_sale_widget">
        						<div class="p_w_title">
        							<h3>Top Sale Products</h3>
        						</div>
                                <?php foreach ($sale as $key): ?>
                                    <div class="media">
                                    <div class="d-flex">
                                        <img src="<?php echo base_url('image/'.$row->anh_san_pham) ?>" width="104px" alt="">
                                    </div>
                                    <div class="media-body">
                                        <a href="product_detail?id=<?php echo $row->id_san_pham; ?>&pl=<?php echo $row->id_loai_san_pham; ?>"><?php echo $row->ten_san_pham; ?></h4></a>
                                        <ul class="list_style">
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                        </ul>
                                        <h5><?php echo $row->gia_moi; ?> VNĐ</h5>
                                    </div>
                                </div>
                                <?php endforeach ?>
        						
        					</aside>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Product Area =================-->
        
        <!--================Newsletter Area =================-->
        <!--================Newsletter Area =================-->
        <?php include('include/newsletter.php') ?>
        <!--================End Newsletter Area =================-->
        
        <!--================Footer Area =================-->
        <?php include('include/footer.php') ?>
        <!--================End Footer Area =================-->
        
        
        <!--================Search Box Area =================-->
        <?php include('include/Search.php') ?>
    </body>

</html>