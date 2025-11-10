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

/* themes/custom/techco_barrio/templates/page.html.twig */
class __TwigTemplate_7dc15a169bcfb2c1287e3c4b1a456309 extends Template
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

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@bootstrap_barrio/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@bootstrap_barrio/layout/page.html.twig", "themes/custom/techco_barrio/templates/page.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["navbar_attributes", "container_navbar", "page", "directory", "container", "content_attributes", "sidebar_first_attributes", "sidebar_second_attributes"]);    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 5
        yield "  <nav";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", ["tc-navbar", "navbar", "navbar-expand-lg", "navbar-light", "bg-white", "shadow-sm"], "method", false, false, true, 5), "html", null, true);
        yield ">
    ";
        // line 6
        if (($context["container_navbar"] ?? null)) {
            yield "<div class=\"container\">";
        }
        // line 7
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 7), "html", null, true);
        yield "
      ";
        // line 8
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 8) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 8))) {
            // line 9
            yield "        <button class=\"navbar-toggler\" type=\"button\"
                data-bs-toggle=\"collapse\" data-bs-target=\"#CollapsingNavbar\"
                aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\"
                aria-label=\"";
            // line 12
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation"));
            yield "\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"CollapsingNavbar\">
          ";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 16), "html", null, true);
            yield "
          ";
            // line 17
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 17)) {
                // line 18
                yield "            <div class=\"ms-auto navbar-form\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 18), "html", null, true);
                yield "</div>
          ";
            }
            // line 20
            yield "        </div>
      ";
        }
        // line 22
        yield "    ";
        if (($context["container_navbar"] ?? null)) {
            yield "</div>";
        }
        // line 23
        yield "  </nav>
";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "  ";
        // line 30
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("techco_barrio/hero"), "html", null, true);
        yield "

  ";
        // line 33
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, (($context["directory"] ?? null) . "/templates/layout/hero.html.twig")));
        yield "

  <div id=\"main\" class=\"";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true);
        yield "\">
    ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 36), "html", null, true);
        yield "

    ";
        // line 39
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 39)) {
            // line 40
            yield "      <section class=\"tc-hero\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "hero", [], "any", false, false, true, 40), "html", null, true);
            yield "</section>
    ";
        }
        // line 42
        yield "
    ";
        // line 44
        yield "    <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
      <main";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_attributes"] ?? null), "html", null, true);
        yield ">
        <section class=\"section\">
          <a href=\"#main-content\" id=\"main-content\" tabindex=\"-1\"></a>
          ";
        // line 48
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 48), "html", null, true);
        yield "
        </section>
      </main>

      ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 52)) {
            // line 53
            yield "        <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first_attributes"] ?? null), "html", null, true);
            yield ">
          <aside class=\"section\" role=\"complementary\">
            ";
            // line 55
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 55), "html", null, true);
            yield "
          </aside>
        </div>
      ";
        }
        // line 59
        yield "
      ";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 60)) {
            // line 61
            yield "        <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second_attributes"] ?? null), "html", null, true);
            yield ">
          <aside class=\"section\" role=\"complementary\">
            ";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 63), "html", null, true);
            yield "
          </aside>
        </div>
      ";
        }
        // line 67
        yield "    </div>
  </div>

    ";
        // line 71
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("techco_barrio/footer"), "html", null, true);
        yield "
  ";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::include($this->env, $context, (($context["directory"] ?? null) . "/templates/layout/footer.html.twig")));
        yield "

  ";
        // line 83
        yield "

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/techco_barrio/templates/page.html.twig";
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
        return array (  223 => 83,  218 => 72,  213 => 71,  208 => 67,  201 => 63,  195 => 61,  193 => 60,  190 => 59,  183 => 55,  177 => 53,  175 => 52,  168 => 48,  162 => 45,  159 => 44,  156 => 42,  150 => 40,  147 => 39,  142 => 36,  138 => 35,  132 => 33,  126 => 30,  124 => 29,  117 => 28,  111 => 23,  106 => 22,  102 => 20,  96 => 18,  94 => 17,  90 => 16,  83 => 12,  78 => 9,  76 => 8,  71 => 7,  67 => 6,  62 => 5,  55 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/techco_barrio/templates/page.html.twig", "/var/www/html/web/themes/custom/techco_barrio/templates/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["extends" => 1, "if" => 6];
        static $filters = ["escape" => 5, "t" => 12];
        static $functions = ["attach_library" => 30, "include" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if'],
                ['escape', 't'],
                ['attach_library', 'include'],
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
