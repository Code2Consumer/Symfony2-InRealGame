<?php

/* UserBundle:Public:monprofile.html.twig */
class __TwigTemplate_e4891ddc789aa60bf5b72baffc6081b63151d192b63d53f2ce27da6ee48809a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::template.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
 hey ! 

mon profile

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
        echo "

<br>

";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["lol"]) ? $context["lol"] : $this->getContext($context, "lol")), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "UserBundle:Public:monprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  42 => 10,  38 => 9,  31 => 4,  28 => 3,);
    }
}
