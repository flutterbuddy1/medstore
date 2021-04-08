<?php
// Create connection
$con = mysqli_connect('localhost', 'root', '', 'medical_store_system');
// Check connection
if ($con == false) {
?>
<script type="text/javascript">
alert ("Connection Establishment Error :(");
</script>
<?php
}
?>