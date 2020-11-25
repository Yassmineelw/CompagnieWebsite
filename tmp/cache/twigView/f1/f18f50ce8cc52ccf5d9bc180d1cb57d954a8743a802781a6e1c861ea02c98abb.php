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

/* C:\Program Files\Ampps\www\TP2\vendor\friendsofcake\bootstrap-ui\src\Template\Bake\Element\form.twig */
class __TwigTemplate_24f11b1ccb8f19b6640a89fd265e97877b6218fd29decbd4641d0dcdcce9d665 extends \Twig\Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\Element\\form.twig"));

        // line 1
        echo "<div class=\"";
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo " form content\">
    <?= \$this->Form->create(\$";
        // line 2
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo ") ?>
    <fieldset>
        <legend><?= __('";
        // line 4
        echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(($context["action"] ?? null)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "') ?></legend>
        <?php
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (!twig_in_filter($context["field"], ($context["primaryKey"] ?? null))) {
                // line 7
                if ($this->getAttribute(($context["keyFields"] ?? null), $context["field"], [], "array")) {
                    // line 8
                    $context["fieldData"] = $this->getAttribute(($context["Bake"] ?? null), "columnData", [0 => $context["field"], 1 => ($context["schema"] ?? null)], "method");
                    // line 9
                    if ($this->getAttribute(($context["fieldData"] ?? null), "null", [])) {
                        // line 10
                        echo "            echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["keyFields"] ?? null), $context["field"], [], "array"), "html", null, true);
                        echo ", 'empty' => true]);";
                        // line 11
                        echo "
";
                    } else {
                        // line 13
                        echo "            echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['options' => \$";
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["keyFields"] ?? null), $context["field"], [], "array"), "html", null, true);
                        echo "]);";
                        // line 14
                        echo "
";
                    }
                } elseif (!twig_in_filter(                // line 16
$context["field"], [0 => "created", 1 => "modified", 2 => "updated"])) {
                    // line 17
                    $context["fieldData"] = $this->getAttribute(($context["Bake"] ?? null), "columnData", [0 => $context["field"], 1 => ($context["schema"] ?? null)], "method");
                    // line 18
                    if ((twig_in_filter($this->getAttribute(($context["fieldData"] ?? null), "type", []), [0 => "date", 1 => "datetime", 2 => "time"]) && $this->getAttribute(($context["fieldData"] ?? null), "null", []))) {
                        // line 19
                        echo "            echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "', ['empty' => true]);";
                        // line 20
                        echo "
";
                    } else {
                        // line 22
                        echo "            echo \$this->Form->control('";
                        echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                        echo "');";
                        // line 23
                        echo "
";
                    }
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        if ($this->getAttribute(($context["associations"] ?? null), "BelongsToMany", [])) {
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["associations"] ?? null), "BelongsToMany", []));
            foreach ($context['_seq'] as $context["assocName"] => $context["assocData"]) {
                // line 30
                echo "            echo \$this->Form->control('";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "property", []), "html", null, true);
                echo "._ids', ['options' => \$";
                echo twig_escape_filter($this->env, $this->getAttribute($context["assocData"], "variable", []), "html", null, true);
                echo "]);";
                // line 31
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['assocName'], $context['assocData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ?>
    </fieldset>
    <?= \$this->Form->button(__('Submit')) ?>
    <?= \$this->Form->end() ?>
</div>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\Element\\form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  128 => 33,  121 => 31,  115 => 30,  111 => 29,  109 => 28,  99 => 23,  95 => 22,  91 => 20,  87 => 19,  85 => 18,  83 => 17,  81 => 16,  77 => 14,  71 => 13,  67 => 11,  61 => 10,  59 => 9,  57 => 8,  55 => 7,  50 => 6,  43 => 4,  38 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"{{ pluralVar }} form content\">
    <?= \$this->Form->create(\${{ singularVar }}) ?>
    <fieldset>
        <legend><?= __('{{ action|humanize }} {{ singularHumanName }}') ?></legend>
        <?php
{% for field in fields if field not in primaryKey %}
    {%- if keyFields[field] %}
        {%- set fieldData = Bake.columnData(field, schema) %}
        {%- if fieldData.null %}
            echo \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}, 'empty' => true]);
        {{- \"\\n\" }}
        {%- else %}
            echo \$this->Form->control('{{ field }}', ['options' => \${{ keyFields[field] }}]);
            {{- \"\\n\" }}
        {%- endif %}
        {%- elseif field not in ['created', 'modified', 'updated'] %}
            {%- set fieldData = Bake.columnData(field, schema) %}
            {%- if fieldData.type in ['date', 'datetime', 'time'] and fieldData.null %}
            echo \$this->Form->control('{{ field }}', ['empty' => true]);
                {{- \"\\n\" }}
            {%- else %}
            echo \$this->Form->control('{{ field }}');
                {{- \"\\n\" }}
            {%- endif %}
        {%- endif %}
        {%- endfor %}

        {%- if associations.BelongsToMany %}
            {%- for assocName, assocData in associations.BelongsToMany %}
            echo \$this->Form->control('{{ assocData.property }}._ids', ['options' => \${{ assocData.variable }}]);
                {{- \"\\n\" }}
            {%- endfor %}
        {% endif %}
        ?>
    </fieldset>
    <?= \$this->Form->button(__('Submit')) ?>
    <?= \$this->Form->end() ?>
</div>
", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\Element\\form.twig", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\Element\\form.twig");
    }
}
