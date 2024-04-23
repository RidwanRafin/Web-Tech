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
        <form id="degreeForm">
            <b> <label>Degree</label> </b>
    </br>
    </br>
            <input type="radio" name="degree" value="SSC"> SSC
            <input type="radio" name="degree" value="HSC"> HSC
            <input type="radio" name="degree" value="BSc"> BSc
            <br>
            <span class="error-message"></span>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        document.getElementById('degreeForm').addEventListener('submit', function(e) {
            var selectedDegree = document.querySelector('input[name="degree"]:checked');

            if (!selectedDegree) {
                e.preventDefault();
                document.querySelector('.error-message').innerText = 'Please select a degree';
                document.querySelector('.error-message').style.display = 'block';
            }
        });
    </script>
</body>
</html>
