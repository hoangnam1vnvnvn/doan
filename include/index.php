<head>
  <title>Quản lý Cafe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  /* Remove the navbar's default rounded borders and increase the bottom margin */ 
  .navbar {
    margin-bottom: 50px;
    border-radius: 0;
  }
  
  /* Remove the jumbotron's default bottom margin */ 
  .jumbotron {
    margin-bottom: 0;
    padding-top: 0;
    padding-bottom: 0;
  }
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="trangchu.php">MILANO CAFE</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="trangchu.php">Quản lý Bàn</a></li>
          <li><a href="menu.php">Menu đồ uống</a></li>
          <li><a href="kho.php">Kho</a></li>
          <li><a href="nhaphang.php">Nhập hàng</a></li>
          <li><a href="doanhthu.php">Doanh thu</a></li>
          <li><a href="hoadon.php">Hóa đơn</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="user.php"><span class="glyphicon glyphicon-user"></span>Thông tin Nhân viên</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Đăng xuất</a></li>
        </ul>
      </div>
    </div>
  </nav>
</body>