
<html>
    <head><title>
        
        </title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        
        <?php
        include("connection.php");
        ?>
        <form method="post" action="put.php" id="add">
            <table><tr>
                <td>Name of  place-</td>
                <td><input type="text" name="place"></td>
                </tr>
                <tr><td>rating (0 to 15)</td>
                    <td><input type="text" name="rating"></td></tr>
                <tr><td>Can it be visited in winter</td>
                <td><select name="ver" form="add" id="ver">
                
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                    </select></td></tr>
             <tr><td>Can it be visited in summer</td>
                <td><select name="ver2" form="add" id="ver2">
                
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                    </select></td></tr>
             <tr><td>Can it be visited in rainy</td>
                <td><select name="ver3" form="add" id="ver3">
                
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                    </select></td></tr>
                    
              <tr><td>Do you want to see list of places</td>
                    <td><select name="ver4" form="add" id="ver4">
                    <option value=1>Yes</option>
                    <option value=0>No</option>
                    </select></td></tr>
                <tr><td align="right"><input type="reset" name="reset" class="button"></td>
<td align="left"><input type="submit" name="submit" value="Submit" class="button1"></td></tr>
            </table>
            
            
        </form>
    </body>
</html>
