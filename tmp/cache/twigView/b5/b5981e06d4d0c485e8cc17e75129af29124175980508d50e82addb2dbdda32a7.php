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

/* C:\Program Files\Ampps\www\TP2\vendor\friendsofcake\bootstrap-ui\src\Template\Bake\\Template\view.twig */
class __TwigTemplate_2389940362c6aa4b76b51b30084c5ce98cd246889be725f9d49800678b3d85b8 extends \Twig\Template
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
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\view.twig"));

        // line 1
        echo "<?php \$this->extend('../Layout/TwitterBootstrap/dashboard'); ?>
";
        // line 2
        $context["associations"] = twig_array_merge(["BelongsTo" => [], "HasOne" => [], "HasMany" => [], "BelongsToMany" => []], ($context["associations"] ?? null));
        // line 3
        $context["fieldsData"] = $this->getAttribute(($context["Bake"] ?? null), "getViewFieldsData", [0 => ($context["fields"] ?? null), 1 => ($context["schema"] ?? null), 2 => ($context["associations"] ?? null)], "method");
        // line 4
        $context["associationFields"] = $this->getAttribute(($context["fieldsData"] ?? null), "associationFields", []);
        // line 5
        $context["groupedFields"] = $this->getAttribute(($context["fieldsData"] ?? null), "groupedFields", []);
        // line 6
        $context["pK"] = ((("\$" . ($context["singularVar"] ?? null)) . "->") . $this->getAttribute(($context["primaryKey"] ?? null), 0, [], "array"));
        // line 7
        echo "
<?php \$this->start('tb_actions'); ?>
<li><?= \$this->Html->link(__('Edit ";
        // line 9
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'edit', ";
        echo ($context["pK"] ?? null);
        echo "], ['class' => 'nav-link']) ?></li>
<li><?= \$this->Form->postLink( __('Delete ";
        // line 10
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'delete', ";
        echo ($context["pK"] ?? null);
        echo "], ['confirm' => __('Are you sure you want to delete # {0}?', \$";
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo "->";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["primaryKey"] ?? null), 0, [], "array"), "html", null, true);
        echo "), 'class' => 'nav-link'] ) ?></li>
<li><?= \$this->Html->link(__('List ";
        // line 11
        echo twig_escape_filter($this->env, ($context["pluralHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= \$this->Html->link(__('New ";
        // line 12
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo "'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
";
        // line 13
        $context["done"] = [];
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["associations"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["data"]) {
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["data"]);
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 16
                if (( !($this->getAttribute($context["details"], "controller", []) === $this->getAttribute(($context["_view"] ?? null), "name", [])) && !twig_in_filter($this->getAttribute($context["details"], "controller", []), ($context["done"] ?? null)))) {
                    // line 17
                    echo "<li><?= \$this->Html->link(__('List ";
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($context["alias"])), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= \$this->Html->link(__('New ";
                    // line 18
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::singularize(Cake\Utility\Inflector::underscore($context["alias"]))), "html", null, true);
                    echo "'), ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
                    echo "', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
";
                    // line 19
                    $context["done"] = twig_array_merge(($context["done"] ?? null), [0 => "controller"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "<?php \$this->end(); ?>
<?php \$this->assign('tb_sidebar', '<ul class=\"nav flex-column\">' . \$this->fetch('tb_actions') . '</ul>'); ?>

<div class=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["pluralVar"] ?? null), "html", null, true);
        echo " view large-9 medium-8 columns content\">
    <h3><?= h(\$";
        // line 27
        echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
        echo "->";
        echo twig_escape_filter($this->env, ($context["displayField"] ?? null), "html", null, true);
        echo ") ?></h3>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
";
        // line 30
        if ($this->getAttribute(($context["groupedFields"] ?? null), "string", [], "array")) {
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "string", [], "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                if ($this->getAttribute(($context["associationFields"] ?? null), $context["field"], [], "array")) {
                    // line 33
                    $context["details"] = $this->getAttribute(($context["associationFields"] ?? null), $context["field"], [], "array");
                    // line 34
                    echo "            <tr>
                <th scope=\"row\"><?= __('";
                    // line 35
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($this->getAttribute(($context["details"] ?? null), "property", [])), "html", null, true);
                    echo "') ?></th>
                <td><?= \$";
                    // line 36
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->has('";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "property", []), "html", null, true);
                    echo "') ? \$this->Html->link(\$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "property", []), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "displayField", []), "html", null, true);
                    echo ", ['controller' => '";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "controller", []), "html", null, true);
                    echo "', 'action' => 'view', \$";
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["details"] ?? null), "property", []), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["details"] ?? null), "primaryKey", []), 0, [], "array"), "html", null, true);
                    echo "]) : '' ?></td>
            </tr>
";
                } else {
                    // line 39
                    echo "            <tr>
                <th scope=\"row\"><?= __('";
                    // line 40
                    echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                    echo "') ?></th>
                <td><?= h(\$";
                    // line 41
                    echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                    echo "->";
                    echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                    echo ") ?></td>
            </tr>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 46
        if ($this->getAttribute(($context["associations"] ?? null), "HasOne", [])) {
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["associations"] ?? null), "HasOne", []));
            foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
                // line 48
                echo "            <tr>
                <th scope=\"row\"><?= __('";
                // line 49
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::singularize(Cake\Utility\Inflector::underscore($context["alias"]))), "html", null, true);
                echo "') ?></th>
                <td><?= \$";
                // line 50
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
            </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 54
        if ($this->getAttribute(($context["groupedFields"] ?? null), "number", [])) {
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "number", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 56
                echo "            <tr>
                <th scope=\"row\"><?= __('";
                // line 57
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
                <td><?= \$this->Number->format(\$";
                // line 58
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></td>
            </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 62
        if ($this->getAttribute(($context["groupedFields"] ?? null), "date", [])) {
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "date", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 64
                echo "            <tr>
                <th scope=\"row\"><?= __('";
                // line 65
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
                <td><?= h(\$";
                // line 66
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></td>
            </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 70
        if ($this->getAttribute(($context["groupedFields"] ?? null), "boolean", [])) {
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "boolean", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 72
                echo "            <tr>
                <th scope=\"row\"><?= __('";
                // line 73
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
                <td><?= \$";
                // line 74
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo " ? __('Yes') : __('No'); ?></td>
            </tr>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 78
        echo "        </table>
    </div>
";
        // line 80
        if ($this->getAttribute(($context["groupedFields"] ?? null), "text", [])) {
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["groupedFields"] ?? null), "text", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 82
                echo "    <div class=\"row\">
        <h4><?= __('";
                // line 83
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></h4>
        <?= \$this->Text->autoParagraph(h(\$";
                // line 84
                echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ")); ?>
    </div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 88
        $context["relations"] = twig_array_merge($this->getAttribute(($context["associations"] ?? null), "BelongsToMany", []), $this->getAttribute(($context["associations"] ?? null), "HasMany", []));
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["relations"] ?? null));
        foreach ($context['_seq'] as $context["alias"] => $context["details"]) {
            // line 90
            $context["otherSingularVar"] = Cake\Utility\Inflector::variable($context["alias"]);
            // line 91
            $context["otherPluralHumanName"] = Cake\Utility\Inflector::humanize(Cake\Utility\Inflector::underscore($this->getAttribute($context["details"], "controller", [])));
            // line 92
            echo "    <div class=\"related\">
        <h4><?= __('Related ";
            // line 93
            echo twig_escape_filter($this->env, ($context["otherPluralHumanName"] ?? null), "html", null, true);
            echo "') ?></h4>
        <?php if (!empty(\$";
            // line 94
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
            echo ")): ?>
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <tr>
";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "fields", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 99
                echo "                    <th scope=\"col\"><?= __('";
                echo twig_escape_filter($this->env, Cake\Utility\Inflector::humanize($context["field"]), "html", null, true);
                echo "') ?></th>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                    <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
                </tr>
                <?php foreach (\$";
            // line 103
            echo twig_escape_filter($this->env, ($context["singularVar"] ?? null), "html", null, true);
            echo "->";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "property", []), "html", null, true);
            echo " as \$";
            echo twig_escape_filter($this->env, ($context["otherSingularVar"] ?? null), "html", null, true);
            echo "): ?>
                <tr>
";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "fields", []));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 106
                echo "                    <td><?= h(\$";
                echo twig_escape_filter($this->env, ($context["otherSingularVar"] ?? null), "html", null, true);
                echo "->";
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo ") ?></td>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            $context["otherPk"] = ((("\$" . ($context["otherSingularVar"] ?? null)) . "->") . $this->getAttribute($this->getAttribute($context["details"], "primaryKey", []), 0, [], "array"));
            // line 109
            echo "                    <td class=\"actions\">
                        <?= \$this->Html->link(__('View'), ['controller' => '";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
            echo "', 'action' => 'view', ";
            echo ($context["otherPk"] ?? null);
            echo "], ['class' => 'btn btn-secondary']) ?>
                        <?= \$this->Html->link(__('Edit'), ['controller' => '";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
            echo "', 'action' => 'edit', ";
            echo ($context["otherPk"] ?? null);
            echo "], ['class' => 'btn btn-secondary']) ?>
                        <?= \$this->Form->postLink( __('Delete'), ['controller' => '";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "controller", []), "html", null, true);
            echo "', 'action' => 'delete', ";
            echo ($context["otherPk"] ?? null);
            echo "], ['confirm' => __('Are you sure you want to delete # {0}?', ";
            echo ($context["otherPk"] ?? null);
            echo "), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['alias'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "</div>
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 121,  413 => 112,  407 => 111,  401 => 110,  398 => 109,  396 => 108,  385 => 106,  381 => 105,  372 => 103,  368 => 101,  359 => 99,  355 => 98,  346 => 94,  342 => 93,  339 => 92,  337 => 91,  335 => 90,  331 => 89,  329 => 88,  317 => 84,  313 => 83,  310 => 82,  306 => 81,  304 => 80,  300 => 78,  288 => 74,  284 => 73,  281 => 72,  277 => 71,  275 => 70,  263 => 66,  259 => 65,  256 => 64,  252 => 63,  250 => 62,  238 => 58,  234 => 57,  231 => 56,  227 => 55,  225 => 54,  199 => 50,  195 => 49,  192 => 48,  188 => 47,  186 => 46,  173 => 41,  169 => 40,  166 => 39,  144 => 36,  140 => 35,  137 => 34,  135 => 33,  133 => 32,  129 => 31,  127 => 30,  119 => 27,  115 => 26,  110 => 23,  99 => 19,  93 => 18,  86 => 17,  84 => 16,  80 => 15,  76 => 14,  74 => 13,  70 => 12,  66 => 11,  56 => 10,  50 => 9,  46 => 7,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 2,  33 => 1,);
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
{% set associations = {'BelongsTo': [], 'HasOne': [], 'HasMany': [], 'BelongsToMany': []}|merge(associations) %}
{% set fieldsData = Bake.getViewFieldsData(fields, schema, associations) %}
{% set associationFields = fieldsData.associationFields %}
{% set groupedFields = fieldsData.groupedFields %}
{% set pK = '\$' ~ singularVar ~ '->' ~ primaryKey[0] %}

<?php \$this->start('tb_actions'); ?>
<li><?= \$this->Html->link(__('Edit {{ singularHumanName }}'), ['action' => 'edit', {{ pK|raw }}], ['class' => 'nav-link']) ?></li>
<li><?= \$this->Form->postLink( __('Delete {{ singularHumanName }}'), ['action' => 'delete', {{ pK|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', \${{ singularVar }}->{{ primaryKey[0] }}), 'class' => 'nav-link'] ) ?></li>
<li><?= \$this->Html->link(__('List {{ pluralHumanName }}'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= \$this->Html->link(__('New {{ singularHumanName }}'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
{% set done = [] %}
{% for type, data in associations %}
{% for alias, details in data %}
{% if details.controller is not same as(_view.name) and details.controller not in done %}
<li><?= \$this->Html->link(__('List {{ alias|underscore|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= \$this->Html->link(__('New {{ alias|underscore|singularize|humanize }}'), ['controller' => '{{ details.controller }}', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
{% set done = done|merge(['controller']) %}
{% endif %}
{% endfor %}
{% endfor %}
<?php \$this->end(); ?>
<?php \$this->assign('tb_sidebar', '<ul class=\"nav flex-column\">' . \$this->fetch('tb_actions') . '</ul>'); ?>

<div class=\"{{ pluralVar }} view large-9 medium-8 columns content\">
    <h3><?= h(\${{ singularVar }}->{{ displayField }}) ?></h3>
    <div class=\"table-responsive\">
        <table class=\"table table-striped\">
{% if groupedFields['string'] %}
{% for field in groupedFields['string'] %}
{% if associationFields[field] %}
{% set details = associationFields[field] %}
            <tr>
                <th scope=\"row\"><?= __('{{ details.property|humanize }}') ?></th>
                <td><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></td>
            </tr>
{% else %}
            <tr>
                <th scope=\"row\"><?= __('{{ field|humanize }}') ?></th>
                <td><?= h(\${{ singularVar }}->{{ field }}) ?></td>
            </tr>
{% endif %}
{% endfor %}
{% endif %}
{% if associations.HasOne %}
{% for alias, details in associations.HasOne %}
            <tr>
                <th scope=\"row\"><?= __('{{ alias|underscore|singularize|humanize }}') ?></th>
                <td><?= \${{ singularVar }}->has('{{ details.property }}') ? \$this->Html->link(\${{ singularVar }}->{{ details.property }}->{{ details.displayField }}, ['controller' => '{{ details.controller }}', 'action' => 'view', \${{ singularVar }}->{{ details.property }}->{{ details.primaryKey[0] }}]) : '' ?></td>
            </tr>
{% endfor %}
{% endif %}
{% if groupedFields.number %}
{% for field in groupedFields.number %}
            <tr>
                <th scope=\"row\"><?= __('{{ field|humanize }}') ?></th>
                <td><?= \$this->Number->format(\${{ singularVar }}->{{ field }}) ?></td>
            </tr>
{% endfor %}
{% endif %}
{% if groupedFields.date %}
{% for field in groupedFields.date %}
            <tr>
                <th scope=\"row\"><?= __('{{ field|humanize }}') ?></th>
                <td><?= h(\${{ singularVar }}->{{ field }}) ?></td>
            </tr>
{% endfor %}
{% endif %}
{% if groupedFields.boolean %}
{% for field in groupedFields.boolean %}
            <tr>
                <th scope=\"row\"><?= __('{{ field|humanize }}') ?></th>
                <td><?= \${{ singularVar }}->{{ field }} ? __('Yes') : __('No'); ?></td>
            </tr>
{% endfor %}
{% endif %}
        </table>
    </div>
{% if groupedFields.text %}
{% for field in groupedFields.text %}
    <div class=\"row\">
        <h4><?= __('{{ field|humanize }}') ?></h4>
        <?= \$this->Text->autoParagraph(h(\${{ singularVar }}->{{ field }})); ?>
    </div>
{% endfor %}
{% endif %}
{% set relations = associations.BelongsToMany|merge(associations.HasMany) %}
{% for alias, details in relations %}
{% set otherSingularVar = alias|variable %}
{% set otherPluralHumanName = details.controller|underscore|humanize %}
    <div class=\"related\">
        <h4><?= __('Related {{ otherPluralHumanName }}') ?></h4>
        <?php if (!empty(\${{ singularVar }}->{{ details.property }})): ?>
        <div class=\"table-responsive\">
            <table class=\"table table-striped\">
                <tr>
{% for field in details.fields %}
                    <th scope=\"col\"><?= __('{{ field|humanize }}') ?></th>
{% endfor %}
                    <th scope=\"col\" class=\"actions\"><?= __('Actions') ?></th>
                </tr>
                <?php foreach (\${{ singularVar }}->{{ details.property }} as \${{ otherSingularVar }}): ?>
                <tr>
{% for field in details.fields %}
                    <td><?= h(\${{ otherSingularVar }}->{{ field }}) ?></td>
{% endfor %}
{% set otherPk = '\$' ~ otherSingularVar ~ '->' ~ details.primaryKey[0] %}
                    <td class=\"actions\">
                        <?= \$this->Html->link(__('View'), ['controller' => '{{ details.controller }}', 'action' => 'view', {{ otherPk|raw }}], ['class' => 'btn btn-secondary']) ?>
                        <?= \$this->Html->link(__('Edit'), ['controller' => '{{ details.controller }}', 'action' => 'edit', {{ otherPk|raw }}], ['class' => 'btn btn-secondary']) ?>
                        <?= \$this->Form->postLink( __('Delete'), ['controller' => '{{ details.controller }}', 'action' => 'delete', {{ otherPk|raw }}], ['confirm' => __('Are you sure you want to delete # {0}?', {{ otherPk|raw }}), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
{% endfor %}
</div>
", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\view.twig", "C:\\Program Files\\Ampps\\www\\TP2\\vendor\\friendsofcake\\bootstrap-ui\\src\\Template\\Bake\\\\Template\\view.twig");
    }
}
