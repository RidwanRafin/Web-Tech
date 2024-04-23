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
        <form id="bloodGroupForm">
            <label for="bloodGroup">Blood Group</label>
            <br>
            <select id="bloodGroup" name="bloodGroup">
                <option value="null"></option>
                <option value="A+">A Positive</option>
                <option value="A-">A Negative</option>
                <option value="B+">B Positive</option>
                <option value="B-">B Negative</option>
                <option value="AB+">AB Positive</option>
                <option value="AB-">AB Negative</option>
                <option value="O+">O Positive</option>
                <option value="O-">O Negative</option>
            </select>
            <span class="error-message">Please select a valid blood group</span>
            <br>
            <input type="submit" value="Submit" onclick="return validateBloodGroup()">
        </form>
    </div>
    <script>
        function validateBloodGroup() {
            var selectedBloodGroup = document.getElementById('bloodGroup').value;

            if (selectedBloodGroup === 'null') {
                document.querySelector('.error-message').style.display = 'block';
                return false;
            }

            document.querySelector('.error-message').style.display = 'none';
            return true;
        }
    </script>
</body>
</html>
