<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Mode</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Permanent+Marker|Russo+One|Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body style="background-color: #dff9fb">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <img src="<?=base_url().'assets/admin/img/1.png'?>" style="width: 30%">
                </center>   
            </div>
            <div class="col-lg-12 mt-2">
                <center>
                    <h2 style="font-family: 'Russo One', sans-serif; font-size: 50px">OOPS !!! </h2>
                    <h4 style="font-family: 'Shadows Into Light', cursive; font-size: 30px"> 
                        Website Sedang dalam Pemeliharaan
                    </h4>
                    <p style="font-family: 'Kaushan Script', cursive;">Silahkan Coba lagi nanti</p>
                </center>
            </div>
            <span class="col-lg-12 mt-3" >
                <center>
                    <div style="font-size: 25px; font-style:oblique">
                        <a href="<?=site_url()?>" class="btn btn-success btn-md" id="watch"> Tunggu </a>
                    </div>
                </center>
            </span>
        </div>

        <script>
            window.setTimeout("waktu()", 1000);
            function waktu() {
                var waktu = new Date();
                setTimeout("waktu()", 1000);
                document.getElementById("watch").innerHTML = waktu.getHours()+ '-' +waktu.getMinutes()+ '-' +waktu.getSeconds()+' WIB';
            }
        </script>
</body>
</html>