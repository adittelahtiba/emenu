<cool-ad>
    <template class="ad__mobile">
        <div class="stater">
            <div class="tengah">
                <img src="<?= base_url('assets/statis/menu/'); ?>images/logo/<?= $cafe['logo_cafe']; ?>" class="img-full" alt="" />
                <div class="tombol">
                    <a href="<?= base_url('assets/statis/menu/'); ?>pdf/<?= $cafe['menu']; ?>" target="_blank">
                        <button type="button" class="btn-menu">Menu</button>
                    </a>
                    <!-- <div class="isi"> -->

                    <!-- <object data="pdf/menu1.pdf" type="application/pdf" width="100%" height="100%"> -->

                    <!-- <embed src="pdf/menu1.pdf" width="100%" height="500px"> </embed> -->
                    <!-- <p>Alternative text - include a link tes                                                  <a href="pdf/menu.pdf">to the PDF!</a></p> -->
                    <!-- </object> -->

                    <!-- </div> -->
                </div>
                <div class="tombol">
                    <a target="_blank" href="<?= base_url('menus/wa/') ?><?= $cafe['kode_cafe']; ?>" target="_blank">
                        <button type="button" class="btn-menu">Reservasi</button>
                    </a>
                </div>

                <div class="tombol">
                    <button type="button" class="btn-menu collapsible">Contact</button>
                    <div class="isi">
                        <div class="kontent">
                            <?php

                            if(!empty($cafe['whatsapp'])){
                                echo '<p class="garis-bawah p-l-r-20"><i class="fa fa-phone"></i>&nbsp;&nbsp;'.$cafe['whatsapp'].' &nbsp;&nbsp; <i class="fa fa-whatsapp"></i>&nbsp;&nbsp;'.$cafe['whatsapp'].' </p>';
                            }

                            if(!empty($cafe['email'])) {
                                echo '<p class="garis-bawah p-l-r-20"><i class="fa fa-envelope"></i>&nbsp;&nbsp; '. $cafe['email'].' </p>';
                            }

                            if(!empty($cafe['alamat'])) {
                                echo '<p class="garis-bawah p-l-r-20"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; '. $cafe['alamat'].' </p>';
                            }

                            ?>
                            
                            <!-- <p class="garis-bawah p-l-r-20"><i class="fa fa-phone"></i>&nbsp;&nbsp; <?= $cafe['whatsapp']; ?> &nbsp;&nbsp; <i class="fa fa-whatsapp"></i>&nbsp;&nbsp; <?= $cafe['whatsapp']; ?></p> -->
                            <!-- <p class="garis-bawah p-l-r-20"><i class="fa fa-envelope"></i>&nbsp;&nbsp; <?= $cafe['email']; ?></p> -->
                            <!-- <p class="garis-bawah p-l-r-20"><i class="fa fa-map-marker"></i>&nbsp;&nbsp; <?= $cafe['alamat']; ?></p> -->
                        </div>
                    </div>
                </div>
                <div class="tombol">
                    <?php

                        if(!empty($cafe['maps_url'])) {
                            echo '<a target="_blank" href="'. $cafe['maps_url'].'">
                            <button type="button" class="btn-menu">Lokasi</button>
                            </a>';
                        }
                        else {
                            echo '<a href="javascipt:void(0);">
                            <button type="button" class="btn-menu">Lokasi</button>
                            </a>';
                        }
                    
                    ?>
                    <!-- <a target="_blank" href="<?= $cafe['maps_url']; ?>">
                        <button type="button" class="btn-menu">Lokasi</button>
                    </a> -->
                </div>
                
                <div class="social-media-content tengah margin-bawah">
                    <h4 class="text-putih" style="margin-bottom: 12px">Social Media</h4>
                    
                    <?php 
                        if(!empty($cafe['instagram'])) {
                            echo '<span class="p-l-r-20"><a target="_blank" style="color: #323232" href="https://www.instagram.com/'.$cafe['instagram'].'"><img src="'. base_url('assets/statis/menu/').'images/logo/instagram.png" style="width: 10%" alt="" /></a>
                            </span>' ;
                        } 

                        if(!empty($cafe['twitter'])) {
                            echo '<span class="p-l-r-20"><a target="_blank" style="color: #323232" href="https://www.twitter.com/'. $cafe['twitter'].'"><img src="'. base_url('assets/statis/menu/').'images/logo/twit.png" style="width: 10%" alt="" /></a>
                            </span>' ;
                        } 

                        if(!empty($cafe['facebook'])) {
                            echo 'span class="p-l-r-20"><a target="_blank" style="color: #323232" href="'. $cafe['facebook'].'"><img src="'. base_url('assets/statis/menu/').'images/logo/facebook.png" style="width: 10%" alt="" /></a>
                            </span>' ;
                        } 

                        if(!empty($cafe['youtube'])) {
                            echo '<span class="p-l-r-20"><a target="_blank" style="color: #323232" href="'. $cafe['youtube'].'"><img src="'. base_url('assets/statis/menu/').'images/logo/youtube.png" style="width: 10%" alt="" /></a>
                            </span>' ;
                        } 
                    

                    ?>
                    <!-- <span class="p-l-r-20"><a target="_blank" style="color: #323232" href="https://www.instagram.com/<?= $cafe['instagram']; ?>"><img src="<?= base_url('assets/statis/menu/'); ?>images/logo/instagram.png" style="width: 10%" alt="" /></a>
                    </span> -->
                    <!-- <span class="p-l-r-20"><a target="_blank" style="color: #323232" href="https://www.twitter.com/<?= $cafe['twitter']; ?>"><img src="<?= base_url('assets/statis/menu/'); ?>images/logo/twit.png" style="width: 10%" alt="" /></a>
                    </span> -->
                    <!-- <span class="p-l-r-20"><a target="_blank" style="color: #323232" href="<?= $cafe['facebook']; ?>"><img src="<?= base_url('assets/statis/menu/'); ?>images/logo/facebook.png" style="width: 10%" alt="" /></a>
                    </span> -->
                    <!-- <span class="p-l-r-20"><a target="_blank" style="color: #323232" href="<?= $cafe['youtube']; ?>"><img src="<?= base_url('assets/statis/menu/'); ?>images/logo/youtube.png" style="width: 10%" alt="" /></a>
                    </span> -->
                </div>
            </div>
            <footer>
                <p style="font-size: 12px">&#169; 2021 Support By PT Media Solusi Network &nbsp;<i class="fa fa-heart" style="color: red"> </i></p>
            </footer>
        </div>
    </template>
    <template class="ad__desktop">
        <div class="page new-skin">
            <!-- preloader -->
            <div class="preloader">
                <div class="centrize full-width">
                    <div class="vertical-center">
                        <div class="spinner">
                            <div class="double-bounce1"></div>
                            <div class="double-bounce2"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- background -->
            <div class="background gradient">
                <ul class="bg-bubbles" style="background-image: url('<?= base_url('assets/statis/menu/'); ?>images/food/<?= $cafe['background_body']; ?>')">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>

            <!--
				Container
			-->
            <div class="container opened" data-animation-in="fadeInLeft" data-animation-out="fadeOutLeft">
                <!--
					Header
				-->
                <header class="header">
                    <!-- menu btn -->
                    <!-- <a href="#" class="menu-btn"><span></span></a> -->

                    <!-- menu -->
                    <div class="top-menu">
                        <ul>
                            <li class="active">
                                <a href="#menu-card">
                                    <span class="icon ion-android-list"></span>
                                    <span class="link">Menu</span>
                                </a>
                            </li>
                            <!-- <li>
								<a href="#resume-card">
									<span class="icon ion-clipboard"></span>
									<span class="link">Resume</span>
								</a>
							</li> -->
                            <!-- <li>
								<a href="#works-card">
									<span class="icon ion-paintbrush"></span>
									<span class="link">Works</span>
								</a>
							</li> -->
                            <li>
                                <a target="_blank" href="<?= base_url('menus/wa'); ?>/<?= $cafe['kode_cafe']; ?>">
                                    <span class="icon ion-chatbox-working"></span>
                                    <span class="link">Reservasi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#contacts-card">
                                    <span class="icon ion-at"></span>
                                    <span class="link">Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </header>

                <!--
					Card - Started
				-->
                <div class="card-started" id="home-card">
                    <!--
						Profile
					-->
                    <div class="profile no-photo">
                        <!-- profile image -->
                        <div class="slide" style="background-image: linear-gradient(0deg, rgba(83, 83, 83, 0.53), rgba(51, 51, 51, 0.43)), url(<?= base_url('assets/statis/menu/'); ?>images/logo/<?= $cafe['background']; ?>)">
                            <img src="<?= base_url('assets/statis/menu/'); ?>images/logo/<?= $cafe['logo_cafe']; ?>" class="img-full-desktop" alt="" />
                        </div>

                        <!-- profile titles -->
                        <div class="title"><?= $cafe['tageline']; ?></div>
                        <!--<div class="subtitle">Web Designer</div>-->
                        <div class="subtitle subtitle-typed">
                            <div class="typing-title">
                                <?php
                                foreach ($message as $ms) {
                                    echo "<p>" . $ms['message'] . "</p>";
                                }
                                ?>
                            </div>
                        </div>

                        <!-- <div class="row"> -->
                        <div class="col-md-12" style="margin-top: 17px">
                            <?php 
                            if(!empty($cafe['instagram'])) {
                                echo '<span class="text" style="padding: 10px"><a target="_blank" style="color: #323232" href="https://www.instagram.com/'. $cafe['instagram'].'"><img src="'. base_url('assets/statis/menu/').'images/logo/instagram-polos.png" style="width: 19.81px" alt="" /></a>
                                </span>' ;
                            } 

                            if(!empty($cafe['twitter'])) {
                                echo '<span class="text" style="padding: 10px"><a target="_blank" style="color: #323232" href="https://www.twitter.com/'. $cafe['twitter'].'"><img src="'. base_url('assets/statis/menu/').'images/logo/twitter.png" style="width: 19.81px" alt="" /></a>
                                </span>' ;
                            } 

                            if(!empty($cafe['facebook'])) {
                                echo '<span class="text" style="padding: 10px"><a target="_blank" style="color: #323232" href="'.$cafe['facebook'].'"><img src="'. base_url('assets/statis/menu/').'images/logo/facebook2.png" style="width: 19.81px" alt="" /></a>
                                </span>' ;
                            }

                            if(!empty($cafe['youtube'])) {
                                echo '<span class="text" style="padding: 10px"><a target="_blank" style="color: #323232" href="'. $cafe['youtube'].'"><img src="'. base_url('assets/statis/menu/').'images/logo/youtube.png" style="width: 19.81px" alt="" /></a>
                                </span>' ;
                            }
                        

                        ?>
                            <!-- <span class="text" style="padding: 10px"><a target="_blank" style="color: #323232" href="https://www.instagram.com/<?= $cafe['instagram']; ?>"><img src="<?= base_url('assets/statis/menu/'); ?>images/logo/instagram-polos.png" style="width: 19.81px" alt="" /></a>
                            </span> -->
                            <!-- <span class="text" style="padding: 10px"><a target="_blank" style="color: #323232" href="https://www.twitter.com/<?= $cafe['twitter']; ?>"><img src="<?= base_url('assets/statis/menu/'); ?>images/logo/twitter.png" style="width: 19.81px" alt="" /></a>
                            </span> -->
                            <!-- <span class="text" style="padding: 10px"><a target="_blank" style="color: #323232" href="<?= $cafe['facebook']; ?>"><img src="<?= base_url('assets/statis/menu/'); ?>images/logo/facebook2.png" style="width: 19.81px" alt="" /></a>
                            </span> -->
                            <!-- <span class="text" style="padding: 10px"><a target="_blank" style="color: #323232" href="<?= $cafe['youtube']; ?>"><img src="<?= base_url('assets/statis/menu/'); ?>images/logo/youtube.png" style="width: 19.81px" alt="" /></a>
                            </span> -->
                        </div>

                        <!-- </div> -->

                        <!-- profile socials -->
                        <!-- <div class="social">
							<a target="_blank" href="https://dribbble.com/"><span class="fa fa-dribbble"></span></a>
							<a target="_blank" href="https://twitter.com/"><span class="fa fa-twitter"></span></a>
							<a target="_blank" href="https://github.com/"><span class="fa fa-github"></span></a>
							<a target="_blank" href="https://https://www.spotify.com/"><span class="fa fa-spotify"></span></a>
							<a target="_blank" href="https://stackoverflow.com/"><span class="fa fa-stack-overflow"></span></a>
						</div> -->

                        <!-- profile buttons -->
                        <div class="lnks">
                            <!-- <a href="#" class="lnk">
								<span class="text">Download CV</span>
							</a> -->
                            <a href="http://ptmsn.co.id" target="_blank" class="lnk discover">
                                <span class="text">&#169; 2021 Support By PT Media Solusi Network </span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--
					Card - Blog
				-->
                <div class="card-inner blog blog-post animated active" id="menu-card">
                    <div class="card-wrap">
                        <!--
							Blog Single
						-->
                        <div class="content blog-single">
                            <!-- title -->
                            <div class="title">Daftar Menu</div>

                            <!-- content -->
                            <div class="row border-line-v">
                                <embed src="<?= base_url('assets/statis/menu/'); ?>pdf/<?= $cafe['menu']; ?>#toolbar=0&navpanes=0&scrollbar=0&view=FitH" width="100%" height="500" />
                                <!-- <iframe src="pdf/menu.pdf" width="100%" height="300px"> </iframe> -->
                                <!-- <div class="col col-m-12 col-t-12 col-d-12">
									<div class="post-box"> -->

                                <!-- blog detail -->
                                <!-- <h1 class="h-title">Diskon 50 % Awal Ramadhan</h1> -->
                                <!-- <object style="width:100%; height:200px;" data="pdf/menu.pdf" type="application/pdf">
											<embed src="pdf/menu.pdf" type="application/pdf" />
										</object> -->

                                <!-- </div>
								</div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!--
					Card - Contacts
				-->
                <div class="card-inner contacts animated" id="contacts-card">
                    <div class="card-wrap">
                        <!--
							Conacts Info
						-->
                        <div class="content contacts">
                            <!-- title -->
                            <div class="title">Contact Me</div>

                            <!-- content -->
                            <div class="row">
                                <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                                    <div class="map">
                                        <?php
                                            if(!empty( $cafe['maps_embed'])){
                                                echo ''.$cafe['maps_embed'].'';
                                            }
                                            else {
                                                echo '<img src="'. base_url('assets/statis/img/no-data.png') .'" style="width:100%;" />';
                                            }
                                        ?>
                                        <!-- <?= $cafe['maps_embed']; ?> -->
                                        <!-- <p><a target="_blank" href="">Klik Untuk Melihat Peta Selengkapnya</a></p> -->
                                    </div>

                                    <div class="info-list">
                                        <ul>
                                            <?php   
                                                if(!empty($cafe['whatsapp'])){
                                                    echo '<li><strong>No Telepon :</strong> '. $cafe['whatsapp'].'</li>' ;        
                                                }
                                                // else {
                                                //     echo '<li><strong>No Telepon :</strong>-</li>';
                                                // }

                                                if(!empty($cafe['email'])){
                                                    echo '<li><strong>Email :</strong> '. $cafe['email'].'</li>';
                                                }
                                                // else {
                                                //     echo '<li><strong>Email :</strong>-</li>';
                                                // }

                                                if(!empty($cafe['instagram'])){
                                                    echo '<li><strong>Instagram</strong>'. $cafe['instagram'].'</li>';
                                                } 
                                                // else {
                                                    //     echo '<li><strong>Instagram : </strong>-</li>';
                                                    // }

                                                if(!empty($cafe['twitter'])){
                                                    echo '<li><strong>Twitter</strong>'. $cafe['twitter'].'</li>';
                                                } 

                                                if(!empty($cafe['facebook'])){
                                                    echo '<li><strong>Facebook</strong>'. $cafe['facebook'].'</li>';
                                                } 

                                                if(!empty($cafe['youtube'])){
                                                    echo '<li><strong>Youtube</strong>'. $cafe['youtube'].'</li>';
                                                } 

                                                if(!empty($cafe['alamat'])){
                                                    echo '<li style="width:100%;"><strong>Alamat :</strong> '. $cafe['alamat'].'</li>';
                                                } 

                                                
                                            ?>

                                        
                                            
                                            <!-- <li style="width:100%;"><strong>Alamat :</strong> <?= $cafe['alamat']; ?></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>

                        <!--
							Contact Form
						-->
                    </div>
                </div>
            </div>

            <div class="s_overlay"></div>
            <!-- <div class="content-sidebar">
				<div class="sidebar-wrap search-form">
					<aside id="secondary" class="widget-area">
						<section id="search-2" class="widget widget_search">
							<label>
								<span class="screen-reader-text">Search for:</span>
								<input type="search" class="search-field" placeholder="Search …" value="" name="s">
							</label>
							<input type="submit" class="search-submit" value="Search">
						</section>
						<section class="widget widget_recent_entries">
							<h2 class="widget-title">
								<span class="widget-title-span"><span class="first-word">Recent</span> Posts</span>
							</h2>
							<ul>
								<li>
									<a href="#">Creativity Is More Than</a>
								</li>
								<li>
									<a href="#">Designing the perfect</a>
								</li>
								<li>
									<a href="#">Music Player Design</a>
								</li>
								<li>
									<a href="#">A Song And Dance Act</a>
								</li>
								<li>
									<a href="#">By spite about do of allow</a>
								</li>
							</ul>
						</section>
						<section class="widget widget_recent_comments">
							<h2 class="widget-title">
								<span class="widget-title-span"><span class="first-word">Recent</span> Comments</span>
							</h2>
							<ul>
								<li class="recentcomments">
									<span class="comment-author-link">JOHN SMITH</span> on <a href="#">Creativity Is More Than</a>
								</li>
								<li class="recentcomments">
									<span class="comment-author-link">ADAM SMITH</span> on <a href="#">Creativity Is More Than</a>
								</li>
								<li class="recentcomments">
									<span class="comment-author-link">admin</span> on <a href="#">Designing the perfect</a>
								</li>
								<li class="recentcomments">
									<span class="comment-author-link">admin</span> on <a href=#">Designing the perfect</a>
								</li>
								<li class="recentcomments">
									<span class="comment-author-link">James</span> on <a href="#">Designing the perfect</a>
								</li>
							</ul>
						</section>
						<section class="widget widget_archive">
							<h2 class="widget-title">
								<span class="widget-title-span">
									<span class="first-letter">Archives</span>
								</span>
							</h2>
							<ul>
								<li>
									<a href="#">November 2018</a>
								</li>
							</ul>
						</section>
						<section class="widget widget_categories">
							<h2 class="widget-title">
								<span class="widget-title-span"><span class="first-letter">Categories</span></span>
							</h2>
							<ul>
								<li class="cat-item cat-item-2">
									<a href="#">Design</a>
								</li>
								<li class="cat-item cat-item-3">
									<a href="#">Music</a>
								</li>
							</ul>
						</section>
						<section class="widget widget_meta">
							<h2 class="widget-title">
								<span class="widget-title-span"><span class="first-letter">Meta</span></span>
							</h2>
							<ul>
								<li><a href="#">Log in</a></li>
								<li><a href="#">Entries feed</a></li>
								<li><a href="#">Comments feed</a></li>
								<li><a href="#">WordPress.org</a></li>
							</ul>
						</section>
					</aside>
				</div>
				<span class="close"></span>
			</div> -->
        </div>
    </template>
</cool-ad>