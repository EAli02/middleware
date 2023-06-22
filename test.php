<!DOCTYPE html>
<html>
<body>



<p id="count">1</p>
    <p id="count1">1</p>


<script>
function countUp(count, target, interval) {
  var countElement = document.getElementById("count");
  if (count <= target) {
    countElement.innerHTML = count;
    setTimeout(function() {
      countUp(count + 1, target, interval);
    }, interval);
  }
}
    function countUp1(count, target, interval) {
  var countElement = document.getElementById("count1");
  if (count <= target) {
    countElement.innerHTML = count;
    setTimeout(function() {
      countUp(count + 1, target, interval);
    }, interval);
  }
}
</script>

<?php
$count1 = 1;
$target1 = 100;
$interval1 = 5;
echo "<script>countUp($count1, $target1, $interval1);</script>";
echo "khalid more :";
$count2 = 1;
$target2 = 50;
$interval2= 35;


echo "<script>countUp1($count2, $target2, $interval2);</script>";
?>

</body>
</html>