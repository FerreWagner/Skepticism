<?php

/* layout.html */
class __TwigTemplate_8c9ca2e131c42875aa6e4a665560153976dbbc7a540ba76efde4f63176a2cc84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>这里是对TWIG模板引擎的使用</h2>
<content>
";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 6
        echo "</content>";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  30 => 3,  26 => 6,  24 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>这里是对TWIG模板引擎的使用</h2>
<content>
{% block content %}

{% endblock%}
</content>", "layout.html", "D:\\xampp\\htdocs\\SMVC\\app\\views\\layout.html");
    }
}
