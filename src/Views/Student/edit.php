<h1>Edit task</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Student Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php if (true) echo $student->getName();?>">
    </div>

    <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" name="gender">
            <?php if ($student->getGender() == 1)
            {
                echo "<option value='1' selected='true'>Male</option> <option value='0'>Female</option>";
            } else {
                echo "<option value='1'>Male</option> <option value='0' selected='true'>Female</option>";
            }
            
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="dob">dob</label>
        <input type="date" class="form-control" id="dob" placeholder="Enter a dob" name="dob" value ="<?php if (true) echo $student->getdob();?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>