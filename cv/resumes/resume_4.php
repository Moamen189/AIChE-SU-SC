<!--============================= CV DESIGN =============================-->
        
		<div class="resume_right">
			<?php if(!empty($summary)) { ?> 
				<div class="summary">
					<span>
					<?php echo $summary ?>
					</span>
				</div>
			<?php } ?>	
			<?php if(!empty($works)) { ?>
                <div class="resume_right-sections work-history">
                        <div class="resume-right_headings">
                            <span class="sectionTitle sectionTitleRight">Work History</span>
                        </div>
            <?php
                for($i=0;$i<count($works); $i++) {
                    $lists = explode("_-_", $works[$i][6]);
                    
                    ?>
                   
                   
                        <div class="work">
                            <div class="work-date">
                                <span class="start-date"><?php echo $works[$i][4] ?></span>
                                <span class="end-date"><?php echo $works[$i][5] ?></span>
                            </div>
                            <div class="work-info">
                                <span class="work-head"><?php echo $works[$i][0] ?> | <?php echo $works[$i][1] ?></span>
                                <span class="work-location"><?php echo $works[$i][2] ?>, <?php echo $works[$i][3] ?></span>
                                <div class="work-details">
                                    <ul>
                                                        <?php
                                        for ($y=0; $y<count($lists); $y++) {
                                            ?>
                                            <li><?php echo $lists[$y] ?></li>
                                            <?php
                                        }
                                    
                                    ?> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                                    <?php } ?>
                    </div>
                    
                    
            
				
			<?php } ?>
			<?php if(!empty($edus)) { ?> 
				<div class="resume_right-sections School">
					<div class="resume-right_headings">
						<span class="sectionTitle sectionTitleRight">Education</span>
                    </div>
                    <?php
                    for($i=0;$i<count($edus); $i++) {
                    ?>
					<div class="work">
						<div class="work-date">
							<span class="start-date"><?php echo $edus[$i][3] ?></span>
							<span class="end-date"><?php echo $edus[$i][4] ?></span>
						</div>
						<div class="work-info">
							<span class="work-head"><?php echo $edus[$i][2] ?></span>
							<span class="work-location">
                                <?php echo $edus[$i][0] ?>
                                <?php
                                echo (isset($edus[$i][1]) && !empty($edus[$i][1])) ? ', '  . $edus[$i][1] : '' ?>
                            </span>
							
						</div>
					</div>
					<?php } ?>
				</div>
			<?php
			}
            ?>
            <?php if(!empty($certs)) { ?> 
				<div class="resume_right-sections School">
					<div class="resume-right_headings">
						<span class="sectionTitle sectionTitleRight">Certificates</span>
                    </div>
                    <?php
                    for($i=0;$i<count($certs); $i++) {
                    ?>
					<div class="work">
						<div class="work-date">
							<span class="start-date"><?php echo $certs[$i][0] ?></span>
						</div>
						<div class="work-info">
							<span class="work-location">
                                <?php echo $certs[$i][1] ?>
                            </span>
						</div>
					</div>
					<?php } ?>
				</div>
			<?php
			}
			?>
		</div>
        <div class="resume-left">
			<div class="name">
				<span><?php echo $fname ?></span>
				<span><?php echo $lname ?></span>
            </div>
            <div class="resumeTitle"><?php echo $profession ?></div>
            <div class="resume-left_sections personal-info">
				<div class="personal-info-head">
					<span class="resume-left_headings sectionTitle">Contact</span>
				</div>
				<div class="info-list">
                    <?php if (isset($address) && !empty($address)) { ?>
					<div class="personal-info-address">
						<span class="sectionTxtBold">address</span> 
						<span style="font-weight: 100;"><?php echo $address ?></span>
                    </div>
                    <?php } ?>
                    <?php if (isset($phone) && !empty($phone)) { ?>
					<div class="personal-info-phone">
						<span class="sectionTxtBold">Phone</span> 
						<span style="font-weight: bold;"><?php echo $phone ?></span>
                    </div>
                    <?php } ?>
                    <?php if (isset($email) && !empty($email)) { ?>
					<div class="personal-info-email">
						<span class="sectionTxtBold">Email</span> 
						<span><?php echo $email ?></span>
                    </div>
                    <?php } ?>
                    <?php if (isset($LinkedIn) && !empty($LinkedIn)) { ?>
					<div class="personal-info-linkedin">
						<span class="sectionTxtBold">LinkedIn</span> 
						<span><?php echo $LinkedIn ?> </span>
                    </div>
                    <?php } ?>
                    <?php if (isset($Facebook) && !empty($Facebook)) { ?>
					<div class="personal-info-linkedin">
						<span class="sectionTxtBold">Facebook</span> 
						<span><?php echo $Facebook ?> </span>
                    </div>
                    <?php } ?>
                    <?php if (isset($Twitter) && !empty($Twitter)) { ?>
					<div class="personal-info-linkedin">
						<span class="sectionTxtBold">Twitter</span> 
						<span><?php echo $Twitter ?> </span>
                    </div>
                    <?php } ?>
                    <?php if (isset($Website) && !empty($Website)) { ?>
					<div class="personal-info-linkedin">
						<span class="sectionTxtBold">Website</span> 
						<span><?php echo $Website ?> </span>
                    </div>
                    <?php } ?>
				</div>
			</div>
			<?php if(isset($skills) && !empty($skills)) { 
				//$skills = array_filter($skills);
				?> 
				<div class="resume-left_sections skills">
					<div class="personal-info-head">
						<span class="resume-left_headings sectionTitle">Skills</span>
					</div>
					<div class="info-list">
						<?php for ($skill=0; $skill< count($skills); $skill++) {
							if (!empty($skills[$skill])) {
						?>
							<div>
								<span><?php echo $skills[$skill] ?></span>
							</div>
						<?php
							}
						} 
						?>
					</div>
				</div>
			<?php } ?>	
			<!--<div class="resume-left_sections langs">
				<div class="personal-info-head">
					<span class="resume-left_headings sectionTitle">languages</span>
				</div>
				<div class="info-list">
					<div class="personal-info-address">
						<span>English</span>
						<div class="progress-bar">
							<div class="progress-bar-white"></div>
						</div>
					</div>
					<div class="personal-info-phone">
						<span>Arabic</span>
						<div class="progress-bar">
							<div class="progress-bar-white" style="width: 100%"></div>
						</div>
					</div>
					<div class="personal-info-email">
						<span>French</span>
						<div class="progress-bar">
							<div class="progress-bar-white" style="width: 25%"></div>
						</div>
					</div>
				</div>
			</div>-->
		</div>