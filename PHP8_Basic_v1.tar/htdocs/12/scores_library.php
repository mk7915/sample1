<?php

function calculate_scores(array $scores): array {
    $sum = array_sum($scores);
    $average = round($sum / count($scores), 2);
    return ['sum' => $sum, 'average' => $average];
}
?>
