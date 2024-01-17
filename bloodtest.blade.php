@extends('master.layout')

@section('bloodTest')

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blood Bag Information</title>
</head>

<body>


  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Blood Bag Information </h1>

      <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href=""></a>Dashboard</li>
            <li class="breadcrumb-item"><a href="/table"></a>Blood Bag Inventory</li>
          </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">DETAILS OF BLOOD BAG &emsp;&emsp;
                <a href="{{url('bloodtest/create')}}" class="btn btn-primary btn-sm">INSERT</a>
              </h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Bag ID</th>
                    <th scope="col">Blood Type</th>
                    <th scope="col">Donation Date </th>
                    <th scope="col">Expiry Date</th>
                    <th scope="col">Test Result</th>
                    <th scope="col">Extra Notes</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if (!empty($bloodBags))
                        @foreach($bloodBags as $bloodBag)
                            <tr>
                            <td>{{$bloodBag->bagID}}</td>
                            <td>{{$bloodBag->blood_type}}</td>
                            <td>{{$bloodBag->donationDate}}</td>
                            <td>{{$bloodBag->expirydate}}</td>
                            <td>{{$bloodBag->test_result}}</td>
                            <td>{{$bloodBag->notes}}</td>
                            <td>
                                <form action="{{url('/bloodtest', $bloodBag->id)}}" method="POST" onsubmit="return confirm('Continue to delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    @else
                        <td>No data available</td>
                        <td>No data available</td>
                        <td>No data available</td>
                        <td>No data available</td>
                        <td>No data available</td>
                        <td>No data available</td>
                        <td>No data available</td>
                    @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </section>

  </main><!-- End #main -->

</body>

</html>

@endsection
