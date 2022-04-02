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

        $material_name = isset($_GET['material']) ? $_GET['material'] : '';
        
        if($do == 'add') {//add page?>
            <div class="container">
	    				<form class="form-horizontal" action="?do=insert" method="POST">
	    				<h1 class="text-center">Add Material</h1>
	    				<div class="form-group form-group-lg">
	    					<label class="col-sm-offset-2 col-sm-2 control-label">Material Name</label>
	    					<div class="col-sm-6">
	    						<input type="text" name="material_name" class="form-control"  autocomplete="off" required="required" placeholder="enter material name" /> 
	    					</div>
	    				</div>

	    				

	    				<div class="form-group form-group-lg">
	    					<label class="col-sm-offset-2 col-sm-2 control-label">Year</label>
	    					<div class="col-sm-6">
                            <select class="form-control" id="year_select" name="material_year">
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                                <option value="4th">4th</option>
                            </select>
	    					</div>
	    				</div>

	    				<div class="form-group">
	    					<div class="col-sm-offset-4 col-sm-6">
                                <div style="float:right">
                                    <input type="submit" value="Add Material" class="btn btn-primary"/>
                                    <a href="dashboard.php"><button class="btn btn-danger" type="button">Exit</button></a>
                                </div>
	    					</div>
	    				</div>
	    				</form>
	    			</div>

        
        <?php
        } elseif ($do == 'insert') {
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                echo "<h1 class='text-center'>Add Material</h1>";
                echo '<div class="container">';

                // get variables from the form

                $material_name =$_POST['material_name'];
                $material_year =$_POST['material_year'];
                
                // validate the form
                $formErrors = array();
                

                

                $check = checkItem("material_name" , "db_questions" , $material_name);

                if ($check == 1){
                    echo "<div class='container'>";
                    $themsg = "<div class='alert alert-danger'>sorry this user exists</div>";
                    redirectHome($themsg,'back' );
                    echo "</div>";
                }else {
                    //Insert the database with this info
                    $stmt = $con->prepare("INSERT INTO 
                                            db_questions(material_name,material_year,date)
                                            VALUES(:zmaterial_name,:zmaterial_year,now())");
                    $stmt->execute(array(

                        'zmaterial_name' => $material_name,
                        'zmaterial_year' => $material_year
                    ));	

                    $count = $stmt->rowCount();
                    // echo success message

                    $themsg = "<div class='alert alert-success'> $count RECORD INSERTED</div>" ;
                    redirectHome($themsg,'back',3);
                }
                
            }else{
                echo "<div class='container'>";
                $themsg = "<div class='alert alert-danger'>you cannot browse this page directly</div>";
                redirectHome($themsg ,null,3);
                echo "</div>";
            }
            echo "</div>";
        } elseif ($do == 'edit') { // edit material
            $stmt = $con->prepare("SELECT material_name, material_year FROM db_questions WHERE material_name = '$material_name' LIMIT 1 ");
            $stmt->execute();	
            $material = $stmt->fetch(\PDO::FETCH_ASSOC);
            
        
        ?>
            <div class="container">
	    				<form class="form-horizontal" action="?do=update&material=<?php echo $material_name ?>" method="POST">
	    				<h1 class="text-center">Add Material</h1>
	    				<div class="form-group form-group-lg">
	    					<label class="col-sm-offset-2 col-sm-2 control-label">Material Name</label>
	    					<div class="col-sm-6">
	    						<input type="text" name="material_name" class="form-control"  autocomplete="off" required="required" placeholder="enter material name" value="<?php echo $material['material_name'] ?>"/> 
	    					</div>
	    				</div>

	    				

	    				<div class="form-group form-group-lg">
	    					<label class="col-sm-offset-2 col-sm-2 control-label">Year</label>
	    					<div class="col-sm-6">
                            <select class="form-control" id="year_select" name="material_year"  value="<?php echo $material['material_year'] ?>">
                                <option value="1st" <?php if($material['material_year'] == '1st') {echo 'selected';} ?>>1st</option>
                                <option value="2nd" <?php if($material['material_year'] == '2nd') {echo 'selected';} ?>>2nd</option>
                                <option value="3rd" <?php if($material['material_year'] == '3rd') {echo 'selected';} ?>>3rd</option>
                                <option value="4th" <?php if($material['material_year'] == '4th') {echo 'selected';} ?>>4th</option>
                            </select>
	    					</div>
	    				</div>

	    				<div class="form-group">
	    					<div class="col-sm-offset-4 col-sm-6">
                                <div style="float:right">
                                    <input type="submit" value="Edit Material" class="btn btn-primary"/>
                                    <a href="dashboard.php"><button class="btn btn-danger" type="button">Exit</button></a>
                                </div>
	    					</div>
	    				</div>
	    				</form>
	    			</div>
        <?php
            
        } elseif ($do == 'update') {
            echo "<h1 class='text-center'>Update Material</h1>";
				echo "<div class='container'>";

                $material_name_db =$_POST['material_name'];
                $material_year_db =$_POST['material_year'];
                
                $stmt = $con->prepare("SELECT material_name, material_year FROM db_questions WHERE material_name = '$material_name'");
                $stmt->execute();	
                $material = $stmt->fetch(\PDO::FETCH_ASSOC);
                $count = $stmt->rowCount();
                
                
                if ($count > 0){ 
                    $stmt = $con->prepare("UPDATE db_questions SET 
                        material_name = ?,
                        material_year = ?
                        WHERE material_name = ?");
                    $stmt->execute(array(
                        $material_name_db,
                        $material_year_db,
                        $material_name
                    ));
                    $themsg = "<div class='alert alert-success'> $count 'Record Activated'</div>";
                    redirectHome($themsg);
                } else {
                    
                    $themsg = "<div class='alert alert-danger'>you cannot browse this page directly</div>";
                    redirectHome($themsg);
                    
                }
                echo "</div>";

        } elseif ($do == 'delete') {//delete material
            
            echo '<div class="container">';
            
            $material_name = $_GET['material'];

            $stmt = $con->prepare("SELECT material_year FROM db_questions WHERE material_name = '$material_name' LIMIT 1 ");
            $stmt->execute();	
            $material_year = $stmt->fetch(\PDO::FETCH_ASSOC);
            $material_year = $material_year['material_year'];
           
            $stmt = $con->prepare("DELETE FROM db_questions WHERE material_name = :zmaterial_name");
            $stmt->bindParam(":zmaterial_name" , $material_name);
            $stmt->execute();
            $themsg = "<div class='alert alert-success'> $material_name 'Record Deleted'</div>";
            redirectHome($themsg);
            
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