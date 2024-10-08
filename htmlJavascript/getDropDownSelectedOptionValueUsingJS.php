<?php include "header.php"; ?>



<script>
        function selectOption(){
                var index = document.myform.coder.selectedIndex;
                var value = document.myform.coder.options[index].value;
                var showData = "You are a "+value+" Programmer";
                document.getElementById('randId').innerHTML = showData;

        }

</script>


<div id="randId"></div>



 <form action="" method="post" name="myform" id="myform" onsubmit="selectOption(); return false;">
        <table>
                <tr>
                        <td>Language :</td>
                        <td>
                                <select name="coder" >
                                        <option value="">Select One</option>
                                        <option value="PHP">PHP</option>
                                        <option value="JAVA">JAVA</option>
                                        <option value="C#">C#</option>
                                        <option value="C++">C++</option>
                                </select>
                        </td>
                        
                </tr>
                <tr>
                        <td></td>
                        <td>
                                <input type="submit" name="submit" value="Submit">
                                <input type="reset" value="Clear">
                        </td>
                </tr>
        </table>
 </form>



<?php include "footer.php"; ?>