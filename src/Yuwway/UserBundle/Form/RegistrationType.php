<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/11/16
 * Time: 11:21
 */

namespace Yuwway\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder->add('phone', TextType::class, array(
            'data' => '',
        ));
        $builder->add('captcha', 'Genemu\Bundle\FormBundle\Form\Core\Type\CaptchaType',array('mapped' => false,));
        $builder->add('captcha', 'Genemu\Bundle\FormBundle\Form\Core\Type\CaptchaType',array('mapped' => false,));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

    }

    public function getBlockPrefix()
    {
        return 'yuwway_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}