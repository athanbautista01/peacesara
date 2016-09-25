<?php
//Connect to MySQL
// require_once("database/connect.php");
//include the header
$title="Peacesara | Profile";
include("include/header.php");
?>
<hr>
<div class="container">
    <div class="col-lg-12">
        <h1>View User Profile</h1>
        <br>
    </div>
</div>
</div>
<div class="row">
    <div class="col-lg-12">
        <form runat="server" class="form-horizontal">

            <?php
                        //Create the query
            $query = "SELECT UserID, FirstName, LastName, Username, Email, Password, Birthday, Address, TypeID, DateRegistered, DateModified FROM user limit 1";

                        //Execute query
            $result = $conn->query($query); 
            if ($result->num_rows) {
                foreach ($conn->query($query) as $row)
                {

                    echo "<div align='left'><b><td>ID: </b> $row[UserID]</td><br>"; 
                    echo "<b><td>Name: </b><td>$row[FirstName] $row[LastName]</td><br>";
                    echo "<b><td>Username: </b><td>$row[Username]</td><br>";  
                    echo "<b><td>Email: </b><td>$row[Email]</td><br>";
                    echo "<b><td>Birthday: </b><td>$row[Birthday]</td><br>"; 
                    echo "<b><td>Address: </b><td>$row[Address]</td><br>";
                    echo "<b><td>Date Registered: </b><td>$row[DateRegistered]</td><br>"; 
                    echo "<b><td>Date Modified: </b><td>$row[DateModified]</td><br><br>"; 

                }
            }

            else

            {
                echo "<tr><td colspan='11'><h2 class='text-center'>No records found.</h2></td></tr>";
            }
            
            ?>          
        </tbody>
    </table>                  
</div>    
</form>
</div>
</div>
</div>
</div>
<hr>
<?php
//include the header
include("include/footer.php");
?>