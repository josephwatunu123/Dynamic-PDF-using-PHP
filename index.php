<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>Sample Quote</h1>

    <form id="quoteForm" action="generatepdf.php" method="post">
        <div id="inputFields">
            <label for="length1">Length</label>
            <input type="text" name="length[]" id="length1">

            <label for="width1">Width</label>
            <input type="text" name="width[]" id="width1">

            <label for="quantity1">Quantity</label>
            <input type="text" name="quantity[]" id="quantity1">
        </div>
        <button type="submit">Submit</button>
    </form>
    <button id="addItem">Add item</button>

    <script>
        document.getElementById('addItem').addEventListener('click', function() {
            var inputFields = document.getElementById('inputFields');

            // Increment ID
            var numItems = inputFields.querySelectorAll('input').length / 3 + 1;
            var newFieldHTML = '<label for="length' + numItems + '">Length</label>' +
                               '<input type="text" name="length[]" id="length' + numItems + '">' +
                               '<label for="width' + numItems + '">Width</label>' +
                               '<input type="text" name="width[]" id="width' + numItems + '">' +
                               '<label for="quantity' + numItems + '">Quantity</label>' +
                               '<input type="text" name="quantity[]" id="quantity' + numItems + '">';

            var div = document.createElement('div');
            div.innerHTML = newFieldHTML;
            inputFields.appendChild(div);
        });
    </script>
</body>
</html>
