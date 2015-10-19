<?php

/* Elements/test_element_with_vars.twig.tpl */
class __TwigTemplate_8c7d28d8edcab99748802c677b7d2bcc7c57caccb0599fd835a95bacb858756c extends Twig_Template
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
        echo "<h2>Element with var</h2>
<p>this var (<em>";
        // line 2
        echo (isset($context["testing_string"]) ? $context["testing_string"] : null);
        echo "</em>) has been set in the controller and pass in the view into this element</p>";
    }

    public function getTemplateName()
    {
        return "Elements/test_element_with_vars.twig.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  76 => 23,  74 => 'element',  71 => 22,  69 => 'element',  64 => 20,  59 => 18,  48 => 14,  44 => 13,  40 => 12,  36 => 11,  24 => 2,  19 => 1,);
    }
}
