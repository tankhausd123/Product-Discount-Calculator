<!DOCTYPE html>
<html lang="'vi">
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
</head>
<body>
<h1>Product Discount Calculator</h1>

<form  method="POST" style="border: 1px solid chocolate">
    @csrf
    <p>Product Description:
        {{$productDescription}}
    </p>
    <p>List Price:
        {{$listPrice}}
    </p>
    <p>Discount Percent:
        {{$discountAmount}}
    </p>
    <p>Result:
        {{$result}}
    </p>


</form>

</body>
</html>
