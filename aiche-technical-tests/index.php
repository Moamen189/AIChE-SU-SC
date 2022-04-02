<?php
	$pagetitle = 'home';
	include 'includes/functions/functions.php';
	include 'includes/templates/header.php';
	include 'config/config.php';
	session_start();
	
	
	$material_name = 'intro to ref';

	
?>
<!--<a href="quiz.php?material=<?php echo $material_name ?>"><button  class="btn btn-success">Material Intro</button></a>-->
<div class="container" >
						<img src="assets/images/AIChE logo original H.png" class="img-responsive center-block" width="250px" style="margin-top: 20px" />
					
		</div>
	<div class="clearfix"></div>
	<div class="home">
		<div class="home-img">
			<img src="assets/images/2.svg" class="img-responsive" />
		</div>
		<div class="home-content">
			<h1>AIChE Technical Tests</h1>
			<p class="lead">We will help you to create an awesome CV. Click on choose your template button to begin.</p>
			<a href="#select_temp" class="choose_btn"><button>Start a Quiz</button></a>
			<a href="http://www.aichesusc.org"><button>Go to our website</button></a>
		</div>
	</div>
	<section class="select_temp_div">
		<div class="container" id="select_temp">
			<div class="row">
				<h2 class="text-center">Start a Quiz</h2>
				<p class="text-center">Choose the material you want to start testing yourself</p>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="year-section">
						<h2>1<sup>st</sup> Year</h2>
						<?php 
                            $stmt = $con->prepare("SELECT material_name FROM db_questions WHERE material_year='1st' " );

                            $stmt->execute();
                            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                            
                            $arr = [];
                            foreach ($row as $name) {
                                array_push($arr, $name['material_name']);
                            }
                            $arr_filter = array_unique($arr);

                            if (empty($arr_filter)) { ?>
                            <div>
                                No materials are added yet
							</div>
                            <?php
                            } else {
                                foreach($arr_filter as $material) {
                                ?>
                                    	<a href="quiz.php?material=<?php echo $material ?>">
											<div><?php echo $material ?></div>
										</a>
                                <?php
                                }
                            }
                        ?>
					</div>	
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="year-section">
						<h2>2<sup>nd</sup> Year</h2>
						<?php 
                            $stmt = $con->prepare("SELECT material_name FROM db_questions WHERE material_year='2nd' " );

                            $stmt->execute();
                            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                            
                            $arr = [];
                            foreach ($row as $name) {
                                array_push($arr, $name['material_name']);
                            }
                            $arr_filter = array_unique($arr);

                            if (empty($arr_filter)) { ?>
                            <div>
                                No materials are added yet
							</div>
                            <?php
                            } else {
                                foreach($arr_filter as $material) {
                                ?>
                                    	<a href="quiz.php?material=<?php echo $material ?>">
											<div><?php echo $material ?></div>
										</a>
                                <?php
                                }
                            }
                        ?>
					</div>	
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="year-section">
						<h2>3<sup>rd</sup> Year</h2>
						<?php 
                            $stmt = $con->prepare("SELECT material_name FROM db_questions WHERE material_year='3rd' " );

                            $stmt->execute();
                            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                            
                            $arr = [];
                            foreach ($row as $name) {
                                array_push($arr, $name['material_name']);
                            }
                            $arr_filter = array_unique($arr);

                            if (empty($arr_filter)) { ?>
                            <div>
                                No materials are added yet
							</div>
                            <?php
                            } else {
                                foreach($arr_filter as $material) {
                                ?>
                                    	<a href="quiz.php?material=<?php echo $material ?>">
											<div><?php echo $material ?></div>
										</a>
                                <?php
                                }
                            }
                        ?>
					</div>	
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="year-section">
						<h2>4<sup>th</sup> Year</h2>
						<?php 
                            $stmt = $con->prepare("SELECT material_name FROM db_questions WHERE material_year='4th' " );

                            $stmt->execute();
                            $row = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                            
                            $arr = [];
                            foreach ($row as $name) {
                                array_push($arr, $name['material_name']);
                            }
                            $arr_filter = array_unique($arr);

                            if (empty($arr_filter)) { ?>
                            <div>
                                No materials are added yet
							</div>
                            <?php
                            } else {
                                foreach($arr_filter as $material) {
                                ?>
                                    	<a href="quiz.php?material=<?php echo $material ?>">
											<div><?php echo $material ?></div>
										</a>
                                <?php
                                }
                            }
                        ?>
					</div>	
				</div>
				
			</div>
		</div>
	</section>
	<section class="footer">
	<div class="subfooter">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
							<div class="copyrights">&copy; 2020 <span class="highlight">AIChE SU SC</span>  Designed by<span class="highlight"> WEBSITE COMMITTEE</span>.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
								
<?php
	include 'includes/templates/footer.php';
?>