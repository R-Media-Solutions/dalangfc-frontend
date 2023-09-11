<!--BREADCRUMBS BEGIN-->
<section class="image-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info">
                    <div class="wrap">
                        <ul class="breadcrumbs">
                            <li><a href="<?php echo BASE_URL; ?>">Beranda</a>/</li>
                            <li>Statistik Klub</li>
                        </ul>
                        <h1>Statistik Klub</h1>
                    </div>
                </div>
            </div>	
        </div>
    </div>
</section>
<!--BREADCRUMBS END-->

    <!--IMAGE HEADER END-->

    <!--CLUB WRAP BEGIN-->

    <section class="club-wrap">
        <div class="container">
            <div class="row row-eq-height">
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <h4>Internacional club</h4>
                    <ul class="tab-filters">
                        <li class="active"><a href="#all">All</a></li>
                        <li><a href="#nationalcup">National cup</a></li>
                        <li><a href="#premierleague">Premier league</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <a href="broadcasts.html" class="btn small club-top-btn">Broadcasts</a>
                </div>
            </div>
        </div>
        <div class="club-top-info">
            <div class="organisation-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="club-logo  wpb_animate_when_almost_visible wpb_zoomInLeft zoomInLeft wpb_start_animation animated">
                    <img class="img-responsive" src="<?php echo ASSET_PATH; ?>images/soccer/champ-logo.png" alt="organisation logo" >                
                </div>
            </div>
            <div class="col-md-3">
                <div class="org-club-info">
                                        <div class="item country">
                        <img src="<?php echo ASSET_PATH; ?>images/common/en-flag.png" alt="flag">
                        Italy                    </div>
                                        
                    <div class="item"><span>Founded:</span> 22 July 1927</div>
                    <div class="item"><span>Ground:</span> Stadio Olimpico</div>
                    <div class="item"><span>President:</span> James Pallotta</div>
                    <div class="item"><span>Head coach:</span> Luciano Spalletti</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="org-club-stat">
                    <div class="title">next opponent</div>
                    <div class="next">
                        <div class="avatar">
                            <a href="matches.html" title="Athleticos Bilbor – AC Ramau">
                                <img src="<?php echo ASSET_PATH; ?>images/common/main-match-icon1.png"  alt="oponent logo"> 
                            </a>
                        </div>
                        <div class="info">
                            <div class="name">Athleticos Bilbor</div>
                            <div class="date">18 July 2017 / 17:00 UTC</div>
                        </div>
                    </div>
                    <div class="title">team stats</div>
                    <div class="circle-item">
                        <div class="circle-bar" id="circle_3" data-percent="47"></div>
                        <div class="text">Possession </div>
                    </div>
                    <div class="circle-item">
                        <div class="circle-bar" id="circle_4" data-percent="87"></div>
                        <div class="text">Pass Accuracy </div>
                    </div>             
                </div>
            </div>
        </div>	
    </div>	
</div>
        </div>
    </section>

    <!--CLUB WRAP END-->

    <!--MAIN BREAKING NEWS BEGIN-->
<div class="main-breaking-news">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-12">
                <div class="break-title"><span>Breaking news</span></div>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-12">
                <div id="main-breaking-list" class="carousel slide main-breaking-list" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="news-single.html">
                                <span class="date">20 Sep 2016 <span>/</span></span>	
                                <span class="news"><img src="<?php echo ASSET_PATH; ?>images/common/news-youtube-icon.png" alt="news-youtube">Revenge is sweet: Great matchday four recoveries</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="news-single.html">
                                <span class="date">22 Sep 2016 <span>/</span></span>	
                                <span class="news">Revenge is sweet: Great matchday four recoveries</span>
                            </a>
                        </div>
                    </div>	
                    <div class="arrow-wrap">
                        <!-- Controls -->
                        <a class="nav-arrow left-arrow" href="#main-breaking-list" role="button" data-slide="prev">
                            <i class="fa fa-caret-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="nav-arrow right-arrow" href="#main-breaking-list" role="button" data-slide="next">
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--MAIN BREAKING NEWS END-->

    <!--CLUB MAIN STAT BEGIN-->
<section class="club-main-stat">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6>Last match</h6>
                <div class="last-match">
                    <div class="team">
                        <a href="about-club.html"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo1.png" width="40" height="40" alt="team-logo"></a>
                        <a href="about-club.html" class="name">Team 1</a>
                    </div>
                    <div class="score"><span>2</span>:<span>0</span></div>
                    <div class="team right">
                        <a href="about-club.html" class="name">Team 2</a>
                        <a href="about-club.html"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo2.png" width="40" height="40" alt="team-logo"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <h6>Standings</h6>
                <div class="club-standings overflow-scroll">
                    <table class="table-standings">
                        <tr>
                            <th>Club</th>
                            <th>Win</th>
                            <th>Los</th>
                            <th>pts</th>
                        </tr>
                        <tr>
                            <td class="up">
                                <i class="fa fa-caret-up" aria-hidden="true"></i> 1 <span class="team"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo2.png" width="30" height="30" alt="team-logo"></span> <span>Team 1</span></td>
                            <td>11</td>
                            <td>2</td>
                            <td><span>62</span></td>
                        </tr>
                        <tr>
                            <td class="down">
                                <i class="fa fa-caret-down" aria-hidden="true"></i> 2 <span class="team"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo3.png" width="30" height="30" alt="team-logo"></span> <span>Team 2</span></td>
                            <td>11</td>
                            <td>2</td>
                            <td><span>62</span></td>
                        </tr>
                        <tr>
                            <td class="none">
                                <i class="fa fa-circle" aria-hidden="true"></i> 3 <span class="team"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo4.png" width="30" height="30" alt="team-logo"></span> <span>Team 3</span></td>
                            <td>11</td>
                            <td>2</td>
                            <td><span>62</span></td>
                        </tr>
                        <tr>
                            <td class="down">
                                <i class="fa fa-caret-down" aria-hidden="true"></i> 4 <span class="team"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo5.png" width="30" height="30" alt="team-logo"></span> <span>Team 4</span></td>
                            <td>11</td>
                            <td>2</td>
                            <td><span>62</span></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <h6>Attacks per game </h6>	
                <div class="ct-chart" id="attack-per-game"></div>
            </div>
            <div class="col-md-12">
                <h6>tournament path</h6>
                <div class="ct-chart" id="tournament-path"></div>
            </div>
            <div class="col-md-12"><h6>Last five matches</h6></div>
            <div class="col-md-12 overflow-scroll">

                <table>
                    <tr>
                        <th>competitor</th>
                        <th>gp</th>
                        <th>gs</th>
                        <th>min</th>
                        <th>fgm-a</th>
                        <th>fg%</th>
                        <th>3pm-a</th>
                        <th>3p%</th>
                        <th>om</th>
                        <th>or</th>
                        <th>to</th>
                        <th>pts</th>
                    </tr>
                    <tr>
                        <td>
                            <span class="team"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo1.png" width="30" height="30" alt="team-logo"></span>
                            <span>Team 1</span>
                        </td>
                        <td>2</td>
                        <td>55</td>
                        <td>62</td>
                        <td>5</td>
                        <td>0</td>
                        <td>8</td>
                        <td>89</td>
                        <td>7</td>
                        <td>2</td>
                        <td>2</td>
                        <td><span>12</span></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="team"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo2.png" width="30" height="30" alt="team-logo"></span>
                            <span>Team 2</span>
                        </td>
                        <td>2</td>
                        <td>55</td>
                        <td>62</td>
                        <td>5</td>
                        <td>0</td>
                        <td>8</td>
                        <td>89</td>
                        <td>7</td>
                        <td>2</td>
                        <td>2</td>
                        <td><span>12</span></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="team"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo3.png" width="30" height="30" alt="team-logo"></span>
                            <span>Team 3</span>
                        </td>
                        <td>2</td>
                        <td>55</td>
                        <td>62</td>
                        <td>5</td>
                        <td>0</td>
                        <td>8</td>
                        <td>89</td>
                        <td>7</td>
                        <td>2</td>
                        <td>2</td>
                        <td><span>12</span></td>
                    </tr>
                    <tr>
                        <td>
                            <span class="team"><img src="<?php echo ASSET_PATH; ?>images/soccer/team-logo4.png" width="30" height="30" alt="team-logo"></span>
                            <span>Team 4</span>
                        </td>
                        <td>2</td>
                        <td>55</td>
                        <td>62</td>
                        <td>5</td>
                        <td>0</td>
                        <td>8</td>
                        <td>89</td>
                        <td>7</td>
                        <td>2</td>
                        <td>2</td>
                        <td><span>12</span></td>
                    </tr>
                </table>

            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <p>Pabst irony tattooed, synth sriracha selvage pok pok. Wayfarers kinfolk sartorial, helvetica you probably haven't heard of them tumeric venmo deep v mixtape semiotics brunch.</p>
                <div class="col-md-6">
                    <h6>Salary cap</h6>
                    <div class="canvas-minutes-big">
                        <div class="ct-chart" id="stackedbar" ></div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <h6>Main investors</h6>
                        <div class="canvas-investors">
                            <div class="ct-chart" id="gaugechart" ></div>
                        </div>
                    </div>

                </div>



                <h6>Raitings</h6>
                <div class="canvas-minutes-big" >
                    <div class="ct-chart svgpath" data-ready id="svgpath" ></div>
                </div>
                <h6>Financial indicators</h6>
                <div class="canvas-minutes-big">
                    <div class="ct-chart" id="pickcircle" ></div>
                </div>




                <h6>Attendance</h6>
                <div class="canvas-minutes">
                    <div class="ct-chart" id="label_placement" ></div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!--CLUB MAIN STAT END-->