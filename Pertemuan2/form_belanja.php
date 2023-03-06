<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body class="row m-3">
    <div class="col-8">

        <form>
        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer</label> 
            <div class="col-8">
            <input id="customer" name="customer" placeholder="Masukan nama customer" type="text" class="form-control" required="required">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Radio Buttons</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv" required="required"> 
                <label for="radio_0" class="custom-control-label">TV</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
                <label for="radio_1" class="custom-control-label">KULKAS</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesin cuci" required="required"> 
                <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
            <div class="col-8">
            <input id="jumlah" name="jumlah" placeholder=" jumlah" type="text" class="form-control" required="required">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
</div>

<div class="col-4">
    <ul class="list-group">
        <li class="list-group-item active">Daftar Harga</li>
        <li class="list-group-item">TV: 4.200.000</li>
        <li class="list-group-item">Kulkas: 3.100.000</li>
        <li class="list-group-item">Mesin Cuci: 3.000.000</li>
        <li class="list-group-item active">Harga Dapat Berubah Setelah</li>
    </ul>
</div>

<hr class="col-12">

</body>

</html>