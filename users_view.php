<?php
$con = mysqli_connect("localhost", "root", "", "e-learning");

// Check if db connection success
if (mysqli_connect_errno()) {
    die("Failed to connect: " . mysqli_connect_errno());
}
?>

<?php
    require "includes/classes/Header.php";

    $header = new Header("Admin","adminpanel.css");
    $header->output();
?>
<body>

<?php
         
         require "includes/config.php";
    include "includes/components/navbaradmin.php";
    require "includes/classes/Course.php";

                    $coursesResult = mysqli_query($con,"SELECT * FROM users");
                    
                    if($coursesResult){
                        echo "<table>";
                        while($course = mysqli_fetch_assoc($coursesResult)){
                            // Html list template
                            
                         

                            echo "<tr>";
                            echo "<td>".$course['id']."</td>";
                            echo "<td>".$course['fname'].$course['lname']."</td>";
                            echo "<td>".$course['email']."</td>";
                            echo "<td>".$course['username']."</td>";
                            
                            
                            echo "</tr>";




                               
                                
                        }
                        echo "</table>";
                    }
                ?>
    </body>