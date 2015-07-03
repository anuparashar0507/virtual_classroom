<?php
if($_POST['ok']=="ok")
{
$branch=$_POST['branch'];
$year=$_POST['year'];

             if($branch=="cse" && $year=="one")
                   {
                     include("cse1.php");
                 }
                   elseif($branch=="cse" && $year=="two")
                    {

                        include("cse2.php");
                   }
                  elseif($branch=="cse" && $year=="three")
                    {

                        include("cse3.php");
                   }
                  elseif($branch=="cse" && $year=="four")
                   {

                      include("cse4.php");
                  }
elseif($branch=="civil" && $year=="one")
{

include("civil1.php");
}
elseif($branch=="civil" && $year=="two")
{

include("civil2.php");
}
elseif($branch=="civil" && $year=="three")
{

include("civil3.php");
}
elseif($branch=="civil" && $year=="four")
{

include("civil4.php");
}
elseif($branch=="ece" && $year=="one")
{

include("ece1.php");
}
elseif($branch=="ece" && $year=="two")
{

include("ece2.php");
}
elseif($branch=="ece" && $year=="three")
{

include("ece3.php");
}
elseif($branch=="ece" && $year=="four")
{

include("ece4.php");
}
elseif($branch=="MECH" && $year=="one")
{

include("mech1.php");
}
elseif($branch=="MECH" && $year=="two")
{

include("mech2.php");
}
elseif($branch=="MECH" && $year=="three")
{

include("mech3.php");
}
elseif($branch=="MECH" && $year=="four")
{

include("mech4.php");
}
else
{
echo "plz select bra&yer.......!";
}
}
else
{
echo "..........!";
}
?>

