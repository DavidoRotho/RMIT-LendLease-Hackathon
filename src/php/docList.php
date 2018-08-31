<!doctype html>
<html>
<head>
    <?php
    include 'bootstrap.php';
    ?>
    <link rel="stylesheet" type="text/css" href="../css/docList.css"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<?php
include_once 'pageHeader.php';
?>

<div class="container" id="docList">
    <h3>Smart Document <i class="fa fa-file-pdf-o"></i></h3>
    <table border="1" class="col-md-12">
        <tr>
            <th>Document Title</th>
            <th>Document Author</th>
        </tr>

        <tr>
            <td>The first document</td>
            <td>Author 1</td>
        </tr>
        <tr>
            <td>The second document</td>
            <td>Author 2</td>
        </tr>
    </table>
</div>
</body>
</html>