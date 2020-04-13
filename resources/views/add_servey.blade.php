<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servey</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <h3 class="py-4">Servey Form</h3>

    <form action="{{url('/add-servey')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
        </div>
        <div class="form-group">
            <label for="tel">Telephone:</label>
            <input type="text" class="form-control" id="tel" name="tel" value="{{old('telephone')}}" required>
        </div>
        <div class="form-group">
            <label for="feedback">Feedback:</label>
            <input type="textarea" class="form-control" id="feedback" name="feedback" value="{{old('feedback')}}" required>
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</div>

<script src="{{asset("js/jquery-3.5.0.min.js")}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#surverform').submit((e) => {
            e.preventDefault();
            $.ajax({
                type:"POST",
                url: $("#surverform").attr("action"),
                data: $("#surverform").serialize(),
                datatype: "json",
                success: (res) => {
                    $("#notification").html(res.message);
                },
                error: (e) => {
                    console.log(e.responseJSON);
                    $("#notification").thml(e.reponseJSOn.message);
                }
            });
        });
    });
</script>
</body>
</html>
