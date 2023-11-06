<html>
    <head>
        <title>Papperoni Pizza</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="bg-dark">
        <div class="container-fluid text-center">
        <img src="{{ asset('gambar/dominos.png') }}" width="300px">
        </div>

        <div class="container">
            <div class="row mr-1">
                <div class="col-3">
                    <img src="{{ asset('gambar/pizza2.jpg') }}" width="70px" height="70px">
                </div>
                <div class="col-3">
                    <img src="{{ asset('gambar/pizza2.jpg') }}" width="70px" height="70px">
                </div>
                <div class="col-3">
                    <img src="{{ asset('gambar/pizza2.jpg') }}" width="70px" height="70px">
                </div>
                <div class="col-3">
                    <img src="{{ asset('gambar/pizza2.jpg') }}" width="70px" height="70px">
                </div>
            </div>
        </div>

        <div class="text ml-3">
            <h5 style="
                text-align: left;
                text-decoration: solid;
                color: white;"
            >Pepperoni Pizza </h5>
        </div>

        <div class="text ml-3">
            <h3 style="
                text-align: left;
                text-decoration: solid;
                color: orange;"
            >$10.00 </h3>
        </div>

        <div class="text ml-3 mb-3">
            <h7 style="
                text-align: left;
                text-decoration: solid;
                color: rgb(194, 194, 194);"
            >A traditional Neapolitan Pizza topped with tomato sauce, fresh mozzarella cheese, basil leaves, and drizzied with olive oil. </h7>
            <span class="font-weight-bold text-info">
                Read More
            </span>
        </div>

        <div class="text ml-3">
            <h5 style="
                text-align: left;
                text-decoration: solid;
                color: rgb(194, 194, 194);"
            >Size </h5>
        </div>

        <div class="btn-outline-primary ml-3 mb-3">
            <button type="button" class="btn btn-primary btn-sm">S</button>
            <button type="button" class="btn btn-primary btn-sm">M</button>
            <button type="button" class="btn btn-primary btn-sm">L</button>
        </div>

        <div class="text ml-3 mb-3">
            <h5 style="
                text-align: left;
                text-decoration: solid;
                color: rgb(194, 194, 194);"
            >Ingredients </h5>
        </div>

        <div class="container mb-5">
            <img src="{{  asset('gambar/tomat.png') }}" width="50px">
            <img src="{{ asset('gambar/onion.png') }}" width="50px">
            <img src="{{ asset('gambar/leaves.png') }}" width="50px">
        </div>

        <div class="container">
            <div class="row ml-1 mt-5">1
                <button type="button" class="btn btn-secondary ml-2 col-2">
                    <img src="{{ asset('gambar/bag.png') }}" width="50px">
                </button>
                <div class="col-1"></div>
                <button type="button" class="btn btn-primary ml-2 col-8">Order Now</button>

            </div>
        </div>
    </body>
</html>
