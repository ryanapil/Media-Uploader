<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Media Uploader</title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="images">
                <input type="file" name="images[]"><br>
            </div>
            <button type="button" name="additionalImage">Add Another Image</button><button type="submit">Submit</button>
        </form>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous" type=""></script>
        <script>
            $(document).ready(function() {
                $("button[name='additionalImage']").on("click", function(event) {
                    event.preventDefault();
                    $("div.images").append('<input type="file" name="images[]"><br>');
                });
            });
        </script>
    </body>
</html>
