<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Email</title>
  </head>
  <body>
    <h2>Chào mừng {{$user['name']}}</h2>
    <br/>
    Email xác nhận đã được gửi đến {{$user['email']}} , Vui lòng kiểm tra email và xác nhận tài khoản
    <br/>
  </body>
</html>