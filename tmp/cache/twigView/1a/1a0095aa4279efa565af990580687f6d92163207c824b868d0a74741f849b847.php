<?php

/* C:\wamp64\www\teste\voxus\vendor\cakephp\bake\src\Template\Bake\Layout\default.twig */
class __TwigTemplate_c0b7c1206179924b534df235ce3a0f1285bd2ab8f6518075154814bbd3f42c4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6704097a3a5c04d6db74d7d5a11372a8d9988911f6d676bb81afdc36d9cb59c1 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_6704097a3a5c04d6db74d7d5a11372a8d9988911f6d676bb81afdc36d9cb59c1->enter($__internal_6704097a3a5c04d6db74d7d5a11372a8d9988911f6d676bb81afdc36d9cb59c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "C:\\wamp64\\www\\teste\\voxus\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig"));

        // line 16
        echo $this->getAttribute((isset($context["_view"]) ? $context["_view"] : null), "fetch", array(0 => "content"), "method");
        
        $__internal_6704097a3a5c04d6db74d7d5a11372a8d9988911f6d676bb81afdc36d9cb59c1->leave($__internal_6704097a3a5c04d6db74d7d5a11372a8d9988911f6d676bb81afdc36d9cb59c1_prof);

    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\teste\\voxus\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{{ _view.fetch('content')|raw }}", "C:\\wamp64\\www\\teste\\voxus\\vendor\\cakephp\\bake\\src\\Template\\Bake\\Layout\\default.twig", "");
    }
}
