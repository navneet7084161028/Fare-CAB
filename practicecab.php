<!-- 
if ($distance == 'Charbagh'){
    $a = ($disatnce[$drop]);
    echo "$a";
}
else{
    $c = (int)$distance[$pick];
    $c1 = (int)$distance[$drop];
    $d = $c - $c1;
    echo abs($d);

} -->
<?php include 'header.php';?>
<!-- <?php include 'footer.php';?> -->


if($temp > $temp1){
    $distance = abs($temp - $temp1);
    echo "Calculated distance is: ".$distance."<br>";
}
else{
    $distance = abs($temp1 - $temp);
    echo "Calculated distance is: ".$distance;
}



// luggage weight calculation
// if($weight<=10){
//     $total_weight = $weight*50;
// }
// elseif($weight>10 && $weight<=20){
//     $total_weight = $weight*100;
// }
// elseif($weight>20){
//     $total_weight = $weight*200;
// }
// echo "\n Luggage charges is: ".$total_weight;




$('select').on('change', function() {
            $('option').prop('disabled', false);
            $('select').each(function() {
            var val = this.value;
            $('select').not(this).find('option').filter(function() {
            return this.value === val;
            }).prop('disabled', true);
        });
        }).change();