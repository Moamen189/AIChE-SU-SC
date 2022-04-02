<?php
ob_start();

session_start();
$pagetitle = 'QUIZ | AIChE SU SC';
include 'includes/functions/functions.php';
include 'includes/templates/header.php';
include 'config/config.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $material_name = isset($_GET['material']) ? $_GET['material'] : 'null';
    $q_id = isset($_GET['q_id']) ? $_GET['q_id'] : 'null';
    $q_id_arr =  explode(',',$q_id);

    echo "<h1 class='text-center'>" . $material_name  ."</h1>";
    echo '<div class="container">';
    echo '<div class="row">';
    
    
    $number = count($q_id_arr);
    $answers = array();
    foreach($q_id_arr as $value) {
        $x = 'ans_correct_' . $value;
        array_push($answers, $_POST[$x]);
    }
    
    
    // validate the form
    $formErrors = array();
    
        $correct_ans = array();
        foreach($q_id_arr as $value) {
            $stmt = $con->prepare("SELECT ans_correct FROM db_questions WHERE material_name='$material_name' AND id = '$value'");
            $stmt->execute();
            $db_answers = $stmt->fetch(\PDO::FETCH_ASSOC);
            $db_answers = implode('',$db_answers);
            array_push($correct_ans, $db_answers);
        }
    if(count($correct_ans) == count($answers)) {
        $y=0;
        for($x=0; $x<count($correct_ans) ; $x++) {
            if($correct_ans[$x] == $answers[$x]) {
                $y++;
            }
        }?>
            <div class='alert alert-success'>
                you answered correctly <strong> <?php echo $y ?></strong> questions out of <?php echo $number ?>.
            </div>
            <?php
				foreach ($q_id_arr as $value => $question) {
                    $stmt = $con->prepare("SELECT * FROM db_questions WHERE material_name='$material_name' AND id = '$question'");
                    $stmt->execute();
                    $question = $stmt->fetch(\PDO::FETCH_ASSOC);
                ?>
                
                        <div class=" question-table" <?php if($answers[$value] != $correct_ans[$value]) { echo "style='border: 1px solid red' "; } ?>>
                            
                            <div class="question">
                                <h4><?php echo $value+1 ?>. <?php echo $question['question'] ?></h4>
                                <ul class="list-unstyled">
                                    <?php if(isset($question['ans_one']) && !empty($question['ans_one'])) {
                                        ?>
                                        <li>
										<div class="radio">
											<label>
												<input type="radio" name="ans_correct_<?php echo $question['id'] ?>" required value="A" <?php echo ($answers[$value]=='A')?'checked':'' ?> disabled>
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
													<input type="radio" name="ans_correct_<?php echo $question['id'] ?>" required value="B" <?php echo ($answers[$value]=='B')?'checked':'' ?> disabled>
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
												<input type="radio" name="ans_correct_<?php echo $question['id'] ?>" required value="C" <?php echo ($answers[$value]=='C')?'checked':'' ?> disabled>
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
												<input type="radio" name="ans_correct_<?php echo $question['id'] ?>" required value="D" <?php echo ($answers[$value]=='D')?'checked':'' ?> disabled>
												<?php echo  $question['ans_four'] ?>
											</label>
										</div>
										</li>
                                    <?php } ?>
                                </ul>
                                <?php 
                                    if($answers[$value] == $correct_ans[$value]) {
                                        echo "<span style='color:green'>Ans:" . $question['ans_correct'] . "</span>";
                                    } else {
                                        echo "<span style='color:red'>Ans:" . $question['ans_correct'] . "</span>";
                                    }
                                ?>
                               
                            </div>           
                        </div>
                        
                <?php
                }?>
            <div class="text-center " style="margin-top:30px;margin-bottom:50px;">
                <a href="quiz.php?material=<?php echo $material_name ?>"><button  class="btn btn-success">New Quiz</button></a>
                <a href="index.php"><button  class="btn btn-primary">Return to Menu</button></a>
            </div>
        
        <?php
    }
        
    
}else{
    echo "<div class='container'>";
    $themsg = "<div class='alert alert-danger'>you cannot browse this page directly</div>";
    redirectHome($themsg ,'null',1);
    echo "</div>";
}
echo "</div>";
echo "</div>";