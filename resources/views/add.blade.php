<h1>Add Member</h1>
@if (session('user'))
    <h3 style="color : green">{{ session('user') }} user has been added</h3>

@endif
<form action="addmember" method="POST">
    @csrf
    <br><input type="text" name="user" placeholder="Enter Name"><br>
    <br><input type="text" name="email" placeholder="Enter Email"><br>
    <br><input type="password" name="password" placeholder="Enter password"><br>
    <br><button type="submit">Add Member</button><br>

</form>
