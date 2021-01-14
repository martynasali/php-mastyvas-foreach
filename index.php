<?php

$things = [
    "Products"=>[
        "it"=>[
           "komp" => "MacBook",
            "usb" =>"USB Hub",
           "tt2" => "Keyboard"
        ],
        "Other"=>[
          "t1" => "Samsung Galaxy",
            "tl2" => "Apple Watch"
        ]

    ],
    "Service" => [
        "it"=>[
           "dv"=> "WEB Development",
            "dv2" => "WEB Design"
        ],
        "Bussines:" =>[
          "bs" =>  "Company registration",
           "bs2"=> "Seo optimization"
        ]
    ]];



?>

<ul>
    <?php foreach ($things as $key => $category):?>
      <li><strong><?=$key;?></strong>:
          <ul>
              <?php foreach ($category as $type => $subcategory):?>
              <li><?=$type;?>:
                  <ul>
                      <?php foreach ($subcategory as $code => $value):?>
                      <li><?=$value;?></li>
                      <?php endforeach;?>
                  </ul>
              </li>
              <?php endforeach;?>
          </ul>
      </li>
    <?php endforeach;?>
</ul>
