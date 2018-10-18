<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input{
        height: 30px;
        width: 80px
    }
    button,select{
        height: 35px;
        width: 50px
    }
    button{
        width: 100px
    }
</style>

<body>
    <form>
        <input type="text" placeholder="Enter number a">
        <select>
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
            <option>%</option>
        </select>
        <input type="text" placeholder="Enter number b">
        <button>Calculate</button>
        <input type="text" placeholder="Result">
    </form>
</body>
</html>