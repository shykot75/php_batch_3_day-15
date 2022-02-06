<?php include('header.php'); ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <?php foreach($products as $product) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <form action="action.php" method="POST">
                            <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" />
                            <div class="card-body">
                                <h3 class="=card-title"><?php echo  $product['title']; ?></h3>
                                <hr>
                                <p class="card-text"><?php echo  $product['description']; ?></p>
                                <p class="=card-text"><?php echo  $product['price']; ?></p>
                                <p class="=card-text"><?php echo  $product['id']; ?></p>
                                <hr>
                                <a href="" class="btn btn-outline-warning float-right"><?php echo  $product['category']; ?></a>
<!--                                <input type="submit" name="details" value="Details" class="btn btn-outline-danger" />-->

                                <a href="action.php?pages=product-details&&id=<?php echo  $product['id']; ?>" class="btn btn-outline-success">Details</a>
                            </div>
                        </form>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>


<?php include('footer.php'); ?>
