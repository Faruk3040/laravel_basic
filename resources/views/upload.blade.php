<h1>Upload File</h1>
@if (session('user'))
    <h3 style="color : green">{{ session('user') }} upload the file successfully</h3>

@endif
<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <br> <input type="file" name="file" placeholder="Select the File"> <br>
    <br> <button type="submit">Upload</button> <br>
</form>
