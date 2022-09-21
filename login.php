<?php
    session_start();
    if(isset($_GET['akcja']) && $_GET['akcja']=='wyloguj'){
        unset($_SESSION['zalogowany']);
    }
    if(isset($_POST['haslo']) && $_POST['haslo']=='admin'){
        $_SESSION['zalogowany']=1;
    }
    if(!isset($_SESSION['zalogowany'])){
    
?> 
<style>
     body{
color:white;
        text-align: center;
background: #1d2b3a;
    }
        a{text-decoration:none;color:black;}
    .a1{
        text-decoration:none;
        padding: 10px;
        color: black;
        border: 2px solid red; border-radius:10px;
        background-color: rgba(255,0,0,0.6);
    }
    .inputBox input{
    width: 100%;
    padding: 10px;
    border: 1px solid rgba(255,255,255,0.25);
    background: #1d2b3a;
    border-radius: 5px;
    outline: none;
    color: #fff;
    font-size: 1em;
    transition: 00.5s;
}
.inputBox span{
    position: absolute;
    left: 0;
    padding: 10px;
    pointer-events: none;
    font-size: 1em;
    color: rgba(255,255,255,0.25);
    text-transform: uppercase;
    transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span{
    color: #00dfc4;
    transform: translateX(10px) translateY(-7px);
    font-size: 0.75em;
    padding: 0 10px;
    background: #1d2b3a;
    border-left: 1px solid #00dfc4;
    border-right: 1px solid #00dfc4;
    letter-spacing: 0.20em;
}
.inputBox input:valid,
.inputBox input:focus{
    border: 1px solid #00dfc4;
}
.inputBox{
margin-left:auto;
margin-right:auto;
position:relative;
    width: 250px;
justify-content: center;
    align-items: center;
}
input[type=submit]{
    background-color: #2A3E54;
    border: none;
    color: white;
    padding: 8px 16px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    transition: 00.5s;
}
input[type=submit]:hover{
    box-shadow: 1px 1px 8px 3px #9659FF inset;
    box-shadow: 1px 1px 8px 3px #9659FF;
    transition: 00.5s;}
</style>
<form method="post" action="login.php">
    <br>
    <div class="inputBox">
        <input type="password" name="haslo" required="required">
        <span>Password</span>
    </div>
    <br>
    <input type="submit" value="Login">
</form>
<?php
}
else {
    header("Location: main.php");
}