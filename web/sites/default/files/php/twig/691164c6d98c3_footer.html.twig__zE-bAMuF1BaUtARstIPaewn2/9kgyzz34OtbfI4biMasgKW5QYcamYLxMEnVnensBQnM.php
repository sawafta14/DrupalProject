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

/* themes/custom/techco_barrio/templates/layout/footer.html.twig */
class __TwigTemplate_6b5246a0b126cf55f4f38521e71e51f6 extends Template
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
        // line 2
        yield "<footer class=\"tc-footer\" role=\"contentinfo\" aria-label=\"Footer\">
  <div class=\"tc-container\">
    <div class=\"tc-footer-inner\">
      
      ";
        // line 7
        yield "      <div class=\"tc-footer-col tc-brand\">
        <div class=\"tc-logo\">
          <a href=\"";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">
            <img src=\"";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/images/logo-footer.svg\" alt=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
        yield "\" />
          </a>
        </div>
        <p class=\"tc-footer-desc\">
          Professional hosting and technology solutions for your business. Fast, secure, and reliable services you can trust.
        </p>
        <div class=\"tc-social\">
          ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["social_links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 18
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "url", [], "any", false, false, true, 18), "html", null, true);
            yield "\" class=\"tc-social-link\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, true, 18), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noopener noreferrer\">
              <i class=\"";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["link"], "icon_class", [], "any", false, false, true, 19), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
            </a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['link'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "        </div>
      </div>

      ";
        // line 26
        yield "      <div class=\"tc-footer-col tc-menus\">
        <div class=\"tc-menu-block\">
          <h4 class=\"tc-menu-title\">Quick Links</h4>
          <nav class=\"tc-menu\" aria-label=\"Quick Links\">
            ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["footer_menus"] ?? null), "quick_links", [], "any", false, false, true, 30));
        yield "
          </nav>
        </div>

        <div class=\"tc-menu-block\">
          <h4 class=\"tc-menu-title\">Resources</h4>
          <nav class=\"tc-menu\" aria-label=\"Resources\">
            ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["footer_menus"] ?? null), "resources", [], "any", false, false, true, 37));
        yield "
          </nav>
        </div>
      </div>

      ";
        // line 43
        yield "      <div class=\"tc-footer-col tc-newsletter\">
        <h4 class=\"tc-menu-title\">Stay Updated</h4>
        <p class=\"tc-news-desc\">
          Subscribe to our newsletter for the latest updates and offers.
        </p>
        <div class=\"tc-news-form\">
          ";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["newsletter_block_markup"] ?? null));
        yield "
        </div>
      </div>

    </div>
  </div>

  ";
        // line 57
        yield "  <div class=\"tc-footer-bottom\">
    <div class=\"tc-container\">
      <div class=\"tc-copy\">
        &copy; ";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
        yield " — All rights reserved.
      </div>
    </div>
  </div>
</footer>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory", "site_name", "social_links", "footer_menus", "newsletter_block_markup"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/techco_barrio/templates/layout/footer.html.twig";
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
        return array (  142 => 60,  137 => 57,  127 => 49,  119 => 43,  111 => 37,  101 => 30,  95 => 26,  90 => 22,  81 => 19,  74 => 18,  70 => 17,  58 => 10,  54 => 9,  50 => 7,  44 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/techco_barrio/templates/layout/footer.html.twig", "/var/www/html/web/themes/custom/techco_barrio/templates/layout/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["for" => 17];
        static $filters = ["escape" => 10, "raw" => 30, "date" => 60];
        static $functions = ["path" => 9];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'raw', 'date'],
                ['path'],
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
