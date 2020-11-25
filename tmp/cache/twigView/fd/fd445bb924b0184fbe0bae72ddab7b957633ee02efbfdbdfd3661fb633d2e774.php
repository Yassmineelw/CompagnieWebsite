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

/* C:\Program Files\Ampps\www\TP2\vendor\friendsofcake\bootstrap-ui\src\Template\Bake\\Template\index.twig */
class __TwigTemplate_a01f4645f37f07cf1985df327e0964ef5db15fa1535e1de9f750c3206bc306cd extends \Twig\Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\index.twig"));

        // line 1
        echo "<?php \$this->extend('../Layout/TwitterBootstrap/dashboard'); ?>

<?php \$this->start('tb_actions'); ?>
";
        // line 4
        $context["fields"] = $this->getAttribute(($context["Bake"] ?? null), "filterFields", [0 => ($context["fields"] ?? null), 1 => ($context["schema"] ?? null), 2 => ($context["modelObject"] ?? null), 3 => ($context["indexColumns"] ?? null), 4 => [0 => "binary", 1 => "text"]], "method");
        // line 5
        echo "<li><?= \$this->Html->link(__('New ";
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
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
                if ((($this->getAttribute($context["details"], "navLink", []) &&  !($this->getAttribute($context["details"], "controller", []) === $this->getAttribute(($context["_view"] ?? null), "name", []))) && !twig_in_filter($this->getAttribute($context["details"], "controller", []), ($context["done"] ?? null)))) {
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
        // line 16
        echo "<?php \$this->end(); ?>
<?php \$this->assign('tb_sidebar', '<ul class=\"nav flex-column\">' . \$this->fetch('tb_actions') . '</ul>'); ?>

<table class=\"table table-striped\">
    <thead>
    <tr>
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 23
            echo "        <th scope=\"col\"><?= \$this->Paginator->sort('";
            echo twig_escape_filter($this->env, $context["field"], "html", null, true);
            echo "') ?></th>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach (\$";
        // line 29
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo " as \$";
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo "): ?>
        <tr>
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 32
            $context["isKey"] = false;
            // line 33
            if ($this->getAttribute(($context["associations"] ?? null), "BelongsTo", [])) {
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["associations"] ?? null), "BelongsTo", []));
                foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                    if (($context["field"] == $this->getAttribute($context["details"], "foreignKey", []))) {
                        // line 35
                        $context["isKey"] = true;
                        // line 36
                        echo "            <td><?= \$";
                        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                        echo "->has('";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
                        echo "') ? \$this->Html->link(\$";
                        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "displayField", []), "html", null, true);
                        echo ", ['controller' => '";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                        echo "', 'action' => 'view', \$";
                        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
                        echo "->";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["details"], "primaryKey", []), 0, [], "array"), "html", null, true);
                        echo "]) : '' ?></td>
";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 39
            if ( !(($context["isKey"] ?? null) === true)) {
                // line 40
                $context["columnData"] = $this->getAttribute(($context["Bake"] ?? null), "columnData", [0 => $context["field"], 1 => ($context["schema"] ?? null)], "method");
                // line 41
                if (!twig_in_filter($this->getAttribute(($context["columnData"] ?? null), "type", []), [0 => "integer", 1 => "float", 2 => "decimal", 3 => "biginteger", 4 => "smallinteger", 5 => "tinyinteger"])) {
                    // line 42
                    echo "            <td><?= h(\$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                } else {
                    // line 44
                    echo "            <td><?= \$this->Number->format(\$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context["pk"] = ((("\$" . ($context["singularVar"] ?? null)) . "->") . $this->getAttribute(($context["primaryKey"] ?? null), 0, [], "array"));
        // line 49
        echo "            <td class=\"actions\">
                <?= \$this->Html->link(__('View'), ['action' => 'view', ";
        // line 50
        echo ($context["pk"] ?? null);
        echo "], ['title' => __('View'), 'class' => 'btn btn-secondary']) ?>
                <?= \$this->Html->link(__('Edit'), ['action' => 'edit', ";
        // line 51
        echo ($context["pk"] ?? null);
        echo "], ['title' => __('Edit'), 'class' => 'btn btn-secondary']) ?>
                <?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', ";
        // line 52
        echo ($context["pk"] ?? null);
        echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
        echo ($context["pk"] ?? null);
        echo "), 'title' => __('Delete'), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class=\"paginator\">
    <ul class=\"pagination\">
        <?= \$this->Paginator->first('<< ' . __('First')) ?>
        <?= \$this->Paginator->prev('< ' . __('Previous')) ?>
        <?= \$this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= \$this->Paginator->next(__('Next') . ' >') ?>
        <?= \$this->Paginator->last(__('Last') . ' >>') ?>
    </ul>
    <p><?= \$this->Paginator->counter(['format' => __('Page ";
        // line 66
        echo "{{";
        echo "page";
        echo "}}";
        echo " of ";
        echo "{{";
        echo "pages";
        echo "}}";
        echo ", showing ";
        echo "{{";
        echo "current";
        echo "}}";
        echo " record(s) out of ";
        echo "{{";
        echo "count";
        echo "}}";
        echo " total')]) ?></p>
</div>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 66,  197 => 52,  193 => 51,  189 => 50,  186 => 49,  184 => 48,  171 => 44,  163 => 42,  161 => 41,  159 => 40,  157 => 39,  130 => 36,  128 => 35,  123 => 34,  121 => 33,  119 => 32,  115 => 31,  108 => 29,  102 => 25,  93 => 23,  89 => 22,  81 => 16,  70 => 12,  64 => 11,  57 => 10,  55 => 9,  51 => 8,  47 => 7,  45 => 6,  40 => 5,  38 => 4,  33 => 1,);
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
{% set fields = Bake.filterFields(fields, schema, modelObject, indexColumns, ['binary', 'text']) %}
<li><?= \$this->Html->link(__('New {{ singularHumanName }}'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
{% set done = [] %}
{% for type, data in associations %}
{% for alias, details in data %}
{% if details.navLink and details.controller is not same as(_view.name) and details.controller not in done %}
<li><?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= \$this->Html->link(__('New {{ alias|singularize|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
{% set done = done|merge([details.controller]) %}
{% endif %}
{% endfor %}
{% endfor %}
<?php \$this->end(); ?>
<?php \$this->assign('tb_sidebar', '<ul class=\"nav flex-column\">' . \$this->fetch('tb_actions') . '</ul>'); ?>

<table class=\"table table-striped\">
    <thead>
    <tr>
{% for field in fields %}
        <th scope=\"col\"><?= \$this->Paginator->sort('{{ field }}') ?></th>
{% endfor %}
        <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach (\${{ pluralVar }} as \${{ singularVar }}): ?>
        <tr>
{% for field in fields %}
{% set isKey = false %}
{% if associations.BelongsTo %}
{% for alias, details in associations.BelongsTo if field == details.foreignKey %}
{% set isKey = true %}
            <td><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></td>
{% endfor %}
{% endif %}
{% if isKey is not same as(true) %}
{% set columnData = Bake.columnData(field, schema) %}
{% if columnData.type not in ['integer', 'float', 'decimal', 'biginteger', 'smallinteger', 'tinyinteger'] %}
            <td><?= h(\${{ singularVar }}->{{ field }}) ?></td>
{% else %}
            <td><?= \$this->Number->format(\${{ singularVar }}->{{ field }}) ?></td>
{% endif %}
{% endif %}
{% endfor %}
{% set pk = '\$' ~ singularVar ~ '->' ~ primaryKey[0] %}
            <td class=\"actions\">
                <?= \$this->Html->link(__('View'), ['action' => 'view', {{ pk|raw }}], ['title' => __('View'), 'class' => 'btn btn-secondary']) ?>
                <?= \$this->Html->link(__('Edit'), ['action' => 'edit', {{ pk|raw }}], ['title' => __('Edit'), 'class' => 'btn btn-secondary']) ?>
                <?= \$this->Form->postLink(__('Delete'), ['action' => 'delete', {{ pk|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ pk|raw }}), 'title' => __('Delete'), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class=\"paginator\">
    <ul class=\"pagination\">
        <?= \$this->Paginator->first('<< ' . __('First')) ?>
        <?= \$this->Paginator->prev('< ' . __('Previous')) ?>
        <?= \$this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= \$this->Paginator->next(__('Next') . ' >') ?>
        <?= \$this->Paginator->last(__('Last') . ' >>') ?>
    </ul>
    <p><?= \$this->Paginator->counter(['format' => __('Page {{ '{{' }}page{{ '}}' }} of {{ '{{' }}pages{{ '}}' }}, showing {{ '{{' }}current{{ '}}' }} record(s) out of {{ '{{' }}count{{ '}}' }} total')]) ?></p>
</div>
", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\index.twig", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\index.twig");
    }
}
