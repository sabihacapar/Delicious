<?php
if (!empty($_GET["seflink"])) {
	$seflink = $DB->filter($_GET["seflink"]);
	$data = $DB->getAll("news", "WHERE seflink=? AND state=?", array($seflink, 1), "ORDER BY ID ASC", 1);
	if ($data) {

?>


		<!-- search area -->
		<div class="search-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<span class="close-btn"><i class="fas fa-window-close"></i></span>
						<div class="search-bar">
							<div class="search-bar-tablecell">
								<h3>Search For:</h3>
								<input type="text" placeholder="Keywords">
								<button type="submit">Search <i class="fas fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end search arewa -->




		<!-- breadcrumb-section -->
		<div class="breadcrumb-section breadcrumb-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="breadcrumb-text">
							<p>Haber Detayı</p>
							<h1>Çarpıcı Detaylar</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb section -->

		<!-- single article section -->
		<div class="mt-150 mb-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="single-article-section">
							<div class="single-article-text">
								<div class="single-article-img" style="width: 50%; height:auto;">
									<img src="<?= SITE ?>assets/img/products/product-img-5.jpg" alt="">
								</div>
							</div>

						</div>
					</div>
					<div class="col-lg-4">
						<div class="single-article-section">
							<div class="single-article-text">
								<p class="blog-meta">
									<span class="aut
							hor"><i class="fas fa-user"></i><?= stripslashes($data[0]["description"]) ?></span>
									<span class="date"><i class="fas fa-calendar"></i> <?= $data[0]["date"] ?></span>
								</p>
								<h2><?= stripslashes($data[0]["title"]) ?></h2>
								<p><?= stripslashes($data[0]["texts"]) ?></p>
							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

<?php
	}
}
?>