<?php
include 'inc/connect.php';
$country = $_GET['country'];

$json_get_bxh = file_get_contents("https://imusic.vn/webapi/chart-song.php?country=$country");
$data = json_decode($json_get_bxh);
$item = $data->items;

$title = $data->title;
$description = $data->description;
$anh_share = $home . '/images/tai-nhac-mp3-mien-phi-imusic.vn.jpg';
include 'inc/header.php';
?>
		<!-- Main content -->
		<div class="col-12 d-flex justify-content-center rm-pd">
			<div class="im-wrapper container" style="z-index: 2;">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-9">
							<div class="p-4"></div>
							<div class="im-main-content">
								<!-- BXH MV -->
								<section style="height:fit-content;">
									<div class="d-flex justify-content-between align-items-center">
										<div class="im-breadcrumb">
											BXH BÀI HÁT
										</div>
										<div class="d-md-none d-sm-flex bxh-nav-tabs mobile-select">
											<div class="selected-item nav-item" role="presentation">
												<a class="nav-link active" id="bxhvn-tab" data-toggle="tab" role="tab" aria-controls="bxhvn"
													aria-selected="true">
													Việt Nam
													<i class="fas fa-chevron-down"></i>
												</a>
											</div>

											<ul class="nav nav-tabs" id="myTab" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link " id="bxhvn-tab" data-toggle="tab" href="#bxhvn" role="tab"
														aria-controls="bxhvn" aria-selected="true">Việt Nam</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="bxham-tab" data-toggle="tab" href="#bxham" role="tab"
														aria-controls="bxham" aria-selected="false">Âu Mỹ</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" id="bxhhq-tab" data-toggle="tab" href="#bxhhq" role="tab"
														aria-controls="bxhhq" aria-selected="false">Hàn Quốc</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="py-2"></div>
									<div class="d-none d-md-block bxh-nav-tabs">
										<ul class="nav nav-tabs">
											<li class="nav-item">
												<a class="nav-link <?php if($country=='bai-hat-Viet-Nam'){echo 'active';} ?>" href="<?php echo $home; ?>/bang-xep-hang/bai-hat-Viet-Nam" title="Bảng Xếp Hạng Bài Hát Việt Nam">Việt Nam</a>
											</li>
											<li class="nav-item">
												<a class="nav-link <?php if($country=='bai-hat-Au-My'){echo 'active';} ?>" href="<?php echo $home; ?>/bang-xep-hang/bai-hat-Au-My" title="Bảng Xếp Hạng Bài Hát Âu Mỹ">Âu Mỹ</a>
											</li>
											<li class="nav-item">
												<a class="nav-link <?php if($country=='bai-hat-Han-Quoc'){echo 'active';} ?>" href="<?php echo $home; ?>/bang-xep-hang/bai-hat-Han-Quoc" title="Bảng Xếp Hạng Bài Hát Hàn Quốc">Hàn Quốc</a>
											</li>
										</ul>
									</div>
									<div class="bxh-tab-content tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="bxhvn" role="tabpanel" aria-labelledby="bxhvn-tab">
											<div class="im-top-chart">
												<div class="row">
													<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 im-top-st bxh-hit-wrapper">
														<img src="<?php echo $item[0]->icon; ?>">
														<div class="im-top-st-label">
															<div class="label p-2 px-3">1</div>
														</div>
														<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[0]->id.'/'.$item[0]->url; ?>.html" title="<?php echo $item[0]->name; ?>">
															<div class="play-overlay animate__animated animate__fadeIn">
																<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="play-circle"
																	class="svg-inline--fa fa-play-circle fa-w-16 main" role="img"
																	xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																	<path
																		d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
																	</path>
																</svg>
															</div>
														</a>
														<div class="d-flex bxh-hit-info">
															<div class="w-100 d-flex flex-column">
																<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[0]->id.'/'.$item[0]->url; ?>.html" title="<?php echo $item[0]->name; ?>">
																	<div class="song"><?php echo $item[0]->name; ?></div>
																</a>
																<div class="artist"><?php echo $item[0]->author; ?></div>
															</div>
														</div>
													</div>
													<div class="pr-5 pr-lg-4 col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
														<div
															class="row justify-content-lg-end justify-content-md-start justify-content-sm-start mt-lg-0  mt-4 mb-4">
															<a href="<?php echo $home.'/'.$data->url; ?>" class="play-btn ml-3 ml-lg-0">PLAY ALL</a>
														</div>
														<?php
												        for ($i = 1; $i < 6; $i++) {
													        ?>
															<div class="song-item-med">
																<div class="row d-flex justify-content-between px-2">
																	<div class="row">
																		<div class="index" role="<?php if($i==1){echo '2nd';}elseif($i==2){echo '3rd';} ?>"><?php if($i<9){echo 0;}echo $i+1; ?></div>
																		<div class="download-btn" role="1st"><svg xmlns="http://www.w3.org/2000/svg"
																				width="18" height="20" viewBox="0 0 18 20">
																				<path class="a"
																					d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
																					transform="translate(-3 -2)" />
																			</svg>
																		</div>
																		<div class="px-1">
																			<div class="row px-4">
																				<div class="bxh-img-wrapper">
																					<div class="play-overlay">
																						<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
																							<svg aria-hidden="true" focusable="false" data-prefix="far"
																								data-icon="play-circle" class="svg-inline--fa fa-play-circle fa-w-16 main"
																								role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																								<path
																									d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
																								</path>
																							</svg>
																						</a>
																					</div>
																					<img src="<?php if($item[$i]->icon == 'images/defaut.png'){echo 'https://imusic.vn/'.$item[$i]->icon;}else{echo $item[$i]->icon;} ?>">
																				</div>
																				<div class="d-flex align-items-center">
																					<div class="pl-2 flex-grow-1">
																						<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
																							<div class="name truncate"><?php echo $item[$i]->name; ?></div>
																						</a>
																						<div class="artist"><?php echo $item[$i]->author; ?></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="d-flex align-items-center">
																		<div class="px-1">
																			<div class="listen-count right">
																				<svg aria-hidden="true" focusable="false" data-prefix="fas"
																					data-icon="headphones-alt" class="svg-inline--fa fa-headphones-alt fa-w-16"
																					role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																					<path fill="currentColor"
																						d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
																					</path>
																				</svg>&nbsp;<?php echo $item[$i]->views; ?>
																			</div>
																			<!-- <div class="right-control animate__animated animate__fadeIn">
																				<span>
																					<a class="item px-1">
																						03:30
																					</a>
																				</span>
																			</div> -->
																		</div>
																	</div>
																</div>
															</div>
															<div class="p-2"></div>
															<?php
												        }
												        ?>
													</div>
												</div>
											</div>
											<div class="p-3"></div>
										</div>
									</div>
								</section>
								<!-- BXH MV -->
								<!-- bang xep hang bai hat viet nam -->
								<section style="height:fit-content;">
									<div class="d-flex justify-content-between align-items-center">
										<div class="im-breadcrumb">
											BXH BÀI HÁT VIỆT NAM
										</div>
									</div>
									<div class="py-2"></div>

									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12 rm-pd">
												<?php
										        for ($i = 0; $i < count($item); $i++) {
											        ?>
													<div class="bxh-song px-1">
														<div class="d-flex justify-content-between">
															<div class="left row ml-1">
																<div class="index d-flex align-items-center" role="<?php if($i==0){echo '1st';}elseif($i==1){echo '2nd';}elseif($i==2){echo '3rd';} ?>"><?php if($i<9){echo 0;}echo $i+1; ?></div>
																<div class="d-none d-md-flex align-items-center px-4">
																	<div class="triangle" role='<?php if($i==0){echo 'up';}elseif($i==1){echo 'down';}elseif($i==2){echo 'hyphens';} ?>'></div>
																</div>
																<div class="px-1">
																	<div class="row px-4 px-md-2 px-lg-4">
																		<div class="song-large-img-wrapper">
																			<div class="play-overlay">
																				<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
																					<svg aria-hidden="true" focusable="false" data-prefix="far"
																						data-icon="play-circle" class="svg-inline--fa fa-play-circle fa-w-16 main"
																						role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																						<path
																							d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z">
																						</path>
																					</svg>
																				</a>
																			</div>
																			<img src="<?php if($item[$i]->icon == 'images/defaut.png'){echo 'https://imusic.vn/'.$item[$i]->icon;}else{echo $item[$i]->icon;} ?>">
																		</div>
																		<div class="d-flex align-items-center">
																			<div class="pl-2">
																				<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" title="<?php echo $item[$i]->name; ?>">
																					<div class="name truncate"><?php echo $item[$i]->name; ?></div>
																				</a>
																				<div class="artist"><?php echo $item[$i]->author; ?></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- <div class="center d-none d-md-flex align-items-center">
																<div class="center-control">
																	<span>
																		<a class="item px-2">
																			03:30
																		</a>
																	</span>
																</div>
															</div> -->
															<div class="right d-flex align-items-center">
																<div class="d-none d-md-flex right-control mr-4">
																	<span>
																		<a href="https://www.facebook.com/share.php?u=<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" class="item px-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="20.007" height="20.033"
																				viewBox="0 0 20.007 20.033">
																				<path class="a"
																					d="M18,14a4,4,0,0,0-3.08,1.48l-5.1-2.35a3.64,3.64,0,0,0,0-2.26l5.1-2.35A4,4,0,1,0,14,6a4.17,4.17,0,0,0,.07.71L8.79,9.14a4,4,0,1,0,0,5.72l5.28,2.43A4.17,4.17,0,0,0,14,18a4,4,0,1,0,4-4ZM18,4a2,2,0,1,1-2,2A2,2,0,0,1,18,4ZM6,14a2,2,0,1,1,2-2A2,2,0,0,1,6,14Zm12,6a2,2,0,1,1,2-2A2,2,0,0,1,18,20Z"
																					transform="translate(-1.994 -1.967)" />
																			</svg>
																		</a>
																		<a href="<?php echo $home; ?>/nghe-nhac/<?php echo $item[$i]->id.'/'.$item[$i]->url; ?>.html" class="item pl-2">
																			<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20">
																				<path class="a"
																					d="M8.29,13.29a1,1,0,0,0,0,1.42l3,3a1,1,0,0,0,1.42,0l3-3a1,1,0,0,0-1.42-1.42L13,14.59V3a1,1,0,1,0-2,0V14.59l-1.29-1.3a1,1,0,0,0-1.42,0ZM18,9H16a1,1,0,0,0,0,2h2a1,1,0,0,1,1,1v7a1,1,0,0,1-1,1H6a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H8A1,1,0,0,0,8,9H6a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H18a3,3,0,0,0,3-3V12A3,3,0,0,0,18,9Z"
																					transform="translate(-3 -2)" />
																			</svg>
																		</a>
																	</span>
																</div>
																<div class="px-1">
																	<div class="listen-count right">
																		<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="headphones-alt"
																			class="svg-inline--fa fa-headphones-alt fa-w-16" role="img"
																			xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
																			<path fill="currentColor"
																				d="M160 288h-16c-35.35 0-64 28.7-64 64.12v63.76c0 35.41 28.65 64.12 64 64.12h16c17.67 0 32-14.36 32-32.06V320.06c0-17.71-14.33-32.06-32-32.06zm208 0h-16c-17.67 0-32 14.35-32 32.06v127.88c0 17.7 14.33 32.06 32 32.06h16c35.35 0 64-28.71 64-64.12v-63.76c0-35.41-28.65-64.12-64-64.12zM256 32C112.91 32 4.57 151.13 0 288v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288c0-114.67 93.33-207.8 208-207.82 114.67.02 208 93.15 208 207.82v112c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V288C507.43 151.13 399.09 32 256 32z">
																			</path>
																		</svg>&nbsp;<?php echo $item[$i]->views; ?></div>

																</div>
															</div>
														</div>
														<hr class="im">
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
						<?php include 'inc/sidebar-bxh.php'; ?>
					</div>
				</div>
			</div>

		</div>
		<div class="p-5"></div>

<?php
include 'inc/footer.php';
?>