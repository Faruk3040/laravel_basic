<h1>User Login</h1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username " placeholder="enter user name">
    <br>
    <span style="color: red">
        @error('username')
            {{ $message }}
        @enderror
    </span>
    <br>
    <input type="password" name="userpassword " placeholder="enter user password">
    <br>
    <span style="color: red">
        @error('userpassword')
            {{ $message }}
        @enderror
    </span>
    <br>
    <br> <button type="submit">Login</button>

</form>

//
<x-header data="user Component Header" />
@include('header')

@if ($users == 'Faruk')
    <h3>Hi {{ $users }}</h3>
@elseif ($users =='Sam')
    <h3>Hello {{ $users }}</h3>
@else
    <h3>Unknown User</h3>
@endif


@for ($i = 0; $i < 10; $i++)
    <h4>{{ $i }}</h4>
@endfor

@foreach ($users as $user)
    <h4>{{ $user }}</h4>
@endforeach

@include('inner')
@foreach ($users as $item)
    <h3>{{ $item }}</h3>
@endforeach

<script>
    var data = @json($users);
    console.log(data[0]);
</script>

//api http clint

<h1>This is User Page</h1>
<h3>User List</h3>
<table border="2">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profil Photo</td>
    </tr>
    @foreach ($collection as $item)
        <tr>
            <td>{{ $item['id'] }}</td>
            <td>{{ $item['first_name'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td><img src={{ $item['avatar'] }}></td>
        </tr>

    @endforeach
</table>

<h2>Hello,{{ session('user') }}</h2>

<a href="/logout">Logout</a>
