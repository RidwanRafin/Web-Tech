<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            width: 400px;
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
        <form id="userForm" enctype="multipart/form-data">
        <b> <label>Profile Picture</label> </b>
    </br>
    </br>
            <label for="userId">User Id</label>
            <input type="number" id="userId" name="userId" required min="1">
            <span class="error-message"></span>
            <br>
            <label for="fileUpload">Picture</label>
            <input type="file" id="fileUpload" name="fileUpload" required accept="image/*">
            <span class="error-message"></span>
            <br>
            <input type="submit" value="Submit" onclick="validateForm()">
        </form>
    </div>
    <script>
        function validateForm() {
            var userId = document.getElementById('userId').value;
            var fileUpload = document.getElementById('fileUpload').value;

            if (!userId || userId <= 0) {
                document.querySelector('.error-message:nth-of-type(1)').innerText = 'User ID must be a positive number';
                document.querySelector('.error-message:nth-of-type(1)').style.display = 'block';
                return false;
            }

            if (!fileUpload) {
                document.querySelector('.error-message:nth-of-type(2)').innerText = 'Please upload a picture';
                document.querySelector('.error-message:nth-of-type(2)').style.display = 'block';
                return false;
            }

            document.querySelector('.error-message').style.display = 'none';
            return true;
        }
    </script>
</body>
</html>
