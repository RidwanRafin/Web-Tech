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
            text-align: center;
        }

        .error-message {
            color: red;
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-box">
        <form id="genderForm">
            <b> <label>Gender</label> </b>
            <br>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="others"> Others
            <br>
            <span class="error-message"></span>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        document.getElementById('genderForm').addEventListener('submit', function(e) {
            var selectedGender = document.querySelector('input[name="gender"]:checked');

            if (!selectedGender) {
                e.preventDefault();
                document.querySelector('.error-message').innerText = 'Please select a gender';
                document.querySelector('.error-message').style.display = 'block';
            }
        });
    </script>
</body>
</html>
