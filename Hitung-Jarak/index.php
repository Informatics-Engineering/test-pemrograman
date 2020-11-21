<!DOCTYPE html>
<html>

<head>
    <title>Hitung Jarak</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <br>
        <center>
            <h5>Menghitung Jarak Antara Dua Titik</h5>
        </center>
        <form action="" method="POST" id="form">
            <div class="form-group">
                <label for="nama">X1</label>
                <input type="number" name="x1" id="x1" class="form-control" placeholder="Masukan Nilai X1" required>
            </div>

            <div class="form-group">
                <label for="umur">Y1</label>
                <input type="number" name="y1" id="y1" class="form-control" placeholder="Masukan Nilai Y1" required>
            </div>

            <div class="form-group">
                <label for="nama">X2</label>
                <input type="number" name="x2" id="x2" class="form-control" placeholder="Masukan Nilai X2" required>
            </div>

            <div class="form-group">
                <label for="umur">Y2</label>
                <input type="number" name="y2" id="y2" class="form-control" placeholder="Masukan Nilai Y2" required>
            </div>
            <button type="button" id="submit_btn" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hasil Perhitungan Jarak Antara Dua Titik</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="umur">Hasil</label>
                        <input type="text" name="hasil" class="form-control" disabled>
                        <br>
                    </div>
                    <center>
                    <canvas id="myCanvas" width="340" height="320px" style="border:1px solid #000000;">
                    </canvas>
                    </center>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            // save comment to database
            $(document).on('click', '#submit_btn', function() {
                $.ajax({
                    url: 'rumus.php',
                    type: 'POST',
                    data: $('#form').serialize(),
                    success: function(hasil) {
                        var x1=document.getElementById("x1").value;
                        var x2=document.getElementById("x2").value;
                        var y1=document.getElementById("y1").value;
                        var y2=document.getElementById("y2").value;

                        $('[name="hasil"]').val(hasil);
                        $('#modal').modal('show');
                        var canvas = document.getElementById("myCanvas");
                        var ctx = canvas.getContext("2d");

                        ctx.beginPath(); // mulai menggmabar
                        ctx.moveTo(x1,y1);
                        ctx.lineTo(x2,y2);
                        ctx.stroke();
                    }
                });
            });
        });
    </script>
</body>

</html>