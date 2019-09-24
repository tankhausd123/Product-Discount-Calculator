<!DOCTYPE html>
<html lang="'vi">
<head>
    <meta charset="UTF-8">
    <title>Product Discount Calculator</title>
</head>
<body>
<h1>Product Discount Calculator</h1>

<form action={{route('result')}} method="POST" style="border: 1px solid chocolate">
    @csrf
    <p>Product Description:
        <input type="text" name="productdescription" >
    </p>
    <p>List Price:
        <input type="number" name="listprice">
    </p>
    <p>Discount Percent:
        <input type="number" name="discountamount">
    </p>
    <p>
        <button type="submit">Calculate Discount</button>
    </p>

</form>

</body>
</html>
