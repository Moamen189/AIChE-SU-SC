<?php
    
    ob_start();

    session_start();

    if (isset($_SESSION['Username'])){
        $pagetitle = 'Add Material';
        include 'includes/functions/functions.php';
        include 'includes/templates/header.php';
        include 'config/config.php';
    	include 'includes/templates/navbar.php';

        $do = isset($_GET['do']) ? $_GET['do'] : 'add' ;
        $material_name = $_GET['material'];
        $id = isset($_GET['id']) ? $_GET['id'] : 'null';
        
        $stmt = $con->prepare("SELECT material_year FROM db_questions WHERE material_name = '$material_name' LIMIT 1 ");
                    $stmt->execute();	
                    $material_year = $stmt->fetch(\PDO::FETCH_ASSOC);
                    $material_year = $material_year['material_year'];
        if($do == 'manage'){// Manage Page
            ?>
            <div class="container">
                <div class="row">
                    <h1 class="text-center"><?php echo $material_name ?></h1>
            <?php
            $stmt = $con->prepare("SELECT * FROM db_questions WHERE material_name = '$material_name' ");
            $stmt->execute();	
            $questions = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            if (count($questions) > 1) {
                foreach ($questions as $value => $question) {
                ?>
                
                        <div class="col-xs-12 question-table">
                            
                            <div class="question">
                                <h4><?php echo $value+1 ?>. <?php echo $question['question'] ?></h4>
                                <ul class="list-unstyled">
                                    <?php if(isset($question['ans_one']) && !empty($question['ans_one'])) {
                                        ?>
                                        <li>A. <?php echo  $question['ans_one'] ?></li>
                                    <?php } ?>
                                    <?php if(isset($question['ans_two']) && !empty($question['ans_two'])) {
                                        ?>
                                        <li>B. <?php echo  $question['ans_two'] ?></li>
                                    <?php } ?>
                                    <?php if(isset($question['ans_three']) && !empty($question['ans_three'])) {
                                        ?>
                                        <li>C. <?php echo  $question['ans_three'] ?></li>
                                    <?php } ?>
                                    <?php if(isset($question['ans_four']) && !empty($question['ans_four'])) {
                                        ?>
                                        <li>D. <?php echo  $question['ans_four'] ?></li>
                                    <?php } ?>
                                </ul>
                                <span style="color:red">Ans: <?php echo $question['ans_correct'] ?></span>
                                <div class="questions-control">
                                    <a href="questions.php?do=edit&material=<?php echo $material_name ?>&id=<?php echo $question['id'] ?>"><button class="btn btn-primary">Edit</button></a>
                                    <a href="questions.php?do=delete&material=<?php echo $material_name ?>&id=<?php echo $question['id'] ?>"><button class="btn btn-danger confirm">Delete</button></a>
                                </div>
                            </div>           
                        </div>
                        
                <?php
                }
            } else {
                echo 'No questions are added yet.';
            }
            
        
        ?>
                <div style="float:right;margin-top: 50px;margin-bottom: 50px;">
                    <a href="questions.php?do=add&material=<?php echo $material_name ?>"><button  class="btn btn-success">Add Questions</button></a>
                    <a href="dashboard.php"><button  class="btn btn-primary">Return to dashboard</button></a>
                </div>
            </div>
        </div>
        
        <?php    
        } elseif($do == 'add') {//add page?>
            <div class="container">
	    				<form class="form-horizontal" action="?do=insert&material=<?php echo $material_name ?>" method="POST">
	    				<h1 class="text-center">Add Questions</h1>
	    				<div class="form-group form-group-lg">
	    					<label class="col-sm-offset-2 col-sm-2 control-label">Questions</label>
	    					<div class="col-sm-6">
	    						<textarea type="text" name="question" class="form-control"  autocomplete="off" required="required" placeholder="enter material name"></textarea> 
	    					</div>
	    				</div>
	    				<div class="form-group form-group-lg">
	    					<label class="col-sm-offset-2 col-sm-2 control-label">Answer</label>
	    					<div class="col-sm-6">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ans_correct" required value="A">
                                        <input type="text" name="ans_one" class="form-control"  autocomplete="off" required="required" placeholder="enter an answer" /> 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ans_correct" value="B">
                                        <input type="text" name="ans_two" class="form-control"  autocomplete="off" required="required" placeholder="enter an answer" />
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ans_correct" value="C">
                                        <input type="text" name="ans_three" class="form-control"  autocomplete="off" placeholder="enter an answer" />
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ans_correct" value="D">
                                        <input type="text" name="ans_four" class="form-control"  autocomplete="off" placeholder="enter an answer" />
                                    </label>
                                </div>
	    					</div>
	    				</div>

	    				<div class="form-group">
	    					<div class="col-sm-offset-4 col-sm-6">
	    						<input type="submit" value="Add Question" class="btn btn-primary btn-lg"/> 
	    					</div>
	    				</div>
	    				</form>
	    			</div>

        <div class="container">
            <div class="row">
                
                <div class="clearfix"></div>
                <div>
                    <a href="dashboard.php"><button>Exit</button></a>
                </div>
            </div>
        </div>
        <?php
        } elseif ($do == 'insert') {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                echo "<h1 class='text-center'>EDIT MEMBER</h1>";
                echo '<div class="container">';

                // get variables from the form

                
                $question =$_POST['question'];
                $ans_one =$_POST['ans_one'];
                $ans_two =$_POST['ans_two'];
                $ans_three =$_POST['ans_three'];
                $ans_four =$_POST['ans_four'];
                $ans_correct = $_POST['ans_correct'];
                
                // validate the form
                $formErrors = array();
                
                    
                    //Insert the database with this info
                    $stmt = $con->prepare("INSERT INTO 
                                            db_questions(material_name,material_year,question,ans_one,ans_two,ans_three,ans_four,ans_correct,date)
                                            VALUES(:zmaterial_name,:zmaterial_year,:zquestion,:zans_one,:zans_two,:zans_three,:zans_four,:zans_correct,now())");
                    $stmt->execute(array(
                        'zmaterial_name' => $material_name,
                        'zmaterial_year' => $material_year,
                        'zquestion' => $question,
                        'zans_one' => $ans_one,
                        'zans_two' => $ans_two,
                        'zans_three' => $ans_three,
                        'zans_four' => $ans_four,
                        'zans_correct' => $ans_correct
                    ));

                    $count = $stmt->rowCount();
                    // echo success message

                    $themsg = "<div class='alert alert-success'> $count RECORD INSERTED</div>" ;
                    redirectHome($themsg,'back',1);
                
                
            }else{
                echo "<div class='container'>";
                $themsg = "<div class='alert alert-danger'>you cannot browse this page directly</div>";
                redirectHome($themsg ,null,1);
                echo "</div>";
            }
            echo "</div>";
        } elseif($do == 'edit') {//Edit questions
            $stmt = $con->prepare("SELECT * FROM db_questions WHERE id = '$id' LIMIT 1 ");
            $stmt->execute();	
            $question = $stmt->fetch(\PDO::FETCH_ASSOC);
        
        ?>
            <div class="container">
	    				<form class="form-horizontal" action="?do=update&material=<?php echo $material_name ?>&id=<?php echo $id ?>" method="POST">
	    				<h1 class="text-center">Edit Question</h1>
	    				<div class="form-group form-group-lg">
	    					<label class="col-sm-offset-2 col-sm-2 control-label">Questions</label>
	    					<div class="col-sm-6">
	    						<textarea type="text" name="question" class="form-control"  autocomplete="off" required="required" placeholder="enter material name"><?php echo $question['question'] ?></textarea> 
	    					</div>
	    				</div>
	    				<div class="form-group form-group-lg">
	    					<label class="col-sm-offset-2 col-sm-2 control-label">Answer</label>
	    					<div class="col-sm-6">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ans_correct" required value="A" <?php echo ($question['ans_correct']=='A')?'checked':'' ?> />
                                        <input type="text" name="ans_one" class="form-control"  autocomplete="off" required="required" placeholder="enter an answer" value="<?php echo $question['ans_one'] ?>"/> 
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ans_correct" value="B" <?php echo ($question['ans_correct']=='B')?'checked':'' ?>>
                                        <input type="text" name="ans_two" class="form-control"  autocomplete="off" required="required" placeholder="enter an answer"  value="<?php echo $question['ans_two'] ?>" />
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ans_correct" value="C" <?php echo ($question['ans_correct']=='C')?'checked':'' ?>>
                                        <input type="text" name="ans_three" class="form-control"  autocomplete="off"  placeholder="enter an answer"  value="<?php echo $question['ans_three'] ?>"/>
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="ans_correct" value="D" <?php echo ($question['ans_correct']=='D')?'checked':'' ?>>
                                        <input type="text" name="ans_four" class="form-control"  autocomplete="off" placeholder="enter an answer"  value="<?php echo $question['ans_four'] ?>"/>
                                    </label>
                                </div>
	    					</div>
	    				</div>

	    				<div class="form-group">
	    					<div class="col-sm-offset-4 col-sm-6">
	    						<input type="submit" value="Update Question" class="btn btn-primary btn-lg"/> 
	    					</div>
	    				</div>
	    				</form>
	    			</div>

        <div class="container">
            <div class="row">
                
                <div class="clearfix"></div>
                <div>
                    <a href="dashboard.php"><button>Exit</button></a>
                </div>
            </div>
        </div>
        <?php

        } elseif ($do == 'update') {
            echo "<h1 class='text-center'>Activate Members</h1>";
				echo "<div class='container'>";

                $question =$_POST['question'];
                $ans_one =$_POST['ans_one'];
                $ans_two =$_POST['ans_two'];
                $ans_three =$_POST['ans_three'];
                $ans_four =$_POST['ans_four'];
                $ans_correct = $_POST['ans_correct'];
                
                $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;
                $stmt = $con->prepare("SELECT * FROM db_questions WHERE id = ? LIMIT 1" );
                $stmt->execute(array($id));
                $row = $stmt->fetch(); 
                $count = $stmt->rowCount();
                
                if ($count > 0){ 
                    $stmt = $con->prepare("UPDATE db_questions SET 
                        question = ?,
                        ans_one = ?,
                        ans_two = ?,
                        ans_three = ?,
                        ans_four = ?,
                        ans_correct = ?
                        WHERE id = ?");
                    $stmt->execute(array(
                        $question,
                        $ans_one,
                        $ans_two,
                        $ans_three,
                        $ans_four,
                        $ans_correct,
                        $id
                    ));
                    $themsg = "<div class='alert alert-success'> $count 'Record Activated'</div>";
                    redirectHome($themsg);
                } else {
                    
                    $themsg = "<div class='alert alert-danger'>you cannot browse this page directly</div>";
                    redirectHome($themsg);
                    
                }
                echo "</div>";

        } elseif($do == 'delete') {

            echo '<div class="container">';
            
            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? intval($_GET['id']) : 0;

            $stmt = $con->prepare("SELECT id FROM db_questions WHERE id = '$id' LIMIT 1 ");
            $stmt->execute();
            $stmt->execute(array($id));
            $row = $stmt->fetch(); 
            
            $stmt = $con->prepare("DELETE FROM db_questions WHERE id = :zid");
			$stmt->bindParam(":zid" , $id);
			$stmt->execute();
            $themsg = "<div class='alert alert-success'> $id 'Record Deleted'</div>";
            redirectHome($themsg,'back',2);
            
            echo '</div>';

        }
        
        ?>




   <?php 	include 'includes/templates/footer.php'; 

    }else{
		header('Location: index.php');
		exit();
	}

    ob_end_flush();
?>    