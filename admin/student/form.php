<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container w3-padding-64">
    <!--    <form action="/table.php " class="w3-container">-->
    <!--        <label for="name">Full Name</label>-->
    <!--        <input class="w3-input"  type="text" id="name" name="name" placeholder="Your name..">-->
    <!---->
    <!--        <label for="email">Email</label>-->
    <!--        <input class="w3-input"  type="text" id="email" name="email" placeholder="Your last email..">-->
    <!---->
    <!--        <label for="address">Address</label>-->
    <!--        <input class="w3-input"  type="text" id="address" name="address" placeholder="Your last address..">-->
    <!---->
    <!--        <label for="birthday">Birthday</label>-->
    <!--        <input class="w3-input"  type="date" id="birthday" name="birthday" placeholder="Your last birthday..">-->
    <!---->
    <!--        <label for="gender">Gender</label>-->
    <!--        <select class="w3-select" id="gender" name="gender">-->
    <!--            <option value="0">Nam</option>>-->
    <!--            <option value="1">Nữ</option>>-->
    <!--        </select>-->
    <!--        <input type="submit" value="Submit">-->
    <!--    </form>-->
    <div class="w3-container w3-teal">
        <h2>Input Form</h2>
    </div>
    <form class="w3-container w3-card-4" method="post" action="hello.php">
        <br>
        <p>
            <label class="w3-text-grey">Full Name</label>
            <input class="w3-input w3-border" type="text" name="name" required="">
        </p>
        <div class="w3-row">
            <div class="w3-half">
                Gender
            </div>
            <div class="w3-half">
                <input id="male" class="w3-radio" type="radio" name="gender" value="0" checked="">
                <label>Male</label>
                <br>
                <input id="female" class="w3-radio" type="radio" name="gender" value="1">
                <label>Female</label>
                <br>
            </div>
        </div>
        <p>
            <label class="w3-text-grey">Email</label>
            <input class="w3-input w3-border" type="text" name="email" required="">
        </p>
        <p>
            <label class="w3-text-grey">Address</label>
            <input class="w3-input w3-border" type="text" name="address" required="">
        </p>
        <p>
            <label class="w3-text-grey">Birthday</label>
            <input class="w3-input w3-border" type="date" name="birthday" required="">
        </p>
        <br>
        <p>
            <button  class="w3-btn w3-padding w3-teal" style="width:120px">Send &nbsp; ❯</button>
        </p>
    </form>
</div>
</body>
</html>