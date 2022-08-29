<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IP Validate</title>
</head>

<body>
    <h1>Validate Your IP Address</h1>
    <input type="text" value="192.168.0.1" id="ipAddress" placeholder="Your IP Address"><button id="actionBtn">Check</button>
    <script>
        document.getElementById("actionBtn").onclick = function() { 
            var ipAddress = document.getElementById("ipAddress").value
            var result =
            /^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/
            .test(ipAddress);
            alert(result)
        };
    </script>
</body>

</html>
