<?php include "header.php"; ?>


<script>
        function multiCheck(){
                var length = document.myform.coder.length;
                var $result = " ";
                for(i=0; i<length; i++){
                        var checkedVal = document.myform.coder[i].checked;
                        if(checkedVal){
                               $result += document.myform.coder[i].value +", ";

                        }
                }
                var showData = "You have selected :"+$result;
                document.getElementById('prinID').innerHTML = showData;
        }
</script>


<div id="prinID"></div>




 <form action="" method="post" name="myform" id="myform" onsubmit="multiCheck(); return false;">
        <table>
                <tr>
                        <td>Language :</td>
                        <td>
                                <input type="checkbox" name="coder" value="PHP">PHP
                                <input type="checkbox" name="coder" value="JAVA">JAVA
                                <input type="checkbox" name="coder" value="C#">C#
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