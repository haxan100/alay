<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bahasa Alay</title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/jquery.dataTables.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">
</head>

<body>
  <div class="container">
    <!-- Page Heading -->
    <div class="row">
      <div class="col-12">
        <form>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Teks Normal</label>
            <textarea class="form-control" id="awal" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Anak Alay</label>
            <textarea class="form-control" id="akhir" rows="3"></textarea>
          </div>
          <img src="<?php echo base_url('assets/images/maxresdefault.jpg'); ?>" class="  img-fluid rounded rounded mx-auto d-block" style="
    height: 211px;
    position: center!important;
" alt="Responsive image">
        </form>
      </div>
    </div>

  </div>


  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>
  <script type="text/javascript" src="<?php echo base_url() . 'assets/js/dataTables.bootstrap4.js' ?>"></script>

  <script type="text/javascript">
    $(document).ready(function() {


      $('#awal').on('keyup', function() {
        var text = $('#awal').val();
        // var al = "a, o";
        console.log(text);
        text = text.replace(/\a/g, "i");
        text = text.replace(/\o/g, "i");
        text = text.replace(/\u/g, "i");
        text = text.replace(/\e/g, "i");
        return $('#akhir').val(text);
      });


    });
  </script>
</body>

</html>