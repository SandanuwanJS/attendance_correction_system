<?php
include 'db_connect.php';
?>

<ul class="side-menu ">
						                                 
							

						<!-- ******************** If you want to add new main page need only add the main page details into the 'pages' database ******************** -->
						<!-- ******************** If you want to add new subpages need only add subpage details into the 'subpages' database correctly ******************** -->
						<!-- ******************** If you correctly add details 'page' and 'subpage' databases the code will automatically excute main pages and sub pages ********************  -->
						<?php
										$x=15;

										// ******************** Get names and ids of main pages from database ********************
										$getPage = mysqli_query($con,"SELECT pageName,id FROM pages WHERE isact='1'");
										while($resPage = mysqli_fetch_array($getPage)){
							?>
							<li class="slide">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><i class="side-menu__icon bx bx-underline"></i><span class="side-menu__label"><?php echo $resPage[0] ?></span><i class="angle fe fe-chevron-down"></i></a>
								<ul class="slide-menu">
									<li class="panel sidetab-menu">
										
										<div class="panel-body tabs-menu-body p-0 border-0">
											<div class="tab-content">
												<div class="tab-pane tab-content-show active" id="side11">
													<ul class="sidemenu-list">
													<li class="side-menu__label1">
														<?php

															// ******************** Fetch subpages based on their main page ID ********************
															$getSub = mysqli_query($con,"SELECT id, controller, subPageName FROM subpages WHERE pageID = '{$resPage['id']}'");
															while ($resSub = mysqli_fetch_array($getSub)) {
																?>
																<li>

																	<!-- ******************** Create subpage list and call their controller file and controller function(index function) to load relevant page ******************** -->
																	<a class="slide-item" href="<?= base_url('') ?><?php echo $resSub['controller']; ?>/index/<?php echo $resSub['id']; ?>">
																		<?php echo $resSub['subPageName']; ?>
																	</a>
																</li>
																<?php
															}
															?>
														
													</li>
														
														

										
													</ul>
													
                                                                                            
												</div>
                                                                                    
											</div>
										</div>
										
                                                                            
									</li>
								</ul>
							</li>

							<?php
							$x++; 
							}
							?>
							<!-- /////////////////////////////////////////////////////////////////////////////// -->	
						</ul>