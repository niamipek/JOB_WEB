<!DOCTYPE html>
<html lang="en"> 

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AutoComplete Search Using Bootstrap 4, PHP, PDO - MySQL & Ajax</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js"></script>   
</head>

<body class="bg-info">
  <div class="container">
        <div class="row mt-4">
        <div class="col-md-8 mx-auto bg-light rounded p-4">
            <form action="details.php" method="post" class="p-3">
            <div class="input-group">
                <input type="text" name="search" id="search" class="form-control form-control-lg rounded-0 border-info" placeholder="Search..." autocomplete="off" required>
                <div class="input-group-append">
                    <input type="submit" name="submit" value="Search" class="btn btn-info btn-lg rounded-0">
                </div>
            </div>
            </form>
        </div>
        <div class="col-md-5" style="position: relative;margin-top: -38px;margin-left: 215px;">
            <div class="list-group" id="show-list">
            <!-- Here autocomplete list will be display -->
            </div>
        </div>
    </div>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#search").keyup (function(){
            var searchText = $(this).val();
            if(searchText != ''){
                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    success:function(response){
                        $("#show-list").html(response);
                    }
                })
            }
            else{
                $("#show-list").html('');
            }
        });
        $(document).on('click','a',function() {
            $("#search").val($(this).text());
            $("#show-list").html('';)
        });
    })
  </script>
  
</body>

</html>