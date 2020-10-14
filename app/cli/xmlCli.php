<?php
require_once "../../bootstrap.php";
require_once  '../service/XmlParser.php';
require_once '../models/Product.php';
require_once '../models/RelProduct.php';
$xmlParser =new XmlParser('../xml/Products.xml');
$xmlData = $xmlParser->loadXmlData();
$products = $xmlData->Product;
for ($i = 0; $i < count($products); $i++) {
    $product = new Product();
    $product->setName($products[$i]->Name);
    $product->setPid($products[$i]->Id);
    $entityManager->persist($product);
    $entityManager->flush();
    if($products[$i]->RelId) {
        foreach ($products[$i]->RelId as $relid) {
            $relProduct = new RelProduct();
            $relProduct->setPid($product->getId());
            $relProduct->setRid($relid);
            $entityManager->persist($relProduct);
            $entityManager->flush();
        }
    }
}