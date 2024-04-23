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
        <form id="dobForm">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>
            <span class="error-message"></span>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        document.getElementById('dobForm').addEventListener('submit', function(e) {
            var dob = document.getElementById('dob').value;

        
            if {
                document.querySelector('.error-message').innerText = 'Invalid Date of Birth';
                document.querySelector('.error-message').style.display = 'block';
            }
        });
    </script>
</body>
</html>
