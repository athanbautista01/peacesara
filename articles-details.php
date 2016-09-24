        <?php
            //Connect to MySQL
            require_once("database/connect.php");
            //include the header
            $title="Peacesara | Article Details";
            include("include/header.php");
        ?>
        <hr>
         <section>
            <div class="container">

                <div class="col-lg-12 heading text-center">
                    <h2>ARTICLES</h2>
                </div>
                <div class="col-lg-12">
                        <?php
                            //Build the query to use to fetch records
                            $query = "SELECT ArticleID, Title, Author, Date, Image, Description, Source FROM Articles where articleid = 1";

                            //Fetch records from MySQL
                            $result = $conn->query($query); 
                            if ($conn->error) {
                              die("Query failed: " . $conn->error);
                            }
                            //If there are records fetched, iterate through the data set
                            if ($result->num_rows) {    
                              while ($row = mysqli_fetch_assoc($result)) {
                            
                        ?>
                        <div class="col-lg-12 col-md-6 col-sm-6">
                            <br>
                            <div class="z text-center">
                                <a href="include/article.php?ID=<?php echo $row['ArticleID'] ?>"></a>
                                <h5 class="a1"><b>Title: </b><?php echo $row['Title'] ?></h5>
                                <h5 class="a1"><b>Author: </b><?php echo $row['Author'] ?></h5>
                                <h5 class="a1"><b>Date: </b><?php echo $row['Date'] ?></h3>
                                <center><img class="img-responsive" src="<?php echo $row['Image'] ?>" alt="" ></center>
                                <p class="a"><?php echo $row['Description'] ?></p>
                                <h5 class="aa"><b>Source: </b> <?php echo $row['Source'] ?></h5>  
                    
                            </div>
                            <br>
                        </div>
                        <?php
                            }
                            } else {
                              echo "No article to show.";
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
            //include the header
            $title="Pet Lane";
            include("include/footer.php");
        ?>