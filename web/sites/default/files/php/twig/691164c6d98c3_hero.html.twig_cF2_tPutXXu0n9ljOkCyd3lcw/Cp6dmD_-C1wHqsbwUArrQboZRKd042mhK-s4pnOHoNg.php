<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/techco_barrio/templates/layout/hero.html.twig */
class __TwigTemplate_c7e4331c5bc953714f854c48169fa9fa extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<section class=\"tc-hero\">
  <div class=\"tc-container\">
    <div class=\"tc-hero-inner\">
      
      <div class=\"tc-hero-content\">
        <h1 class=\"tc-hero-title\">Powerful Hosting Solutions</h1>
        <p class=\"tc-hero-subtitle\">
          Fast, secure, and reliable hosting for your business. Get started today
          with our premium services and experience the difference.
        </p>
        <div class=\"tc-hero-buttons\">
          <a href=\"/services\" class=\"tc-btn tc-btn-primary\">
            <i class=\"fas fa-paper-plane\"></i> Our Services
          </a>
          <a href=\"/pricing\" class=\"tc-btn tc-btn-outline\">
            <i class=\"fas fa-credit-card\"></i> View Plans
          </a>
        </div>
      </div>

      <div class=\"tc-hero-image\">
        <img src=\"";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/hero-bg.svg\" alt=\"Hosting Illustration\" />
      </div>

    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/techco_barrio/templates/layout/hero.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  67 => 22,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/techco_barrio/templates/layout/hero.html.twig", "/var/www/html/web/themes/custom/techco_barrio/templates/layout/hero.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 22];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
