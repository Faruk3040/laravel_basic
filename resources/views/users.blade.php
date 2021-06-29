<h1>User Page</h1>

<form action="users" method="POST">
    {{ method_field('PUT') }}
    @csrf
    <br><input type="text" name="user" placeholder="Enter Name"><br>
    <br><input type="password" name="password" placeholder="Enter password"><br>
    <br><button type="submit">Login</button><br>

</form>
