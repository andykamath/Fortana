<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    $a = strtolower($_REQUEST['Body']);
    $end = $a
?>
<Response>
    <Message><?php echo $end; ?></Message>
</Response>
