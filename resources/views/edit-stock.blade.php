<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Market</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top:60px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h1>Update existing Stock</h1>
                            <a href="/"><button class="btn btn-primary">Back</button></a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('stock_updated'))
                                <div class="alert alert-success" role="alert">
                                    {{Session::get('stock_updated')}}
                                </div>
                            @endif
                            <form method="POST" action="{{route('stock.update')}}" >
                                @csrf
                                <input type="hidden" name="id" value="{{$stock->id}}">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" name="date" value="{{$stock->date}}">
                                </div>
                                <div class="form-group">
                                    <label for="trade_code">Trade Code</label>
                                    <input type="text" class="form-control" name="trade_code" placeholder="Enter Trade Code" value="{{$stock->trade_code}}">
                                </div>
                                <div class="form-group">
                                    <label for="high">High</label>
                                    <input type="text" class="form-control" name="high" placeholder="Enter High" value="{{$stock->high}}">
                                </div>
                                <div class="form-group">
                                    <label for="low">Low</label>
                                    <input type="text" class="form-control" name="low" placeholder="Enter Low" value="{{$stock->low}}">
                                </div>
                                <div class="form-group">
                                    <label for="open">Open</label>
                                    <input type="text" class="form-control" name="open" placeholder="Enter Open" value="{{$stock->open}}">
                                </div>
                                <div class="form-group">
                                    <label for="close">Close</label>
                                    <input type="text" class="form-control" name="close" placeholder="Enter Close" value="{{$stock->close}}">
                                </div>
                                <div class="form-group">
                                    <label for="volume">Volume</label>
                                    <input type="text" class="form-control" name="volume" placeholder="Enter Volume" value="{{$stock->volume}}">
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>