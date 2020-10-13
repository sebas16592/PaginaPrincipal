<?php
/**
 * Created by  principal
 * User: Sebastian Hernandez
 * Date: 22/07/2020
 * Time: 1:55 PM
 */

namespace App\Form;


use App\Form\DataTransformer\EmailToUserTransformer;
use App\Repository\UsuarioRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Routing\RouterInterface;

class UserSelectTextType extends AbstractType
{
    /**
     * @var UsuarioRepository
     */
    private $usuarioRepository;
    /**
     * @var RouterInterface
     */
    private $router;

    public function __construct(UsuarioRepository $usuarioRepository, RouterInterface $router)
    {
        $this->usuarioRepository = $usuarioRepository;
        $this->router = $router;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'invalid_message' => 'Hmm, user not found!',
            'finder_callback' => function(UsuarioRepository $usuarioRepository, string $email) {
                return $usuarioRepository->findOneBy(['email' => $email]);

            }
        ]);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
        $attr = $view->vars['attr'];
        $class = isset($attr['class']) ? $attr['class'].' ' : '';
        $class.= 'js-user-autocomplete';

        $attr['class'] = $class;
        $attr['data-autocomplete-url'] = $this->router->generate('curso_symfony_admin_utility_users');
        $view->vars['attr'] = $attr;
    }

    public function getParent()
    {
        return TextType::class;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addModelTransformer(new EmailToUserTransformer(
            $this->usuarioRepository,
            $options['finder_callback']
        ));
    }
}