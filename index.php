<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test01</title>
</head>
    <body>

        <?php 
            include("tree.php");
            function nav($parent) {
                global $data;
                $arrcount = count($data);
                $text="";
                for ($i = 0; $i < $arrcount; $i++) { 
                    if ($data[$i]["PARENT_ID"] == $parent) {

                        $inner_text = nav($data[$i]["ID"]);

                        $text .= "<li>".$data[$i]['NAME'];
                        $text .= $inner_text. "</li>";
                        $inner_text="";
                    }
                }
                return ($text!="")? "<ul>" . $text . "</ul>" : "";
            }
            echo nav(0);
        ?>

    </body>
</html>
