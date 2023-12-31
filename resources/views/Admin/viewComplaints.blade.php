<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">



    <link rel="icon" href="{{asset('assets/favicon.png')}}">

    <title>Admin Dashboard</title>
    <style>
        .admin-panel {
            background-color: #343a40;
            color: white;
            padding: 20px;
            height: 120vh;
        }

        .admin-panel h3 {
            font-size: 1.5em;
            margin-bottom: 20px;
            text-align: center;
        }

        .admin-panel ul {
            list-style: none;
            padding: 0;
        }

        .admin-panel li {
            background-color: #555;
            margin-bottom: 10px;
        }

        .admin-panel a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
        }

        .admin-panel a:hover {
            background-color: #777;
        }


        .centered-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .centered-content img {
            max-width: 100%;
            height: 50%;
        }

        .page-title {
            font-size: 40px;
            font-weight: bold;
            margin: 0;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navigation" style="background-color: black; height: 150px;">
        <!-- Logo on the left -->
        <a class="navbar-brand d-flex align-self-center pl-2 mx-2 mr-auto" href="{{ asset('index') }}">
            <img class="logo" src="{{ asset('assets/white-logo.png') }}" alt="Sportify Wear" style="width: 150px; height: auto;">
        </a>
    </nav>

    <!-- Admin Panel on the left -->
    <div class="container-fluid">

        @if(session('deletionsuccess'))
        <div class="alert alert-success">
            {{ session('deletionsuccess') }}
        </div>
        @endif

        <div class="row">
            <div class="col-md-3 admin-panel">
                <h3 id="dashboardLink">DASHBOARD</h3>
                <ul>
                    <li><a href="{{ route('addProduct') }}">Add Product</a></li>
                    <li><a href="{{ route('delprods') }}">Delete Product</a></li>
                    <!-- <li><a href="#">Edit Product</a></li> -->
                    <!-- <li><a href="#">View inventory</a></li> -->
                    <li><a href="{{ route('client_orders') }}">Client Orders</a></li>
                    <li><a href="{{ route('client_queries') }}">View Complaints</a></li>
                </ul>
            </div>

            <!-- Centered Image and Text on the right -->
            <div class="col-md-9">
                <div class="container">
                    <h2 style="text-align: center;">Client Queries</h2>
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($clientQueries->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">NO COMPLAINTS TO DISPLAY.</td>
                            </tr>
                            @else
                            @foreach($clientQueries as $index => $query)
                            <tr>
                                <th scope="row">{{ $query->id }}</th>
                                <td>{{ $query->Name }}</td>
                                <td>{{ $query->Email }}</td>
                                <td>{{ $query->Contact }}</td>
                                <td>{{ $query->Message }}</td>
                                <td>
                                    <button class="btn btn-danger" onclick="noteRow({{ $query->id }})">NOTED</button>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('dashboardLink').addEventListener('click', function() {
            window.location.href = "{{ route('dashboard') }}";
        });
        
        function noteRow($id) {
            // var url = '/deleteClientQuery/' + clientQueryId;
            window.location.href = "/deleteClientQuery/" + $id;
        }
    </script>

</body>

</html>