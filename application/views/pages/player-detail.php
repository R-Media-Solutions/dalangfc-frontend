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

<!--PLAYER SINGLE WRAP BEGIN-->

<section class="player-single-wrap">
    <div class="container">
        <?php foreach($player AS $row) : ?>
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="captain-bage">Captain</div> -->
                <h4 class="player-name"><?php echo $row->type_position; ?></h4>
            </div>
            <div class="col-md-6">
                <div class="player-photo">
                    <div class="number"><?php echo $row->jersey_number; ?></div>
                    <?php if(empty($row->photo)) : ?>
                    <img class="img-responsive" src="<?php echo ASSET_PATH; ?>/images/player/player-no-image.jpg" alt="player">
                    <?php else : ?>
                    <img class="img-responsive" src="https://admindfc.rmediasolutionsid.com/anassets/upload/profile/<?php echo $row->photo; ?>" alt="player">
                    <?php endif; ?>
                </div>
                <h6>Deskripsi</h6>
                <p>-</p>
            </div>
            <div class="col-md-6">
                <div class="player-info">
                    <h6 class="player-info-title">Ringkasan</h6>	
                    <div class="summary">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="item">Kebangsaaan</div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">Indonesia</div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="item">Posisi</div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9"><?php echo $row->type_position; ?></div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <div class="item">Umur</div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-9">-</div>
                        </div>
                    </div>
                    <h6>Sejarah Klub</h6>
                    <div class="overflow-scroll">
                        <table>
                            <tr>
                                <th>Sesi</th>
                                <th class="club">Klub</th>
                                <th>Bermain</th>
                                <th>Goal</th>
                            </tr>
                            <tr>
                                <td>2023 - Sekarang</td>
                                <td class="club"><img src="<?php echo ASSET_PATH; ?>images/logo/logo_128.png" width="30" height="30" alt="trophy">DALANG FC BOGOR</td>
                                <td>3</td>
                                <td><span>0</span></td>
                            </tr>
                        </table>
                    </div>
                    <h6>Piala</h6>
                    <ul class="player-trophey">
                        <li>
                            <img src="<?php echo ASSET_PATH; ?>images/common/am-trophey1.png" width="100" height="150" alt="trophy">
                            <div class="year">2012</div>
                        </li>
                        <li>
                            <img src="<?php echo ASSET_PATH; ?>images/common/am-trophey.png" width="100" height="150" alt="trophy">
                            <div class="year">2015</div>
                        </li>
                        <li>
                            <img src="<?php echo ASSET_PATH; ?>images/common/am-trophey2.png" width="100" height="150" alt="trophy">
                            <div class="year">2017</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!--PLAYER SINGLE WRAP END-->