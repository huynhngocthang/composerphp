<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main-content">
        <h1>Ứng dụng xem giờ hiện tại của các thành phố trên thế giới</h1>
        <label for="select-city"></label>
        <select id="select-city">
            <option>Chọn thành phố</option>
            <option value="America-Chihuahua">Chihuahua, Mexico</option>
            <option value="America-Costa_Rica">Costa Rica</option>
            <option value="America-Havana">La Havana, Cuba</option>
            <option value="Asia-Hong_Kong">Hồng kông</option>
            <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt nam</option>
        </select>
    </div>


    <script>
        document.getElementById("select-city").onchange= function() {
            chooseCity()
        } ;

        function chooseCity() {
            let time_zone = document.getElementById("select-city") ;
            window.location.href = time_zone.value ;
        }
    </script>
</body>
</html>