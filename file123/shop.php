<?php
session_start();

if (isset($_POST["add_to_cart"])) {
	$product_id = $_POST["product_id"];
	$product_quantity = $_POST["product_quantity"];
	if (!isset($_SESSION["cart"])) {
		$_SESSION["cart"] = [];
		header("location:cart.php");
	}
	$_SESSION["cart"][$product_id] = $product_quantity;
	header("location:cart.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>A to Z</title>
		<link rel="stylesheet"
				href="shop.css">
	</head>
	<body>
		<header>
			<h1>Welcome <?php
			$user = $_SESSION["user"];
			echo $user["name"];
			?> to A to Z Shopping Web Application</h1>
		</header>
		<nav>
			<ul>
				<li><a href="shop.php">Home</a></li>
				<li><a href="cart.php">Cart</a></li>
				<li><a href="logout.php">Logout</a></li>

			</ul>
		</nav>
		<main>
			<section>
				<h2>Products</h2>
				<ul>
					<li>
						<h3>Tom shirt</h3>
						<img src=
"https://prod-img.thesouledstore.com/public/theSoul/uploads/catalog/product/1687842433_3385347.jpg?w=480&dpr=1.3"
							alt="Product 1">
						<p>High quality pure 100% cotton T-shirt</p>
						<p><span>Rs 400</span></p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="1">
							<label for="product1_quantity">
								Quantity:
							</label>
							<input type="number"
								id="product1_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Add to Cart</button>
						</form>
					</li>
					<li>
						<h3>Fashion Shirt</h3>
						<img src=
"https://rukminim1.flixcart.com/image/612/612/xif0q/t-shirt/y/t/k/xxs-t653-cgblwh-eyebogler-original-imaghyjv7kppbqxb.jpeg?q=70"
							alt="Product 2">
						<p>100% cotton t-shirts gives stylish look</p>
						<p>
							<span>Rs 420</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="2">
							<label for="product2_quantity">
								Quantity:
							</label>
							<input type="number"
								id="product2_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Add to Cart
						</button>
						</form>
					</li>
					<li>
						<h3>Combo T-shirt</h3>
						<img src=
"https://cdn.shopaccino.com/feranoid/categories/funky-t-shirts-banner-mobile-view-546324_m.jpg?v=476"
							alt="Product 3">
						<p>Set of 4 stylish good quality material T-shirts</p>
						<p>
							<span>Rs 1200</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="3">
							<label for="product3_quantity">
								Quantity:
							</label>
							<input type="number"
								id="product3_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Add to Cart
							</button>
						</form>
					</li>
					<li>
						<h3>AtoZ Exclusive Earpods</h3>
						<img src=
"https://www.jiomart.com/images/product/original/rvmowngzft/karimotech-i12-tws-bluetooth-earphone-touch-control-headphone-wireless-headset-earbud-white-product-images-orvmowngzft-p599113985-0-202303070928.jpg?im=Resize=(420,420)"
							alt="Product 3">
						<p>White colour good base earpods</p>
						<p>
							<span>Rs 1300</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="4">
							<label for="product3_quantity">
								Quantity:
							</label>
							<input type="number"
								id="product4_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Add to Cart
							</button>
						</form>
                    </li>	
					<li>
						<h3>AtoZ Limited edition Goggles</h3>
						<img src=
"https://static5.lenskart.com/media/catalog/product/pro/1/thumbnail/628x301/9df78eab33525d08d6e5fb8d27136e95//v/i/gunmetal-blue-full-rim-round-vincent-chase-the-metal-edit-vc-s13137-c3-sunglasses_vincent-chase-vc-s13137-c3-c3-sunglasses_sunglasses_g_8710_5july23.jpg"
							alt="Product 3">
						<p>Black Color Stylish Goggles with unbreakable glasses</p>
						<p>
							<span>Rs 2000</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="5">
							<label for="product3_quantity">
								Quantity:
							</label>
							<input type="number"
								id="product5_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Add to Cart
							</button>
						</form>
                    </li>
					<li>
						<h3>Man Office Bag</h3>
						<img src=
"https://5.imimg.com/data5/IN/BC/RC/SELLER-9041839/jeep-buluo-man-leather-messenger-bag-male-cross-body-shoulder-business-bags-for-men-500x500.jpg"
							alt="Product 3">
						<p>bage with 5 pockets and real finish work</p>
						<p>
							<span>Rs 1800</span>
						</p>

						<form method="post" action="shop.php">
							<input type="hidden"
								name="product_id"
								value="6">
							<label for="product3_quantity">
								Quantity:
							</label>
							<input type="number"
								id="product6_quantity"
								name="product_quantity"
								value=""
								min="0"
								max="10">
							<button type="submit"
									name="add_to_cart">
								Add to Cart
							</button>
						</form>
                    </li>
				</ul>
			</section>
		</main>
		<footer>
			<p>&copy; 2023 AtoZ Shopping Web Application</p>
		</footer>
		<script src="shop.php"></script>
	</body>
</html>
