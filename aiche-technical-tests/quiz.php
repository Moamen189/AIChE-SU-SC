<?php
	$pagetitle = 'home';
	include 'includes/functions/functions.php';
	include 'includes/templates/header.php';
	include 'config/config.php';
	session_start();
	
	$material_name =  $_GET['material'];
	
	$stmt = $con->prepare("SELECT * FROM db_questions WHERE material_name = '$material_name' ORDER BY rand() LIMIT 10");
	$stmt->execute();	
	$questions = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    
	$q_id = array();
	foreach($questions as $value) {
		array_push($q_id , $value['id']);
	}
	$q_id = implode(',' , $q_id);

    
?>

	<div class="container">
		<div class="row">
			<h1 class="text-center"><?php echo $material_name ?></h1>
            <?php
            if (count($questions) > 1) {
                
				?>
				<form class="form-horizontal" action="result.php?material=<?php echo $material_name ?>&q_id=<?php echo $q_id ?>" method="POST">
	    				
				<?php
				foreach ($questions as $value => $question) {
                ?>
                
                        <div class="col-xs-12 question-table">
                            
                            <div class="question">
                                <h4><?php echo $value+1 ?>. <?php echo $question['question'] ?></h4>
                                <ul class="list-unstyled">
                                    <?php if(isset($question['ans_one']) && !empty($question['ans_one'])) {
                                        ?>
                                        <li>
										<div class="radio">
											<label>
												<input type="radio" name="ans_correct_<?php echo $question['id'] ?>" required value="A">
												<?php echo  $question['ans_one'] ?>
											</label>
										</div>
										</li>
										 
                                    <?php } ?>
                                    <?php if(isset($question['ans_two']) && !empty($question['ans_two'])) {
                                        ?>
                                        <li>
											<div class="radio">
												<label>
													<input type="radio" name="ans_correct_<?php echo $question['id'] ?>" required value="B">
													<?php echo  $question['ans_two'] ?>
												</label>
											</div>
										</li>
                                    <?php } ?>
                                    <?php if(isset($question['ans_three']) && !empty($question['ans_three'])) {
                                        ?>
                                        <li>
										<div class="radio">
											<label>
												<input type="radio" name="ans_correct_<?php echo $question['id'] ?>" required value="C">
												<?php echo  $question['ans_three'] ?>
											</label>
										</div>
										</li>
                                    <?php } ?>
                                    <?php if(isset($question['ans_four']) && !empty($question['ans_four'])) {
                                        ?>
                                        <li>
										<div class="radio">
											<label>
												<input type="radio" name="ans_correct_<?php echo $question['id'] ?>" required value="D">
												<?php echo  $question['ans_four'] ?>
											</label>
										</div>
										</li>
                                    <?php } ?>
                                </ul>
                               
                            </div>           
                        </div>
                        
                <?php
                }?>
						<div class="form-group" style="float:right;margin-top: 50px;margin-bottom: 50px;">
							<a href="index.php"><button  class="btn btn-success" type="button">Return to Menu</button></a>
							<input type="submit" value="Submit" class="btn btn-primary"/>
						</div>
	    			</form>
				<?php
            } else {
                echo 'No questions are added yet.';
            }
            
        
        ?>
            </div>
        </div>

	
<?php
	include 'includes/templates/footer.php';
?>