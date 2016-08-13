<?php

use Symfony\Component\Validator\Mapping\Factory\LazyLoadingMetadataFactory;
use Symfony\Component\Validator\Mapping\Loader\YamlFileLoader;

use InCRM\Persistence\Doctrine\Repository\OrganizationRepository;
use InCRM\App\Controller\OrganizationController;
use InCRM\Domain\Factory\OrganizationFactory;
use InCRM\Manager\OrganizationManager;
use InCRM\Form\Type\OrganizationFormType;
use InCRM\Form\Handler\OrganizationHandler;

//$app['validator.mapping.class_metadata_factory'] = new LazyLoadingMetadataFactory(
//    new YamlFileLoader(
//        __DIR__ . '/../../core/Form/Validation/Organization.yml'
//    )
//);

//$app['organization.repository'] = function () use ($app) {
//    return new OrganizationRepository(
//        $app['orm.em'],
//        'InCRM\\Domain\\Entity\\Organization'
//    );
//};
