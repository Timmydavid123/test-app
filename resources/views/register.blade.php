<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="border: 2px solid gray">
    <h1>Reg page</h1>
    <form action='/register' method="POST">
         @csrf
        <input type="text" placeholder='name' name='name'>
        <br> <br> <br>
        <input type="email" placeholder='email' name='email'>
        <br> <br> <br>
        <input type="password" placeholder='password' name='password'>
        <br> <br> <br>
        <button> Reg </button>
</form>
   </div>
</body>
</html>