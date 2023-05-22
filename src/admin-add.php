<?php
include 'header.php';
?>
<?php
include 'dbconnect.php';
?>


<main>

        <!-- min trip info for the two cities options -->
        <section class="adventures">
            <h1>Admin - Add Adventure</h1>
            
            <form action="admin-confirm.php" method="POST">
            <div class="form-add">
                <p>Input details about the trip</p>
            </div>
            
                <div class="form-add">
                    <label for="heading">Heading</label>
                    <input type="text" name="heading" id="heading">
                </div>
                <div class="form-add">
                    <label for="date">Trip Date</label>
                    <input type="date" name="date" id="date"> 
                </div>
                <div class="form-add">
                    <label for="duration">Duration</label>
                    <input type="text" name="duration" id="duration"> 
                </div>
                <div class="form-add">
                    <label for="summary">Summary</label>
                    <input type="text" name="summary" id="summary"> 
                </div>
                <input type="submit" value="Submit" class ="btn-submit">


            </form>
        </section>
   </main>




<?php
include 'footer.php';
?>
