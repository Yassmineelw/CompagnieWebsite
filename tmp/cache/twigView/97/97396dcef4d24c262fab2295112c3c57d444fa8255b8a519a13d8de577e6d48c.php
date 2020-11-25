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

/* C:\Program Files\Ampps\www\TP2\vendor\friendsofcake\bootstrap-ui\src\Template\Bake\Element\tb_actions.twig */
class __TwigTemplate_bb2cfb7a09b7611a8d5c9848d363f6d22a7558a9dff8d794e3336aee5adae64e extends \Twig\Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\Element\\tb_actions.twig"));

        // line 1
        $context["fields"] = $this->getAttribute(($context["Bake"] ?? null), "filterFields", [0 => ($context["fields"] ?? null), 1 => ($context["schema"] ?? null), 2 => ($context["modelObject"] ?? null)], "method");
        // line 2
        if ((strpos(($context["action"] ?? null), "add") === false)) {
            // line 3
            echo "<li><?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', \$";
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["primaryKey"] ?? null), 0, [], "array"), "html", null, true);
            echo "], ['confirm' => __('Are you sure you want to delete # {0}?', \$";
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["primaryKey"] ?? null), 0, [], "array"), "html", null, true);
            echo "), 'class' => 'nav-link']) ?></li>
";
        }
        // line 5
        echo "<li><?= \$this->Html->link(__('List ";
        echo twig_escape_filter($this->env, ($context["pluralHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
";
        // line 6
        $context["done"] = [];
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["associations"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 9
                if (( !($this->getAttribute($context["details"], "controller", []) === $this->getAttribute(($context["_view"] ?? null), "name", [])) && !twig_in_filter($this->getAttribute($context["details"], "controller", []), ($context["done"] ?? null)))) {
                    // line 10
                    echo "<li><?= \$this->Html->link(__('List ";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($context["alias"])), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= \$this->Html->link(__('New ";
                    // line 11
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore(Cake\Utility\Inflector::singularize($context["alias"]))), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
";
                    // line 12
                    $context["done"] = twig_array_merge(($context["done"] ?? null), [0 => $this->getAttribute($context["details"], "controller", [])]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\Element\\tb_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 12,  73 => 11,  66 => 10,  64 => 9,  60 => 8,  56 => 7,  54 => 6,  49 => 5,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set fields = Bake.filterFields(fields, schema, modelObject) %}
{% if strpos(action, 'add') is same as(false) %}
<li><?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', \${{ singularVar }}->{{ primaryKey[0] }}], ['confirm' => __('Are you sure you want to delete # {0}?', \${{ singularVar }}->{{ primaryKey[0] }}), 'class' => 'nav-link']) ?></li>
{% endif %}
<li><?= \$this->Html->link(__('List {{ pluralHumanName }}'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
{% set done = [] %}
{% for type, data in associations %}
{% for alias, details in data %}
{% if details.controller is not same as(_view.name) and details.controller not in done %}
<li><?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= \$this->Html->link(__('New {{ alias|singularize|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
{% set done = done|merge([details.controller]) %}
{% endif %}
{% endfor %}
{% endfor %}
", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\Element\\tb_actions.twig", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\Element\\tb_actions.twig");
    }
}
