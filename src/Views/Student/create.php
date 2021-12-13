<h1>Create Students</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name">
    </div>
    <div class="form-group">
        <label for="dob">dob</label>
        <input type="date" class="form-control" id="dob" placeholder="Enter a dob" name="dob">
    </div>
    <div class="form-group">
        <label for="gender">gender</label>
        <select class="form-control" id="gender" name="gender">
            <option value="1">Male</option>
            <option value="0">Female</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>