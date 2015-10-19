<?php

/* Examples/index.twig.tpl */
class __TwigTemplate_ae0af94d2e7b91c0d75c18f6fb49d84972d022ca3e93f77d02426e432bbc25ef extends Twig_Template
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
        // line 1
        echo "<h1>Coucou <strong>";
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "User"), "identity");
        echo "</strong></h1>
<h2>";
        // line 2
        echo (isset($context["sub_title"]) ? $context["sub_title"] : null);
        echo "</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Size</th>
        <th>Address</th>
    </tr>
    <tr>
        <td>";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "User"), "identity");
        echo "</td>
        <td>";
        // line 12
        echo ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "User"), "age") . " ans");
        echo "</td>
        <td>";
        // line 13
        echo ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "User"), "Description"), "size") . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "User"), "Description"), "size_unity"));
        echo "</td>
        <td>";
        // line 14
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "User"), "Address"), "street");
        echo "<br>";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "User"), "Address"), "zip");
        echo "<br>";
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "User"), "Address"), "city");
        echo "</td>
    </tr>
</table>
<h2>Test lien</h2>
<p>Suivez ce lien: ";
        // line 18
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "link", array(0 => "test url", 1 => array("action" => "test_url", 0 => "coucou")), "method");
        echo "</p>
<h2>Test incude html</h2>
<div>";
        // line 20
        echo (isset($context["_html"]) ? $context["_html"] : null);
        echo "</div>
<h2>Test Element</h2>
<div>";
        // line element
        $this->env->loadTemplate("Elements/test_element.twig.tpl")->display(array());
        // line 22
        echo "</div>
<div>";
        // line element
        $this->env->loadTemplate("Elements/test_element_with_vars.twig.tpl")->display(array("testing_string" => (isset($context["testing_string"]) ? $context["testing_string"] : null)));
        // line 23
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "Examples/index.twig.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 23,  74 => 'element',  71 => 22,  69 => 'element',  64 => 20,  59 => 18,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  24 => 2,  19 => 1,);
    }
}
