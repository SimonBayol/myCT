<?php

/* Examples/test_url.twig.tpl */
class __TwigTemplate_d381319fb90805b4eec535bcee3a0914f2de79532329f0d774e6fd1d23b56ebf extends Twig_Template
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
        echo "<h1>Test url & parameters </h1>
<p>
    <ul>
        <li>Parameter 1 : ";
        // line 4
        echo (isset($context["param1"]) ? $context["param1"] : null);
        echo "</li>
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["params"]) ? $context["params"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["param"]) {
            // line 6
            echo "            <li>params ";
            echo $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index");
            echo " : ";
            echo $this->getAttribute((isset($context["param"]) ? $context["param"] : null), "text");
            echo " ";
            echo $this->getAttribute((isset($context["date"]) ? $context["date"] : null), "format", array(0 => $this->getAttribute((isset($context["param"]) ? $context["param"] : null), "date")), "method");
            echo "</li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['param'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>
</p>";
    }

    public function getTemplateName()
    {
        return "Examples/test_url.twig.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 8,  45 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
