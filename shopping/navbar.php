<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">7-11 eleven</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">รายการสินค้า</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php">ตะกร้าสินค้า <?php echo $meQty; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="order_list.php">รายการสั่งซื้อ</a>
        </li>
      </ul>
     </div>
  </div>
</nav>