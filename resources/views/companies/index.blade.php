<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

</head>
<center>
    <h4>Agency Document</h4>
</center>

<body class="">
    <a href="" class="btn btn-primary">ADD NEW AGENCY DOCUMENT</a>
    <br>
    <hr>

    <!-- filter -->
    <div class="box-header with-border" id="filter-box">
        <br>
        @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif


        <div class="box-body table-responsive" style="margin-bottom: 5%">
            <table class="table table-hover" id="agencydocument_table">
                <thead>
                    <tr>
                        <th>Agency</th>
                        <th>Type</th>
                        <th>Month</th>
                        <th>Year</th>
                        <th>Document</th>
                        <th>Action</th>

                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td></td>


                        <td>

                        </td>


                        <td></td>
                        <td></td>
                        <td>

                        </td>

                        <td>

                            <a href=""><i class="fa fa-edit fa-fw"></i></a>
                            <a href=""><i class="fa fa-delete fa-fw"></i></a>

                        </td>


                    </tr>


                </tbody>
            </table>
        </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
</script>


<script>
$(document).ready(function() {

    $('#agencydocument_table').DataTable({
        "order": []
        //"columnDefs": [ { "orderable": false, "targets": 7 }]
    });
});
</script>

</html>