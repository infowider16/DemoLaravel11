<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>
<form method="post" action="{{route('login')}}">
    @csrf
    <div style="padding: 8px">
    <label>Email</label>
    <input type="text" name="email" placeholder="Enter Email" >
    </div>
    <div style="padding: 8px">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter Password" >
    </div>
    <div style="padding: 8px">
        <button type="submit" >Submit</button>
    </div>

</form>

</body>
</html>
