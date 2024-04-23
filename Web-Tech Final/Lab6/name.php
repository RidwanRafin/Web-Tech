<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
        }

        .error-message {
            color: red;
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <form id="nameForm">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required pattern="[A-Za-z.-]+ [A-Za-z.-]+">
            <span class="error-message"></span> </br>
            <input type="submit" value="Submit" >
        </form>
    </div>
    <script>
        document.getElementById('nameForm').addEventListener('submit', function(e) {
            var name = document.getElementById('name').value;

            if (!/^[A-Za-z][A-Za-z.-]* [A-Za-z.-]+$/.test(name)) {
                e.preventDefault();
                document.querySelector('.error-message').innerText = 'Invalid Name';
                document.querySelector('.error-message').style.display = 'block';
            }
        });
    </script>
</body>
</html>
