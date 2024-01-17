<!DOCTYPE html>
<html lang="en">

<head>
    <style>
   body {
            background-color: #f0f0f0;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        label {
            font-weight: bold;
        }

        #main {
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #6798a2;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 15px;
            text-align: left;
        }

        .card-body {
            margin-top: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #6798a2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #8bc4cf;
        }

        .button-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6798a2;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
            cursor: pointer;
        }

        .button-link:hover {
            background-color: #8bc4cf;
        }
    </style>
</head>

<body>

    <div id="main">
        <h1>BLOOD BAG INVENTORY</h1>

        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('bloodbags.update', $bloodBag->id) }}" method="post">
                            @csrf
                            @method('put')

                            <table>
                                <tr>
                                    <td><label for="blood_type">Blood Type:</label></td>
                                    <td><p>{{ $bloodBag->blood_type }}</p></td>
                                </tr>
                                <tr>
                                    <td><label for="no_packs">No of Packs:</label></td>
                                    <td>
                                        <input type="text" id="no_packs" name="no_packs" value="{{ $bloodBag->no_packs }}">
                                        <br>
                                        <button class="btn" type="submit" name="add" value="1">Add</button>
                                        <button class="btn" type="submit" name="subtract" value="1">Subtract</button>
                                    </td>
                                </tr>
                            </table>
                            <br>

                            <a href="{{ route('bloodbags.index') }}" class="button-link">Save</a>
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>

</html>
