<!DOCTYPE html>
<html>
<head>
<style>
    body{
        margin: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: black;
        overflow: hidden;
    }
    .container{
        font-size: 10px;
        width: 40em;
        height: 40em;
        position: relative;
    }
    .sol{
        position: absolute;
        top: 15em;
        left: 15em;
        width: 10em;
        height: 10em;
        background-color: yellow;
        border-radius: 50%;
        box-shadow: 0 0 3em white;  
    }
    .terra,
    .lua{
        position: absolute;
        border-style: solid;
        border-color: white transparent transparent transparent;
        border-width: 0.1em 0.1em 0 0 ;
        border-radius: 50%;
    }
    .terra{
        top: 5em;
        left: 5em;
        width: 30em;
        height: 30em;
        animation: orbita 36.5s linear infinite;
    }
    .lua{
        top: 0em; 
        left: 21em;
        width: 8em;
        height: 8em;
        animation: orbita 3s linear infinite; 
    }
    .terra::before,
    .lua::before{
        content: "";
        position: absolute;
        border-radius: 50%;
    }
    .terra::before{
        top: 2.8em;
        right: 2.8em;
        width: 3em;
        height: 3em;
        background-color: aqua;
    }
    .lua::before{
        top: 0.8em;
        right: 0.2em;
        width: 1.2em;
        height: 1.2em;
        background-color: silver;
    }
    @keyframes orbita{
        to{
            transform: rotate(360deg);
        }
    }
</style>
<style>
     .button{

       padding: 10px 8px;
       width: 50px;
       color: #fff;
       background: #209915;
       border: 1px solid #555;
       border-radius: 5px;
       text-align: center;
       user-select: none;
       cursor: pointer;
    }
    .button:hover{
        background: #19ee05;transition: background 1s;
    }
</style>
</head>
<body>
<div class="container">
    <div class="sol"></div>
    <div class="terra">
        <div class="lua"></div>
    </div>
</div>

<button class="button">sair</button>

</body>
</html>