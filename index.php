<?php 
include __DIR__.'/database.php';

include __DIR__.'./partials/header.php';
// var_dump (__DIR__);
?>

    <main class="container"> 
        <div class="row">
            <?php foreach($discs as $disc){?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $disc['title'] ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div> 
    </main>



    
</body>
</html>