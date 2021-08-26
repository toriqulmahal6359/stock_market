<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Market</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap4.min.css" integrity="sha512-PT0RvABaDhDQugEbpNMwgYBCnGCiTZMh9yOzUsJHDgl/dMhD9yjHAwoumnUk3JydV3QTcIkNDuN40CJxik5+WQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('/main/css/custom.css')}}">
</head>
<body>
    <div class="container">
        <h1 style="font-size: 55px"><span style="color:red">Stock</span><span style="color:black">Media</span></h1>
    </div>
<section style="padding:3px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="stock_line_chart" style="width:900px; height:600px"></div>
                <select id="menu">
                    <option selected>Default</option>
                    <option>Trade By High</option>
                    <option>Trade With Open</option>
                </select>
            </div>
        </div>
    </div>
</section>
<section style="padding:60px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Stock Database</h1>
                        <a href="/add-stock"><button class="offset-md-10 addButton btn btn-primary">Add New Stock</button></a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_delete'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get('post_deleted')}}
                            </div>
                        @endif
                    <table class="table table-striped" id="stock_table" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Trade Code</th>
                            <th>High</th>
                            <th>Low</th>
                            <th>Open</th>
                            <th>Close</th>
                            <th>Volume</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($stocks as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->trade_code}}</td>
                            <td>{{$data->high}}</td>
                            <td>{{$data->low}}</td>
                            <td>{{$data->open}}</td>
                            <td>{{$data->close}}</td>
                            <td>{{$data->volume}}</td>
                            <td>
                                <a href="/edit-stock/{{$data->id}}"><button class="btn btn-success">Edit</button></a>
                                <a href="/delete-stock/{{$data->id}}"><button class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap.min.js" integrity="sha512-F0E+jKGaUC90odiinxkfeS3zm9uUT1/lpusNtgXboaMdA3QFMUez0pBmAeXGXtGxoGZg3bLmrkSkbK1quua4/Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset('main/custom.js')}}"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

    var menu = document.getElementById('menu');
    menu.addEventListener('change', drawChart, false);

    drawChart();
    function drawChart() {
        var chart = new google.visualization.LineChart(document.getElementById('stock_line_chart'));
        var options = {
          title: 'Stock Line Chart',
          curveType: 'function',
          legend: { position: 'bottom' }
        };
      switch (menu.selectedIndex) {
        case 1:
          console.log('high_low');
          var high_low = google.visualization.arrayToDataTable([
            ['Volume', 'High', 'Low'],
                @php
                    foreach($stocks as $data){
                        echo "['".$data->volume."',".$data->high.",".$data->low."],";
                    }
                @endphp
            ]);
          chart.draw(high_low, options);
          break;

        case 2:
          console.log('open_close');
          var open_close = google.visualization.arrayToDataTable([
            ['Volume', 'Open', 'Close'],
                @php
                    foreach($stocks as $data){
                        echo "['".$data->volume."',".$data->open.",".$data->close."],";
                    }
                @endphp
            ]);
          chart.draw(open_close, options);
          break;

        default:
          console.log('dataDefault');
          var dataDefault = google.visualization.arrayToDataTable([
            ['Volume', 'High', 'Open', 'Low', 'Close'],
                @php
                foreach($stocks as $data){
                    echo "['".$data->volume."',".$data->high.", ".$data->open.", ".$data->low.",".$data->close."],";
                }
                @endphp
            ]);
          chart.draw(dataDefault, options);
      }
    }

</script>
</body>
</html> 