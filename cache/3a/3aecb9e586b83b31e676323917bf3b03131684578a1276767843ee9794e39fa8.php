<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* login.html */
class __TwigTemplate_e5fa3cd180fb2182ee8ef12df3b396b237c8c591ac31bb6f257eee0ae54da3cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\"/>
    <script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <title>PuntoVenta™ | Inicio</title>
  </head>
  <main>
    <body>
      <div class=\"container\" style=\"margin-top:10%;\">
        <div class=\"row\">
          <div class=\"col-6 offset-3\">
            <form action=\"login.php\" method=\"GET\">
              <div class=\"form-group\">
                <label for=\"exampleInputEmail1\">Correo electronico</label>
                <input name=\"email\" type=\"email\" class=\"form-control\" aria-describedby=\"emailHelp\" placeholder=\"Introduce tu email\">
              </div>
              <div class=\"form-group\">
                <label for=\"exampleInputPassword1\">Contraseña</label>
                <input type=\"password\" class=\"form-control\" placeholder=\"Introduce tu contraseña\" name=\"password\">
              </div>
              <center><button type=\"submit\" class=\"btn btn-primary\" style=\"padding: 5px 30px 5px 30px\">Entrar</button></center>
            </form>
          </div>
        </div>
      </div>
    </body>
  </main>

</html>


";
    }

    public function getTemplateName()
    {
        return "login.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "login.html", "D:\\xampp\\htdocs\\Zamora\\views\\login.html");
    }
}
