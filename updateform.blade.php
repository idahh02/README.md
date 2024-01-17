@extends('master.layout')
@section('updateform')


<head>
    <title>Blood Test Information</title>
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
            <div class="row">
                <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title text-center"><strong>UPDATE BLOOD BAG FORM</strong></h5>
                    <p>Please double check the information before click the save button to avoid any unforeseen circumstances event.</p>

                    <form action="{{url('bloodtest')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">

                        <div class="col-md-6">
                            <strong>BAG ID</strong>
                            <input type="text" name="bagID" class="form-control" required>
                        </div>

                        <div class="col-md-6 ">
                            <strong>BLOOD TYPE</strong><br>
                            <input type="radio" id="a" name="blood_type" value="A">
                            <label for="a">A</label>&emsp;
                            <input type="radio" id="b" name="blood_type" value="B">
                            <label for="a">B</label>&emsp;
                            <input type="radio" id="ab" name="blood_type" value="AB">
                            <label for="ab">AB</label>&emsp;
                            <input type="radio" id="o" name="blood_type" value="O">
                            <label for="o">O</label>
                        </div>

                        <div class="col-md-6">
                            <strong>DONATION DATE</strong>
                            <input type="date" name="donationDate" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <strong>EXPIRY DATE</strong>
                            <input type="date" name="expiryDate" class="form-control" required>
                        </div>

                        <div class="col-md-12">
                            <strong>TEST RESULT</strong><br>
                            <input type="radio" id="negative" name="test_result" value="NEGATIVE">
                            <label for="negative">Negative</label>&emsp;
                            <input type="radio" id="positive" name="test_result" value="POSITIVE">
                            <label for="positive">Positive</label>
                        </div>

                        <div class="col-md-12">
                            <strong>EXTRA NOTES</strong>
                            <textarea class="form-control" name="notes" rows="6" placeholder="If there is none. Please put ' - ' in the box." required></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <button type="submit" value= "Submit" class="btn btn-primary">SAVE</button>
                        </div>
                        </div>
                    </form>

                    </div>
                </div>
                </div>
            </div>
</body>
@endsection
