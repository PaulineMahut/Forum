<?php

namespace App\Models;

use Doctrine\ORM\EntityRepository; //vient de doctrine,par défaut
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class AbstractRepository extends EntityRepository {

    // $encoders = [new XmlEncoder(), new JsonEncoder()];
    // $normalizers = [new ObjectNormalizer()];
    
    // $serializer = new Serializer($normalizers, $encoders);
}