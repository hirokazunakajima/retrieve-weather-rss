<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Retrieve RSS</title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Centered Box -->
        <div class="centered">

            <p>Canada Weather</p>
            <ul>
                <li>Location :
                    <strong id="location">
                        <select name="city">
                            <option value="9807">Vancouver</option>
                            <option value="8676">Edmonton</option>
                            <option value="8775">Calgary</option>
                            <option value="2972">Winnipeg</option>
                            <option value="4118">Toronto</option>
                            <option value="3534">Montreal</option>
                            <option value="3444">Quebec city</option>
                        </select>
                    </strong>
                </li>
                <li>Temperature : <strong id="temperature" class="loader"></strong> degree celsius</li>
                <li>Condition : <strong id="description" class="loader"></strong></li>
                <input type="button" class="refresh" value="Refresh">
            </ul>
        </div>

    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="js/script.js"></script>

    </body>
</html>

