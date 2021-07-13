<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('Style/bootstrap.min.css')}}">
    <title>Document</title>
    <style>
        h1{
            color: #5e0080;
        }
        .d-flex{

        }
        .form{
            border: #f1c0ff 5px solid;
            border-radius: 3%;
        }
        label{
            color: #a13658;
        }
        .submit{
            background-color: #992297;
        }

    </style>

</head>
<body>
<div class="container-fluid d-flex justify-content-center">
    <div class="col-3 form">
        <form action="{{route('processForm')}}" method="post">
            @csrf
            <h1 class="text-lg-center">Event</h1>
            <div class="form-group">
                <label>Please enter eventName:</label>
                <input name=" eventName" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Please enter bandName:</label>
                <input name="bandName" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Please enter startDate:</label>
                <input name=" startDate" class="form-control" type="date">
            </div>
            <div class="form-group">
                <label>Please enter endDate:</label>
                <input name=" endDate" class="form-control" type="date">
            </div>
            <div class="form-group">
                <label>Please enter portfolio:</label>
                <input name=" portfolio" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Please enter ticketPrice:</label>
                <input name="ticketPrice" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label>Please enter status:</label>
                <input name="status" class="form-control" type="text">
            </div>
            <div class="form-group">
                <button class="form-control btn btn-primary submit">Submit</button>
            </div>
        </form>
    </div>
</div>
<script src="{{url('Script/bootstrap.min.js')}}"></script>
<script src="{{url('Script/popper.min.js')}}"></script>
</body>
</html>
