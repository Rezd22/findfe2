<div class="container p-4">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Menu of <?php echo $res['name']; ?></h1>
        </div>
    </div>
    <div class="container res-card">
        <div class="card">
            <?php $img = $res['img']; ?>
            <img src="<?php echo base_url() . 'public/uploads/toko/thumb/' . $img; ?>" class="card-img-top" />
            <div class="card-body">
                <h4 class="card-title font-weight-bold text-primary"><?php echo $res['name']; ?></h4>
                <p class="card-text lead"><?php echo $res['address']; ?></p>
                <p class="card-text">
                    Hidangan di buat oleh koki yang berpengalaman
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container p-4 kopi-card">
    <div class="row">
        <?php if (!empty($kopiesh)) { ?>
            <?php foreach ($kopiesh as $kopi) { ?>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
                    <div class="card mb-4 shadow-sm">
                        <?php $image = $kopi['img']; ?>
                        <img class="card-img-top" src="<?php echo base_url() . 'public/uploads/kopiesh/thumb/' . $image; ?>">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title"><?php echo $kopi['name']; ?></h4>
                                <h4 class="text-muted"><b>$<?php echo $kopi['price']; ?></b></h4>
                            </div>
                            <p class="card-text"><?php echo $kopi['about']; ?></p>
                            <a href="<?php echo base_url() . 'kopi/addToCart/' . $kopi['d_id']; ?>" class="btn btn-primary"><i class="fas fa-shopping-cart"></i> Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="jumbotron">
                <h1>No records found</h1>
            </div>
        <?php } ?>
    </div>
    <hr class="my-4">
</div>