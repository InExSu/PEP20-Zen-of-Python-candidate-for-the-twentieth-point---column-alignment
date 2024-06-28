<?php

// Применение принципа 20 дзен пайтона выравнивая по колонкам

// point 20
   $execs = [
      ['CRest::call', $method,           ['ID' => 369],  $file_Name_369],
      ['CRest::call', $method,           ['ID' => 9200], $file_Name_9200],
      ['CRest::call', 'crm.status.list', [],             $file_Name_Stat],
    ];

// usually
    $execs = [
        ['CRest::call', $method, ['ID' => 369], $file_Name_369],
        ['CRest::call', $method, ['ID' => 9200], $file_Name_9200],
        ['CRest::call', 'crm.status.list', [], $file_Name_Stat],
    ];

// point 20
    $deal['STAGE_SEMANTIC_ID'] = str_replace(
  
        ['F',      'P',        'S'], 
        
        ['Провал', 'В работе', 'Успех'],
        
        $hayStack);

// usually
    $deal['STAGE_SEMANTIC_ID'] = str_replace(
      ['F', 'P', 'S'],
      ['Провал', 'В работе', 'Успех'],
      $hayStack);

// point 20
    $id_Deal    = $product['OWNER_ID'] ?? '';
    $id_Product = $product['ID']       ?? '';

    $id_Holding = NS::$dict_Deals[$id_Deal]['UF_CRM_5C408A68422B8']  ?? '';
    $id_User    = NS::$dict_Deals[$id_Deal]['ASSIGNED_BY_ID']        ?? '';

    $product['Раздел 01'] = NS::$dict_Product_Section[$id_Product]['01'] ?? '';
    $product['Раздел 02'] = NS::$dict_Product_Section[$id_Product]['02'] ?? '';

// usually
    $id_Deal    = $product['OWNER_ID'] ?? '';
    $id_Product = $product['ID'] ?? '';

    $id_Holding = NS::$dict_Deals[$id_Deal]['UF_CRM_5C408A68422B8'] ?? '';
    $id_User    = NS::$dict_Deals[$id_Deal]['ASSIGNED_BY_ID'] ?? '';

    $product['Раздел 01'] = NS::$dict_Product_Section[$id_Product]['01'] ?? '';
    $product['Раздел 02'] = NS::$dict_Product_Section[$id_Product]['02'] ?? '';
