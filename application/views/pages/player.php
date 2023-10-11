<!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <ul class="breadcrumbs">
                            <li><a href="<?php echo BASE_URL; ?>">Beranda</a>/</li>
                            <li>Pemain</li>
                        </ul>
                        <h1>Pemain</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->

<!--CLUB STAFF TOP BEGIN-->

<div class="club-staff-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Kiper</h4>
            </div>
            <div class="staff-box">            
                <?php if(isset($player['GOALKEEPER'])) : ?>
                    <?php foreach($player['GOALKEEPER'] AS $row) : ?>
                    <div class="col-md-4  col-sm-6 col-xs-12">
                        <a href="<?php echo BASE_URL; ?>player/<?php echo $row->id; ?>" class="item">
                            <span class="info">
                                <span class="name"><?php echo $row->name; ?></span>
                                <span class="position"><?php echo $row->type_position; ?></span>
                                <span class="number"><?php echo $row->jersey_number; ?></span>
                            </span>
                            <img src="<?php echo ASSET_PATH; ?>images/player/player-no-image.jpg" alt="player">
                        </a>
                    </div>  
                    <?php endforeach; ?>
                <?php endif; ?>          
            </div>

            <div class="col-md-12">
                <h4>Pemain Belakang</h4>
            </div>
            <div class="staff-box">            
                <?php if(isset($player['DEFENDER'])) : ?>
                    <?php foreach($player['DEFENDER'] AS $row) : ?>
                    <div class="col-md-4  col-sm-6 col-xs-12">
                        <a href="<?php echo BASE_URL; ?>player/<?php echo $row->id; ?>" class="item">
                            <span class="info">
                                <span class="name"><?php echo $row->name; ?></span>
                                <span class="position"><?php echo $row->type_position; ?></span>
                                <span class="number"><?php echo $row->jersey_number; ?></span>
                            </span>
                            <img src="<?php echo ASSET_PATH; ?>images/player/player-no-image.jpg" alt="player">
                        </a>
                    </div>  
                    <?php endforeach; ?>
                <?php endif; ?>            
            </div>

            <div class="col-md-12">
                <h4>Pemain Tengah</h4>
            </div>
            <div class="staff-box">   
                <?php if(isset($player['MIDFIELDER'])) : ?>
                    <?php foreach($player['MIDFIELDER'] AS $row) : ?>
                    <div class="col-md-4  col-sm-6 col-xs-12">
                        <a href="<?php echo BASE_URL; ?>player/<?php echo $row->id; ?>" class="item">
                            <span class="info">
                                <span class="name"><?php echo $row->name; ?></span>
                                <span class="position"><?php echo $row->type_position; ?></span>
                                <span class="number"><?php echo $row->jersey_number; ?></span>
                            </span>
                            <img src="<?php echo ASSET_PATH; ?>images/player/player-no-image.jpg" alt="player">
                        </a>
                    </div>  
                    <?php endforeach; ?>
                <?php endif; ?>          
            </div>

            <div class="col-md-12">
                <h4>Pemain Depan</h4>
            </div>
            <div class="staff-box">            
                <?php if(isset($player['FORWARD'])) : ?>
                    <?php foreach($player['FORWARD'] AS $row) : ?>
                    <div class="col-md-4  col-sm-6 col-xs-12">
                        <a href="<?php echo BASE_URL; ?>player/<?php echo $row->id; ?>" class="item">
                            <span class="info">
                                <span class="name"><?php echo $row->name; ?></span>
                                <span class="position"><?php echo $row->type_position; ?></span>
                                <span class="number"><?php echo $row->jersey_number; ?></span>
                            </span>
                            <img src="<?php echo ASSET_PATH; ?>images/player/player-no-image.jpg" alt="player">
                        </a>
                    </div>  
                    <?php endforeach; ?>
                <?php endif; ?>            
            </div>
        </div>
    </div>
</div>
<!--CLUB STAFF TOP END-->