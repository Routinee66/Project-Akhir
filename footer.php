<footer>
    Praktikum Web Pemrograman 2022
</footer>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script type="text/javascript">
    // ------------ HOME.PHP
    $(".jsDate").datepicker({
        dateFormat: "yy-mm-dd",
        onSelect: function(dateText, inst) {
            var date = $(this).val();

            if ($("#btnStart").val() != "" && $("#btnEnd").val() != "") {
                if ($("#btnStart").val() < $("#btnEnd").val()) {
                    var url = 'rekening.php?dari=' + $("#btnStart")
                    .val() + '&sampai=' + $("#btnEnd").val();
                } else {
                    var url = 'rekening.php?dari=' + $("#btnEnd").val() +
                    '&sampai=' + $("#btnStart").val();
                }
                window.location.href = url;
            }
        }
    });

    // ------------ REKENING.PHP
    $(".jsDate").datepicker({
        onSelect: function(dateText, inst) {
                var date = $(this).val();
                
                if ($("#btnStart").val() != "" && $("#btnEnd").val() != "") {
                    if ($("#btnStart").val() < $("#btnEnd").val()) {
                        var url = 'http://192.168.43.174:5500/rekening.html?tanggal=' + $("#btnStart")
                        .val() + '-' + $("#btnEnd").val();
                    } else {
                        var url = 'http://192.168.43.174:5500/rekening.html?tanggal=' + $("#btnEnd").val() +
                        '-' + $("#btnStart").val();
                    }
                    window.location.href = url;
                }
            }
        });
        
    // ------------ TRANSAKSI.PHP
    $('#rekening').on("change", function() {
        var dataid = $("#rekening option:selected").attr('value');
        if (dataid <= 30000) {
            var cek = "5000"
        } else var cek = "2500"
        $("input:text").val(cek);
    });
</script>
