<?php include'loged.php'?>
<br>
    <a href="insert.php" style="--clr:#63ff3e;"><span>Insert</span>
        <i></i>
    </a>
    <a href="drop.php" style="--clr:#ff1867;"><span>Drop</span>
        <i></i>
    </a>
    <a href="select.php"style="--clr:#1e9bff;"><span>Select</span>
        <i></i>
    </a>
    <a href="edit.php"style="--clr:#DB4DBC;"><span>Edit</span>
        <i></i>
    </a>
<a href="login.php?akcja=wyloguj"style="--clr:#EDE861;"><span>Logout</span>
        <i></i>
    </a>
<style>

a{
    position: relative;
    background: #fff;
    color:white;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 1.5em;
    letter-spacing: 0.1em;
    font-weight: 400;
    padding: 10px 30px;
    transition: 0.5s;
}
a:hover{
    letter-spacing: 0.25em;
    background: var(--clr);
    box-shadow: 0 0 35px var(--clr);
    color: var(--clr);
}
a::before{
    content: '';
    position:absolute;
    inset: 2px;
    background: #1d2b3a;
}
a span{
    position: relative;
color:white;
    z-index: 1;
}
a i{
    position: absolute;
    inset:0;
    display: block;
}
a i:before{
    content: '';
    position: absolute;
    top: 0;
    left: 80%;
    width: 10px;
    height: 4px;
    background: #1d2b3a;
    transform: translateX(-50%) skewX(325deg);
    transition: 0.5s;
}
a:hover i::before{
    width: 20px;
    left: 20%;
}

a i::after{
    content: '';
    position: absolute;
    bottom: 0;
    left: 20%;
    width: 10px;
    height: 4px;
    background: #1d2b3a;
    transform: translateX(-50%) skewX(325deg);
    transition: 0.5s;
}
a:hover i::after{
    width: 20px;
    left: 80%;
}
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

<form method="post">
    <br> <br>
    <div class="inputBox">
        <input type="text" name="imie" required="required">
        <span>Name</span>
    </div>
<br>
    <div class="inputBox">
        <input type="text" name="naz" required="required">
        <span>Last name</span>
    </div>
<br><br>
<br><br>
<input type="submit" name="submit" value="Next">
</form>
<?php
include 'db.php';
if(isset($_POST['submit'])){    
       
        $imie = (string) $_POST['imie'];
        $naz = (string) $_POST['naz'];        
        
       $sql = "INSERT INTO tabela1 VALUES(null,'$imie','$naz');";
       if (!$result = $conn->query($sql)) {
           echo $conn->error;
          die();
       }
       echo "Done!";
       $conn->close();
    } 
?>

