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

        .hint-icon {
            font-size: 16px;
            color: blue;
            margin-left: 5px;
            cursor: help; 
        }

        .hint-text {
            display: none;
            font-size: 12px;
            color: #333;
        }

        
    </style>
</head>
<body>
    <div class="form-box">
        <form id="emailForm">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <span class="error-message"></span>
            <span class="hint-icon" title="Hint:(sample@example.com)">i</span>
            <span class="hint-text">Hint: example@sample.com</span>
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <script>
        document.getElementById('emailForm').addEventListener('submit', function(e) {
            var email = document.getElementById('email').value;

            if (!/^[A-Za-z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)) {
                e.preventDefault();
                document.querySelector('.error-message').innerText = 'Invalid Email Address';
                document.querySelector('.error-message').style.display = 'block';
            }
        });
    </script>
</body>
</html>
