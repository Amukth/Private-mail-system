<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmail</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: medium;
            margin: 0;
            padding: 0;
            background-color: #d0f0c0;
        }

        header {
            background-color: #4cbb17;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            padding: 4px;
            text-align: center;
            font-size: 40px;
        }
        #logo {
      width: 150px; /* Adjust the size as needed */
      height: auto;
      position: absolute;
      top: 10px;
      left: 10px;
    }

        #container {
            display: flex;
            max-width: 1200px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        #sidebar {
            flex: 0 0 250px;
            background-color: #f0f0f0;
            border-right: 1px solid #e0e0e0;
            padding: 10px;
        }

        #main-content {
            flex: 1;
            padding: 20px;
        }

        footer {
            background-color: #fff;
            box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.1);
            padding: 10px;
            text-align: center;
        }

        #compose-form {
            display: none;
            position: fixed;
            top: 65%;
            left: 75%;
            transform: translate(-50%, -50%);
            background-color: green;
            padding: 40px;
            width: 60%;
            max-width: 600px;
            height:60%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 999;
        }

        #compose-form label {
            font-size: 16px; /* Adjust the font size as needed */
            display: block;
            width: 100%;
            margin-bottom: 8px;
        }

        /* Style for input fields inside the compose form */
        #compose-form input,
        #compose-form textarea {
            width: calc(100% - 30px);
            padding: 8px;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>

<header>
    <h1 style="font-family:times new roman"> E-MAIL </h1>
    <img id="logo" src="logo.png" alt="Logo"> <!-- Replace with the path to your logo -->
</header>

<div id="container">
    <div id="sidebar">
        <br><button type="button" onclick=""><b>Inbox</b></button>
        <br>
        <br><button type="button" onclick=""><b>Trash</b></button>
        <br>
        <br><button type="button" onclick=""><b>Spam</b></button>
        <br>
        <br><button type="button" onclick=""><b>Categories</b></button>
        <br>
        <br><button type="button" onclick=""><b>Starred</b></button>
        <br>
        <br><button type="button" onclick=""><b>Important</b></button>
        <br>
        <br><button type="button" onclick=""><b>All mails</b></button>

        
    </div>

    <div id="main-content">
        <!-- Main content goes here -->
        <h2>Welcome to Your Inbox</h2>
        <div id="inbox-emails"></div>
        <div id="email-content" class="email-content"></div>
    </div>
</div>
<footer>
    <p>&copy; 2023 Gmail</p>
</footer>

<script>
    function displayEmails() {
        var inboxEmails = document.getElementById('inbox-emails');
        inboxEmails.innerHTML = ''; // Clear existing content

        // Fetch the latest form submissions from the server
        fetch('get_submissions.php')
            .then(response => response.json())
            .then(formSubmissions => {
                formSubmissions.forEach(submission => {
                    var emailDiv = document.createElement('div');
                    emailDiv.className = 'inbox-emails';
                    emailDiv.innerHTML = `<strong>${submission.subject}</strong>`;
                    emailDiv.onclick = function () {
                        // Toggle visibility of email content
                        var emailContent = document.getElementById('email-content');
                        emailContent.innerHTML = `<p><strong>${submission.from_email}</strong> - ${submission.subject}</p><p>${submission.message}</p>`;
                        emailContent.style.display = emailContent.style.display === 'none' ? 'block' : 'none';
                    };
                    inboxEmails.appendChild(emailDiv);
                });
            })
            .catch(error => console.error('Error fetching form submissions:', error));
    }

    // Call displayEmails on page load
    displayEmails();
</script>

</body>
</html>
