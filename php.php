<?php

$numBase = 7;

/* function sommaNumeri($num1, $num2){
  echo $num1 + $num2;
} */

function sommaNumeri($num1, $num2, $numBase)
{
  return $numBase +  $num1 + $num2;
}

//sommaNumeri(5, 12);

$sommaFinale = sommaNumeri(4, 20, $numBase);

//var_dump($sommaFinale);

$dataArray = [
  [
    "q" => "asdaldhjakdjh",
    "a" => [
      "lkhjasldjhak jhakjdhakjs hd",
      "lkhjasldjhak jhakjdhakjs hd",
      "lkhjasldjhak jhakjdhakjs hd",
    ]
  ]
];

function renderUl($itemsList)
{
?>
  <ul>

    <?php
    foreach ($itemsList as $item) {
    ?>

      <li><?php echo $item ?></li>

    <?php
    }
    ?>

  </ul>
<?php
}

function renderUlAsArray($itemsList)
{
  $result = [];

  $result[] = "<ul>";

  foreach ($itemsList as $item) {
    $result[] = "<li>";
    $result[] = $item;
    $result[] = "</li>";
  }

  $result[] = "</ul>";

  return implode("\n", $result);
}
?>