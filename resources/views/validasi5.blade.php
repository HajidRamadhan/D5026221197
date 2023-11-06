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

    <script>
        function validateForm()
        {
            console.log("ini baris 16");
            //return false;  //dimanapun ketemu return, akan exit function
            //perintah bawahnya tidak akan dijalankan
            console.log("ini baris 18");
            return true; //dalam satu function, bisa ada lebih dari 1 return
            console.log("ini baris 20");
        }

        function validate(){
            var bil1 = document.getElementById("bil1");
            var bil2 = document.getElementById("bil2");
            var nrp = document.getElementById("nrp");

            if (bil1.value == "" && bil2.value== "" && nrp.value == "" ) ///Isinya lupa gak diisi
            {
                alert("Bilangan 1, 2 dan nrp haruus diisi");         //urutan mempengaruhi /
                return false;
            }if( bil1.value == ""){
                alert("Bilangan 1 harus diisi");
                return false;
            }if(bil2.value == "" && nrp.value == ""){
                alert("Bilangan 2 dan nrp harus diisi");
                bil2.focus();
                return false;
            }if(nrp.value == ""){
                alert("Bilangan NRP harus diisi!!");
                nrp.placeholder = "Mohon isi Nrp";
                nrp.focus();
                return false;
             }if(nrp.value.length != 10){
                alert("Bilangan NRP HARUS 10 ANGKA");
                nrp.focus();
                return false;
            }if (isNaN(nrp.value)){
                alert("Bilangan NRP HARUS DIISI ANGKA");
                nrp.focus();
                return false;
            }else{
                return true;
            }


            // if(bil1.value == ""){
            //     alert("Bilangan 1 harus diisi");
            //     bil1.focus();
            //     return false;
            // }
            // if(bil2.value == ""){
            //     //alert("Bilangan 28 harus diisi");
            //     bil2.placeholder = "Mohon diisi angka";
            //     bil2.focus();
            //     return false;
            // }

        }

    </script>

</head>

<body>

    <div class="container">
        <form action="https://www.detik.com" method="get" onsubmit="return validate() ;">
            <div class="form-group ">
                <label for="bil1">bilangan 1 : </label>
                <input type="number" id="bil1" class="form-control">
            </div>
            <div class="form-group">
                <label for="bil2">Bilangan 2 : </label>
                <input type="number" id="bil2" class="form-control">
            </div>

            <div class="form-group">
                <label for="nrp">NRP : </label>
                <input type="text" id="nrp" class="form-control">
            </div>
            <input type="submit" value="KIRIM" class="btn btn-primary">
        </form>
    </div>
</body>

</html>
