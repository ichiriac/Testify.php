<?php
echo $title . '('.$suiteResults['pass'].'/'.$suiteResults['fail'].')'."\n";
if ( $suiteResults['fail'] > 0) {
    echo 'Bummer! You have failing tests!'. "\n";
} else {
    echo 'Far out! Everything passed!' . "\n";
}
echo "\n";
foreach($cases as $caseTitle => $case){ 
    echo ' - ['.$case['pass'].'/'.$case['fail'].']' . $caseTitle . "\n";
    foreach ($case['tests'] as $test){
        echo '   * ' . $test['result'] . ' : ' . $test['type'] . '()' . "\n";
    }
}