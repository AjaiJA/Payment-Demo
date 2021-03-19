<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CA Test 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        if(isset($_GET['result'])){
            $alert=($_GET['result']=='Transaction Successfull') ? 'success': 'danger';
            $err=$_GET['result']=='Email Already Taken' ? $_GET['result']."  <a href='./login.php'>Login</a>" : $_GET['result'];
                echo "<div class='alert text-center alert-".$alert." alert-dismissible fade show' role='alert'>
                        <strong>".$err."</strong> .
                        <button type='button' class='btn-close' data-bs-dismiss='alert' onclick='closeError();' aria-label='Close'></button>
                    </div>
                    <style>.display-register{top:-50px;}.display-get-bio{top:-10px;}</style>";
        }
    ?>
    <div class="container-fluid">
        <div class="payment-formm">
            <form onsubmit="checkValidation(this);" action="#" method="POST">
                <h2 class="text-primary">Checkout</h2>
                <div class="row">
                    <div class="col">
                        <label for="payment">PAYMENT METHOD</label>
                        <select class="form-select form-select-lg mb-3" id="payment" name="payment-method" aria-label=".form-select-lg example">
                            <option value="Visa" selected>VISA</option>
                            <option value="Master card">Master Card</option>
                            <option value="Gpay">Gpay</option>
                            <option value="Paytm">Paytm</option>
                            <option value="ICICI">ICICI</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="name">CARD NAME</label>
                        <input type="text" name="card-name" id="name" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="number">CARD NUMBER</label>
                        <div class="input-group mb-3">
                            <input type="number" name="card-number" id="number" class="form-control">
                            <img src="./visa.png" height="50px" alt="visa">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="expiry">Expiration Date</label>
                        <input type="date" class="form-control" id="expiry" name="expiry-date">
                    </div>
                    <div class="col">
                        <label for="cvv-code">CVV CODE</label>
                        <input type="number" class="form-control" name="cvvcode" id="cvv-code">
                    </div>
                </div>
                <div class="row price">
                    <div class="col">
                        <label for="total-price">TOTAL PRICE</label>
                        <h4 class="text-primary">$132,90</h4>
                        <input type="hidden" value="132.90" name="amount">
                    </div>
                    <div class="col">
                        <button type="submit" name="buy-now" class="btn btn-primary">Buy now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>
</html>