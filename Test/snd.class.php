<?php
include_once "../include/sessions.class.php";
 include 'fst.class.php';
$run=new test();
// $run->sample('hai');
print($run->sample('hai'));
print($run->pub());
session::start();
?>
<pre><?php
print_r($_SESSION);
// session::set('karthic', 7979);
// print("             ".session::isset('karthic'));?><br>
</pre>


<?php
    if (isset($_GET['clear'])) {
        print('clearing....');
        session_unset();
    }



    if (isset($_SESSION['karthic'])) {
        print("key value exists:".$_SESSION['karthic']); ?><br>
<?php
    } else {
        session::set("karthic", time());
        print("assigning new value:".$_SESSION['karthic']);
    }
// session::destroy();
