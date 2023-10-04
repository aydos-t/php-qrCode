<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP-QrCode</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js">
    </script>
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <h3>QR Generation Form</h3><br/>
        <div class="box">
            <form method="post" action="qr-code.php">
                <div class="form-group" style="width: 40%">
                    <label>QR Text</label>
                    <input type="text" name="qrtext" id="qrtext" placeholder="Enter a link to generate or write any text" required
                           data-parsley-pattern="^[a-zA-Z]+$" data-parsley-trigger="keyup" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="generate-btn" value="QR Generate" class="btn btn-success"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>