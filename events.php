        <?php
            //Connect to MySQL
            require_once("database/connect.php");
            //include the header
            $title="Peacesara | Events";
            include("include/header.php");
        ?>
        <hr>
        <section>
            <div class="container">

                <div class="col-lg-9 heading text-center">
                    <h2>EVENTS</h2>
                    <hr>
                </div>
                <div class="col-lg-3">
                <br>

                <a class="btn btn-default" href="events-action.php" role="button"><font size = "5px"> Take Action</font></a>
                </div>
                <div class="col-lg-12">
                        <?php
                            //Build the query to use to fetch records
                            $query = "SELECT event.EventID, event.EventImage, event.EventTitle, event.EventDate 
                            FROM event"; 
                            
                            //Fetch records from MySQL
                            $result = $conn->query($query); 
                            if ($conn->error) {
                              die("Query failed: " . $conn->error);
                            }
                            //If there are records fetched, iterate through the data set
                            if ($result->num_rows) {    
                              while ($row = mysqli_fetch_assoc($result)) {
                            
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <br>
                            <div class="z text-center">


                                <img height="300px" width= "300px" src="<?php echo $row['EventImage'] ?>" alt="Image">
                                <h3><?php echo $row['EventDate'] ?></h3>
                                <h5><?php echo $row['EventTitle'] ?></h5>
                                

                            </div>
                            <br>
                        </div>
                        <?php
                            }
                            } else {
                              echo "No event to show.";
                            }
                            
                        ?>
                        <div class="col-lg-12">
                            <!-- Pager -->
                            <ul class="pager">
                                <li class="previous">
                                    <a href="#">&larr; Older</a>
                                </li>
                                <li class="next">
                                    <a href="#">Newer &rarr;</a>
                                </li>
                            </ul>
                        </div>
                </div>
            </div>
        </section>
        <hr>
        <?php
            include("include/footer.php");
        ?>