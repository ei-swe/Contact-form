<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bg-primary">
    <div class="container mt-5">
        <div class="card w-75 mx-auto">
            <h4 class="p-3">Send as a Message</h4>
            <div class="card-body">
                <form action="">
                    <div class="field d-flex">
                        <div class="form-floating m-3 w-50">
                            <input type="name" name="name" class="form-control" id="floatingInput" placeholder="Enter Your Name">
                            <label for="floatingInput">Enter Your Name</label>
                        </div>
                        <div class="form-floating m-3 w-50">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>

                    </div>
                    <div class="field d-flex">
                        <div class="form-floating m-3 w-50">
                            <input type="phone" name="phone" class="form-control" id="floatingInput" placeholder="Phone">
                            <label for="floatingInput">Phone</label>
                        </div>
                        <div class="form-floating m-3 w-50">
                            <input type="website" name="website" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Websites</label>
                        </div>

                    </div>
                    <div class="field">
                        <div class="form-floating m-3">
                            <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                    </div>
                    <div class="button-area m-3 d-flex">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                        <span class="text-primary">Sending Your Message....</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>