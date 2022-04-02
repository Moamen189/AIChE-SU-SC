<?php
    
    ob_start();

    session_start();

    if (isset($_SESSION['Username'])){
        $pagetitle = 'Dashboard';
        include 'includes/functions/functions.php';
        include 'includes/templates/header.php';
        include 'config/config.php';
    	include 'includes/templates/navbar.php';

        
        ?>

        <div class="container home-stats text-center">
            <h1>Dashboard</h1>
        </div>

        <div class="container">
            <div class="row">
                <h3>First Year</h3>
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Material Name</th>
                                <th>Manage</th>
                                <th>Add new Questions</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
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
                            <tr>
                                <td>No materials are added yet</td>
                            </tr>
                            <?php
                            } else {
                                foreach($arr_filter as $material) {
                                ?>
                                    <tr>
                                        <td><?php echo $material ?></td>
                                        <td><a href="questions.php?do=manage&material=<?php echo $material ?>"><button class="btn btn-primary">Manage Questions</button></a></td>
                                        <td><a href="questions.php?do=add&material=<?php echo $material ?>"><button  class="btn btn-success">Add Questions</button></a></td>
                                        <td><a href="material.php?do=delete&material=<?php echo $material ?>"><button class="btn btn-danger confirm">Delete Material</button></a></td>
                                        <td><a href="material.php?do=edit&material=<?php echo $material ?>"><button class="btn btn-primary">Edit Material</button></a></td>
                                    </tr>
                                <?php
                                }
                            }
                        ?>  
                        </tbody>
                        </table>
                    </div>
                </div>
                

                <h3>Second Year</h3>
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Material Name</th>
                                <th>Manage</th>
                                <th>Add new Questions</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
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
                            <tr>
                                <td>No materials are added yet</td>
                            </tr>
                            <?php
                            } else {
                                foreach($arr_filter as $material) {
                                ?>
                                    <tr>
                                        <td><?php echo $material ?></td>
                                        <td><a href="questions.php?do=manage&material=<?php echo $material ?>"><button class="btn btn-primary">Manage Questions</button></a></td>
                                        <td><a href="questions.php?do=add&material=<?php echo $material ?>"><button  class="btn btn-success">Add Questions</button></a></td>
                                        <td><a href="material.php?do=delete&material=<?php echo $material ?>"><button class="btn btn-danger confirm">Delete Material</button></a></td>
                                        <td><a href="material.php?do=edit&material=<?php echo $material ?>"><button class="btn btn-primary">Edit Material</button></a></td>
                                    </tr>
                                <?php
                                }
                            }
                        ?>  
                        </tbody>
                        </table>
                    </div>
                </div>

                <h3>Third Year</h3>
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Material Name</th>
                                <th>Manage</th>
                                <th>Add new Questions</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
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
                            <tr>
                                <td>No materials are added yet</td>
                            </tr>
                            <?php
                            } else {
                                foreach($arr_filter as $material) {
                                ?>
                                    <tr>
                                        <td><?php echo $material ?></td>
                                        <td><a href="questions.php?do=manage&material=<?php echo $material ?>"><button class="btn btn-primary">Manage Questions</button></a></td>
                                        <td><a href="questions.php?do=add&material=<?php echo $material ?>"><button  class="btn btn-success">Add Questions</button></a></td>
                                        <td><a href="material.php?do=delete&material=<?php echo $material ?>"><button class="btn btn-danger confirm">Delete Material</button></a></td>
                                        <td><a href="material.php?do=edit&material=<?php echo $material ?>"><button class="btn btn-primary">Edit Material</button></a></td>
                                    </tr>
                                <?php
                                }
                            }
                        ?>  
                        </tbody>
                        </table>
                    </div>
                </div>

                <h3>Fourth Year</h3>
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Material Name</th>
                                <th>Manage</th>
                                <th>Add new Questions</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
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
                            <tr>
                                <td>No materials are added yet</td>
                            </tr>
                            <?php
                            } else {
                                foreach($arr_filter as $material) {
                                ?>
                                    <tr>
                                        <td><?php echo $material ?></td>
                                        <td><a href="questions.php?do=manage&material=<?php echo $material ?>"><button class="btn btn-primary">Manage Questions</button></a></td>
                                        <td><a href="questions.php?do=add&material=<?php echo $material ?>"><button  class="btn btn-success">Add Questions</button></a></td>
                                        <td><a href="material.php?do=delete&material=<?php echo $material ?>"><button class="btn btn-danger confirm">Delete Material</button></a></td>
                                        <td><a href="material.php?do=edit&material=<?php echo $material ?>"><button class="btn btn-primary">Edit Material</button></a></td>
                                    </tr>
                                <?php
                                }
                            }
                        ?>  
                        </tbody>
                        </table>
                    </div>
                </div>
                
                <div class="clearfix"></div>
                <div style="padding-bottom:50px;" class="text-center">
                    
                    <a href="material.php?do=add"><button class="btn btn-primary btn-lg">Add new Material</button></a>
                </div>
            </div>
        </div>


   <?php 	include 'includes/templates/footer.php'; 

    }else{
		header('Location: index.php');
		exit();
	}

    ob_end_flush();
?>    