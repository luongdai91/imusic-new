<?php
include 'inc/connect.php';
$country = $_GET['country'];
$url = $_GET['url'];

$json_get_top100 = file_get_contents("https://imusic.vn/webapi/top-100.php?country=$country&url=$url");
$data = json_decode($json_get_top100);

$title = $data->title;
$description = $data->description;
$anh_share = $home . '/images/tai-nhac-mp3-mien-phi-imusic.vn.jpg';

switch ($url) {
    case 'nhac-tre':
    $type = 'NHẠC TRẺ';
    break;
    case 'nhac-tru-tinh':
    $type = 'NHẠC TRỮ TÌNH';
    break;
    case 'nhac-trinh':
    $type = 'NHẠC TRỊNH';
    break;
    case 'nhac-rap-viet':
    $type = 'NHẠC RAP VIỆT';
    break;
    case 'nhac-do':
    $type = 'NHẠC TIỀN CHIẾN';
    break;
    case 'nhac-remix-viet':
    $type = 'NHẠC REMIX VIỆT';
    break;
    default:
    case 'nhac-tre':
    $type = 'NHẠC TRẺ';
    break;
}
include 'inc/header.php';
?>

	<div class="im-wrapper container">
		<div class="col-12 d-flex justify-content-center rm-pd">
			<div class="im-wrapper container" style="z-index: 2">
				<div class="col-md-12">
					<div class="row">
						<div class="col-lg-9">
							<div class="p-4"></div>
							<div class="im-main-content">
								<div class="p-2"></div>
								<section style="height: fit-content">
									<div class="d-flex justify-content-between align-items-center">
										<div class="im-breadcrumb">TOP 100 NỔI BẬT</div>
										<div class="crs-nav px-2">
											<div class="row">
												<div class="px-2 crs-today-listen-prev">
													<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-left"
														class="svg-inline--fa fa-angle-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
														viewBox="0 0 256 512">
														<path
															d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
														</path>
													</svg>
												</div>
												<div class="px-2 crs-today-listen-next">
													<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right"
														class="svg-inline--fa fa-angle-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
														viewBox="0 0 256 512">
														<path
															d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
														</path>
													</svg>
												</div>
											</div>
										</div>
									</div>
									<div class="py-2"></div>
									<section class="crs-today-listen crs-carousel">
										<div class="square-image-card">
											<a href="<?php echo $home; ?>/top-100/nhac-viet/nhac-tre" title="Top 100 Nhạc Trẻ">
												<div class="image-card-overlay" role="green-overlay"></div>
												<img src="<?php echo $home; ?>/assets/images/im-top100-05.png" />
												<div class="image-card-info">
													<h3 class="album-name">nhạc trẻ</h3>
													<span class="album-songs">top 100 bài hát</span>
												</div>
											</a>
										</div>
										<div class="square-image-card">
											<a href="<?php echo $home; ?>/top-100/nhac-viet/nhac-tru-tinh" title="Top 100 Nhạc Trữ Tình">
												<div class="image-card-overlay" role="pink-overlay"></div>
												<img src="<?php echo $home; ?>/assets/images/im-top100-04.png" />
												<div class="image-card-info">
													<h3 class="album-name">trữ tình</h3>
													<span class="album-songs">top 100 bài hát</span>
												</div>
											</a>
										</div>
										<div class="square-image-card">
											<a href="<?php echo $home; ?>/top-100/nhac-viet/nhac-trinh" title="Top 100 Nhạc Trịnh">
												<div class="image-card-overlay" role="green-overlay"></div>
												<img src="<?php echo $home; ?>/assets/images/im-top100-01.png" />
												<div class="image-card-info">
													<h3 class="album-name">nhạc trịnh</h3>
													<span class="album-songs">top 100 bài hát</span>
												</div>
											</a>
										</div>
										<div class="square-image-card">
											<a href="<?php echo $home; ?>/top-100/nhac-viet/nhac-rap-viet" title="Top 100 Nhạc Rap Việt">
												<div class="image-card-overlay" role="red-overlay"></div>
												<img src="<?php echo $home; ?>/assets/images/im-top100-02.png" />
												<div class="image-card-info">
													<h3 class="album-name">rap việt</h3>
													<span class="album-songs">top 100 bài hát</span>
												</div>
											</a>
										</div>
										<div class="square-image-card">
											<a href="<?php echo $home; ?>/top-100/nhac-viet/nhac-do" title="Top 100 Nhạc Tiền Chiến">
												<div class="image-card-overlay" role="yellow-overlay"></div>
												<img src="<?php echo $home; ?>/assets/images/im-top100-03.png" />
												<div class="image-card-info">
													<h3 class="album-name">tiền chiến</h3>
													<span class="album-songs">top 100 bài hát</span>
												</div>
											</a>
										</div>
										<div class="square-image-card">
											<a href="<?php echo $home; ?>/top-100/nhac-viet/nhac-remix-viet" title="Top 100 Nhạc Remix Việt">
												<div class="image-card-overlay" role="purple-overlay"></div>
												<img src="<?php echo $home; ?>/assets/images/im-top100-05.png" />
												<div class="image-card-info">
													<h3 class="album-name">remix việt</h3>
													<span class="album-songs">top 100 bài hát</span>
												</div>
											</a>
										</div>
									</section>
									<div class="py-2">
									</div>
									<div class="d-inline d-lg-none highlight-artist-dot" style="text-align: center;"></div>
								</section>
								<div class="py-4"></div>
								<section style="height: fit-content">
									<div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
										<div class="im-breadcrumb">TOP 100 <?php echo $type; ?></div>
										<div class="crs-nav my-3 my-md-0 ml-0 ml-md-0">
											<a href="<?php echo $home.'/'.$data->url; ?>" class="play-btn">PLAY ALL</a>
										</div>
									</div>
									<div class="py-2"></div>
									<div class="col-md-12 rm-md-pd">
										<div class="row">
											<div class="col-md-12 rm-xs-pd">
												<?php
												$item = $data->items;
												foreach ($item as $key => $value) {
													?>
													<div class="song-item-100 px-1">
														<div class="d-flex justify-content-between">
															<div class="left row">
																<div class="px-1 d-flex pl-3 align-items-center <?php if($key==0){echo 'first';}elseif($key==1){echo 'second';}elseif($key==2){echo 'third';} ?>"><?php if($key<9){echo 0;}echo $key+1; ?></div>
																<div class="px-1">
																	<div class="row px-4">
																		<div class="img-wrapper">
																			<div class="play-overlay">
																				<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $value->id.'/'.$value->url; ?>.html" title="<?php echo $value->name; ?>">
																					<svg aria-hidden="true" focusable="false" data-prefix="far"
																						data-icon="play-circle" class="main svg-inline--fa fa-play-circle " role="img"
																						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																						<path
																							d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
																						</path>
																					</svg>
																				</a>
																			</div>
																			<img src="<?php if (strpos($value->icon, 'defaut.png')!==FALSE){echo str_replace('http://get.nghenhac123.com/https://imusic.vn',$home,$home.'/'.$value->icon);}else{echo $value->icon;} ?>" />
																		</div>
																		<div class="d-flex align-items-center">
																			<div class="pl-2">
																				<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $value->id.'/'.$value->url; ?>.html" title="<?php echo $value->name; ?>">
																					<div class="name truncate"><?php echo $value->name; ?></div>
																				</a>
																				<div class="artist"><?php echo $value->author; ?></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- <div class="d-none d-md-flex align-items-center">
																<div class="right-control">
																	<span>
																		<a class="item px-2"> 03:30 </a>
																	</span>
																</div>
															</div> -->
															<div class="right d-flex align-items-center">
																<div class="px-1">
																	<div class="listen-count right">
																		<a href="https://www.facebook.com/share.php?u=<?php echo $home; ?>/nghe-nhac/<?php echo $value->id.'/'.$value->url; ?>.html" class="item px-1 d-none d-md-inline">
																			<svg xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
																				viewBox="0 0 20.007 20.033">
																				<path class="a"
																					d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
																					transform="translate(-1.994 -1.967)" />
																			</svg>
																		</a>
																		<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $value->id.'/'.$value->url; ?>.html" class="item l-2 d-none d-md-inline">
																			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
																				<path class="a"
																					d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
																					transform="translate(-3 -2)" />
																			</svg>
																		</a>
																		<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
																			class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
																			xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																			<path
																				d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
																			</path>
																		</svg>
																		&nbsp;<?php echo $value->views; ?>
																	</div>
																</div>
															</div>
														</div>
														<hr class="im" />
													</div>
													<?php
												}
												?>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
						<?php include 'inc/sidebar-list-song.php'; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="p-5"></div>
	</div>
<?php
include 'inc/footer.php';
?>