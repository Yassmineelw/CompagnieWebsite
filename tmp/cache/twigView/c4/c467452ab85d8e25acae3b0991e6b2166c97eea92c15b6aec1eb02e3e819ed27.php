<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\Program Files\Ampps\www\TP2\vendor\friendsofcake\bootstrap-ui\src\Template\Bake\\Template\add.twig */
class __TwigTemplate_2e1eed6ff833e951205a5c19294b36f78e1e9f0d70afbe75b8df3b0786908909 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\add.twig"));

        // line 1
        echo "<?php \$this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<?php \$this->start('tb_actions'); ?>
";
        // line 4
echo $context['_view']->element("tb_actions",[],[]);
        // line 5
        echo "<?php \$this->end(); ?>
<?php \$this->assign('tb_sidebar', '<ul class=\"nav flex-column\">' . \$this->fetch('tb_actions') . '</ul>'); ?>

";
        // line 8
echo $context['_view']->element("form",[],[]);
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\add.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 5,  38 => 4,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<?php \$this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<?php \$this->start('tb_actions'); ?>
{% element 'tb_actions' %}
<?php \$this->end(); ?>
<?php \$this->assign('tb_sidebar', '<ul class=\"nav flex-column\">' . \$this->fetch('tb_actions') . '</ul>'); ?>

{% element 'form' %}
", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\add.twig", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\add.twig");
    }
}
