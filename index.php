<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Untitled Document</title>
</head>

<body>
    <form action="" method="get">
        <label>
            <input name="checkbox" type="checkbox" id="checkbox" value="a" onclick="if(this.checked)localStorage.setItem(this.id,this.value);else localStorage.removeItem(this.id);">
        </label>
        <label>
            <input name="checkbox2" type="checkbox" id="checkbox2" value="b" onclick="if(this.checked)localStorage.setItem(this.id,this.value);else localStorage.removeItem(this.id);">
        </label>
        <label>
            <input name="checkbox3" type="checkbox" id="checkbox3" value="c" onclick="if(this.checked)localStorage.setItem(this.id,this.value);else localStorage.removeItem(this.id);">
        </label>
        <label>
            <input type="submit" name="button" id="button" value="Submit">
        </label>
    </form>
    
    <div id="log">
    </div>
    
    <script type="text/javascript">
        document.getElementById('log').innerHTML='Valores checkeados:<br>';
        for (var i=0; i<localStorage.length; i++){
            var key = localStorage.key(i);
            document.getElementById(key).checked=1;
            document.getElementById('log').innerHTML+=localStorage.getItem(key);
        }
        
        if(!i)document.getElementById('log').innerHTML+='ninguno';

    </script>
</body>
</html> 