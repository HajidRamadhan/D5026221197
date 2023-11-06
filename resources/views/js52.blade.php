<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="operasi.js"> </script>

</head>

<body>

    <div class="container">
        <form>
            <div class="form-group ">
                <label for="bil1">bilangan 1 : </label>
                <input type="number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">Bilangan 2 : </label>
                <input type="number" id="bil2" class="form-control">
            </div>
            <input type="button" class="btn btn-primary" value="penjumlahan" onclick="tambah()">
            <input type="button" class="btn btn-info" value="perkalian" onclick="kali()">
            <input type="reset" class="btn btn-danger" value="ulang">
            <h3>hasil : <div id="hasil"></div></h3>
        </form>


    </div>


</body>

</html>
