<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/ico" href="{{ asset('img//logo.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Refilwe  Akaru Zobane, Dawn Chikoki">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
    <title>Khanyisa | Search </title>
</head>
<body>
    <div class="mainbody">
        <div class="close"> <i class="fas fa-times" onclick="goBack()"></i></div>
        <input class="formControl" type="text" maxlength="50" name="searchText" placeholder="Please type your search here">

        <div class="Result">
            <h3>Results:</h3>
            <table>
                    <thead>
                        <tr>
                            <td>ACTION</td>
                            <td>DATE</td>
                            <td>CLIENT NAME</td>
                            <td>ASSIGNED TO</td>
                            <td>POLICY TYPE</td>
                            <td>DUE DATE</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>LETTER OF DEMAND</td>
                            <td>2019-02-10</td>
                            <td>Jemy Forbay</td>
                            <td>Jemy Forbay</td>
                            <td>Personal Lines</td>
                            <td>2019-02-17</td>
                        </tr>
                        <tr>
                            <td>LETTER OF DEMAND</td>
                            <td>2019-02-10</td>
                            <td>Jemy Forbay</td>
                            <td>Jemy Forbay</td>
                            <td>Personal Lines</td>
                            <td>2019-02-17</td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</body>
<script>
    function goBack() {
  window.history.back();
}
</script>
</html>