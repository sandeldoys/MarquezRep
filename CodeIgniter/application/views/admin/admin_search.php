<?php
    session_start();   
?>

<!DOCTYPE html>

<head>  
    <title>Admin Search</title>
    <script src="<?php echo base_url();  ?>js/jquery-latest.js" type="text/javascript"></script>
    <script src="<?php echo base_url();  ?>js/jquery.tablesorter.js" type="text/javascript"></script>
    <script>
        $(document).ready(function() { 
            $("#myTable").tablesorter();
        }); 
    </script>
</head>

<body>
<form method="post">

	<a href='add_material'> Add Material </a><br>

     <label for="filter">Filter by:</label>
            <select name="filter">
                <option value="none">Any Field</option>
                <option value="author">Author</option>
                <option value="subject">Course</option>
                <option value="title">Title</option>
            </select>
      <label for="type">Type:</label>
            <select name="type">
                <option value="allTypes">All</option>
                <option value="book">Book</option>
                <option value="sp">SP</option>
                <option value="thesis">Thesis</option>
                <option value="references">References</option> 
                <option value="cd">CD</option>
                <option value="journals">Journals</option>
                <option value="magazine">Magazines</option>
            </select>          

     <label for="access">Accessible by:</label>
            <select name="access"> 
                    <option value="allAccess">---</option>
                    <option value="1">Student</option>
                    <option value="2">Faculty</option>
                    <option value="3">Room Use</option>
                    <option value="4">Student/Faculty</option>
            </select>
                Availability:
                <input type="radio" name="avail" value="1" id="available"/>
                <label for="available">Available</label>
                <input type="radio" name="avail" value="0" id="notavail"/>
                <label for="notavail">Not Available</label>
                <input type="radio" name="avail" value="allAvail" id="avail" checked="true"/>
                <label for="available">Both</label>

     <input type="text" name="search"/>

     <input type="submit" value="Search" name="search_books"/>

     <br/>
     <br/>
     <?php
            if($sql2->num_rows()==0){
                echo "No library material available";
                echo "<a href='admin'> Back </a><br>";
            }else{
                    echo "<table id='myTable' class='tablesorter'>
                        <thead>
                        <tr>
                        <th><center>Material ID</center></th>
                        <th><center>Course Class</center></th>
                        <th><center>Title</center></th>
                        <th><center>Author</center></th>
                        <th><center>Year Published</center></th>
                        <th><center>Type</center></th>
                        <td><center>Accessibility</center></td>
                        <td><center>Availability</center></td>
                        <th><center>Borrowed Count</center></th>
                        <th><center>Requirement</center></th>
                        <th><center>Rating</center></th>
                        <th><center>Quantity</center></th>
                        <td><center>Action</center></td>
                        </tr>
                        </thead>";
                    
                    echo "<tbody>";    
                    foreach ($sql2->result() as $q){
					
						$url1 = 'update';
						$url1 = rawurlencode($url1);
						$url1 .= "?flag=".urlencode($q->materialid);
						
						$url2 = 'delete';
						$url2 = rawurlencode($url2);
						$url2 .= "?flag=".urlencode($q->materialid);
                                 
                        echo "<tr>";
                        echo "<td><center>" . $q->materialid . "</center></td>";
                        echo "<td><center>" . $q->course . "</center></td>";
                        echo "<td><center>" . $q->name."</center></td>";
                        echo "<td><center>" . $q->lname .", ".$q->fname." ".$q->mname . "</center></td>";
                        echo "<td><center>" . $q->year . "</center></td>";
                        echo "<td><center>" . $q->type  . "</center></td>";

                            if($q->access==1) //student
                                $access = "Student";
                            else if($q->access==2)//faculty
                                $access = "Faculty";
                            else if($q->access==3)//room use
                                $access = "Room Use";
                            else if($q->access==4)//student/faculty
                                $access = "Student/Faculty";

                        echo "<td><center>" . $access . "</center></td>";

                            if($q->available==0) //not available
                                $avail = "Not available";
                            else if($q->available=1)//available
                                $avail = "Available";

                        echo "<td><center>" . $avail  . "</center></td>";
                        echo "<td><center>" . $q->borrowedcount . "</center></td>";

                        if($q->requirement==0){
                            $req = "none";
                        }else if($q->requirement==1){
                            $req = "consent of instructor";
                        }else if($q->requirement==2){
                            $req = "consent of owner";
                        }
                        echo "<td><center>" . $req . "</center></td>";
                        echo "<td><center>" . $q->rating . "</center></td>";
                        echo "<td><center>" . $q->quantity . "</center></td>";
                        echo "<td><center><a href='".html_escape($url1)."'><input type='button' value='UPDATE' /></center></td></a>";
						echo "<td><center><a href='".html_escape($url2)."'><input type='button' value='DELETE' /></center></a></td>";
                        echo "</tr>";
                    }
                   echo "</tbody>";
                echo "</table>"; 
            }
     ?>

    </form>
</body>